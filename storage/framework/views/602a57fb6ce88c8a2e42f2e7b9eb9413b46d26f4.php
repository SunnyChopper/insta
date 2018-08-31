<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title><?php echo e($page_title); ?></title>
	<!-- Favicon-->
	<link rel="icon" href="<?php echo e(URL::asset('favicon.ico')); ?>" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?php echo e(URL::asset('plugins/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?php echo e(URL::asset('plugins/node-waves/waves.css')); ?>" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?php echo e(URL::asset('plugins/animate-css/animate.css')); ?>" rel="stylesheet" />

	<!-- Morris Chart Css-->
	<link href="<?php echo e(URL::asset('plugins/morrisjs/morris.css')); ?>" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?php echo e(URL::asset('css/themes/all-themes.css')); ?>" rel="stylesheet" />
</head>
<body class="theme-red">
</body>
	<!-- Page Loader -->
	<?php echo $__env->make('layouts.page-loader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>
	<!-- #END# Overlay For Sidebars -->

	<!-- Search Bar -->
	<?php echo $__env->make('layouts.search-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- Top Bar -->
	<?php echo $__env->make('layouts.top-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- Side Bar -->
	<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- Main Content -->
	<section class="content">
		<div class="container-fluid">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
	</section>

	<!-- JavaScript -->
	<?php echo $__env->make('layouts.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</html>
