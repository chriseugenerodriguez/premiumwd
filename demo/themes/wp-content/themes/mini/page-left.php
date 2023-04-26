<?php
/**
 * Template Name: Sidebar Left
 *
 */

get_header(); ?>
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

  <?php if (have_posts()) while (have_posts()) : the_post(); ?>
	<div class="white-section jquery nopadding">
  <div class="container">

    <aside class="three columns clearfix">
    	<div id="sidebar">
      <?php dynamic_sidebar('page-widget-area'); ?>
      </div>
    </aside>
    <section class="nine columns">
 <div class="content">     <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
 </div>   </section>

</div></div>
<?php get_footer(); ?>
