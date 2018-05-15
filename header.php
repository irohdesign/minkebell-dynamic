<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package audiophile
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">
	
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'audiophile' ); ?></a>

	<header id="site-header">
		
		<nav class="navbar">
		  	<div class="container">	
			  	<a class="site-brand" href="<?php echo esc_url(home_url('/'));?>">Minkebell</a> 
			  		<button class="pull-right" onclick="openNav()">
			  			<div class="burger"></div>
			  			<div class="burger"></div>
			  			<div class="burger"></div>
			  		</button>
			  		
			  		<div id="mySidenav" class="sidenav">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					  <div class="top-links">
						 <?php
							wp_nav_menu( array(
								
								'theme_location'	=> 'primary',
								'container'			=> 'div',
								'container_class'	=> 'sidenav',
								'menu_class'		=> 'top-links'
								
							) );
						?>
						<?php 
							if (is_active_sidebar('custom-header-widget')) :?>
								<div id="header-widget-area" class="chw-widget widget-area" role="complementary"><?php dynamic_sidebar('custom-header-widget');?></div>
						<?php endif; ?>
					  </div>
					  
					  <div class="bottom-links">
						  <a href="contact.html">Contact</a>
						  <a href="about.html">About</a>
					  </div>
					</div><!-- end of sidenav -->
			</div><!-- end of container -->
					</nav>

					
					
				</div><!-- container -->
				
			</div><!-- navbar -->
			
		</div><!-- navbar-wrapper -->			
		</header><!-- header end -->
