<?php /* Template Name: Page No Sidebar */ ?>
<?php get_header(); ?>

<div class="container">
<section class="twelve columns">
    <div class="content">
      <?php while ( have_posts() ): the_post(); ?>
      <article <?php post_class('group'); ?>>
        <h1 class="post-title pad">
          <?php the_title(); ?>
        </h1>
        <div class="post-inner">
          <div class="post-content pad">
            <div class="entry container">
              <?php the_content(); ?>
            </div>
            <!--/.entry--> 
          </div>
        </div>
      </article>
      <?php endwhile; ?>
    </div>
    
    <!--/.pad--> 
  </section>
</div>
<!--/.content-->

<?php get_footer(); ?>