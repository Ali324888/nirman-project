<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Creation
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-- Responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Website title -->
    <title><?php echo get_bloginfo( 'name' );?></title>
    
    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon-180x180.png">
    <link rel="manifest" href="assets/favicons/manifest.json">

    <!-- Bootstrap CSS -->
    
    
    <!-- Font awesome CSS -->
   
    <!-- OwlCarousel CSS -->
   

    <!-- Animation CSS -->
   
    
    <!-- Main Style -->
    
    
    <!-- Responsive Style -->
    

    <!-- CSS Skin -->
    
    <?php wp_head(); ?>
</head>
<body id="bg">
    <div class="wrapper">
        <!-- Header Area Start -->
        <header class="header-portion">
            <!-- Top bar start -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-bar-left">
                                <p>Have any question? +968 547856 254</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="top-bar-right">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top bar end -->

            <!-- Middle bar start -->
            <div class="middle-bar">
                <div class="container">
                    <div class="col-md-3 col-sm-4 col-xs-12  custom-logo">
                        <a class="brand-logo" href="index.html">
                            <?php 
                              if ( function_exists( 'the_custom_logo' ) ) 
                              	{the_custom_logo(); 
                              	}
                              
                            ?>
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="middle-bar-cta">
                            <div class="cta-area">
                                <div class="cta-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="logo-right-text">
                                    <span>call us at</span>
                                    <p>All Days 9:00 to 5:00</p>
                                </div>
                            </div>
                            <div class="cta-area">
                                <div class="cta-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="logo-right-text">
                                    <span>Mail us</span>
                                    <p>support@construct.com</p>
                                </div>
                            </div>
                            <div class="cta-area">
                                <div class="cta-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="logo-right-text">
                                    <span>Address</span>
                                    <p>123 Main Street,Washington,DC,USA </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Middle bar end -->

            <!-- Main navigation start -->
            <div class="main-navigation">
                <div class="container">
                    <div class="main-navigation-content">
                        <div class="row">
                            <div class="col-md-9 col-sm-12">
                                <nav class="navbar-default">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> 
                                            <i class="fa fa-bars"></i> 
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="navbar-menu">
                                        <ul class="nav navbar-nav mobile-menu">
                                        	 <?php
	                                        wp_nav_menu( array(
	                                            'theme_location' => 'primary-menu',
	                                            'menu_class' => 'nav navbar-nav mobile-menu'
	                                             'container-class'=> ''
	                                            ) );
	                                        ?>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-3 col-sm-1 hidden-sm hidden-xs">
                                <ul>
                                    <li>
                                        <a href="!#" data-toggle="modal" data-target="#myModal" class="quote">Login / Register</a>
                                    </li>
                                </ul>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main navigation end -->
        </header>
        <!-- Header Area End -->        
