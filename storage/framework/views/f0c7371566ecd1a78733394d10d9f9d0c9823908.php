<!DOCTYPE html>

<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <meta name="format-detection" content="telephone=no">
    <!-- Favicons Icon -->
    
    <link rel="icon" href="<?php echo e(url('public/front/assets/images/nz-01.png')); ?>" type="image/x-icon" />
    
    <!-- Page Title Here -->

    <?php if(isset($pageTitle)): ?>

        <title>Nabawy Motors | <?php echo e($pageTitle); ?></title>
            
    <?php else: ?>

        <title> Nabawy Motors | Error 404 Page Not Found </title>   

    <?php endif; ?>
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!--[if lt IE 9]>
    <?php echo e(Html::script('public/front/assets/js/html5shiv.min.js')); ?>

    <?php echo e(Html::script('public/front/assets/js/respond.min.js')); ?>

    <![endif]-->
    <!-- Stylesheets -->
    <?php echo e(Html::style('public/front/assets/css/plugins.css')); ?>

    <?php echo e(Html::style('public/front/assets/css/style.min.css')); ?>


    <?php echo e(Html::style('public/front/assets/css/templete.min.css')); ?> 
    <?php echo e(Html::style('public/front/assets/css/skin/skin-1.css')); ?>

    <!-- Revolution Slider Css -->
    <?php echo e(Html::style('public/front/assets/plugins/revolution/v5.4.3/css/settings.css')); ?>

    <!-- Revolution Navigation Style -->
    <?php echo e(Html::style('public/front/assets/plugins/revolution/v5.4.3/css/navigation.css')); ?>

    <!-- Fancy Box Plugin -->
    <?php echo e(Html::style('public/front/assets/css/jquery.fancybox.min.css')); ?>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <script>   var headerFix = function(){
            'use strict';
            /* Main navigation fixed on top  when scroll down function custom */
            jQuery(window).on('scroll', function () {
                var menu = jQuery('.sticky-header');
                if ($(window).scrollTop() > menu.offset().top) {
                    menu.addClass('is-fixed');
                    $('.logo').attr('src','https://elnabweyziton-cars.com/public/front/assets/images/nz-01.png');
                } else {
                    menu.removeClass('is-fixed');
                    $('.logo').attr('src','https://elnabweyziton-cars.com/public/front/assets/images/nz-01.png');
                }
            });
            /* Main navigation fixed on top  when scroll down function custom end*/
        }
    </script>
</head>
<body id="bg" style="

    background-color: #FFF;
    font-family: 'Cairo', sans-serif;
    font-weight: bold;
    font-size: 14px;
    font-weight: 400;
    color: #000;
    padding: 0;
    margin: 0;
    overflow-x: hidden;
	letter-spacing: 0.8px;
">
<style> a,h1,h2,h3,h4,p{

        font-family: 'Cairo', sans-serif !important;
        outline: 0 none;
        text-decoration: none;
    }</style>