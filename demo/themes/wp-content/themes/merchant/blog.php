<?php /* Template Name: Blog Standard */ ?>

<?php get_header(); ?>

<section class="container padding-top">
  <div class="twelve columns">
    <div class="content">
        <?php global $wp_query; global $post; ?>
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
        <?php  $blog = new WP_Query(array('posts_per_page'=>get_option('premiumwd_blog_perpage'), 'paged'=>$paged )); ?>
        <?php if ($blog->have_posts()) : ?>
        <?php while ( $blog->have_posts() ) : $blog->the_post(); ?>
      <?php get_template_part('post'); ?>
      <?php endwhile; $wp_query = $blog; ?>
      <?php endif; ?>
    </div>
    <?php echo pagination(); ?>
  </div>
  <!--/.pad-->
</section>
<!--/.content-->

<?php get_footer(); ?>
