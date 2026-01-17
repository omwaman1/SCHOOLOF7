<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | School of 7</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ec 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .thank-you-container {
            background: #fff;
            border-radius: 24px;
            padding: 60px 50px;
            text-align: center;
            max-width: 550px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #4e6a47 0%, #36562f 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            animation: scaleIn 0.5s ease-out;
        }

        .success-icon svg {
            width: 50px;
            height: 50px;
            fill: #fff;
        }

        @keyframes scaleIn {
            0% { transform: scale(0); opacity: 0; }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); opacity: 1; }
        }

        .brand {
            font-family: 'Oswald', sans-serif;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 3px;
            color: #4e6a47;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        h1 {
            font-family: 'Oswald', sans-serif;
            font-size: 42px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .subtitle {
            font-size: 18px;
            color: #67635f;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .info-box {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 30px;
            text-align: left;
        }

        .info-box h3 {
            font-size: 14px;
            font-weight: 600;
            color: #4e6a47;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .info-box ul {
            list-style: none;
        }

        .info-box li {
            font-size: 15px;
            color: #555;
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
        }

        .info-box li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #4e6a47;
            font-weight: 700;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #4e6a47 0%, #36562f 100%);
            color: #fff;
            text-decoration: none;
            padding: 16px 40px;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(78, 106, 71, 0.3);
        }

        .footer-note {
            margin-top: 30px;
            font-size: 13px;
            color: #999;
        }

        .footer-note a {
            color: #4e6a47;
            text-decoration: none;
        }

        @media (max-width: 600px) {
            .thank-you-container {
                padding: 40px 25px;
            }

            h1 {
                font-size: 32px;
            }

            .subtitle {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <div class="thank-you-container">
        <div class="success-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
            </svg>
        </div>
        
        <p class="brand">School of 7</p>
        <h1>Thank You!</h1>
        <p class="subtitle">Your enrollment is successful! Welcome to the Startup Masterclass.</p>
        
        <div class="info-box">
            <h3>What's Next?</h3>
            <ul>
                <li>Check your email for login credentials</li>
                <li>Access your course dashboard</li>
                <li>Start learning at your own pace</li>
                <li>Join our community of founders</li>
            </ul>
        </div>
        
        <a href="https://login.schoolof7.com/t/allcourses" class="cta-button">Access Your Course</a>
        
        <p class="footer-note">Need help? <a href="mailto:support@schoolof7.com">Contact Support</a></p>
    </div>
</body>

</html>
