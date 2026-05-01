<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>

<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'class' => 'form-control-custom',
    'placeholder' => 'Enter your username',
    'value' => set_value('username')
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control-custom',
    'placeholder' => 'Enter your password'
];
?>

<!-- Tampilkan pesan error jika ada -->
<?php if (session()->getFlashData('failed')): ?>
<div class="alert-custom">
    <i class="icon ion-md-alert" style="margin-right: 8px;"></i>
    <?= session()->getFlashData('failed') ?>
</div>
<?php endif; ?>

<!-- Form Login -->
<?= form_open('login', ['class' => 'login-form']) ?>

<div class="form-group">
    <label for="username">
        <i class="icon ion-md-person" style="margin-right: 5px; color: #c49b6f;"></i> Username
    </label>
    <div class="input-group-custom">
        <span class="input-icon">
            <i class="icon ion-md-person"></i>
        </span>
        <?= form_input($username) ?>
    </div>
</div>

<div class="form-group">
    <label for="password">
        <i class="icon ion-md-lock" style="margin-right: 5px; color: #c49b6f;"></i> Password
    </label>
    <div class="input-group-custom">
        <span class="input-icon">
            <i class="icon ion-md-lock"></i>
        </span>
        <?= form_password($password) ?>
    </div>
</div>

<button type="submit" class="btn-login">
    <i class="icon ion-md-log-in" style="margin-right: 8px;"></i> Login
</button>

<div class="footer-links">
    <a href="<?= base_url('/') ?>">← Back to Home</a>
    <p>Demo credentials: valen / 123</p>
</div>

<?= form_close() ?>

<?= $this->endSection() ?>