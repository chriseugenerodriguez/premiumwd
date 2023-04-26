<?php get_header(); ?>

<?php global $post;?>

<div class="header-meta" data-stellar-offset-parent="true" data-stellar-background-ratio="0.1" style="background-size:cover;background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );  ?>'); background-repeat: no-repeat; background-origin: padding-box;">
<div class="hero-overlay"></div>
<div class="header-wrap">
<div class="header-inner">
<div class="header-content">
<span><?php the_category(' / '); ?></span>
<h1 class="post-title pad"><?php the_title(); ?></h1>
<div class="author-content"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?><p>by <?php the_author(); ?> on <?php the_date();?></p></div>
<?php $demo_post_meta = get_post_meta($post->ID, 'view demo', true); ?>
        <?php $feature_post_meta = get_post_meta($post->ID, 'feature', true); ?>
        <?php if ( ! empty ( $demo_post_meta ) && ! empty ( $feature_post_meta )): ?>
        <div class="meta-info">
          <?php endif; ?>
          <?php if ( ! empty ( $demo_post_meta ) ) { ?>
          <a class="button-info" href="<?php echo $demo_post_meta ?>" target="_blank">View Demo</a>
          <?php } ?>
          <?php if ( ! empty ( $feature_post_meta ) ) { ?>
          <a class="button-info" href="<?php echo $feature_post_meta ?>" target="_blank">Features</a>
          <?php } ?>
          <?php if ( ! empty ( $demo_post_meta ) && ! empty ( $feature_post_meta )): ?>
        </div>
        <?php endif; ?>
</div>
 </div>
 </div>
 </div> 
<section class="container">
  <div class="row">
  <div class="content columns nine">
    <?php while ( have_posts() ): the_post(); ?>
    <article <?php post_class(); ?>>
    <div class="post-inner">
      <div class="ct-post-content clearfix" itemprop="articleBody">
        <?php the_content(); ?>
      </div>
</div>
      </article>
    </div>
    <div class="columns three sidebar">
    	<?php dynamic_sidebar( 'Blog Page' ); ?>
    </div>
   </div>
<div style="max-width:1050px;margin:0px auto;">    
<?php dynamic_sidebar( 'Single Post' ); ?>
<section id="blog-similar-posts" class="clearfix">
<h4>You might also like...</h4>

<?php    $orig_post = $post;
	global $post;
	$categories = get_the_category($post->ID);
	if ($categories) {
	$category_ids = array();
	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	
	$args=array(
	'category__in' => $category_ids,
	'post__not_in' => array($post->ID),
	'posts_per_page'=> 3, // Number of related posts that will be shown.
	'caller_get_posts'=>1
	); 
      
    $my_query = new wp_query($args); 
    if( $my_query->have_posts() ) {  while ($my_query->have_posts()) { $my_query->the_post();  
    ?>  
    <?php get_template_part('post'); ?> 
	<?php }  
    ?>  
       
<?
}
echo '</ul></section>';
}
$post = $orig_post;
wp_reset_query(); ?>
                            
    <?php endwhile; // end of the loop. ?>
    
<div class="comment_holder clearfix" id="comment"><?php echo comments_template('', true); ?></div>
</div>
</section>
<?php get_footer(); ?>