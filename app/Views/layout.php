<?php
$hlm = "Home";
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
        .user-info {
            color: white !important;
            margin-left: 15px;
            padding: 5px 10px;
            background: rgba(255,255,255,0.2);
            border-radius: 5px;
        }
        .logout-btn {
            color: #ff6b6b !important;
        }
        .logout-btn:hover {
            color: #ff4757 !important;
        }
    </style>
</head>
<body>

<!-- Include Header -->
<?= $this->include('components/header') ?>



<!-- Main Content -->
<main>
    <?= $this->renderSection('content') ?>
</main>

<!-- Include Footer -->
<?= $this->include('components/footer') ?>

<!-- Loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
</div>

<!-- Scripts -->
<script src="<?= base_url('coffee1-1.0.0/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/jquery-migrate-3.0.1.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/popper.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/jquery.easing.1.3.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/jquery.waypoints.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/jquery.stellar.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/aos.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/jquery.animateNumber.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/bootstrap-datepicker.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/jquery.timepicker.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/scrollax.min.js') ?>"></script>
<script src="<?= base_url('coffee1-1.0.0/js/main.js') ?>"></script>

</body>
</html>