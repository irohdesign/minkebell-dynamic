<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package audiophile
 */

get_header(); ?>

<section class="page-top">
<h1 class="page-title"><?php esc_html_e( 'Oh damn.', 'audiophile' ); ?></h1>
</section>

<section class="page-top">
<h3>It looks like you found a weakness in my site.</h3>
<h4>I'll be sure to patch this <strong>ASAP</strong>, but feel free to read these other posts in the meantime.</h4>
</section>

	<div id="primary" class="content-area page-wrapper">
		<main id="main" class="site-main index-inner">

			<section class="error-404 not-found">

				<div class="page-content">

				
			<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
 
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	
				<div class="single-post row"><a href="<?php the_permalink();?>">
					<div class="col-sm-5">
						<?php the_post_thumbnail(); ?></a>
					</div>
					
					<div class="col-sm-7">
						<div class="top">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php echo excerpt(80); ?>
						</div><!-- top end -->
						
						<div class="index-category">Posted in:<?php the_category(); ?></div>
					</div>
				</div>
				
				
				<?php 
					endwhile;
						wp_reset_postdata();		
				?>
			</div><!-- index-inner end -->
		</div><!-- index-listing end -->
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
