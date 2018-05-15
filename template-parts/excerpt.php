<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package audiophile
 */

$img_url		= get_post_meta( get_the_ID(), 'img_url', true);
$post_type		= get_post_meta( get_the_ID(), 'post_type', true);
?>
<section class="page-wrapper">								

	<section id="indiv-post" class="index-inner">
		<div class="row">
			<div class="col-sm-6 col-md-4">
				
				<a href="<?php the_permalink();?>">
					<div class="feat-img" style="background-image:url(<?php the_post_thumbnail_url();?>);); background-size: cover;"></div>
					
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
					<footer class="entry-footer">
		<?php audiophile_entry_footer(); ?></footer><!-- .entry-footer -->

			</div><!-- col-sm-6 end -->
				
		</section><!-- end of indiv-post section -->
		
</section><!-- end of page-wrapper -->
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
