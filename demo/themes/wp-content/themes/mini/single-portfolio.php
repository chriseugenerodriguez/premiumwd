<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php $header = get_post_meta( get_the_ID(), 'header_transparent_checkbox', true); ?>
<?php $height = get_post_meta( get_the_ID(), 'page_height_heading', true); ?>
<?php $background = get_post_meta( get_the_ID(), 'page_image', true); ?>
<?php $parallax = get_post_meta( get_the_ID(), 'page_parallax_checkbox', true); ?>
<?php $background_color = get_post_meta( get_the_ID(), 'page_background_color', true); ?>
<?php $headercolor = get_post_meta( get_the_ID(), 'page_header_color', true); ?>
<?php $subcolor = get_post_meta( get_the_ID(), 'page_sub_color', true); ?>
<section class="header-title grey-section <?php if ($header == 'on'){ ?>transparent <?php } ?> <?php if ($parallax =='on'){ ?>fullscreen<?php } ?>" <?php if ($header == 'on' || $background_color !== '' || $background !== '' ){ ?>style='min-height:<?php echo $height ?>px;background-color: <?php echo $background_color ?>;background-image: url("<?php echo $background ?>");'<?php } ?><?php if ($parallax =='on'){ ?>data-stellar-offset-parent="true" data-stellar-background-ratio="0.1"<?php } ?> >


<div class="container">
    <div class="topheader text-center <?php if ( $subheader == '') { ?>no-sub<?php } ?>">
<div class="wrapper">
      <h1 style="color:<?php echo $headercolor ?>;"><?php the_title(); ?></h1>
   
		  <?php if ( $subheader  !=='') { ?><div class="separator tiny center"></div><p style="color:<?php echo $subcolor ?>;"> <?php $size = get_post_meta(get_the_ID() , 'portfolio_layout_excerpt', true); ?>
    <?php if($size === ''){ ?>
    <ul class="meta-data" style="color:<?php echo $subcolor ?>;"><li>By <?php the_author(); ?></li><li><?php the_date(); ?></li></ul>
    <?php } else { ?>
    <div class="excerpt" style="color:<?php echo $subcolor ?>;"><?php echo $size; ?></div>
    <?php } ?></p><?php } ?>    
    </div>
  </div></div>
</section>

<section class="white-section">
<?php if (get_option('premiumwd_portfolio_pagination', 'true') == 'true'): ?>
<div class="portfolio_navigation">
      <div class="portfolio_prev"><?php previous_post_link( '%link', '' ); ?></div>
      <div class="portfolio_next"><?php next_post_link( '%link', '' ); ?></div>
</div>
<?php endif; ?>

<?php the_content(); ?></section>
<?php endwhile; ?>

<?php get_footer(); ?>
