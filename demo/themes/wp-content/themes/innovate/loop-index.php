<?php get_template_part( 'nivo', 'slider' ); ?>   
<?php get_template_part( 'revolution', 'slider' ); ?>   
                     
<div  id="container">
			<div class="clearfix" id="content" role="main"> 
            <div id="box">
            <div class="box"> 
   <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>
                        <?php endwhile; // end of the loop. ?>

</div>
</div>