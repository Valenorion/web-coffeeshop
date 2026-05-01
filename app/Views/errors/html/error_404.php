<?php
use CodeIgniter\CodeIgniter;
$hlm = "404 - Page Not Found";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Vermata - <?= $hlm ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Background pattern */
        body::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.05"><path fill="none" stroke="%23ffffff" stroke-width="1" d="M10,10 L90,10 M10,20 L90,20 M10,30 L90,30 M10,40 L90,40 M10,50 L90,50 M10,60 L90,60 M10,70 L90,70 M10,80 L90,80 M10,90 L90,90 M20,10 L20,90 M30,10 L30,90 M40,10 L40,90 M50,10 L50,90 M60,10 L60,90 M70,10 L70,90 M80,10 L80,90"/></svg>');
            background-repeat: repeat;
            pointer-events: none;
        }
        
        /* Floating coffee beans animation */
        .coffee-bean {
            position: absolute;
            opacity: 0.1;
            pointer-events: none;
            animation: float 15s infinite linear;
        }
        
        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
            }
        }
        
        .error-container {
            max-width: 650px;
            width: 100%;
            animation: fadeInUp 0.8s ease-out;
            position: relative;
            z-index: 1;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .error-card {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 30px;
            padding: 50px 40px;
            text-align: center;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .error-icon {
            font-size: 90px;
            margin-bottom: 20px;
            display: inline-block;
            animation: bounce 1s ease-in-out infinite;
        }
        
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }
        
        .error-code {
            font-size: 120px;
            font-weight: 800;
            background: linear-gradient(135deg, #c49b6f 0%, #e8c99e 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1;
            margin-bottom: 15px;
            font-family: 'Josefin Sans', sans-serif;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        
        .error-title {
            font-size: 28px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }
        
        .error-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #c49b6f, #e8c99e);
            border-radius: 3px;
        }
        
        .error-message {
            color: #666;
            margin-bottom: 30px;
            line-height: 1.8;
        }
        
        .error-message p {
            margin-bottom: 15px;
        }
        
        .error-detail {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 18px;
            margin: 25px 0;
            text-align: left;
            font-family: 'Courier New', monospace;
            font-size: 13px;
            overflow-x: auto;
            border-left: 4px solid #c49b6f;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        
        .error-detail pre {
            white-space: pre-wrap;
            word-break: break-word;
            margin: 0;
            color: #555;
            font-family: 'Courier New', monospace;
        }
        
        .btn-home {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: linear-gradient(135deg, #c49b6f 0%, #b8865f 100%);
            color: white;
            padding: 14px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-top: 15px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        
        .btn-home:hover {
            background: linear-gradient(135deg, #b8865f 0%, #a8754f 100%);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(196, 155, 111, 0.4);
        }
        
        .btn-home:active {
            transform: translateY(0);
        }
        
        .btn-home i {
            font-size: 18px;
        }
        
        /* Suggestion links */
        .suggestion-links {
            margin-top: 35px;
            padding-top: 25px;
            border-top: 1px solid #eee;
        }
        
        .suggestion-links p {
            color: #999;
            font-size: 14px;
            margin-bottom: 12px;
        }
        
        .suggestion-links a {
            color: #c49b6f;
            text-decoration: none;
            margin: 0 12px;
            font-size: 14px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        
        .suggestion-links a:hover {
            color: #a87b4f;
            transform: translateX(3px);
        }
        
        .environment-badge {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: rgba(0,0,0,0.8);
            color: #ffa502;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 11px;
            font-family: monospace;
            z-index: 1000;
            backdrop-filter: blur(5px);
            letter-spacing: 1px;
        }
        
        .environment-badge.development {
            background: rgba(0,0,0,0.85);
            color: #ffa502;
            border-left: 3px solid #ffa502;
        }
        
        .environment-badge.production {
            background: rgba(0,0,0,0.7);
            color: #ff6b6b;
            border-left: 3px solid #ff6b6b;
        }
        
        /* Coffee cup animation */
        .coffee-cup {
            font-size: 70px;
            margin-bottom: 10px;
            display: inline-block;
            animation: steam 2s ease infinite;
        }
        
        @keyframes steam {
            0% {
                transform: rotate(0deg);
                opacity: 0.6;
            }
            50% {
                transform: rotate(5deg);
                opacity: 1;
            }
            100% {
                transform: rotate(-5deg);
                opacity: 0.6;
            }
        }
        
        @media (max-width: 768px) {
            .error-card {
                padding: 35px 25px;
            }
            .error-code {
                font-size: 80px;
            }
            .error-title {
                font-size: 22px;
            }
            .error-icon {
                font-size: 65px;
            }
            .btn-home {
                padding: 12px 28px;
                font-size: 14px;
            }
            .suggestion-links a {
                margin: 0 8px;
                font-size: 12px;
            }
        }
        
        /* Print styles */
        @media print {
            .environment-badge,
            .coffee-bean {
                display: none;
            }
            body {
                background: white;
            }
            .error-card {
                box-shadow: none;
                border: 1px solid #ddd;
            }
        }
    </style>
</head>
<body>

<!-- Floating coffee beans decoration -->
<div class="coffee-bean" style="top: 10%; left: 5%; font-size: 40px; animation-duration: 18s;">☕</div>
<div class="coffee-bean" style="top: 70%; left: 85%; font-size: 30px; animation-duration: 22s;">☕</div>
<div class="coffee-bean" style="top: 40%; left: 90%; font-size: 25px; animation-duration: 14s;">☕</div>
<div class="coffee-bean" style="top: 80%; left: 10%; font-size: 35px; animation-duration: 25s;">☕</div>

<div class="error-container">
    <div class="error-card">
        <div class="coffee-cup">
            🔍☕
        </div>
        <div class="error-code">
            404
        </div>
        <h1 class="error-title">
            <?= lang('Errors.pageNotFound') ?>
        </h1>
        <div class="error-message">
            <?php if (ENVIRONMENT !== 'production') : ?>
                <p>⛔ The page you requested could not be found.</p>
                <p style="font-size: 14px; color: #888;">Double-check the URL or navigate back to home.</p>
                <?php if (! empty($message) && $message !== '(null)') : ?>
                    <div class="error-detail">
                        <strong style="display: block; margin-bottom: 10px; color: #c49b6f;">📋 Error Details:</strong>
                        <pre><?= nl2br(esc($message)) ?></pre>
                    </div>
                <?php endif; ?>
            <?php else : ?>
                <p>😕 <?= lang('Errors.sorryCannotFind') ?></p>
                <p style="font-size: 14px; color: #888;">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
            <?php endif; ?>
        </div>
        
        <a href="<?= base_url('/') ?>" class="btn-home">
            🏠 Back to Home
        </a>
        
        <div class="suggestion-links">
            <p>📍 You might want to visit:</p>
            <a href="<?= base_url('/menu') ?>">
                → Our Menu
            </a>
            <a href="<?= base_url('/about') ?>">
                → About Us
            </a>
            <?php if (session()->get('isLoggedIn') && session()->get('role') == 'admin'): ?>
            <a href="<?= base_url('/admin/dashboard') ?>">
                → Admin Dashboard
            </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="environment-badge <?= ENVIRONMENT ?>">
    ⚡ ENVIRONMENT: <?= strtoupper(ENVIRONMENT) ?>
</div>

</body>
</html>