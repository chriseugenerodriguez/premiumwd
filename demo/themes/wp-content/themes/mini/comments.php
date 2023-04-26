<div class="comment_holder clearfix" id="comments">
  <div class="comment_number">
    <div class="comment_number_inner">
      <h4>
        <?php comments_number( __('No Responses','Mini'), '1 '.__('Response','Mini'), '% '.__('Responses','Mini')); ?>
      </h4>
    </div>
  </div>
  <div class="comments">
    <?php if ( post_password_required() ) : ?>
    <p class="nopassword">
      <?php _e( 'This post is password protected. Enter the password to view any comments.', 'Mini' ); ?>
    </p>
  </div>
</div>
<?php return; endif; ?>
<?php if ( have_comments() ) : ?>
<ul class="comment-list">
  <?php wp_list_comments(array( 'callback' => 'Mini_comment')); ?>
</ul>
<?php // End Comments ?>
<?php else : // this is displayed if there are no comments so far 

	if ( ! comments_open() ) :
?>
<!-- If comments are open, but there are no comments. --> 

<!-- If comments are closed. -->
<p>
  <?php _e('Sorry, the comment form is closed at this time.', 'Mini'); ?>
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
	'title_reply'=>'<h5>'. __( 'Post A Comment','Mini' ) .'</h5>',
	'title_reply_to' => __( 'Post A Reply to %s','Mini' ),
	'cancel_reply_link' => __( 'Cancel Reply','Mini' ),
	'label_submit' => __( 'Submit','Mini' ),
	'comment_field' => '<textarea id="comment" placeholder="'.__( 'Write your comment here...','Mini' ).'" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
	'comment_notes_before' => '',
	'comment_notes_after' => '',
	'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' => '<div class="row"><div class="four columns"><input id="author" name="author" placeholder="'. __( 'Your full name','Mini' ) .'" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></div>',
		'url' => '<div class="four columns"><input id="email" name="email" placeholder="'. __( 'E-mail address','Mini' ) .'" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' /></div>',
		'email' => '<div class="four columns"><input id="url" name="url" type="text" placeholder="'. __( 'Website','Mini' ) .'" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div></div>'
		 ) ) );


function Mini_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
<li>
  <div class="comment">
    <div class="image"> <?php echo get_avatar($comment, 75); ?> </div>
    <div class="text">
      <h4 class="name"><?php echo get_comment_author_link(); ?></h4>
      <span class="comment_date">
      <?php _e('Posted at', 'Mini'); ?>
      <?php comment_date('H:i'); ?>
      h,
      <?php comment_date('d F'); ?>
      </span>
      <?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']) ) ); ?>
      <div class="text_holder" id="comment-<?php echo comment_ID(); ?>">
        <?php comment_text(); ?>
      </div>
    </div>
  </div>
  <?php if ($comment->comment_approved == '0') : ?>
  <p><em>
    <?php _e('Your comment is awaiting moderation.', 'Mini'); ?>
    </em></p>
  <?php endif; ?>
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
