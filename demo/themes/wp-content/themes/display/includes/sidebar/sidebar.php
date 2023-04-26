<?php 

						function display_widgets_init() {
						
							register_sidebar( array(
								'name' => __( 'Page Sidebar', 'display' ),
								'id' => 'sidebar-widget-area',
								'description' => __( 'This area should only be used for menu selected sidebar in theme options', 'display' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );
						}
						/** Register sidebars by running display_widgets_init() on the widgets_init hook. */
						add_action( 'widgets_init', 'display_widgets_init' );
