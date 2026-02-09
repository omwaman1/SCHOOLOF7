<?php
/**
 * Facebook Conversions API Handler
 * Sends server-side conversion events to Facebook for deduplication and better tracking
 *
 * SETUP REQUIRED:
 * 1. Get your Facebook Pixel ID (already have: 879330084480824)
 * 2. Generate a Conversions API Access Token from Facebook Business Manager:
 *    - Go to Events Manager > Settings > Conversions API
 *    - Click "Generate Access Token"
 * 3. Add the token to this file below
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

// ===== CONFIGURATION =====
// Facebook Conversions API Access Token (configured)
// Get it from: https://business.facebook.com/events_manager2/list/pixel/YOUR_PIXEL_ID/settings
$FACEBOOK_ACCESS_TOKEN = 'EAA9TNjAtqZCgBQivcl7ZCTL7o99DAGiUsNxKIq9d4Pe3Jz0eZC4LKnYXfqX3lKftZAPvjQYvZAwLynkwwiaojdN94L2fmRSj2CCe2FnkRR7n2O7GfBq68DiwatBnZAfsQohZALtPtnZABMURnRF64Tpj8WDaX3ZC5pBQo71OKcALah9NeGWqsr0br8TLivECZBtAZDZD';
$FACEBOOK_PIXEL_ID = '879330084480824';

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Invalid request data']);
    exit;
}

// Validate required fields
if (empty($input['event_name']) || empty($input['event_id'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Missing event_name or event_id']);
    exit;
}

// Build Facebook Conversions API request
$apiUrl = "https://graph.facebook.com/v21.0/{$FACEBOOK_PIXEL_ID}/events";

// Get user IP and User-Agent for better matching
$userIp = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// Get client user agent data if available
$clientUserAgent = $input['client_user_agent'] ?? '';
$fbp = $_COOKIE['_fbp'] ?? null; // Facebook browser cookie
$fbc = $_COOKIE['_fbc'] ?? null; // Facebook click ID cookie

// Build event data
$eventData = [
    'event_name' => $input['event_name'],
    'event_time' => $input['event_time'] ?? time(),
    'event_id' => $input['event_id'], // CRITICAL: Same eventID as client-side for deduplication
    'action_source' => 'website',
    'event_source_url' => $input['event_source_url'] ?? '',
    'user_data' => [
        'client_ip_address' => $userIp,
        'client_user_agent' => $clientUserAgent ?: $userAgent
    ],
    'custom_data' => $input['custom_data'] ?? []
];

// Add fbp/fbc cookies if available (improves matching)
if ($fbp) {
    $eventData['user_data']['fbp'] = $fbp;
}
if ($fbc) {
    $eventData['user_data']['fbc'] = $fbc;
}

// Add hashed user data if provided (from client-side)
if (!empty($input['user_data'])) {
    if (!empty($input['user_data']['em'])) {
        $eventData['user_data']['em'] = $input['user_data']['em']; // Already hashed on client
    }
    if (!empty($input['user_data']['ph'])) {
        $eventData['user_data']['ph'] = $input['user_data']['ph']; // Already hashed on client
    }
}

// Prepare final payload
$payload = [
    'data' => [$eventData],
    'access_token' => $FACEBOOK_ACCESS_TOKEN
];

// Send to Facebook Conversions API
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

// Log response for debugging
error_log("FB Conversions API Response: " . $response);

if ($curlError) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Facebook API request failed: ' . $curlError
    ]);
    exit;
}

$responseData = json_decode($response, true);

// Check for errors in Facebook response
if ($httpCode >= 400 || (isset($responseData['error']) && !empty($responseData['error']))) {
    http_response_code($httpCode);
    echo json_encode([
        'success' => false,
        'error' => 'Facebook API error',
        'fb_response' => $responseData
    ]);
    exit;
}

echo json_encode([
    'success' => true,
    'message' => 'Conversion event sent to Facebook',
    'events_received' => $responseData['events_received'] ?? 0,
    'fbtrace_id' => $responseData['fbtrace_id'] ?? null
]);
