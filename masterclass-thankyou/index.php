<?php
if (isset($_GET['email']) && isset($_GET['name'])) {
    $userEmail = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
    $userName = htmlspecialchars($_GET['name']);

    // ==========================================
    // SECURE ZOOM API CONFIGURATION
    // ==========================================
    // This securely reads your keys from the .env file in your main folder
    $envPath = __DIR__ . '/../.env';
    
    if (file_exists($envPath)) {
        $envVars = parse_ini_file($envPath);
        $zoomAccountId = $envVars['ZOOM_ACCOUNT_ID'] ?? '';
        $zoomClientId = $envVars['ZOOM_CLIENT_ID'] ?? '';
        $zoomClientSecret = $envVars['ZOOM_CLIENT_SECRET'] ?? '';
        $meetingId = $envVars['ZOOM_MEETING_ID'] ?? '';
    } else {
        // FALLBACK - NEVER PUT REAL KEYS HERE ON GITHUB!
        $zoomAccountId = 'put_in_env_file';
        $zoomClientId = 'put_in_env_file';
        $zoomClientSecret = 'put_in_env_file';
        $meetingId = '86519879372';
    }

    // STEP 1: Generate Access Token securely
    $tokenUrl = "https://zoom.us/oauth/token?grant_type=account_credentials&account_id=" . $zoomAccountId;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $tokenUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_USERPWD, $zoomClientId . ":" . $zoomClientSecret); 
    $tokenResponse = curl_exec($ch);
    curl_close($ch);

    $tokenData = json_decode($tokenResponse, true);
    $accessToken = $tokenData['access_token'] ?? '';

    // STEP 2: Register the user in Zoom
    if ($accessToken) {
        $registerUrl = "https://api.zoom.us/v2/meetings/" . $meetingId . "/registrants";
        
        $nameParts = explode(' ', trim($userName), 2);
        $firstName = $nameParts[0];
        $lastName = isset($nameParts[1]) ? $nameParts[1] : 'Student';

        $registrantData = json_encode([
            "email" => $userEmail,
            "first_name" => $firstName,
            "last_name" => $lastName,
            "auto_approve" => true 
        ]);

        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, $registerUrl);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch2, CURLOPT_POST, true);
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $registrantData);
        curl_setopt($ch2, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer " . $accessToken,
            "Content-Type: application/json"
        ]);
        
        $registerResponse = curl_exec($ch2);
        curl_close($ch2);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | School of 7</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Oswald:wght@400;500;600;700&family=Luckiest+Guy&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ec 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px; }
        .thank-you-container { background: #fff; border-radius: 24px; padding: 60px 50px; text-align: center; max-width: 550px; width: 100%; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1); }
        .success-icon { width: 100px; height: 100px; background: linear-gradient(135deg, #4e6a47 0%, #36562f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; }
        .success-icon svg { width: 50px; height: 50px; fill: #fff; }
        .brand-logo { font-family: 'Luckiest Guy', cursive; font-size: 28px; color: #4e6a47; margin-bottom: 20px; }
        h1 { font-family: 'Oswald', sans-serif; font-size: 42px; color: #1a1a1a; margin-bottom: 15px; text-transform: uppercase; }
        .subtitle { font-size: 18px; color: #67635f; margin-bottom: 30px; line-height: 1.6; }
        .info-box { background: #f8f9fa; border-radius: 12px; padding: 25px; margin-bottom: 30px; text-align: left; }
        .info-box h3 { font-size: 14px; font-weight: 600; color: #4e6a47; margin-bottom: 15px; text-transform: uppercase; }
        .cta-button { display: inline-block; background: linear-gradient(135deg, #4e6a47 0%, #36562f 100%); color: #fff; text-decoration: none; padding: 16px 40px; border-radius: 50px; font-weight: 600; text-transform: uppercase; }
        .footer-note { margin-top: 30px; font-size: 14px; color: #67635f; }
        .footer-note a { color: #4e6a47; text-decoration: none; font-weight: 600; }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <div class="success-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
            </svg>
        </div>
        
        <p class="brand-logo">SCHOOL OF 7</p>
        <h1>Thank You!</h1>
        <p class="subtitle">Your enrollment is successful! Your spot in the Masterclass is secured.</p>
        
        <div class="info-box">
            <h3>What's Next?</h3>
            <p style="margin-bottom: 15px; padding: 12px; background: #e2f0d9; border-radius: 8px; font-size: 16px; line-height:24px; color: #2e4a23;">
                <strong>📧 Important:</strong> We just emailed you your unique Masterclass joining link 
            </p>
            <p style="font-size: 16px; color: #555; line-height: 1.6;">
                Please check your inbox (and your spam folder) for an email from us. It contains the link you need to access the Masterclass.
            </p>
        </div>
        
        <p class="footer-note">Need help? <a href="mailto:support@schoolof7.com">Contact Support</a></p>
    </div>
</body>
</html>
