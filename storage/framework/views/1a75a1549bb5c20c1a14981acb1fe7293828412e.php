<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


  		<title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="<?php echo e(secure_asset('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(secure_asset('bootstrap/css/bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(secure_asset('bootstrap/css/bootstrap-theme.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(secure_asset('css/mycss.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(secure_asset('datetimepicker/css/bootstrap-datetimepicker.min.css')); ?>"/>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo e(secure_asset('js/jquery/jquery-1.8.3.min.js')); ?>" charset="UTF-8"></script>
        <script type="text/javascript" src="<?php echo e(secure_asset('moment/moment.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(secure_asset('moment/locales/it.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(secure_asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="<?php echo e(secure_asset('datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>" charset="UTF-8"></script>
        <script type="text/javascript" src="<?php echo e(secure_asset('validator/dist/jquery.validate.js')); ?>" charset="UTF-8"></script>
        <script type="text/javascript" src="<?php echo e(secure_asset('js/eventoValidator.js')); ?>" charset="UTF-8"></script>

    <!--
  		<title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap-theme.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/mycss.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('datetimepicker/css/bootstrap-datetimepicker.min.css')); ?>"/>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo e(asset('js/jquery/jquery-1.8.3.min.js')); ?>" charset="UTF-8"></script>
        <script type="text/javascript" src="<?php echo e(asset('moment/moment.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('moment/locales/it.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="<?php echo e(asset('datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>" charset="UTF-8"></script>
        <script type="text/javascript" src="<?php echo e(asset('validator/dist/jquery.validate.js')); ?>" charset="UTF-8"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/eventoValidator.js')); ?>" charset="UTF-8"></script>
        -->
    </head>
    <body class="main white">
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class='container-fluid'>
				<?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </body>
</html>
