<?php 
	/*
		Template Name: Topic Page
		*/
		
		get_header();
?>

<section class="page-top">
	<h1><?php echo the_title();?></h1>
</section>

<div id="index-listing" class="page-wrapper">

			<div class="index-inner">
				
			<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
 
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	
				<div class="single-post row">
					<div class="col-sm-5">
						<?php the_post_thumbnail(); ?>
					</div>
					
					<div class="col-sm-7">
						<div class="top">
							<h3><?php the_title(); ?></h3>
							<?php echo excerpt(100); ?>
						</div><!-- top end -->
						
						<div class="index-category"><?php the_category(); ?></div>
					</div>
				</div>
				
				
				<?php 
					endwhile;
						wp_reset_postdata();		
				?>
			</div><!-- index-inner end -->
		</div><!-- index-listing end -->


<?php 
	get_footer();
?>