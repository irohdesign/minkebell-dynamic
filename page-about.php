<?php 
/*
	Template Name: About Page		
*/

$text 			= get_post_meta(62, 'text', true);
$button_text	= get_post_meta(62, 'button_text', true);
get_header(); ?>
		

<section id="about-page" style="background: url(<?php bloginfo('stylesheet_directory');?>/assets/img/guitar-background.jpg);
	background-repeat: none;
	background-size: cover;">
			
			<div id="about-text" class="col-xs-12 col-md-offset-2 col-sm-8 col-md-5">
			<?php echo $text;?>
								
			<button><?php echo $button_text; ?></button>
			</div><!-- end of about text -->
			
			</div><!-- end of row -->

		</section>



<?php 
	get_footer();
?>