<?php
/**
 * The template for ellioning Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header(); ?>

<div class="blog-section container">
  <section class="container">
          <div class="page-title"> <?php echo get_template_part('includes/inc/page-title'); ?></div>

<div class="blog ten columns littlepaddingright">
      <div id="blog_content" class="content columns <?php if(get_option('premiumwd_blog_animated') == 'true') { ?>animated<?php }?>">
       <?php if ( !have_posts() ) : ?>
         <div style="margin-left:40px;">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'ellion'); ?></p>
            <?php get_search_form(); ?>
         </div>
        <?php endif; ?>
      <?php if ( have_posts() ) : while ( have_posts() ): the_post()?>
      <?php get_template_part('post'); ?>
      <?php endwhile; ?>
      <?php endif; ?>
      
		</div><?php if( get_next_posts_link() ) : 	?><div id="pagination"><div class="next"><?php echo get_next_posts_link( 'Show More'); ?></div></div><?php endif; ?>
      </div>
      <?php if(get_option('premiumwd_blog_sidebar') == 'true'): ?>
         <aside class="two columns clearfix blog-sidebar">
           <div id="sidebar"><?php dynamic_sidebar( 'Blog Widget Area' ); ?></div>
         </aside>
      <?php endif; ?>
      </section>
  <!-- #wrap --> 
</div>
<!-- .container -->

<?php get_footer(); ?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/includes/blog/js/masonry.js"></script>