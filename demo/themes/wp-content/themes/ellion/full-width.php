<?php /* Template Name: Full Width */ ?>
<?php get_header(); ?>
<?php $header = get_post_meta( get_the_ID(), 'header_transparent_checkbox', true); ?>
<?php $padding = get_post_meta( get_the_ID(), 'body_padding', true); ?>

	<div class="no-padding" <?php if(!$padding == ''){ ?>style="padding: <?php echo $padding ?>;"<?php } ?>>
      <?php while ( have_posts() ): the_post(); ?>
      <article class="content-wrapper">
              <?php the_content(); ?>
      </article>
      <?php endwhile; ?>
    <!--/.content-->
</div>
<?php get_footer(); ?>
