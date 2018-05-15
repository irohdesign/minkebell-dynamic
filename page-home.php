<?php 
/*
	Template Name: Home Page		
*/

//Custom Fields
$feat_type				= get_post_meta( 8, 'feat_type', true );
$feat_name				= get_post_meta( 8, 'feat_name', true );
$playlist_modal_url		= get_post_meta( 8, 'playlist_modal_url', true);



get_header(); ?>
		

<section id="hero" style="background: url(<?php bloginfo('stylesheet_directory');?>/assets/img/desk-turn.jpeg);
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
        'posts_per_page' => 5,
        'meta_key' => 'meta-checkbox',
        'meta_value' => 'yes'
    );
    $featured = new WP_Query($args);
 
if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>


<?php if (has_post_thumbnail()) : ?>
 <div class="featured-thumbnail" style="background:url(<?php the_post_thumbnail_url();?>); background-size: cover;"></div><!-- featured-thumbnail end -->
 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 <p class="details"><?php the_category(', '); ?></p>
<p ><?php the_content(400);?></p>
<?php
endif;
endwhile; else:
endif;
?>
					
				</section><!-- end of featured section -->
				
				
<!--NOTE TO SELF: FIX 4TH SECTION THAT APPEARS ON SMALL SCREENS SO IT DOESN'T DISPLAY ON SCREENS SMALLER THAN A DESKTOP -->
				
				<section class="new-list">
					
					<h2 class="new-list-title">New Artists</h2>
				
				<div class="index-inner">	
					<div class="row">
						<?php
						$args = array( 
							'posts_per_page' => 4,
							'category'		=> 'rock',
						);
						$postslist = get_posts( $args );
						foreach ($postslist as $post) :  setup_postdata($post); ?> 
						<div class="col-sm-6 col-md-3">
							<a href="<?php the_permalink();?>"></a>
								<div class="excerpt-thumbnail" style="background: url(<?php the_post_thumbnail_url();?>); background-size: cover;"></div> 

							<br />
							<?php the_title(); ?>   
							<?php echo excerpt(40); ?>
								
								 </div><!-- item end -->
								  <?php endforeach; ?>
											
					</div><!-- row end -->
					</div><!-- index-innner end -->
					
					
				</section><!-- end of new-list section -->

			
		</section><!-- end of index-wrapper -->	
		
	
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
					
					<h3>Want to keep up with new playlists?</h3>
					<button>Join the group!</button>
				</div><!-- modal-footer end -->
			</div><!-- modal-content end -->
		</div>
	</div><!-- playlist modal end -->

<?php 
	get_footer();
?>