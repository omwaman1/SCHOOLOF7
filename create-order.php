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

// Razorpay API credentials
$keyId = 'rzp_live_S4Z6WZF67zacdJ';
$keySecret = 'F9g7seSKMJ1ZtMBdGGfYnKTJ';

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);

if (!$input || !isset($input['amount']) || !isset($input['plan_name'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid request. Amount and plan_name required.']);
    exit;
}

$amount = (int) $input['amount']; // Amount in paise
$planName = $input['plan_name'];
$currency = 'INR';

// Create Razorpay order
$orderData = [
    'amount' => $amount,
    'currency' => $currency,
    'receipt' => 'rcpt_' . time() . '_' . rand(1000, 9999),
    'notes' => [
        'plan_name' => $planName
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
