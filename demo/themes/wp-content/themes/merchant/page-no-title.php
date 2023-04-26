<?php /* Template Name: Page No Title */ ?>
<?php get_header(); ?>

<div class="container">
<section class="twelve columns">
      <?php while ( have_posts() ): the_post(); ?>
      <article <?php post_class('group'); ?>>
        <div class="post-inner">
          <div class="post-content">
            <div class="entry container">
              <?php the_content(); ?>
            </div>
            <!--/.entry--> 
          </div>
      </article>
      <?php endwhile; ?>
    </div>
    
    <!--/.pad--> 
  </section>
</div>
<!--/.content-->

<?php get_footer(); ?>