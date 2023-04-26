<?php /* Template Name: Portfolio */ ?>
<?php get_header(); ?>
<?php $title = get_post_meta( get_the_ID(), 'page_title_checkbox', true); ?>
<?php $subheader = get_post_meta( get_the_ID(), 'page_sub_heading', true); ?>

<div class="portfolio-section container">
  <div class="page-title container">
    <div class="pt-column">
      <?php if ($title == 'on'){ ?><h1><?php the_title(); ?></h1><?php } ?>
      <?php if ( $subheader == '') { ?><p><?php echo $subheader; ?></p><?php } ?>
    </div>
    <?php if (get_option('premiumwd_filter', 'true') == 'true'): ?><?php get_template_part('/includes/portfolio/filter'); ?><?php endif; ?>
  </div>
  <div class="container">
    <div class="portfolio-wrap <?php if(get_option('premiumwd_portfolio_animated') == 'true') { ?>animated<?php }?>">
      <div id="portfolio" class="portfolio-items isotope">
       
      <?php 

             $page_var = 'paged';
		if( is_front_page() ) {
		      $page_var = 'page';
		}
		$paged = get_query_var( $page_var ) ? get_query_var( $page_var ) : 1;
            query_posts(
              array(
                'post_type' => 'portfolio', 
                'posts_per_page'=>get_option('premiumwd_portfolio_perpage'), 
                'paged'=> $paged
              )
            ); 
            $count =0; ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
        $terms = get_the_terms($post->ID, 'portfolio_category');
        if ($terms && !is_wp_error($terms)):
            $links = array();
            foreach ($terms as $term) {
                $links[] = $term->name;
            }
            $links = str_replace(' ', '-', $links);
            $tax   = join(" ", $links);
        else:
            $tax = '';
        endif;
?>
        <div class="<?php echo get_post_meta($post->ID, 'portfolio_custom_select', true);?> element <?php echo strtolower($tax);?> all  isotope-item">
          <figure type="<?php echo get_option('premiumwd_hover_animation'); ?>">
            <?php get_template_part('includes/portfolio/post'); ?>
            <?php get_template_part('includes/portfolio/thumbnail_info'); ?>
          </figure>
        </div>
        <?php endwhile; else:?>
        <div class="error-not-found">Sorry, no portfolio entries for while.</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php get_template_part('/includes/inc/pagination'); ?>
  
</div>

<?php get_footer(); ?>