<?php /* Template Name: No Slider */ ?>

  <?php get_header(); ?>       
              
<div  id="container">
			<div class="clearfix" id="content" role="main"> 
            <div id="box">
            <div class="box"> 
   <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>
                        <?php endwhile; // end of the loop. ?>

</div>
</div>
</div>
</div>

<?php get_footer(); ?> 