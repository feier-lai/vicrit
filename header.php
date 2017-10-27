<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
    <!-- start navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="<?php echo get_option('index'); ?>">LOGO
            <!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="logo"> -->
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <?php
              wp_nav_menu( array(
                
                'theme_location'    => 'primary',
                'menu' =>  'nav'
                
              ));
            ?>
          </ul> 
          <ul class="nav navbar-nav navbar-right">
            <i class="fa fa-sign-in"></i> Login |
            <i class="fa fa-key"></i> Register
            <form class="navbar-form navbar-right">
              <input type="text" class="form-control" placeholder="Search...">
            </form>           
          </ul>       
        </div>
      </div>
    </nav>
    <!-- end navbar -->

	

     <?php if(is_front_page()) : ?>
      
      <!-- start carousel -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="<?php bloginfo('template_url'); ?>/img/research1.jpg" alt="business1" width="1200" height="700">
            <div class="carousel-caption">
              <h3>Open Now</h3>
              <p>Welcome to grand opening!</p>
            </div>      
          </div>

          <div class="item">
            <img src="<?php bloginfo('template_url'); ?>/img/research2.jpg" alt="business2" width="1200" height="700">
            <div class="carousel-caption">
              <h3>Team</h3>
              <p>Meet our team to solve problem!</p>
            </div>      
          </div>
    
          <div class="item">
            <img src="<?php bloginfo('template_url'); ?>/img/research3.jpg" alt="business3" width="1200" height="700">
            <div class="carousel-caption">
              <h3>Big place </h3>
              <p>One of biggest office!</p>
            </div>      
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- end carousel -->      
        
      <?php endif; ?>
    
    <br>
    <br>
