<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Modestas
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="<?php echo ot_get_option('fav_icon'); ?>" >

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- background image -->
<div id="bg-img" style="background-color:<?php echo ot_get_option( 'background_color', '#f5f5f5' ); ?>;background-image:url(<?php echo ot_get_option( 'bg_image' ); ?>);"></div>

<!-- wrapper -->
<div id="wrapper">