<?php 
/*
	Template Name: About Page		
*/

$text 			= get_post_meta(62, 'text', true);
$button_text	= get_post_meta(62, 'button_text', true);
get_header(); ?>
		

<section id="about-page" style="background: url(<?php bloginfo('stylesheet_directory');?>/assets/img/guitar-background.jpg);
	background-repeat: none;
	background-size: cover;">
			
			<div id="about-text" class="col-xs-12 col-md-offset-2 col-sm-8 col-md-5">
			<?php echo $text;?>
								
			<div id="join">
				<h2>Join the Group</h2>
			<style type="text/css"> 
				#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>

<div id="mc_embed_signup">
<form action="https://minkebell.us18.list-manage.com/subscribe/post?u=b6248da5f87c72364584715ec&amp;id=eb5ed468d6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="mc-field-group">

	<input type="email" value="" name="EMAIL" class="required email" placeholder="Email" id="mce-EMAIL">
</div>
<div class="mc-field-group">

	<input type="text" value="" placeholder="First Name" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">

	<input type="text" value="" placeholder="Last Name" name="LNAME" class="" id="mce-LNAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b6248da5f87c72364584715ec_eb5ed468d6" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
			</div><!-- end of join -->
			</div><!-- end of about text -->
			
			</div><!-- end of row -->

		</section>

<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">


<?php 
	get_footer();
?>