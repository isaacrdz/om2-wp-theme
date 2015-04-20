<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<title>OM2</title>
<!-- BOOTSTRAP CORE CSS -->
<link href="<?php bloginfo('template_url') ?>/css/bootstrap.css" rel="stylesheet" />
<!-- ION ICONS STYLES -->
<link href="<?php bloginfo('template_url') ?>/css/ionicons.css" rel="stylesheet" />
<!-- FONT AWESOME ICONS STYLES -->
<link href="<?php bloginfo('template_url') ?>/css/font-awesome.css" rel="stylesheet" />
<!-- FANCYBOX POPUP STYLES -->
<link href="<?php bloginfo('template_url') ?>/js/source/jquery.fancybox.css" rel="stylesheet" />
<!-- STYLES FOR VIEWPORT ANIMATION -->
<link href="<?php bloginfo('template_url') ?>/css/animations.min.css" rel="stylesheet" />
<!-- CUSTOM CSS -->
<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" />
<!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
      <?php wp_head(); ?>|
</head>

<body >
<!--MENU SECTION START-->
<div class="navbar navbar-inverse  scroll-me" id="menu-section" >
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="http://www.om2.com.mx/">
OM2

</a>
</div>
<div class="navbar-collapse collapse">
	 <?php
                            wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse navbar-right',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        );
                    ?>
</div>

</div>
</div>
<!--MENU SECTION END-->