<?php 
/*
Template Name: Shop - Plugins
*/ 
?>
<?php 
global $woocommerce;
$id = get_option('woocommerce_shop_page_id');
$shop= get_post($id);

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

?>
<?php 
		get_header('shop'); 
		$id = get_option('woocommerce_shop_page_id');
	?>

<section id="content" class="premium-plugins">
<div class="central">
<hgroup>
<h1>Choose your plugin.</h1>
<h2>WordPress plugins that kick ass, take names, and optimize your WordPress experience.</h2>
</hgroup>
</div>

	<div class="container">
		<aside class="two columns">
			<?php dynamic_sidebar( 'Shop - Plugins' ); ?>
		</aside>
		<section class="ten columns clearfix">
			<?php do_action('woocommerce_before_main_content');
			do_action( 'woocommerce_archive_description' ); 
			remove_action('pre_get_posts' , 'remove_plugin_category_products');
			query_posts(array('post_type' => 'product' , 'product_cat' => 'wp-premium-plugins', 'paged' => get_query_var('paged')));
			if ( 	have_posts() ) : 
				do_action( 'woocommerce_before_shop_loop' );
				woocommerce_product_loop_start(); 
				woocommerce_product_subcategories(); 
				while ( have_posts() ) : the_post(); 
					woocommerce_get_template_part( 'content', 'product' ); 
				endwhile; 
				woocommerce_product_loop_end(); 
				do_action( 'woocommerce_after_shop_loop' );
			else : ?>
				<div class="row"><div class="nothing-found hidden col-lg-12">No Plugin found.</div></div>
			<?php endif; ?> 
		</section>
	</div>
</section>
<?php get_footer(); ?>