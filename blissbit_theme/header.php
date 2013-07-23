<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?> <?php wp_title( '|', true, 'left' ); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- CSS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/fav.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/custom.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

  </head>
  <body data-spy="scroll" data-target="#spry-nav">
    


    <header class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container spry-target">
          
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>


          <a class="logo" href="<?php bloginfo( 'url' ); ?>"><div class="logo-inner">Blissbit</div></a>
          
          <div class="nav-collapse collapse">
            <ul class="nav pull-right" id="spry-nav">

            <?php if (is_home()) : ?>
              <li class="active"><a href="#landing"></a></li>
              <li><a href="#approach">Approach</a></li>
              <li><a href="#principles">Principles</a></li>
              <li><a href="#projects">Projects</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#blog">Blog</a></li>

            <?php else : ?>
              <li class="active"><a href="#landing"></a></li>
              <li><a href="<?php bloginfo( 'url' ); ?>/#approach">Approach</a></li>
              <li><a href="<?php bloginfo( 'url' ); ?>/#principles">Principles</a></li>
              <li><a href="<?php bloginfo( 'url' ); ?>/#projects">Projects</a></li>
              <li><a href="<?php bloginfo( 'url' ); ?>/#team">Team</a></li>
              <li><a href="<?php bloginfo( 'url' ); ?>/#blog">Blog</a></li>

            <?php endif; ?>
            </ul>
        </div><!--/.nav-collapse -->

        
            
        </div><!--/.nav-collapse -->




        </div>
      </div><!-- /navbar-inner -->
  </header>

   <div class="mobile-background-img">
      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/bg-test-small.jpg">
  </div>
          



    