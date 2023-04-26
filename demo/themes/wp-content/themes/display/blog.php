<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>

      <section>
        <?php global $wp_query; global $post; ?>
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
        <?php  query_posts(array('posts_per_page'=>get_option('premiumwd_blog_perpage'), 'paged'=>$paged )); ?>
        <?php if ($wp_query->have_posts()) : ?>
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
        <?php echo get_template_part('includes/blog/blog-format', 'structure');?>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php echo pagination(); ?>
      </section>
  <!-- #wrap --> 
</div>
<?php get_footer(); ?>
