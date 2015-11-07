<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  	<?php // Load Meta ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,900italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css'>

    <?php // Load our CSS ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

  <!--  HEADER -->
  <header>
      <!-- Fixed Main  -->
      <nav class="fixedNav">
        <?php wp_nav_menu( array(
             'container' => false,
             'theme_location' => 'primary'
           )); ?>
      </nav>  
    <div class="container">
    <!-- <pre><?php //print_r(the_post_thumbnail);?></pre> -->
    <section class="hero">
      <h1>Hi, I’m Jackie Yip. I’d love to brainstorm and build a website for you!</h1>
    </section>
      <!-- <h1>
        <a href="<?php //echo home_url( '/' ); ?>" title="<?php //bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php //bloginfo( 'name' ); ?>
        </a>
      </h1> -->
    </div> <!-- /.container -->
  </header><!--/.header-->

