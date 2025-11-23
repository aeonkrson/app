<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa Database | Log in</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page dark-mode">
<div class="login-box">
    <div class="login-logo">
        <a href="<?= base_url(); ?>"><b>Mahasiswa Database</b></a>
    </div>
    <div class="card card-outline card-primary">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <?php if (session()->getFlashData('error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashData('error') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('login'); ?>" method="post">
                
                <?= csrf_field() ?>
                
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
</div>
<script src="<?= base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/assets/dist/js/adminlte.min.js"></script>
</body>
</html>