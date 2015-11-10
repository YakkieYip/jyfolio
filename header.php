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
    <link rel="stylesheet" href="//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css">
    <link type="image/png" href="images/faviconLogo.png" rel="icon">

    <?php // Load our CSS ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <?php wp_head(); ?>
  </head>
  
  <?php // Load our body tag ?>
  <body <?php body_class(); ?>>
  
  <!-- ========================= BEGIN FIXED MAIN NAV ===========================-->
    <nav class="fixedNav">
      <a href="#jackieyip">
        <div class="logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jylogocopy.png" alt="The web developer's personal logo."/>
        </div>
      </a>

      <?php wp_nav_menu( array(
           'container' => false,
           'theme_location' => 'primary'
         )); ?>

      <div class="social">
        <a href="https://twitter.com/YakkieYip" alt="Twitter Logo" class="social-icon"><i class="fa fa-twitter fa-2x"></i></a>
        <a href="https://github.com/YakkieYip"><i class="fa fa-github fa-2x"></i></a>
        <a href="https://www.linkedin.com/in/jacquelineyip"><i class="fa fa-linkedin fa-2x"></i></a>
      </div>
    </nav>
    
    <!-- ====================== END FIXED MAIN NAV ===============================-->  
    

    <!-- ======================= BEGIN HEADER =====================================-->
    <header id="jackieyip">
      <div class="headerBlurb">
      <!-- <pre><?php //print_r(the_post_thumbnail);?></pre> -->
      
        <h1 class="hero">Hi, I’m Jackie Yip. I’d love to brainstorm and build a website for you!</h1>
        <!-- <h1>
          <a href="<?php //echo home_url( '/' ); ?>" title="<?php //bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php //bloginfo( 'name' ); ?>
          </a>
        </h1> -->

      </div><!-- /headerBlurb -->
    </header><!--/.header-->

