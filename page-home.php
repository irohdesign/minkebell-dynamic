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
					
					<a href=""><div class="feat-img" style="background-image: url('assets/img/chancetherapper.jpeg'); background-size: cover;"></div>
					
					<h2><?php echo $feat_name; ?></h2><!-- artist title --></a>
					<!-- description text -->
					
					<!-- make sure to leave work limit on the description, because it looks weird with too much text. maybe a limit of 150 words -->					
					<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="<?php echo $soundcloud_url;?>"></iframe>
					
					
				</section><!-- end of featured section -->
				
				<section class="new-list">
					
					<h2 class="new-list-title">New Artists</h2>
					
				<div class="index-inner">	
					<div class="row">
						<div class="col-sm-4 col-md-3">
							<a href="">
								<div class="new-img" style="background-image: url(assets/img/guitar.jpg); background-size: cover;">
							
							<iframe scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/325461628&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
								
							</div>
					<h3>Yebba comes out swinging</h3>
					<p>Jermaine Lamarr Cole, better known by his stage name J. Cole, is an American hip hop recording artist and record producer.</p></a>
						</div><!-- item end -->
						
						<div class="col-sm-4 col-md-3">
							<a href="">
								<div class="new-img" style="background-image: url(assets/img/knobs.jpeg); background-size: cover;">
							
							<iframe scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/325461628&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
								
							</div>
					<h3>J Cole is still great</h3>
					<p>Jermaine Lamarr Cole, better known by his stage name J. Cole, is an American hip hop recording artist and record producer.</p>
						</a></div><!-- item end -->
						
						<div class="col-sm-4 col-md-3">
							<a href="">
								<div class="new-img" style="background-image: url(assets/img/milodoldrumsband.jpg); background-size: cover;">
							
							<iframe scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/325461628&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
								
							</div>
					<h3>Yebba comes out swinging</h3>
					<p>Jermaine Lamarr Cole, better known by his stage name J. Cole, is an American hip hop recording artist and record producer.</p>
						</a></div><!-- item end -->
						
						<div class="hidden-sm col-md-3">
							<a href="">
								<div class="new-img" style="background-image: url(assets/img/paintingthemoon.jpg); background-size: cover;">
							
							<iframe scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/325461628&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
								
							</div>
					<h3>Yebba comes out swinging</h3>
					<p>Jermaine Lamarr Cole, better known by his stage name J. Cole, is an American hip hop recording artist and record producer.</p>
						</a></div><!-- item end -->
						
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