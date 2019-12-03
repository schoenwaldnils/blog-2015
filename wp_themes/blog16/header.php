<!DOCTYPE html>
<!--[if lt IE 7]>
  <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>
  <html class="no-js lt-ie10 lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
  <html class="no-js lt-ie10 lt-ie9">
<![endif]-->
<!--[if IE 9]>
  <html class="no-js lt-ie10">
<![endif]-->
<html class="no-js">
<head>
  <meta charset="<?php echo bloginfo( 'charset' ); ?>">
  <meta content="<?php echo 'IE=edge,chrome=1'; ?>" <?php echo 'http-equiv'; ?>="<?php echo 'X-UA-Compatible'; ?>">
  <meta content="<?php echo 'width=device-width,initial-scale=1'; ?>" name="<?php echo 'viewport'; ?>">
  <link type="<?php echo 'text/plain'; ?>" rel="<?php echo 'author'; ?>" href="<?php echo get_stylesheet_directory_uri() . '/humans.txt'; ?>">
  <link rel="<?php echo 'pingback'; ?>" href="<?php echo bloginfo('pingback_url'); ?>">
  <title>
    <?php echo bloginfo('name') . the_title(); ?>
  </title>
  <?php wp_head(); ?>
</head>
<body>
<?php echo component('header'); ?>
