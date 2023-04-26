<?php /* Template Name: Archives */ ?>
<?php get_header(); ?>
<?php $subheader = get_post_meta( get_the_ID(), 'page_sub_heading', true); ?>
<?php $title = get_post_meta( get_the_ID(), 'page_title_checkbox', true); ?>
<?php if (have_posts()) : ?>


  <div class="container<?php if(is_page()){?><?php if ( $title != 'on'){ ?> paddingtop<?php } ?><?php } ?>">
  <div class="blog-section">
    <?php if(is_page()){?>
		 <?php if ($title == 'on'){ ?>
          <div class="page-title"> <?php echo get_template_part('includes/inc/page-title'); ?>
            <?php if ( $subheader  !=='') { ?><p><?php echo $subheader ?></p><?php } ?>
          </div>
       <?php } ?>
    <?php }  else { ?>
    	<div class="page-title"> <?php echo get_template_part('includes/inc/page-title'); ?> </div>
    <?php } ?>
  <?php if (is_page()): ?>
    <section class="littlepaddingbottom">
	 <?php the_content(); ?>
    <div class="row littlepaddingtop">
      <div class="eight columns">
        <h3>Latest 20 Posts:</h3>
        <ul><?php wp_get_archives('type=postbypost&limit=20&format=html'); ?></ul>
      </div>
      <div class="four columns">
        <h3>Archives by Month:</h3>
          <ul><?php wp_get_archives('type=monthly&limit=12'); ?></ul>
        <h3>Archives by Category:</h3>
          <ul><?php wp_list_categories('title_li='); ?></ul>
      </div>
  <?php endif; ?>
  		<?php if (is_page()): ?><div class="archive-container" style=" display:none;"><?php endif;?>
      <div class="blog ten columns littlepaddingright">
      <div id="blog_content" class="content <?php if(get_option('premiumwd_blog_animated') == 'true') { ?>animated<?php }?>">
		  <?php while (have_posts()) : the_post(); ?>
			  <?php if( is_category() || is_author() || is_month() || is_year() || is_tag()): ?>
              <?php echo get_template_part('post', 'structure');?>
        <?php endif; ?>
        <!-- Margin -->
        <?php endwhile; else :
				 if ( is_category() ) { // If this is a category archive
					printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
				} else if ( is_date() ) { // If this is a date archive
					echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
				} else if ( is_author() ) { // If this is a category archive
					$userdata = get_userdatabylogin(get_query_var('author_name'));
					printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->user_name);
				} else {
					echo("<h2>No posts found.</h2>");
				}
			endif; ?>	

		</div><?php if( get_next_posts_link() ) : 	?><div id="pagination"><div class="next"><?php echo get_next_posts_link( 'Show More'); ?></div></div><?php endif; ?>
      </div>
      <?php if(get_option('premiumwd_blog_sidebar') == 'true'): ?>
         <aside class="two columns clearfix blog-sidebar">
           <div id="sidebar"><?php dynamic_sidebar( 'Blog Widget Area' ); ?></div>
         </aside>
      <?php endif; ?>
      <?php if (is_page()): ?></div><?php endif;?>
      </div>
    </section>
    <?php if (is_page()): ?></div><?php endif;?>
 </div>   
<?php get_footer(); ?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/includes/blog/js/masonry.js"></script>