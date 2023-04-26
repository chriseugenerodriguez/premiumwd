<?php 

						function stack_widgets_init() {
						
							register_sidebar( array(
								'name' => __( 'Main Navigation Area', 'stack' ),
								'id' => 'sidebar-widget-area',
								'description' => __( 'This area should only be used if you want to use a custom menu in your sidebar', 'stack' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );
							register_sidebar( array(
								'name' => __( 'Portfolio Widget Area', 'stack' ),
								'id' => 'portfolio-widget-area',
								'description' => __( 'This area should only be used if you want to have a sidebar in your portfolio single pages', 'stack' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );
							register_sidebar( array(
								'name' => __( 'Blog Widget Area', 'stack' ),
								'id' => 'blog-widget-area',
								'description' => __( 'This area should only be used if you want to have a sidebar in your blog single pages', 'stack' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );												
							register_sidebar( array(
								'name' => __( 'Page Widget Area', 'stack' ),
								'id' => 'page-widget-area',
								'description' => __( 'This area is used only for the page area sidebar', 'stack' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );
							register_sidebar( array(
								'name' => __( 'Contact Widget Area', 'stack' ),
								'id' => 'contact-widget-area',
								'description' => __( 'This area is used only for the contact page sidebar', 'stack' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );

						}
						/** Register sidebars by running stack_widgets_init() on the widgets_init hook. */
						add_action( 'widgets_init', 'stack_widgets_init' );
