<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
   <meta name="viewport" content="width=device-width, maximum-scale=1.0">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="480">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
  <meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <script type="text/javascript">
        /mobi/i.test(navigator.userAgent) && !location.hash && setTimeout(function () {
          if (!pageYOffset) window.scrollTo(0, 1);
        }, 1000);
    </script>

	<!-- CSS -->
	<link rel="stylesheet" href="http://pyke-php-83305.euw1.nitrousbox.com:80/wordpress/wp-content/themes/blankslate/css/base.css">
	<link rel="stylesheet" href="http://pyke-php-83305.euw1.nitrousbox.com:80/wordpress/wp-content/themes/blankslate/css/amazium.css">
    <link rel="stylesheet" href="http://pyke-php-83305.euw1.nitrousbox.com:80/wordpress/wp-content/themes/blankslate/css/form.css">
	<link rel="stylesheet" href="http://pyke-php-83305.euw1.nitrousbox.com:80/wordpress/wp-content/themes/blankslate/css/layout.css">

	<!-- Favicons -->
	<link rel="shortcut icon" href="http://www.interelgroup.com/themes/interel/images/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="http://www.interelgroup.com/themes/interel/images/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="http://www.interelgroup.com/themes/interel/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="http://www.interelgroup.com/themes/interel/images/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="144x144" href="http://www.interelgroup.com/themes/interel/images/apple-touch-icon-144x144.png">
</head>
<body <?php body_class(); ?>>


<div class="row hide-mobile">
    <div class="grid_12 txt-right topcontact">
        <a href="tel:00442075923800">T: + 44 (0)20 7592 3800</a> &bull; <a href="mailto:academy@interelgroup.com">E: academy@interelgroup.com</a>
    </div>
</div>
    
    
    
<div class="row ">
    <div class="grid_5 ">
      <a href="/"><img src="http://pyke-php-83305.euw1.nitrousbox.com/wordpress/wp-content/themes/blankslate/img/logo.png"></a>
    </div>
    <div class="grid_7 txt-right hide-mobile">
        <ul class="navlist">
         <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </ul>
      <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div><input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" class="btn" />
</div>
</form>
    </div>
</div>



