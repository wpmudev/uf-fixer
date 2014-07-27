<?php
/**
 * Contains codes that run through wp_list_comment callback
 *
 * Note: no </li> closure needed
 */


switch ( $comment->comment_type ){
	case 'pingback':
	case 'trackback':
		break;

	default:
?>

<li <?php comment_class(); ?> id="<?php comment_ID(); ?>">
	<article id="comment-<?php comment_ID(); ?>" class="comment">
        <div class="comment-meta">
            <?php echo get_avatar($comment, 60); ?>
        </div>
        <div class="comment-content">
            <cite class="fn comment_author"><?php comment_author_link(); ?></cite>
            <?php comment_text(); ?>
            <?php edit_comment_link( __( 'Edit' ), '<p class="edit-link">', '</p>' ); ?>
        </div>
        <div class="comment-meta-actions">
            <div class="comment-reply">
                <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div>
            <a href="<?php comment_link(); ?>" class="comment-date">
                <time datetime="<?php comment_time('c'); ?>"><?php echo get_comment_date("") ?></time>
            </a>
        </div>
		<?php if ( '0' == $comment->comment_approved ): ?>
			<p class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></p>
		<?php endif ?>


	</article>

<?php
		break;
}
?>