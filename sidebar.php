<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package audiophile
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">

<h1>More Posts</h1>

<div class="row">
	
<?php query_posts('showposts=4'); ?>
<?php $posts = get_posts('numberposts=5&offset=0'); foreach ($posts as $post) : start_wp(); ?>
<?php static $count1 = 0; if ($count1 == "4") { break; } else { ?>

<div class="col-sm-4 col-md-3">

<a href="<?php the_permalink();?>"><div class="sq-prev" style="background: url(<?php the_post_thumbnail_url(); ?>); background-size: cover;"></div></a>

<a href=<?php the_permalink(); ?>><h3><?php the_title(); ?></h3></a>
<h4><?php the_category(); ?></h4>
</div>

<?php $count1++; } ?>
<?php endforeach; ?>

</div>

<div class="search-box">
	<h3>Looking for something specific?</h3>
	<?php get_search_form(); ?>
</div>

</aside><!-- #secondary -->

