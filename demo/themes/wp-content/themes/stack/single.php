<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WallPress
 * @since WallPress 1.0.3
 */
$post_format = get_post_format(); 
get_header(); ?>

<div class="wrapper">
  <div class="container">
    <div class="page-title clearfix">
      <div class="twelve columns clearfix">
        <h1>
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <ul class="container metadata clearfix">
    <li><span>Author:</span>
      <?php the_author_posts_link(); ?>
    </li>
    <li><span>Date:</span><a href="<?php echo get_month_link('', ''); ?>">
      <?php the_date(); ?>
      </a> </li>
    <li><span>Likes:</span> <?php echo li_love_link(); ?></li>
    <li><span>Category:</span>
      <?php the_category(', '); ?>
    </li>
    <li><span>Comments:</span> <a href="#comment">
      <?php comments_number( '0', '1', '%' ); ?>
      </a></li>
  </ul>
  <div class="container">
    <section class="twelve columns clearfix"> <?php echo do_shortcode('[post_types_blog]'); ?>
      <div class="single-content">
        <?php the_content(); ?>
      </div>
      <?php if (get_option('premiumwd_blog_tags', 'true') == 'true'): ?>
      <?php the_tags('<div class="post-tags"><span>Tags:</span> ', ', ', '</div>'); ?>
      <?php endif; ?>
      <?php get_template_part ('share'); ?>
      <?php if (get_option('premiumwd_blog_comments', 'true') == 'true'): ?>
      <?php echo comments_template('', true); ?>
      <?php endif;  ?>
    </section>
    <!-- #post-## -->
    <?php endwhile; ?>
  </div>
</div>
</div>
<!-- #wrap --> 
<!-- .container -->

<?php get_footer(); ?>
