<?php /* Template Name: Portfolio Gallery */ ?>
<?php get_header(); ?>

<?php if (get_option('premiumwd_filter', 'true') == 'true'): get_template_part('/includes/portfolio/filter'); endif; ?>

<div id="container" class="clearfix <?php if (get_option('premiumwd_filter', 'true')== 'true'): ?>filter-fixed<?php endif;?>">

  <div class="portfolio-wrap">

    <div id="portfolio" class="row portfolio-items isotope  masonry-items main-content"  data-col-num="elastic" data-categories-to-show="" data-starting-filter="">
                 
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
      <?php $terms = get_the_terms( $post->ID, 'portfolio_tag' );  
        if ( $terms && ! is_wp_error( $terms ) ) :   
        $links = array(); foreach ( $terms as $term ) { $links[] = $term->name; }  
        $links = str_replace(' ', '-', $links);   
        $tax = join( " ", $links );       
        else : $tax = ''; endif; ?>
      <article class="col elastic-portfolio-item element <?php echo strtolower($tax); ?> all isotope-item" data-project-cat="<?php echo strtolower($tax); ?> all">
      <div class="work-item style-2">
        <div class="work-info-bg"></div>
        <?php the_post_thumbnail('portfolio-default'); ?>
        <div class="work-info"> <i class="fa fa-plus"></i> <a class='fancybox' rel='gallery1' href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 9999,9999 ), false, '' ); echo $src[0]; ?>" >
          <div class="vert-center">
            <h3>
              <?php the_title(); ?>
            </h3>
            <p><?php echo get_the_date('F j, Y'); ?></p>
          </div>
          </a></div>
        </article>
        <?php endwhile; else: ?>
        <div class="error-not-found">Sorry, no portfolio entries for while.</div>
        <?php endif; ?>
      </div>
      <!-- #content -->
              <?php get_template_part('/includes/portfolio/pagination'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
