<?php 

						function ellion_widgets_init() {
						
							register_sidebar( array(
								'name' => __( 'Page Sidebar', 'ellion' ),
								'id' => 'sidebar-widget-area',
								'description' => __( 'This area should only be used for menu selected sidebar in theme options', 'ellion' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );
						if(get_option('premiumwd_blog_sidebar') == 'true') {							
							register_sidebar( array(
								'name' => __( 'Blog Widget Area', 'ellion' ),
								'id' => 'blog-widget-area',
								'description' => __( 'This area should only be used if you want to have a sidebar in your blog single pages', 'ellion' ),
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
							) );	
						}						
						if(get_option('premiumwd_footer_widgets') == 'true') {
							if ( get_option('premiumwd_footer_widget_count') >= '1' ) { register_sidebar(array( 'name' => 'Footer Widget 1','id' => 'footer-widget-area-1', 'description' => "This area is used only for the footer widget", 'before_widget' => '<div id="%1$s" class="widget-container %2$s">','after_widget' => '</div>','before_title' => '<h4>','after_title' => '</h4>')); }
							if ( get_option('premiumwd_footer_widget_count') >= '2' ) { register_sidebar(array( 'name' => 'Footer Widget 2','id' => 'footer-widget-area-2', 'description' => "This area is used only for the footer widget", 'before_widget' => '<div id="%1$s" class="widget-container %2$s">','after_widget' => '</div>','before_title' => '<h4>','after_title' => '</h4>')); }
							if ( get_option('premiumwd_footer_widget_count') >= '3' ) { register_sidebar(array( 'name' => 'Footer Widget 3','id' => 'footer-widget-area-3', 'description' => "This area is used only for the footer widget", 'before_widget' => '<div id="%1$s" class="widget-container %2$s">','after_widget' => '</div>','before_title' => '<h4>','after_title' => '</h4>')); }
							if ( get_option('premiumwd_footer_widget_count') >= '4' ) { register_sidebar(array( 'name' => 'Footer Widget 4','id' => 'footer-widget-area-4', 'description' => "This area is used only for the footer widget", 'before_widget' => '<div id="%1$s" class="widget-container %2$s">','after_widget' => '</div>','before_title' => '<h4>','after_title' => '</h4>')); }
							}						

						}
						/** Register sidebars by running ellion_widgets_init() on the widgets_init hook. */
						add_action( 'widgets_init', 'ellion_widgets_init' );
