<?php 

						function merchant_widgets_init() {
							register_sidebar( array(
								'name' => __( 'Blog Widget Area', 'Merchant' ),
								'id' => 'blog-widget-area',
								'description' => __( 'This area should only be used if you want to have a sidebar in your blog single pages', 'Merchant' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );												
							register_sidebar( array(
								'name' => __( 'Page Widget Area', 'Merchant' ),
								'id' => 'page-widget-area',
								'description' => __( 'This area is used only for the page area sidebar', 'Merchant' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );
							register_sidebar( array(
								'name' => __( 'Contact Widget Area', 'Merchant' ),
								'id' => 'contact-widget-area',
								'description' => __( 'This area is used only for the contact page sidebar', 'Merchant' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );					

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
						
						}
						/** Register sidebars by running Merchant_widgets_init() on the widgets_init hook. */
						add_action( 'widgets_init', 'merchant_widgets_init' );
