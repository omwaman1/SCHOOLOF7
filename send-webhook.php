<?php
/**
 * Webhook Handler - Sends payment data to Pabbly
 * Called after successful Razorpay payment
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Invalid request data']);
    exit;
}

// Pabbly webhook URL
$webhookUrl = 'https://connect.pabbly.com/workflow/sendwebhookdata/IjU3NjcwNTZjMDYzNzA0MzA1MjZkNTUzNjUxMzIi_pc';

// Prepare data for webhook
$webhookData = [
    'name' => $input['name'] ?? '',
    'email' => $input['email'] ?? '',
    'phone' => $input['phone'] ?? '',
    'plan_name' => $input['plan_name'] ?? '',
    'amount' => $input['amount'] ?? 0,
    'payment_id' => $input['payment_id'] ?? '',
    'order_id' => $input['order_id'] ?? '',
    'timestamp' => date('Y-m-d H:i:s')
];

// Send to Pabbly webhook
$ch = curl_init($webhookUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($webhookData));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($curlError) {
    echo json_encode([
        'success' => false,
        'error' => 'Webhook request failed: ' . $curlError
    ]);
    exit;
}

echo json_encode([
    'success' => true,
    'message' => 'Webhook sent successfully'
]);
