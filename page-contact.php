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
				<p>Get in touch <a href="mailto:minkebellreviews@gmail.com">by email.</a> Send a few songs or videos. It doesn’t need to be formal, but make sure that you list:</p>
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
					<br>
				<div class="question">
				<h1>I want more people at my bar. How do venues get featured?</h1>
				
				<p>If you’re interested in having your event or venue featured, get in touch <a href="mailto:minkebellreviews@gmail.com">by email.</a></p>
 
<p>I have a policy of only reviewing venues after 3 separate visits. This way, groups of rowdy customers and random bad nights won't skew the rating. If you want me to review your venue or if you’re hosting paid events, make sure to set aside tickets.</p>
				</div><!-- question end -->

			<p class="disclaimer">Messages sent to the <a href="https://www.facebook.com/minkebell">Minkebell Facebook Page</a> will be read, but emails are vastly preferred.</p>
			
			</section><!-- index-inner end -->
			
			
		</section><!-- page-wrapper end -->
		
		
	</body>
</html>
<?php 
	get_footer();
?>