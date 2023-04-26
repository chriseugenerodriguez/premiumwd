<?php /* Template Name: Page Right Sidebar */ ?>

<?php get_header(); ?>

<!-- Margin -->

<div id="container">

<!-- Blog Container-->

<div id="content" role="main">

<div id="entry-title"><div class="entry-title"><h1 class="page-title"><?php the_title(); ?></h1><?php the_breadcrumb(); ?> </div>
</div>
                
<div id="entry-content">

<div class="entry-content clearfix">

<section id="main-single"> 

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'innovate' ), 'after' => '</div>' ) ); ?>
						
		
<?php comments_template( '', true ); ?>				

	
<?php endwhile; // end of the loop. ?>	

</section><!-- #post-## -->

<aside id="secondary"><div id="sidebar"><?php dynamic_sidebar( 'Page Widget Area' ); ?></div></aside>		

</div><!-- .entry-content -->
</div>	
	   
<?php get_footer(); ?>