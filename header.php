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
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.php">
            <img class="logo" src="./img/logo.jpg" alt="">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
             
            <?php
              wp_nav_menu( array(
                
                'theme_location'    => 'primary',
                'menu' =>  'nav'
                
              ));
            ?>
        
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
    <!--  end navbar -->
    
    <br>
    <br>
