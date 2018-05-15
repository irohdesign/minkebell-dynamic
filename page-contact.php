<?php 
/*
	Template Name: Contact Page		
*/

$text 			= get_post_meta(62, 'text', true);
$button_text	= get_post_meta(62, 'button_text', true);
get_header(); ?>

<html>
	<head>
		
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">		
		<link href="assets/css/styles.css" rel="stylesheet">

	</head>
	
	<body>
		
		<section class="page-top">
			<h1>Contact</h1>
		</section><!-- page-top end -->
		
		<section class="page-wrapper">
			
			<section id="contact-wrapper" class="index-inner">
				
				<div class="question">
				<h1>I want my band to see more people. How do I get featured?</h1>
				<p>Get in touch by email. Send a few songs or videos. It doesn’t need to be formal, but make sure that you list:</p>
					<ul>
						<li>Group or artist name</li>
						<li>Full names of everyone included in the making of your music (yes, producers and mixers too)</li>
						<li>Any upcoming shows you have</li>
						<li>Relevant social media accounts</li>
						<li>Your preferred genre</li>
					</ul>
					
					<p>If you want me to review your performance or concert, make sure to include a ticket.</p>
					
					<p><strong>Not every group that is reviewed will be selected for the site. If your group does not get featured, you’re free to contact me again, but there is no guarantee that you will be featured.</strong></p>
					
				</div><!-- question end -->	
					
				<div class="question">
				<h1>I want more people at my bar. How do venues get featured?</h1>
				
				<p>If you’re interested in having your event or venue featured, get in touch by email. I have a policy of only reviewing venues after 3 separate visits. This way, no one group of rowdy customers or extenuating circumsctances will skew the rating.</p>

<p>If you want me to review your venue, if you’re hosting paid events, make sure to set aside tickets for 3 events of your choosing.</p>
				</div><!-- question end -->

			<button id="email-box">Minkebell Email</button>
			<p class="disclaimer">Messages sent to the Minkebell Facebook Page will be read, but emails are vastly preferred.</p>
			
			</section><!-- index-inner end -->
			
			
		</section><!-- page-wrapper end -->
		
		
				<footer>
			<section id="foot-social">
				<h3>Share the music</h3>
				
				<div class="social-buttons">
					<a href=""><div class="social-bubble twitter">
						<i class="fa fa-twitter"></i>
					</div></a>
					
					<a href=""><div class="social-bubble facebook">
						<i class="fa fa-facebook"></i>
					</div></a>
					
					<a href=""><div class="social-bubble tumblr">
						<i class="fa fa-tumblr"></i>
					</div></a>
					
					<a href=""><div class="social-bubble reddit">
						<i class="fa fa-reddit"></i>
					</div></a>
				</div>
			</section>
			<section id="foot-nav">
				<nav>
					<a href="">Home</a>
					<a href="">Contact</a>
					<a href="">About</a>
					<a href="">Fish</a>
				</nav>
				
				<h4>Minkebell &copy; 2018</h4>
				
			</section>
			
		</footer><!-- footer end -->
	
			
		 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	
	<script src="assets/js/main.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>


<?php 
	get_footer();
?>