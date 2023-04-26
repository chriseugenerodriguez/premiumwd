
<?php get_header(); ?>

<div class="container">
  <section class="nine columns">
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
  <aside class="three columns clearfix">
    <div id="sidebar">
      <?php dynamic_sidebar( 'Page Widget Area' ); ?>
    </div>
  </aside>
</div>
<!--/.content-->

<?php get_footer(); ?>
