<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<?php $header = get_post_meta( get_the_ID(), 'header_transparent_checkbox', true); ?>
<?php $height = get_post_meta( get_the_ID(), 'page_height_heading', true); ?>
<?php $title = get_post_meta( get_the_ID(), 'page_title_checkbox', true); ?>
<?php $subheader = get_post_meta( get_the_ID(), 'page_sub_heading', true); ?>
<?php $background = get_post_meta( get_the_ID(), 'page_image', true); ?>
<?php $parallax = get_post_meta( get_the_ID(), 'page_parallax_checkbox', true); ?>
<?php $background_color = get_post_meta( get_the_ID(), 'page_background_color', true); ?>
<?php $padding = get_post_meta( get_the_ID(), 'page_padding_checkbox', true); ?>
<?php $headercolor = get_post_meta( get_the_ID(), 'page_header_color', true); ?>
<?php $subcolor = get_post_meta( get_the_ID(), 'page_sub_color', true); ?>
<?php if ($title == 'on'){ ?><section class="header-title grey-section <?php if ($header == 'on'){ ?>transparent <?php } ?> <?php if ($padding == 'on'){ ?>littlepadding<?php } ?> <?php if ($parallax =='on'){ ?>fullscreen<?php } ?>" <?php if ($header == 'on' || $background_color !== '' || $background !== '' ){ ?>style='min-height:<?php echo $height ?>px;background-color: <?php echo $background_color ?>;background-image: url("<?php echo $background ?>");'<?php } ?><?php if ($parallax =='on'){ ?>data-stellar-offset-parent="true" data-stellar-background-ratio="0.1"<?php } ?> >
  <div class="container">
    <div class="topheader text-center <?php if ( $subheader == '') { ?>no-sub<?php } ?>"><div class="wrapper">
      <h1 style="color:<?php echo $headercolor ?>;"><?php the_title(); ?></h1>
		  <?php if ( $subheader  !=='') { ?><div class="separator tiny center"></div><p style="color:<?php echo $subcolor ?>;"><?php echo $subheader ?></p><?php } ?>    
    </div>
   </div> </div>
</section><?php } ?>
<section class="white-section jquery <?php if(get_option('premiumwd_blog_sidebar') == 'true') { ?>nopadding<?php } ?>">
<div class="container">
  <div class="blog <?php if(get_option('premiumwd_blog_sidebar') == 'true') { ?>nine<?php } else { ?>twelve <?php } ?> columns"> 
    <div class="content">
        <?php global $wp_query; global $post; ?>
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
        <?php  $blog = new WP_Query(array('posts_per_page'=>get_option('premiumwd_blog_perpage'), 'paged'=>$paged )); ?>
        <?php if ($blog->have_posts()) : ?>
        <?php while ( $blog->have_posts() ) : $blog->the_post(); ?>
      <?php get_template_part('post'); ?>
      <?php endwhile; $wp_query = $blog; ?>
      <?php endif; ?>
    </div>
    <?php echo pagination(); ?>
  </div>
<?php if(get_option('premiumwd_blog_sidebar') == 'true'): ?>  
<aside class="three columns clearfix blog-sidebar">
    <div id="sidebar">
      <?php dynamic_sidebar( 'Blog Widget Area' ); ?>
    </div>
  </aside>
<?php endif; ?>  
  </div>
  <!--/.pad-->
</section>
<!--/.content-->

<?php get_footer(); ?>
