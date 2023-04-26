<?php get_header(); 


 
 if (bp_is_user()) {


 ?>


<div class="container">
  <?php if ( have_posts() ) : ?>
  <section class="twelve columns">
  <div class="content">
    <?php while ( have_posts() ): the_post(); ?>
    <h1 class="post-title pad"><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <!--/.pad--> 
  </section>
</div>




<!--/.content-->

<?php } elseif(is_taxonomy('dwqa-question_category')) { ?>


<div class="container">
<div class="columns nine">
  <section id="content" class="border vvv">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </section>   
</div> 
  <div class="columns three">
   <aside class="sidebar">
      <?php dynamic_sidebar( 'Questions' ); ?>
    </aside>
</div>
</div>

<?php }
else{
	
	

 ?>
 
 <div class="container">
  <?php if ( have_posts() ) : ?>
  <section class="twelve columns">
  <div class="content">
    <?php while ( have_posts() ): the_post(); ?>
    <h1 class="post-title pad"><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <!--/.pad--> 
  </section>
</div>
 <?php } ?>

<?php get_footer(); ?>

