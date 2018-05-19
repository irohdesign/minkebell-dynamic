	
				<section class="new-list">
					
					<h2 class="new-list-title">New Local Music</h2>
				
				<div class="index-inner">	
					<div class="row">
						
						<?php $query = new WP_Query( $args );
 
if ( $query->have_posts() ) { ?>
 
    <section class="<?php echo $category->name; ?> listing">

 
        <?php while ( $query->have_posts() ) {
 
            $query->the_post();
            
            $args = array(
					'cat' => 'rap',
					'post_type' => 'post',
					'posts_per_page' => '4',
					'post__not_in' => $do_not_duplicate
				);
            ?>
			<div class="col-sm-6 col-md-3">
							
								<a href="<?php the_permalink();?>"><div class="excerpt-thumbnail" style="background: url(<?php the_post_thumbnail_url();?>); background-size: cover;"></div> 

							<br />
							
							<?php the_title('<h3>', '</h3>'); ?></a> 
							<?php echo excerpt(40); ?>
								
								 </div><!-- item end -->
        <?php } // end while ?>
 
    </section>
 
<?php } // end if
 
// Use reset to restore original query.
wp_reset_postdata(); ?>
													
											</div><!-- row end -->
					</div><!-- index-innner end -->
					
					
				</section><!-- end of new-list section -->
-->
				
