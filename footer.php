<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package audiophile
 */

?>

<?php wp_footer(); ?>


<footer>
			<section id="foot-social">
				<h3>Share the music</h3>
				
				<div class="social-buttons">
					<a href="https://www.twitter.com/intent/tweet"><div class="social-bubble twitter">
						<i class="fa fa-twitter"></i>
					</div></a>
					
					<a href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><div class="social-bubble facebook">
						<i class="fa fa-facebook"></i>
					</div></a>
					
					<a href="https://www.tumblr.com/share"><div class="social-bubble tumblr">
						<i class="fa fa-tumblr"></i>
					</div></a>
					
					<a href="https://www.reddit.com/submit?url"><div class="social-bubble reddit">
						<i class="fa fa-reddit"></i>
					</div></a>
				</div>
			</section>
			<section id="foot-nav">
				<nav>
					<a href="/index.php?page_id=62">About</a>
					<a href="/index.php?page_id=91">Contact</a>
				</nav>
				
				<h4>Minkebell &copy; 2018</h4>
				
			</section>
			
		</footer><!-- footer end -->

		
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	
	<script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>

    <script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>

</body>
</html>
