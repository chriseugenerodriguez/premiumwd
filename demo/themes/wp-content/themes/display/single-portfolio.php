<?php /* Template Name: Index */ ?>
<?php get_header(); ?>

<div class="wrapper">
  <div class="container  clearfix">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="page-title clearfix">
      <div class="portfolio-tag">
        <?php $terms = get_the_terms( $post->ID, 'portfolio_category' ); $term_names = array(); foreach( $terms as $term ) $term_names[] = $term->name; echo implode( ', ', $term_names ); ?>
      </div>
      <h1><?php the_title(); ?></h1>
    </div>
    <?php $size = get_post_meta(get_the_ID() , 'portfolio_layout_excerpt', true); ?>
    <?php if($size === ''){ ?>
    <ul class="meta-data">
      <li>By <?php the_author(); ?></li>
      <li><?php the_date(); ?></li>
    </ul>
    <?php } else { ?>
    <div class="excerpt"><?php echo $size; ?></div>
    <?php } ?>
    <section class="portfolio-columns">
      <?php the_content(); ?>
    </section>
    <?php endwhile; ?>
    <!-- #container -->
    <div class="portfolio_navigation">
      <?php if (get_option('premiumwd_portfolio_pagination', 'true') == 'true'): ?>
      <div class="portfolio_prev">
        <?php previous_post_link( '%link', '' ); ?>
      </div>
      <div class="portfolio_next">
        <?php next_post_link( '%link', '' ); ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>
</div>
<!-- #wrap -->
<?php get_footer(); ?>
