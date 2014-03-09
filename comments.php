
<div id="comments" class="comments-area">
	<?php get_comment_form_wpu()?>
	<?php if ( have_comments() ) : ?>


		<ol class="commentlist">
			<?php
			$args = array('login_text' => 'Login to reply.');
			comment_reply_link($args);
			wp_list_comments( array( 'callback' => 'dogcompany_comment', 'style' => 'ol', 'avatar_size' => 100, 'reply_text' => 'Reply') ); 
			       
			
			
			?>
		</ol><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<div id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'dogcompany' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'dogcompany' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'dogcompany' ) ); ?></div>
		</div>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Comments are closed.' , 'dogcompany' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments .comments-area -->