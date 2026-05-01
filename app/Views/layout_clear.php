<?php
$hlm = "Login";
if(uri_string()!=""){
  $hlm = ucwords(uri_string());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vermata - <?= $hlm ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url('coffee1-1.0.0/css/open-iconic-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('coffee1-1.0.0/css/animate.css') ?>">
    <link rel="stylesheet" href="<?= base_url('coffee1-1.0.0/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('coffee1-1.0.0/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('coffee1-1.0.0/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= base_url('coffee1-1.0.0/css/aos.css') ?>">
    <link rel="stylesheet" href="<?= base_url('coffee1-1.0.0/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('coffee1-1.0.0/css/bootstrap-datepicker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('coffee1-1.0.0/css/jquery.timepicker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('coffee1-1.0.0/css/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('coffee1-1.0.0/css/icomoon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('coffee1-1.0.0/css/style.css') ?>">
    
    <style>
        /* Coffee Theme Colors - No Purple */
        :root {
            --coffee-primary: #c49b6f;
            --coffee-dark: #8b5e3c;
            --coffee-light: #e8d5b5;
            --coffee-cream: #fdf8f0;
            --coffee-brown: #5c3a21;
            --coffee-gold: #d4a853;
        }
        
        body {
            background-image: url('<?= base_url('coffee1-1.0.0/images/bg_1.jpg') ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            font-family: 'Poppins', sans-serif;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: 0;
        }
        
        /* Floating coffee beans animation */
        .coffee-bean {
            position: fixed;
            opacity: 0.08;
            pointer-events: none;
            animation: floatBean 20s infinite linear;
            z-index: 0;
        }
        
        @keyframes floatBean {
            0% {
                transform: translateY(100vh) rotate(0deg);
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
            }
        }
        
        .login-container {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-card {
            background: rgba(255, 255, 255, 0.97);
            border-radius: 24px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(8px);
            padding: 45px 35px;
            width: 100%;
            max-width: 460px;
            margin: 20px;
            animation: fadeInUp 0.7s ease-out;
            border: 1px solid rgba(196, 155, 111, 0.2);
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .login-logo {
            text-align: center;
            margin-bottom: 25px;
        }
        
        .brand-icon {
            font-size: 65px;
            color: var(--coffee-primary);
            display: inline-block;
            animation: steam 2s ease infinite;
        }
        
        @keyframes steam {
            0%, 100% {
                transform: rotate(0deg) scale(1);
            }
            50% {
                transform: rotate(3deg) scale(1.05);
            }
        }
        
        .login-logo h2 {
            font-family: 'Great Vibes', cursive;
            font-size: 44px;
            color: var(--coffee-primary);
            margin-bottom: 5px;
            letter-spacing: 1px;
        }
        
        .login-logo p {
            color: #888;
            font-size: 14px;
            margin-top: -5px;
        }
        
        .login-title {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-title h4 {
            font-size: 26px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
            position: relative;
            display: inline-block;
            padding-bottom: 12px;
        }
        
        .login-title h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--coffee-primary), var(--coffee-gold));
            border-radius: 3px;
        }
        
        .login-title p {
            color: #999;
            font-size: 14px;
            margin-top: 12px;
        }
        
        .form-group {
            margin-bottom: 22px;
        }
        
        .form-group label {
            font-weight: 500;
            color: #555;
            margin-bottom: 8px;
            display: block;
            font-size: 14px;
        }
        
        .input-group-custom {
            position: relative;
            display: flex;
            align-items: center;
        }
        
        .input-icon {
            position: absolute;
            left: 15px;
            color: var(--coffee-primary);
            font-size: 18px;
            z-index: 1;
        }
        
        .form-control-custom {
            width: 100%;
            padding: 14px 15px 14px 48px;
            border: 1.5px solid #e8e0d5;
            border-radius: 12px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #fff;
            font-family: 'Poppins', sans-serif;
        }
        
        .form-control-custom:focus {
            outline: none;
            border-color: var(--coffee-primary);
            box-shadow: 0 0 0 4px rgba(196, 155, 111, 0.15);
        }
        
        .btn-login {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, var(--coffee-primary) 0%, var(--coffee-dark) 100%);
            border: none;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 15px;
            font-family: 'Poppins', sans-serif;
            letter-spacing: 0.5px;
        }
        
        .btn-login:hover {
            background: linear-gradient(135deg, var(--coffee-dark) 0%, #6b4423 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(139, 94, 60, 0.3);
        }
        
        .btn-login:active {
            transform: translateY(0);
        }
        
        .alert-custom {
            background: #fee2e2;
            border-left: 4px solid #dc2626;
            border-radius: 12px;
            padding: 14px 16px;
            margin-bottom: 25px;
            color: #991b1b;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .alert-custom i {
            font-size: 18px;
            color: #dc2626;
        }
        
        .footer-links {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        
        .footer-links a {
            color: var(--coffee-primary);
            text-decoration: none;
            font-size: 13px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        
        .footer-links a:hover {
            color: var(--coffee-dark);
            transform: translateX(-3px);
        }
        
        .footer-links p {
            color: #aaa;
            font-size: 12px;
            margin-top: 12px;
            background: #f8f5f0;
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
        }
        
        /* Demo credentials highlight */
        .demo-cred {
            background: linear-gradient(135deg, #fdf8f0, #f5efe6);
            border-radius: 10px;
            padding: 10px;
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #8b5e3c;
        }
        
        .demo-cred span {
            font-weight: 600;
            color: var(--coffee-dark);
        }
        
        @media (max-width: 768px) {
            .login-card {
                padding: 35px 25px;
                margin: 15px;
            }
            .login-logo h2 {
                font-size: 36px;
            }
            .brand-icon {
                font-size: 50px;
            }
            .login-title h4 {
                font-size: 22px;
            }
            .btn-login {
                padding: 12px;
                font-size: 15px;
            }
            .form-control-custom {
                padding: 12px 15px 12px 45px;
            }
        }
        
        /* Animation delay for coffee beans */
        .bean-1 { top: 5%; left: 10%; font-size: 35px; animation-duration: 18s; animation-delay: 0s; }
        .bean-2 { top: 15%; left: 85%; font-size: 28px; animation-duration: 22s; animation-delay: 2s; }
        .bean-3 { top: 45%; left: 92%; font-size: 32px; animation-duration: 15s; animation-delay: 4s; }
        .bean-4 { top: 70%; left: 5%; font-size: 40px; animation-duration: 25s; animation-delay: 1s; }
        .bean-5 { top: 85%; left: 88%; font-size: 25px; animation-duration: 20s; animation-delay: 3s; }
        .bean-6 { top: 25%; left: 3%; font-size: 30px; animation-duration: 28s; animation-delay: 5s; }
        
        @media (max-width: 768px) {
            .coffee-bean { display: none; }
        }
    </style>
</head>
<body>

<!-- Floating coffee beans decoration -->
<div class="coffee-bean bean-1">☕</div>
<div class="coffee-bean bean-2">☕</div>
<div class="coffee-bean bean-3">☕</div>
<div class="coffee-bean bean-4">☕</div>
<div class="coffee-bean bean-5">☕</div>
<div class="coffee-bean bean-6">☕</div>

<div class="login-container">
    <div class="login-card">
        <div class="login-logo">
            <span class="brand-icon">☕</span>
            <h2>Vermata</h2>
            <p>Welcome to Vermata Coffee Family</p>
        </div>
        
        <div class="login-title">
            <h4>Welcome Back!</h4>
            <p>Please login to your account</p>
        </div>
        
        <?= $this->renderSection('content') ?>
        
        <div class="demo-cred">
            💡 Demo: <span>valen</span> / <span>123</span>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="<?= base_url('coffee1-1.0.0/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/popper.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/main.js') ?>"></script>

<script>
    $(document).ready(function() {
        // Add focus effect to form inputs
        $('.form-control-custom').on('focus', function() {
            $(this).parent('.input-group-custom').addClass('focused');
        }).on('blur', function() {
            $(this).parent('.input-group-custom').removeClass('focused');
        });
    });
</script>

</body>
</html>