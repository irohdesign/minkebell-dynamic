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

$facebook_url	= get_post_meta( get_the_ID(), 'soc-fb', true);
$soundcloud_url	= get_post_meta( get_the_ID(), 'soc-sc', true);
$youtube_url	= get_post_meta( get_the_ID(), 'soc-yt', true);

?>								

<section class="page-wrapper">
	
	<section id="indiv-post" class="index-inner">

		
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<div class="social-bar row">
			<a href="<? echo $facebook_url; ?>"><div class="band-fb col-sm-4">
					<h4>Facebook</h4>
				</div></a>
			<a href="<?php echo $soundcloud_url;?>"><div class="band-sc col-sm-4">
				<h4>Soundcloud</h4>
			</div></a>
			<a href="<?php echo $youtube_url;?>"><div class="band-yt col-sm-4">
				<h4>Youtube</h4>
			</div></a>
		</div>
		
		<div class="feat-img" style="background-image:url('<?php echo $img_url; php?>'); background-size: cover; background-position: center;"></div>

		
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

		?>
		
		</section><!-- end of indiv-post section -->
		
</section><!-- end of page-wrapper -->
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
