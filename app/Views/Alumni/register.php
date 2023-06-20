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
    <title>Register</title>
</head>
<body>


<div class="container">
    <div class="cred">
        <?= view('Myth\Auth\Views\_message_block') ?>
    </div>

<form action="<?= url_to('register') ?>" method="post" class="login-email">
<?= csrf_field() ?>
    <h2>Register</h2>
    <div class="input-grup">
        <label for=""></label>
        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" 
            name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
        <small id="emailHelp" class="form-text text-muted"></small>

    </div>
    <div class="input-grup">
        <label for=""></label>
        <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" 
            name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
       

    </div>
    <div class="input-grup">
        <label for=""></label>
        <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
             name="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
        

    </div>
    <div class="input-grup">
        <label for=""></label>
        <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
             name="pass_confirm" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
       

    </div>
    <div class="input-grup">
        <button type="submit" class="btn"><?=lang('Auth.register')?></button>
       
    </div>
    <br>
    <p class="login-register-text">Sudah Punya Akun <a href="<?= url_to('login') ?>">Log in</a></p>
</form>

</div>




<script src="https://kit.fontawesome.com/ceefbd64d0.js" crossorigin="anonymous"></script>
<script src="Asset\alumniCSSJS\scrip.js"></script>
</body>
</html>