<?php /* Template Name: Portfolio Masonry */ ?>
<?php get_header(); ?>

<?php if (get_option('premiumwd_filter', 'true') == 'true'): get_template_part('/includes/portfolio/filter'); endif; ?>

<div id="container" class="clearfix <?php if (get_option('premiumwd_filter', 'true')== 'true'): ?>filter-fixed<?php endif;?>">
    
    <div class="portfolio-wrap">
        <div id="portfolio" class="row portfolio-items isotope  masonry-items main-content" data-col-num="elastic" data-categories-to-show="" data-starting-filter="">
            
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
