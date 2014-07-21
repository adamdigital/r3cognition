<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title( '|', true, 'right' ); ?> R3COGNITION</title>

        <meta name="description" content="R3COGNITION, Trade Surveillance System provider based in London">
        <meta name="author" content="R3D Systems Limited">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/r3cognition16x16.png">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    
    <?php wp_head(); ?>
    </head>
    <body  data-spy="scroll" data-offset="0" data-target=".navbar-scrollspy" <?php body_class(); ?>>
    <?php include_once("analyticstracking.php") ?>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

         <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div class="row row-navbar-brand">

              <div class="col-xs-7 navbar-brand">
              <a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/R3COGNITION_logo.jpeg" width="260" height="40" alt="R3COGNITION"></a>
              </div>

              <div class="col-xs-5 row-navbar-contact-details text-right hidden-xs"><h4>+44 (0) 20 7953 8686 | <a href="/about-us/#contact"> <i class="fa fa-envelope-o"></i> <strong>Email</strong></i></a></h4></div>

              </div>
            
               <div class="row row-style text-center hidden-sm hidden-md hidden-lg"><p><h4>+44 (0) 20 7953 8686 | <a href="/about-us/#contact"> <i class="fa fa-envelope-o"></i> Email</a></h4></p></div>
            
            <div class="row">
            <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
            </div>

            </div>

          </div>
        </div>

      </div>
    </div>