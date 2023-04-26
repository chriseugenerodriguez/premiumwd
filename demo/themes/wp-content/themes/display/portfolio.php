<?php /* Template Name: Portfolio */ ?>
<?php get_header(); ?>
<?php if (get_option('premiumwd_filter', 'true') == 'true'): ?>
<div id="portfolio-filters-inline" class="container"><div class="twelve columns clearfix"><ul><?php
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
?></ul></div></div>
<?php endif; ?>
<div id="container" class="clearfix"><div class="portfolio-wrap"><div id="portfolio" class="portfolio-items isotope">
<div class="grid-sizer" style="width:20%"></div>
  <?php
$loop  = new WP_Query(array(
    'post_type' => 'portfolio',
    'posts_per_page' => -1
));
$count = 0;
?> 
  <?php
if ($loop):
    while ($loop->have_posts()):
        $loop->the_post();
?>
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
        echo get_post_meta($post->ID, 'portfolio_custom_select', true);?> element <?php echo strtolower($tax);?> all  isotope-item"><figure type="<?php echo get_option('premiumwd_hover_animation'); ?>"><?php $size = get_post_meta(get_the_ID(), 'portfolio_custom_select', true);?><?php
        if ($size == 'item-w1 item-h2') {?><?php
            $tall = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-tall');?> <img src="<?php echo $tall[0]; ?>" alt="" /><?php
        }
        if ($size == 'item-w2 item-h2') {?><?php
            $large = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-large');?><img src="<?php echo $large[0]; ?>" alt="" /><?php
        }
        if ($size == 'item-w1 item-h1') {?><?php
            $small = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-small');?><img src="<?php echo $small[0]; ?>" alt="" /><?php
        }
        if ($size == 'item-w2 item-h1') {?><?php
            $wide = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-wide');?><img src="<?php echo $wide[0]; ?>" alt="" /><?php
        } else {?><?php
        }?><?php include('includes/inc/thumbnail_info.php'); ?></figure></div> 
		<?php endwhile; else:?>
        <div class="error-not-found">Sorry, no portfolio entries for while.</div>
        <?php endif; ?>
      </div></div></div></div>
<?php get_footer(); ?>