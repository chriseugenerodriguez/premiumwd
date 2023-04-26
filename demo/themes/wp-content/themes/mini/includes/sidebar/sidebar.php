<?php 
						function Mini_widgets_init() {				
							register_sidebar( array(
								'name' => __( 'Page Widget Area', 'Mini' ),
								'id' => 'page-widget-area',
								'description' => __( 'This area is used only for the page area sidebar', 'Mini' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );
						if(get_option('premiumwd_blog_sidebar') == 'true') {							
							register_sidebar( array(
								'name' => __( 'Blog Widget Area', 'Mini' ),
								'id' => 'blog-widget-area',
								'description' => __( 'This area should only be used if you want to have a sidebar in your blog single pages', 'Mini' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );	
						}
						
                  if(function_exists('is_woocommerce')) {
							register_sidebar(array(
								 'name' => 'WooCommerce Dropdown Widget Area',
								 'id' => 'woocommerce_dropdown',
								 'description' => 'This widget area should be used only for WooCommerce dropdown cart widget',
								 'before_widget' => '',
								 'after_widget' => '',
								 'before_title' => '',
								 'after_title' => '',
							));
							register_sidebar(array(
								 'name' => 'WooCommerce Sidebar Widget Area',
								 'id' => 'woocommerce_sidebar',
								 'description' => 'This widget area is used only for the shop sidebar and inner pages',
							 'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							 'after_widget' => '</section>',
							 'before_title' => '<h5>',
							 'after_title' => '</h5>',
							));		
					  }
						
						if(get_option('premiumwd_footer_widgets') == 'true') {
							if ( get_option('premiumwd_footer_widget_count') >= '1' ) { register_sidebar(array( 'name' => 'Footer Widget 1','id' => 'footer-widget-area-1', 'description' => "This area is used only for the footer widget", 'before_widget' => '<div id="%1$s" class="widget-container %2$s">','after_widget' => '</div>','before_title' => '<h4>','after_title' => '</h4>')); }
							if ( get_option('premiumwd_footer_widget_count') >= '2' ) { register_sidebar(array( 'name' => 'Footer Widget 2','id' => 'footer-widget-area-2', 'description' => "This area is used only for the footer widget", 'before_widget' => '<div id="%1$s" class="widget-container %2$s">','after_widget' => '</div>','before_title' => '<h4>','after_title' => '</h4>')); }
							if ( get_option('premiumwd_footer_widget_count') >= '3' ) { register_sidebar(array( 'name' => 'Footer Widget 3','id' => 'footer-widget-area-3', 'description' => "This area is used only for the footer widget", 'before_widget' => '<div id="%1$s" class="widget-container %2$s">','after_widget' => '</div>','before_title' => '<h4>','after_title' => '</h4>')); }
							if ( get_option('premiumwd_footer_widget_count') >= '4' ) { register_sidebar(array( 'name' => 'Footer Widget 4','id' => 'footer-widget-area-4', 'description' => "This area is used only for the footer widget", 'before_widget' => '<div id="%1$s" class="widget-container %2$s">','after_widget' => '</div>','before_title' => '<h4>','after_title' => '</h4>')); }
							}						
						}
						/** Register sidebars by running Mini_widgets_init() on the widgets_init hook. */
						add_action( 'widgets_init', 'Mini_widgets_init' );
