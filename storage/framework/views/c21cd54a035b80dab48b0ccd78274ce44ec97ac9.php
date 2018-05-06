<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name')); ?></title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">

    <!-- Font Awesome -->
    
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("css/font-awesome.min.css")); ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset("css/owl.carousel.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("style.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("css/responsive.css")); ?>">
    <?php echo $__env->yieldContent('style'); ?>
</head>
<body>
    <?php echo $__env->make('pages.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('pages.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- jQuery sticky menu -->
    <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.sticky.js')); ?>"></script>
    <!-- jQuery easing -->
    <script src="<?php echo e(asset('js/jquery.easing.1.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <!-- Slider -->
    <script type="text/javascript" src="<?php echo e(asset('js/bxslider.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/script.slider.js')); ?>"></script>

</body>
</html>