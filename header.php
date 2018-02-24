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
		
		<nav class="navbar container">
		  	<a class="site-brand" href="index.html">Minkebell</a> 
		  		
			  	<button class="pull-right" onclick="openNav()">
			  			<div class="burger"></div>
			  			<div class="burger"></div>
			  			<div class="burger"></div>
			  	</button>

			  		<div id="mySidenav" class="sidenav">
				  		
				  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				  		
				  		<?php 
					  		
					  		wp_nav_menu( array(
						  		'theme_location'	=> 'primary',
						  		'menu_class'	=> 'flex-wrapper'
					  		));
					  		
				  		?>
			  		</div>
	
	  		</nav>
			
		</header><!-- header end -->
