<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage Mynote
 * @since 1.0.0
 * @version 2.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

/**
 * If the post type is not supprted.
 */
if ( ! post_type_supports( get_post_type(), 'comments' ) ) {
	return;
}

/*
 * If comment is not open, and comment number is 0,
 * I think it is no need to show this section.
 */
if ( ! comments_open() && 0 === (int) get_comments_number() ) {
	return;
}

/**
 * Hook: mynote_post_comment_before
 */
do_action( 'mynote_post_comment_before' );

?>

<div id="comments" class="discussion-wrapper">
	<h3 class="section-title">
		<?php esc_html_e( 'Comments', 'mynote' ); ?>
	</h3>
	<script src="https://utteranc.es/client.js"
        repo="platanus-kr/stack-comments"
        issue-term="url"
        theme="github-light"
        crossorigin="anonymous"
        async>	
	</script>
</div>

<?php

/**
 * Hook: mynote_post_comment_after
 */
do_action( 'mynote_post_comment_after' );
