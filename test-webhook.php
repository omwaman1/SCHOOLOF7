<?php
/**
 * Test Webhook - Sends test data to Pabbly
 */

// Pabbly webhook URL
$webhookUrl = 'https://connect.pabbly.com/workflow/sendwebhookdata/IjU3NjcwNTZjMDYzNzA0MzQ1MjY1NTUzZDUxM2Ei_pc';

// Test data
$testData = [
    'name' => 'Test User',
    'email' => 'test@example.com',
    'phone' => '9876543210',
    'plan_name' => 'Advanced Learning Plan',
    'course_url' => 'The-Complete-Guide-To-Starting-Up',
    'amount' => 1899,
    'payment_id' => 'test_payment_123',
    'order_id' => 'test_order_456',
    'event_type' => 'lead_submitted',
    'page_url' => 'https://schoolof7.com/?utm_source=facebook&utm_medium=cpc&utm_campaign=startup_course',
    'utm_source' => 'facebook',
    'utm_medium' => 'cpc',
    'utm_campaign' => 'startup_course',
    'utm_term' => 'startup masterclass',
    'utm_content' => 'video_ad_01',
    'referrer' => 'https://www.facebook.com/',
    'timestamp' => date('Y-m-d H:i:s'),
    'test' => true
];

echo "Sending test webhook to Pabbly...\n\n";
echo "Data being sent:\n";
echo json_encode($testData, JSON_PRETTY_PRINT) . "\n\n";

// Send to Pabbly webhook
$ch = curl_init($webhookUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($testData));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

echo "Response:\n";
echo "HTTP Code: $httpCode\n";

if ($curlError) {
    echo "Error: $curlError\n";
} else {
    echo "Success! Webhook sent.\n";
    echo "Response body: $response\n";
}

echo "\n✅ Test completed! Check your Pabbly workflow to see if data was received.\n";
