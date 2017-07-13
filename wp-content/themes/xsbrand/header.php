<!DOCTYPE html>
<html id="doc">
<head>
	<link rel="icon" href="<?php the_field('fav','option')?>" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php the_field('fav','option')?>" type="image/x-icon" />
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Cache-Control" content="no-transform" /> 
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<meta name="applicable-device" content="pc,mobile">
		<?php get_template_part( 'content/seo' ); ?>
		<?php wp_head(); ?>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
<header id="header">
<div class="container">
<div class="header-logo pull-left">
  <?php if( get_field('logo','option') ): ?>
<a class="logo-url" href="<?php bloginfo('url')?>"><img src="<?php the_field('logo','option'); ?>" alt="<?php bloginfo('name')?>" /></a>
<?php else : ?>
<h1><a class="logo-url" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a></h1>
<?php endif; ?>
</div>
<div class="header-menu pull-right">
 <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_class' => 'header-menu-con', 'container'=>'','fallback_cb' => 'default_menu',) ); ?>
</div>
</div>
</header>
<div class="container-fluid mini"></div>
<?php if ( !is_home() ) {?>
<div class="text-center bg-info container-full">
								<img src="<?php bloginfo('template_url')?>/images/banner.jpg" alt="<?php the_title()?>">
							</div><?php } ?>

