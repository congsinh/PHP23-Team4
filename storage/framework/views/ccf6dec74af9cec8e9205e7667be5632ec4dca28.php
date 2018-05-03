<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>eShop | Smartphone, Laptop online</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/bower_components/Ionicons/css/ionicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/dist/css/AdminLTE.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/dist/css/skins/skin-blue.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/nouislider.min.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the pages via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="<?php echo e(asset('admin/dist/css/style.css')); ?>">
    <?php echo $__env->yieldContent('style'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php echo $__env->make('admin.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Content Wrapper. Contains pages content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                
                <?php echo $__env->yieldContent('title'); ?>
                <small><?php echo $__env->yieldContent('action'); ?></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
                <li class="active"><?php echo $__env->yieldContent('action'); ?></li>
            </ol>
        </section>
        <div class="container" style="padding-top: 30px">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- Main Footer -->
    <?php echo $__env->make('admin.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<script src="<?php echo e(asset('admin/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('admin/dist/js/adminlte.min.js')); ?>"></script>
<!-- CKEditor JavaScript -->
<script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
<script src="<?php echo e(asset('js/nouislider.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/wNumb.js')); ?>"></script>
<!-- script -->
<script src="<?php echo e(asset('admin/dist/js/script.js')); ?>"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

<?php echo $__env->yieldContent('script'); ?>
</body>
</html>