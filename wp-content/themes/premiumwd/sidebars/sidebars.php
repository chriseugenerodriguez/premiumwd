<?php 

//Function for widget sidebars

if ( function_exists('register_sidebar') )
    register_sidebars(1,array(
	    'name' => 'Header Page',
        'before_widget' => '<div class="widget-box clearfix %1$s">',
        'after_widget' => '</div>',
    ));

	
if ( function_exists('register_sidebar') )
    register_sidebars(1,array(
	    'name' => 'Blog Page',
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
    ));
if ( function_exists('register_sidebar') )
    register_sidebars(1,array(
	    'name' => 'Contact Page',
								'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
								'after_widget' => '</section>',
								'before_title' => '<h5>',
								'after_title' => '</h5>',
    ));


if ( function_exists('register_sidebar') )
    register_sidebars(1,array(
	    'name' => 'Footer Menu',
								'before_widget' => '<section id="%1$s" class="widget columns two">',
								'after_widget' => '</section>',
								'before_title' => '<h3>',
								'after_title' => '</h3>',
    ));	
if ( function_exists('register_sidebar') )
    register_sidebars(1,array(
	    'name' => 'Single Post',
								'before_widget' => '<section id="%1$s" class="widget">',
								'after_widget' => '</section>',
								'before_title' => '<h3>',
								'after_title' => '</h3>',
    ));	
?>
