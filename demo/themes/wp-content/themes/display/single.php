<?php
/**
 * The Template for displaying all single posts.
 *
 */

$post_format = get_post_format(); 

get_header(); ?>

<div class="wrapper">
  <div class="container">
    <div class="page-title clearfix">
     <?php the_category(); ?> 
    <h1><?php the_title(); ?></h1>
    </div>
  </div>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <ul class="meta-data">
  	<li>By <?php the_author(); ?></li>
    <li><?php the_date(); ?></li>
  </ul>
  <div class="container">
    <section class="twelve columns clearfix"> <?php the_post_thumbnail('blog-image'); ?>
      <div class="single-content">
        <?php the_content(); ?>
        <?php wp_link_pages(array('before'=>'<div class="post-pages">'.__('Pages:','Display'),'after'=>'</div>')); ?>
      </div>
      <div class="post-tags">
        <?php if (get_option('premiumwd_blog_tags', 'true') == 'true'): ?>
        <?php the_tags('<div class="tags"><span>Tags:</span> ', ', ', '</div>'); ?>
        <?php endif; ?>
       <div class="likes"><?php echo li_love_link(); ?></div>
       </div>
      <?php if ( get_option( 'premiumwd_blog_pagination', 'true') == 'true') { get_template_part('includes/inc/post-nav'); } ?>
    </section>
    
    <!-- #post-## -->
    
    <?php endwhile; ?>
  </div>
</div>
</div>

<!-- #wrap --> 

<!-- .container -->

<?php get_footer(); ?>
