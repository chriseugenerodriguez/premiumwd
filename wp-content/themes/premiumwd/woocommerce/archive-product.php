<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header('shop'); ?>
<section class="section-gray"><div class="central">
<hgroup>
<h1>Choose your template.</h1>
<h2>WordPress themes for e-commerce, business, portfolio and personal sites.</h2>
</hgroup>
</div>

  <div class="container">
  <div class="row">
  <div class="columns five">
    <div class="inputs-section clearfix">
      <div class="inputs-section-title">Filter<br>
        themes:</div>
      <div class="field-select pull-left">
        <label class="label-title" for="theme-filter">You can filter by category type:</label>
        <?php         $terms = get_terms("product_cat");  
        $count = count($terms);  
        echo '<select name="product_cat" id="theme-filter">';  
		echo '<option class="active" value="">All Category Types</option>';  
            if ( $count > 0 )  
            {     
                foreach ( $terms as $term ) {  
					if($term->term_id == 106 || $term->term_id == 107 || $term->term_id == 148 || $term->term_id == 198) continue;
                    $termname = strtolower($term->name);  
                    $termname = str_replace(' ', '-', $termname);  
                    echo '<option value="'.$term->slug.'"><a href="#" data-filter=".'.$termname.'">'.$term->name.'</a></option>';  
                }  
            }  
        echo "</select>";   ?>
      </div>
      <div class="field-select pull-right">
        <label class="label-title" for="theme-sort">...and then sort by:</label>
        <select class="orderby" name="orderby">
          <option selected="selected" value="">Default sorting</option>
          <option value="popular-desc">Sort by popularity</option>
          <option value="rating-desc">Sort by average rating</option>
          <option value="recent-desc">Sort by newness</option>
          <option value="price">Sort by price: low to high</option>
          <option value="price-desc">Sort by price: high to low</option>
        </select>
      </div>
    </div>
  </div>
  <div class="columns three right">
    <div class="inputs-section">
      <div class="field-text white buttoned">
        <label class="label-title" for="theme-search">You can search for a theme name:</label>
        <input id="theme-search" type="text" placeholder="ENTER Keyword" value="" name="theme_name" hidefocus="true" style="outline: medium none;">
        <button type="submit" class="fa fa-search"></button>
      </div>
    </div>
  </div>
  </div>
</div>

</section>

<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action('woocommerce_before_main_content');
	?>

<?php do_action( 'woocommerce_archive_description' ); ?>
<?php if ( 	have_posts() ) : ?>
<?php
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>
<?php woocommerce_product_loop_start(); ?>
<?php woocommerce_product_subcategories(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php woocommerce_get_template_part( 'content', 'product' ); ?>
<?php endwhile; // end of the loop. ?>
<?php woocommerce_product_loop_end(); ?>
<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>
            <div class="row"><div class="nothing-found hidden col-lg-12">No theme found.</div></div>
<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
<?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>
<?php endif; ?>
<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action('woocommerce_after_main_content');
	?>
<?php get_footer('shop'); ?>