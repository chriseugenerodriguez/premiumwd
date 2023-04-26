<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>

<section class="container">
<div class="cat-nav"><?php wp_list_categories( 'depth=1&title_li=' ); ?></div>

  <div class="twelve columns">
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
    <?php query_posts(array('posts_per_page'=>get_option('premiumwd_blog_perpage'), 'paged'=>$paged)); ?>
    <?php if ($wp_query->have_posts()) : ?>
    <div class="content">
      <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
      <?php get_template_part('post'); ?>
      <?php endwhile; ?>
    </div>
  </div>
</section>
     <?php echo pagination(); ?>
     <?php wp_reset_query(); ?>
    <?php endif; ?>
 

<?php get_footer(); ?>