<?php 
/*
	Template Name: Home Page		
*/

//Custom Fields
$feat_type				= get_post_meta( 8, 'feat_type', true );
$feat_name				= get_post_meta( 8, 'feat_name', true );
$playlist_modal_url		= get_post_meta( 8, 'playlist_modal_url', true);
$feat_soundcloud_url	= get_post_meta( 8, 'feat_soundcloud_url', true);


$categories = get_categories();
foreach($categories as $category) {

}



get_header(); ?>



<section id="hero" style="background: url(<?php bloginfo('stylesheet_directory');?>/assets/img/desk-vinyl.jpeg);
	background-size: cover;
	background-attachment: fixed;
	background-position: left center;
	background-repeat: no-repeat;"><!-- parallax effect with dynamic background as an option -->
			<div class="middle-text">
				<h1>For Music Nerds</h1>
				
				<button type="button" data-toggle="modal" data-target="#new-playlist">This week's playlist</button>
			</div>
		</section>
		
		<section class="page-wrapper" id="index-wrapper">
				
				<section id="index-feat" class="index-inner">
					
					<h1>Featured <?php echo $feat_type; ?></h1><!-- make artist, album, concert or venue dynamic, so it can be more flexible in the long run -->
					
					<?php
  $args = array(
        'meta_key' => 'meta-checkbox',
        'meta_value' => 'yes'
    );
    $featured = new WP_Query($args);
 
if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>

<a href="<?php the_permalink();?>">
<?php if (has_post_thumbnail()) : ?>
 <div class="featured-thumbnail" style="background:url(<?php the_post_thumbnail_url();?>); background-size: cover;"></div><!-- featured-thumbnail end -->
 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 <p class="details"><?php the_category(', '); ?></p>
 
 <div id="feat-content"><?php echo the_excerpt(); ?></div></a>
 
 
 
<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="<?php echo $feat_soundcloud_url;?>"></iframe>
<?php
endif;
endwhile; else:
endif;
?>
					
				</section><!-- end of featured section -->									
		</section><!-- end of index-wrapper -->	
		<div id="index-listing" class="page-wrapper">
					<h2 class="new-list-title">Recent Posts</h2>
			<div class="index-inner">
				
			<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
 
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	
				<div class="preview-post row"><a href="<?php the_permalink();?>">
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
		
		
		
		
	
	<div class="modal fade" id="new-playlist">
		<div class="modal-dialogue">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title" id="playlist-label">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div><!-- modal-title end -->
				</div><!-- modal-header end -->
				
				<div class="modal-body">
					<iframe src="<?php echo $playlist_modal_url;?>" frameborder="0"></iframe>
				</div><!-- modal-body end -->
				
				<div class="modal-footer">
					<h3>Enjoyed this playlist?</h3>
					<h5>You can download it directly to your phone and keep it!</h5>
					
					<a href="/index.php?page_id=62"><h3>Want to keep up with new playlists?</h3></a>
				</div><!-- modal-footer end -->
			</div><!-- modal-content end -->
		</div>
	</div><!-- playlist modal end -->

<?php 
	get_footer();
?>