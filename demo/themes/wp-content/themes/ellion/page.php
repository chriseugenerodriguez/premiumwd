<?php get_header(); ?>
<?php $subheader = get_post_meta( get_the_ID(), 'page_sub_heading', true); ?>
<?php $title = get_post_meta( get_the_ID(), 'page_title_checkbox', true); ?>

<div class="content-wrapper">
  <div class="container <?php if ($title != 'on'){ ?>paddingtop<?php } ?>">
     <div class="twelve columns clearfix">
        <?php if ($title == 'on'){ ?>
            <div class="page-title">
               <h1><?php the_title(); ?></h1>
               <?php if ( $subheader  !=='') { ?><p><?php echo $subheader ?></p><?php } ?>  
            </div>
			<?php } ?>
    </div>
  </div>
  <?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <div class="container">
    <section class="twelve columns">
      <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </section>
  </div>
</div>
</div>
<?php get_footer(); ?>
