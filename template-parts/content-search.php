<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package audiophile
 */

?>

<section class="page-wrapper">

<section class="index-inner" id="search-content">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				audiophile_posted_on();
				audiophile_posted_by();
			?>
		</div><!-- .entry-meta -->
<!-- 		<?php endif; ?> -->
<!-- 	</header><!-- .entry-header -->

	<div class="single-post row">
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
</article><!-- #post-<?php the_ID(); ?> -->

</section><!-- index-inner end -->
</section><!-- page wrapper end -->