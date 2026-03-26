<?php
// Set headers to accept JSON
header('Content-Type: application/json');

// 1. Get the raw POST data from the JavaScript fetch request in index.php
$jsonPayload = file_get_contents('php://input');

// 2. Decode the JSON data to verify it is valid
$data = json_decode($jsonPayload, true);

if (!$data) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Invalid JSON payload']);
    exit;
}

// ==========================================
// 🚨 YOUR NEW EXCEL/SHEET WEBHOOK URL 🚨
// ==========================================
// This points directly to your Google Apps Script
$webhookUrl = "https://script.google.com/macros/s/AKfycbyva0jWxjSI8ECmd9DImJoV5Z5j-uFEQZdoIs3WyPv9e-c2z1jJuJpAmxwBMOEDe8X5RQ/exec"; 

// 3. Initialize cURL to send the data to your new destination
$ch = curl_init($webhookUrl);

// 4. Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonPayload)
]);

// ==========================================
// 🚨 XAMPP LOCALHOST SSL FIX 🚨
// ==========================================
// Keep this UNCOMMENTED while testing on localhost (XAMPP) so it doesn't block the connection.
// ⚠️ COMMENT THIS OUT (add // to the front) BEFORE PUSHING TO GITHUB / LIVE SERVER! ⚠️
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 


// 5. Execute the request
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// 6. Handle errors
if(curl_errno($ch)){
    $error_msg = curl_error($ch);
    curl_close($ch);
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'cURL Error: ' . $error_msg]);
    exit;
}

curl_close($ch);

// 7. Send success response back to your website
http_response_code(200);
echo json_encode([
    'success' => true, 
    'message' => 'Lead sent to 199 webhook successfully',
    'webhook_response' => $response
]);
?>
