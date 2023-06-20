<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <link rel="stylesheet"  type="text/css" href="<?= base_url('Asset\alumniCSSJS\login.css');?>">
    <title>Login</title>
</head>
<body>
<img src="<?=base_url('Asset\alumniCSSJS\gambar\bg\bgLogin.jpg');?>" class="bg-login">
<p>INI NANTI DESKRIPSI</p>
<div class="container">
    
    <div class="cred">
        <?= view('Myth\Auth\Views\_message_block') ?>
    </div>
<form action="<?= url_to('login') ?>" class="login-email" method="post">
<?= csrf_field() ?>

<h2>Login</h2>
    <?php if ($config->validFields === ['email']): ?>
        <div class="input-grup">
            <label for="login" class="taglab"></label>
            <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                 name="login" placeholder="<?=lang('Auth.email')?>">
             <div class="invalid-feedback">
             <?= session('errors.login') ?>
            </div>
        </div>
    <?php else: ?>
        <div class="input-grup">
            <label for="login" class="taglab"></label>
            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                 name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
             <div class="invalid-feedback">
             <?= session('errors.login') ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="input-grup">
        <label for="password"></label>
        <input type="password" class="form-control  <?php if (session('errors.password'))
							 : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" name="password" placeholder="<?=lang('Auth.password')?>">
        <div class="invalid-feedback">
            <?= session('errors.password') ?>
        </div>
    </div>

    <?php if ($config->allowRemembering): ?>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
								<?=lang('Auth.rememberMe')?>
							</label>
						</div>
    <?php endif; ?>

    <div class="input-grup">
        <button type="submit" class="btn"><?=lang('Auth.loginAction')?></button>
    </div>
    <br>
    <?php if ($config->allowRegistration) : ?>
    <p class="login-register-text">Tidak punya Akun? <a href="<?= url_to('register') ?>">Sign Up</a></p>
    <?php endif; ?>
</form>

</div>






<script src="https://kit.fontawesome.com/ceefbd64d0.js" crossorigin="anonymous"></script>
<script src="Asset\alumniCSSJS\scrip.js"></script>
</body>
</html>