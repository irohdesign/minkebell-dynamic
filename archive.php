<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package audiophile
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

<section class="page-top">
			<h1><?php single_cat_title();?></h1>
</section>
<!-- page-top end -->	
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
		?>		
		
		<section id="indiv-post" class="index-inner">

				<div class="preview-post row">
					<div class="col-sm-5">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
					</div>
					
					<div class="col-sm-7">
						<div class="top">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php echo excerpt(100); ?>
						</div><!-- top end -->
						
						<div class="index-category">Posted in:<?php the_category(); ?></div>
					</div>
					
				
		</section><!-- end of indiv-post section -->
		
</section><!-- end of page-wrapper -->
	</div><!-- .entry-content -->

			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/excerpt', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>