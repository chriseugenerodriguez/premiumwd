<?php /* Template Name: Portfolio Masonry */ ?>
<?php get_header(); ?>

<?php if (get_option('premiumwd_filter', 'true') == 'true'): get_template_part('/includes/portfolio/filter'); endif; ?>

<div id="container" class="clearfix <?php if (get_option('premiumwd_filter', 'true')== 'true'): ?>filter-fixed<?php endif;?>">
    
    <div class="portfolio-wrap">
        <div id="portfolio" class="row portfolio-items isotope  masonry-items main-content" data-col-num="elastic" data-categories-to-show="" data-starting-filter="">
            
            <?php 

            $custom_query_args = array();
            $param = 'paged';
            if(is_home() || is_front_page()) {
                $param = 'page';
            }
            $custom_query_args[$param] = get_query_var( $param ) ? get_query_var( $param ) : 1;
            query_posts(
              array(
                'post_type' => 'portfolio', 
                'posts_per_page'=>get_option('premiumwd_portfolio_perpage'), 
                'paged'=> $custom_query_args[$param]
              )
            ); 
            $count =0; ?>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part('/includes/portfolio/post');?>

            <?php endwhile; else: ?>
            <div class="error-not-found">Sorry, no portfolio entries for while.</div>
            <?php endif; ?>
        </div>
        <?php get_template_part('/includes/portfolio/pagination'); ?>
    </div>
    <!-- .portfolio-wrap --> 
  </div>
</div>
<!-- container -->
<?php get_footer(); ?>
