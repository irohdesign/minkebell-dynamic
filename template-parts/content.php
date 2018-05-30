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

		<div class="feat-img" style="background-image:url('<?php echo $img_url; php?>'); background-size: cover; background-position: center;"></div>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
		endif; ?>


		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'audiophile' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'audiophile' ),
				'after'  => '</div>',
			) );
		?>
		
		<footer class="entry-footer">
		<?php audiophile_entry_footer(); ?>
	</footer><!-- .entry-footer -->
		
		</section><!-- end of indiv-post section -->
		
</section><!-- end of page-wrapper -->
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
