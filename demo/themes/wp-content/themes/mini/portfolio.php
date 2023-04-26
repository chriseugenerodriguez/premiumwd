<?php /* Template Name: Portfolio */ ?>
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
<?php if ($title == 'on'){ ?>
<section class="header-title grey-section <?php if ($header == 'on'){ ?>transparent <?php } ?> <?php if ($padding == 'on'){ ?>littlepadding<?php } ?> <?php if ($parallax =='on'){ ?>fullscreen<?php } ?>" <?php if ($header == 'on' || $background_color !== '' || $background !== '' ){ ?>style='min-height:<?php echo $height ?>px;background-color: <?php echo $background_color ?>;background-image: url("<?php echo $background ?>");'<?php } ?><?php if ($parallax =='on'){ ?>data-stellar-offset-parent="true" data-stellar-background-ratio="0.1"<?php } ?> >
  <div class="container">
    <div class="topheader text-center <?php if ( $subheader == '') { ?>no-sub<?php } ?>">
      <div class="wrapper">
        <h1 style="color:<?php echo $headercolor ?>;">
          <?php the_title(); ?>
        </h1>
        <?php if ( $subheader  !=='') { ?>
        <div class="separator tiny center"></div>
        <p style="color:<?php echo $subcolor ?>;"><?php echo $subheader ?></p>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<section class="white-section">
  <?php if (get_option('premiumwd_filter', 'true') == 'true'): ?>
  <div class="container-fluid" id="portfolio-filters-inline">
    <div class="twelve columns clearfix">
      <ul>
        <?php
    $terms = get_terms("portfolio_category");
    $count = count($terms);
    echo '<li><a href="javascript:void(0)" title="" data-filter="*" class="active">All</a></li>';
	  if ($count > 0) {
        foreach ($terms as $term) {
            $termname = strtolower($term->name);
            $termname = str_replace(' ', '-', $termname);
            echo '<li><a href="javascript:void(0)" title="" data-filter=".' . $termname . '">' . $term->name . '</a></li>';
        }
    }
?>
      </ul>
    </div>
  </div>
  <?php endif; ?>
  <div class="clearfix container-fluid">
    <div class="portfolio-wrap">
      <div id="portfolio" class="portfolio-items isotope">
        <div class="grid-sizer" style="width:20%"></div>
        <?php
query_posts(array(
    'post_type' => 'portfolio',
    'posts_per_page'=>get_option('premiumwd_portfolio_perpage'), 
	'paged'=> get_query_var('paged')
));
$count = 0;
?>
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
        <div class="<?php
        echo get_post_meta($post->ID, 'portfolio_custom_select', true);?> element <?php echo strtolower($tax);?> all  isotope-item">
          <figure type="<?php echo get_option('premiumwd_hover_animation'); ?>">
            <?php $size = get_post_meta(get_the_ID(), 'portfolio_custom_select', true);?>
            <?php
        if ($size == 'item-w1 item-h2') {?>
            <?php
            $tall = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-tall');?>
            <img src="<?php echo $tall[0]; ?>" alt="" />
            <?php
        }
        if ($size == 'item-w2 item-h2') {?>
            <?php
            $large = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-large');?>
            <img src="<?php echo $large[0]; ?>" alt="" />
            <?php
        }
        if ($size == 'item-w1 item-h1') {?>
            <?php
            $small = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-small');?>
            <img src="<?php echo $small[0]; ?>" alt="" />
            <?php
        }
        if ($size == 'item-w2 item-h1') {?>
            <?php
            $wide = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-wide');?>
            <img src="<?php echo $wide[0]; ?>" alt="" />
            <?php
        } else {?>
            <?php
        }?>
            <?php include('includes/inc/thumbnail_info.php'); ?>
          </figure>
        </div>
        <?php endwhile; else:?>
        <div class="error-not-found">Sorry, no portfolio entries for while.</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
   <?php if( get_next_posts_link() ) : 	?>
        <div id="pagination" class="readmore text-center" style=""><div class="load_more_button_holder"><span class="button small"><?php echo get_next_posts_link( 'Show More'); ?></span></div></div>
   <?php endif; ?>
</section>
<?php get_footer(); ?>
