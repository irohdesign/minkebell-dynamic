<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package audiophile
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<section id="comments" class="index-inner">
				<div class="comment-wrapper">
					
					<div class="indiv-comment">
						<div class="comment-body">
						<p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the.</p>
						</div><!-- comment-body end -->
						
						<div class="comment-info">
							<h4>Commenter</h4><h4>Comment Date</h4>
						</div><!-- comment-info end -->
					</div><!-- indiv-comment end -->
					
					<div class="indiv-comment">
						<div class="comment-body">
						<p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the.</p>
						</div><!-- comment-body end -->
						
						<div class="comment-info">
							<h4>Commenter</h4><h4>Comment Date</h4>
						</div><!-- comment-info end -->
					</div><!-- indiv-comment end -->
					
					
					<form>
						<input type="text" placeholder="Your name">
						<input type="email" placeholder="Your email">
						
						<textarea placeholder="Your comment"></textarea>
						
						<input type="submit" value="Submit">
					</form>
				</div><!-- comment-wrapper end -->
			</section><!-- comments end -->
			
		</section><!-- page-wrapper end -->
		
<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comment_count = get_comments_number();
			if ( '1' === $comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'audiophile' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'audiophile' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->
		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'audiophile' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
