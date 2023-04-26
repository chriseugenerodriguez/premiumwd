<?php 

						function Adomo_widgets_init() {
						
							register_sidebar( array(
								'name' => __( 'Blog Widget Area', 'Adomo' ),
								'id' => 'blog-widget-area',
								'description' => __( 'This area should only be used if you want to have a sidebar in your blog single pages', 'Adomo' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );												
							register_sidebar( array(
								'name' => __( 'Page Widget Area', 'Adomo' ),
								'id' => 'page-widget-area',
								'description' => __( 'This area is used only for the page area sidebar', 'Adomo' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );
							register_sidebar( array(
								'name' => __( 'Contact Widget Area', 'Adomo' ),
								'id' => 'contact-widget-area',
								'description' => __( 'This area is used only for the contact page sidebar', 'Adomo' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );
						}
						/** Register sidebars by running Adomo_widgets_init() on the widgets_init hook. */
						add_action( 'widgets_init', 'Adomo_widgets_init' );
