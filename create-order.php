<?php
/**
 * Razorpay Order Creation Endpoint
 * Creates an order and returns order_id to frontend for checkout popup
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

// Load environment variables from .env file
$envFile = __DIR__ . '/.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue; // Skip comments
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }
}

// Get Razorpay credentials based on mode
$mode = isset($_ENV['RAZORPAY_MODE']) ? $_ENV['RAZORPAY_MODE'] : 'test';
if ($mode === 'live') {
    $keyId = $_ENV['RAZORPAY_LIVE_KEY_ID'];
    $keySecret = $_ENV['RAZORPAY_LIVE_KEY_SECRET'];
} else {
    $keyId = $_ENV['RAZORPAY_TEST_KEY_ID'];
    $keySecret = $_ENV['RAZORPAY_TEST_KEY_SECRET'];
}

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);

if (!$input || !isset($input['amount']) || !isset($input['plan_name'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid request. Amount and plan_name required.']);
    exit;
}

$amount = (int) $input['amount']; // Amount in paise
$planName = $input['plan_name'];
$courseUrl = isset($input['course_url']) ? $input['course_url'] : '';
$currency = 'INR';

// Create Razorpay order
$orderData = [
    'amount' => $amount,
    'currency' => $currency,
    'receipt' => 'rcpt_' . time() . '_' . rand(1000, 9999),
    'notes' => [
        'plan_name' => $planName,
        'course_url' => $courseUrl
    ]
];

$ch = curl_init('https://api.razorpay.com/v1/orders');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($orderData));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_USERPWD, $keyId . ':' . $keySecret);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to create order', 'details' => $response]);
    exit;
}

$order = json_decode($response, true);

echo json_encode([
    'success' => true,
    'order_id' => $order['id'],
    'amount' => $order['amount'],
    'currency' => $order['currency'],
    'key_id' => $keyId
]);
