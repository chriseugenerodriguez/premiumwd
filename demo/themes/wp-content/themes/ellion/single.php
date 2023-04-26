<?php get_header(); ?>
<?php $post_format = get_post_format(); ?>
<?php $featured = get_post_meta( get_the_ID(), 'page_featured_image', true); ?>
<?php $email  = get_the_author_meta('email'); ?>
<?php $googleplus  = get_the_author_meta('googleplus'); ?>
<?php $website  = get_the_author_meta('url'); ?>
<?php $twitter  = get_the_author_meta('twitter'); ?>
<?php $facebook = get_the_author_meta('facebook'); ?>
<?php $format = get_post_format(); ?>

<div class="wrapper">
  <div class="<?php echo $featured; ?> container <?php if($featured == 'right' || $featured == 'regular'):?>littlepaddingleft littlepaddingright<?php endif; ?>">
    <?php if($featured != 'regular') { ?>
    <div class="hero portrait-wrap">
      <div class="entry-header">
        <ul class="meta-data">
          <li><?php the_category(', '); ?></li>
          <li><?php the_date(); ?></li>
          <li><?php edit_post_link(); ?></li>
        </ul>
       <h1><?php the_title(); ?></h1>
      </div>
      <figure><?php get_template_part('includes/blog/blog-format'); ?></figure>
    </div>
    <?php } else { ?>
	<div class="hero portrait-wrap">
      <figure><?php get_template_part('includes/blog/blog-format'); ?></figure>
      <div class="entry-header regular">
        <ul class="meta-data">
          <li><?php the_category(', '); ?></li>
          <li><?php the_date(); ?></li>
          <li><?php edit_post_link(); ?></li>
        </ul>
        <?php if ( $format != 'aside' ) { ?> <h1><?php the_title(); ?></h1><?php } ?>
      </div>
    </div>    
    <?php } ?>
  </div>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div class="content-wrapper container">
      <div class="single-content">
        <?php the_content(); ?>
        <?php wp_link_pages(array('before'=>'<div class="post-pages">'.__('Pages:', 'ellion'),'after'=>'</div>')); ?>
        <?php if (get_option('premiumwd_blog_share', 'true') == 'true'): ?>
       		<?php get_template_part('/includes/inc/share'); ?>
        <?php endif; ?>
        
        <?php if (get_option('premiumwd_blog_tags', 'true') == 'true'): ?>
        	<small class="post-tags"><?php the_tags('<div class="tags"><span>Tags:</span> ', ', ', '</div>'); ?></small>
        <?php endif; ?>
       <?php if ( ( get_option( 'premiumwd_blog_author', 'true') == 'true')): ?>
         <section class="author-bio">
           <figure class="author-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></figure>
           <h5 class="bio-name"><?php the_author_posts_link(); ?></h5>
           	<p class="bio-desc"><?php the_author_meta('description'); ?></p>
           <?php if(!empty($googleplus) || !empty($twitter) || !empty($facebook) || !empty($website) || !empty($email)) { ?>
           <ul>
             <li><?php if(!empty($googleplus)) { echo '<a title="+1 me on Google Plus" target="_blank" href="'.$googleplus.'"><i class="fa fa-google-plus"></i></a>';} ?></li>
             <li><?php if(!empty($twitter)) { echo '<a title="Follow me on Twitter" target="_blank" href="'.$twitter.'"><i class="fa fa-twitter"></i></a>';} ?></li>
             <li><?php if(!empty($facebook)) { echo '<a title="Follow me on Facebook" target="_blank" href="'.$facebook.'"><i class="fa fa-facebook"></i></a>';} ?></li>
             <li><?php if(!empty($website)) { echo '<a title="Check out my website" target="_blank" href="'.$website.'"><i class="fa fa-globe"></i></a>';} ?></li>
             <li><?php if(!empty($email)) { echo '<a title="Send me an email" target="_blank" href="mailto:'.$email.'" target="_top"><i class="fa fa-envelope"></i></a>';} ?></li>
           </ul>
          <?php } ?> 
         </section>
      <?php endif; ?>

      </div>
    <?php if ( get_option( 'premiumwd_blog_related_posts', 'true') == 'true') { get_template_part('includes/inc/related-posts'); } ?>
    <?php if (get_option('premiumwd_blog_comments', 'true') == 'true') { echo stripslashes(comments_template( '', true )); } ?>
    <?php endwhile; ?>
  </div>
</div>

<!-- #wrap --> 

<!-- .container -->

<?php get_footer(); ?>
