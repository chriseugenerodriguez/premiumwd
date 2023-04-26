<?php
/**
 * Template Name: Sidebar Left
 *
 */

get_header(); ?>
<?php $subheader = get_post_meta( get_the_ID(), 'page_sub_heading', true); ?>
<?php $title = get_post_meta( get_the_ID(), 'page_title_checkbox', true); ?>

  <div class="container content-wrapper <?php if ($title != 'on'){ ?>paddingtop<?php } ?>">
     <div class="clearfix">
        <?php if ($title == 'on'){ ?>
            <div class="page-title">
               <h1><?php the_title(); ?></h1>
               <?php if ( $subheader  !=='') { ?><p><?php echo $subheader ?></p><?php } ?>  
            </div>
			<?php } ?>
    </div>
  <?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <div class="container paddingbottom content">
    <aside class="two columns clearfix blog-sidebar">
      <div id="sidebar"><?php dynamic_sidebar('sidebar-widget-area'); ?></div>
    </aside>
    <section class="nine columns">
      <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>
