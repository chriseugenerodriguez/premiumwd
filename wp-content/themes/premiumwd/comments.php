<div class="container">
<div id="comment">
<div class="comment_holder clearfix" id="comments">
  <div class="comment_number">
    <div class="comment_number_inner">
      <h5 class="comments-title"> <?php comments_number( __('No comments','ellion'), 'One '.__('comment','ellion'), '% '.__('comments','ellion')); ?></h5>
    </div>
  </div>
  <div class="comments">
    <?php if ( post_password_required() ) : ?>
    <p class="nopassword">
      <?php _e( 'This post is password protected. Enter the password to view any comments.', 'ellion' ); ?>
    </p>
  </div>
</div>
<?php return; endif; ?>
<?php if ( have_comments() ) : ?>
<ul class="comment-list">
  <?php wp_list_comments(array( 'callback' => 'ellion_comment')); ?>
</ul>
<?php // End Comments ?>
<?php else : // this is displayed if there are no comments so far 

	if ( ! comments_open() ) :
?>
<!-- If comments are open, but there are no comments. --> 

<!-- If comments are closed. -->
<p>
  <?php _e('Sorry, the comment form is closed at this time.', 'ellion'); ?>
</p>
<?php endif; ?>
<?php endif; ?>
</div>
</div>
<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );

$args = array(
	'id_form' => 'commentform',
	'id_submit' => 'submit_comment',
	'title_reply'=>'<h3 id="reply-title" class="comment-reply-title">'. __( 'Leave a Reply','ellion' ) .'</h3>',
	'title_reply_to' => __( 'Leave a Reply','ellion' ),
	'cancel_reply_link' => __( 'Cancel Reply','ellion' ),
	'label_submit' => __( 'Post Comment','ellion' ),
	'comment_field' => '<p class="comment-form-comment"><label for="comment">Comment</label><textarea required name="comment" cols="45" rows="8"></textarea></p>',
	'comment_notes_before' => '',
	'comment_notes_after' => '',
	'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' => '<p class="comment-form-author"><label for="author">Name<span class="required">*</span></label><input id="author" name="author" type="text" required type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></p>',
		'email' => '<p class="comment-form-email"><label for="email">Email<span class="required">*</span></label><input id="email" type="email" name="email" required type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" /></p>',
		'url' => '<p class="comment-form-url"><label for="url">Website</label><input id="url" type="url" name="url" type="text" value="' . esc_attr(  $commenter['comment_author_url'] ) . '"' . $aria_req . ' /></p>'
		 ) ) );


function ellion_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
<li class="comment">
  <article class="comment-body" id="comment-<?php echo comment_ID(); ?>">
    <div class="comment-meta">
    	<div class="comment-author vcard"> 
			<?php echo get_avatar($comment, 75); ?> 
         <b class="fn"><?php echo get_comment_author(); ?></b>
   	</div> 
         <span class="comment-metadata"><?php comment_date('F d, Y'); ?> at <?php comment_date('g:i a'); ?> </span>
   </div>
      <div class="comment-content"> <?php comment_text(); ?></div>
      <div class="reply"><?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']) ) ); ?></div>
  </article>
  <?php if ($comment->comment_approved == '0') : ?>
  		<p><em><?php _e('Your comment is awaiting moderation.', 'ellion'); ?></em></p>
  <?php endif; ?>
</li>  
  <?php 
}

?>
  <div class="comment_pager">
    <p>
      <?php paginate_comments_links(); ?>
    </p>
  </div>
  <div class="comment_form">
    <?php comment_form($args); ?>
  </div>
</div>
</div>