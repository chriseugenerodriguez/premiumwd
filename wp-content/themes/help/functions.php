<?php

function customize_og_author_metatag( $metatags ) {
    unset($metatags[1]);
    return $metatags;

}
add_filter( 'amt_schemaorg_metadata_head', 'customize_og_author_metatag', 10, 1 );

// WP ENQUEUE SCRIPTS / STYLES
function  main_scripts() {	

	wp_register_style( 'stylesheet', get_stylesheet_directory_uri().'/style.css', '', 'all');
	wp_register_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', '', 'all');
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/css/font-awesome.css', '', 'all');

	wp_enqueue_style('stylesheet');
	wp_enqueue_style('responsive');
	wp_enqueue_style('font-awesome');	

	wp_register_script( 'jquery-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ) );
	wp_register_script( 'jquery-init', get_template_directory_uri() . '/assets/js/init.js', array( 'jquery' ) );

	wp_enqueue_script( 'jquery-plugins' );
	wp_enqueue_script( 'jquery-init' );
}
add_action( 'wp_head', 'main_scripts' );

// Enable shortcode/
add_filter('the_content', 'do_shortcode');
add_filter('the_excerpt', 'do_shortcode');

// add ie conditional html5 shim to header
function add_ie_html5_shim () {
	echo '<!--[if lt IE 9]>';
	echo '<script src="'. get_template_directory_uri() .'/assets/js/html5.js"></script>';
	echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');	

// add ie 6-8 conditional selectivizr to header
function add_ie_selectivizr () {
	echo '<!--[if (gte IE 6)&(lte IE 8)]>';
	echo '<script src="'. get_template_directory_uri() .'/assets/js/selectivizr-min.js"></script>';
	echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_selectivizr');	

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'premiumwd' ),
));

// Enable Post Thumbnail 
add_theme_support( 'post-thumbnails' );

// Add Image Size 
add_image_size( 'attachment-shop_catalog',  690, 1109, true ); 

// Custom Excerpt
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
		   global $post;
		return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Remove WordPress V.
function wpbeginner_remove_version() {
	return '';
}
add_filter('the_generator', 'wpbeginner_remove_version');

// Remove Query Strings
function _remove_script_version( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 ); 

if ( function_exists('register_sidebar') ) {
    register_sidebars(1,array(
		'name' => 'Docs & FAQ',
		'before_widget' => '<div class="widget-box clearfix %1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));	
}

// Defer parsing of JavaScript
function defer_parsing_of_js ( $url ) {
	if ( FALSE === strpos( $url, '.js' ) ) {
		return $url;
	}
	if ( strpos( $url, 'jquery.js' ) ) {
		return $url;
	}
	return "$url' defer ";
}
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );

function support_search_func($atts , $content = ""){

	ob_start();

	?>
<form id="search-form" action="<?php echo site_url(); ?>" class="search animated fadeInUp" role="search" method="get" action="#" accept-charset="UTF-8">

<input type="hidden" name="action" value="support_search" />
<input type="hidden" name="url" value="<?php echo admin_url('admin-ajax.php'); ?>" id="url" />
<input type="hidden" name="post_type" value="page" />
<input type="hidden" name="subpage" value="17" id="subpage" />
<div class="search-box">
  <input id="query" class="query" type="search" autocomplete="off" placeholder="Search" name="s">
  <input id="category" class="category" type="text" autocomplete="off" readonly="" value="Docs & FAQ" name="category">
  <i class="fa fa-search"></i> <i class="fa fa-angle-down"></i>
  <ul id="suggestions" class="animated fadeIn">
  </ul>
</div>
<div class="scroll-bar">
  <div class="overflow has-scrollbar">
    <div class="screen">
      <ul class="subpage">
        <li data-value="17">
          <label>Docs & FAQ</label>
        </li>
        <li data-value="1467">
          <label>Video Tutorials</label>
        </li>
        <li data-value="3362">
          <label>Questions</label>
        </li>
      </ul>
    </div>
  </div>
</div>
</form>
<?php

	$content .= ob_get_contents();
	ob_get_clean();
	return $content;
}
add_shortcode('support-search', 'support_search_func');


add_action('wp_ajax_support_search', 'support_search_callback');
add_action('wp_ajax_nopriv_support_search', 'support_search_callback');

add_action('init', function(){
	if(isset($_GET['method'])  && $_GET['method'] = 'print'){
		global $wpdb;
		$results = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."postmeta WHERE post_id  = 4001");
		echo '<pre>';
		print_r($results);
		exit;
		$args = array('post_type' => 'dwqa-question', 'post_parent' => 2304 , 'posts_per_page' => -1, 's' => 'affil');
		query_posts($args);
		while(have_posts()){
			the_post();
			$p = get_post(get_the_ID());
			the_title(); echo ''.$p->post_parent;
			echo '<br />';
		}
		exit;
	}
});


function support_search_callback(){
	global $wpdb;
	$s = isset($_GET['s'])?$_GET['s']:'';
	$subpages = isset($_GET['subpage'])?$_GET['subpage']:'';
	$post_type = isset($_GET['post_type'])?$_GET['post_type']:'page';
	$args = array('posts_per_page' => 5 , 'post_status' => 'publish');

	if(!empty($s)) 
		$args['s'] = $s;

	if($post_type != 'page') {
		$args['post_type'] = $post_type;
	}
	else { 
		if(!empty($subpages)) 
		{
			$pagesArray = get_pages(array('child_of' => $subpages, 'hierarchical' => 0));
			$grandChildArray = array();
			$grandChildArray[] = $subpages;

			foreach ($pagesArray as $grandchild) {
				$grandChildArray[] = $grandchild->ID;
			}
			$args['post_parent__in'] = $grandChildArray;
		}
		$args['post_type'] = 'page'; 
	}
	//	$searches = getSearchResults($s , $subpages);

	if($post_type == 'dwqa-question'){
		$args = array(
			'action' => 'support_search',
			'post_type' => 'dwqa-question',
			's' => $s,
		);

		$query_string = http_build_query($args);
		$response = wp_remote_get("http://questions.premiumwd.com/wp-admin/admin-ajax.php?".$query_string);
		if(!is_wp_error($response)){
			echo $response['body'];
		} 
		else {
			echo '<li>No Search Matched</li>';
		}
	} 

	else {
		remove_filter('pre_get_posts','SearchFilter');
		$searches = new WP_Query($args);

		if($searches->have_posts()){
			while($searches->have_posts()): $searches->the_post();
				if($post_type == 'video') {
					$p = get_post(get_the_ID());
					echo '<li><a href="/wordpress-videos/'.get_permalink($subpages).'#'.$p->post_name.'">'.get_the_title().'</a></li>';
				} 
				else{
					echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
				}
			endwhile;
		} 
		else {
			echo '<li>No Search Matched</li>';
		}
	}
	exit;
}

function getSearchResults($s , $subpages){
	global $wpdb;
	$query = "SELECT ID FROM ".$wpdb->prefix."posts WHERE post_type = 'page' AND post_status = 'publish' ";
	$query .= " AND post_title COLLATE UTF8_GENERAL_CI LIKE '%".$s."%'"; 
	$query .= " AND post_parent = ". $subpages; 
	$searches = $wpdb->get_col($query);
	$results = array();

	foreach($searches as $p){
		array_push($results, $p);
		$new_array =  getSearchResults($s , $p);

		foreach($new_array as $a){
			array_push($results, $a);
		}
	}
	return $results;
}
add_shortcode('theme-docs-search', 'theme_docs_search_func');


function theme_docs_search_func($atts , $content = ""){

	/* Changes added by Shariq start here*/	
	global $post;
    $tempPostID = $post->ID;

	/* Changes added by Shariq end here */
	ob_start();

	?>
<form id="search-form" action="<?php echo site_url(); ?>" class="search animated fadeInUp theme-docs" role="search" method="get" action="#" accept-charset="UTF-8">
<input type="hidden" name="action" value="support_search" />
<input type="hidden" name="url" value="<?php echo admin_url('admin-ajax.php'); ?>" id="url" />
<input type="hidden" name="post_type" value="page" />
<input type="hidden" name="subpage" value="<?php echo $tempPostID; ?>" id="subpage" />
<div class="search-box">
  <input id="query" class="query" type="search" autocomplete="off" placeholder="Search" name="s" style="width:100%">
  
  <!--<input id="category" class="category" type="text" autocomplete="off" readonly="" value="Select a Category" name="category">

  <i class="fa fa-angle-down"></i>--> <i class="fa fa-search"></i>
  <ul id="suggestions">
  </ul>
</div>

<!--<div class="scroll-bar">
  <div class="overflow">
    <div class="screen">
      <ul class="subpage">

        <?php 	global $post;  	
		$pages= get_pages(array( 		'child_of' => $post->ID, 		'depth' => 1, 		'parent' => $post->ID, 		'hierarchical' => 0, 	 	)); 	
		//$pages= get_pages(array( 		'child_of' => $post->ID, 'hierarchical' => 0));

	foreach($pages as $p){ 
	 	echo '<li data-value="'.$p->ID.'"><label>'.$p->post_title.'</label>';

		if($p->ID == 3909){
			$subpages= get_pages(array( 		'child_of' => $p->ID, 		'depth' => 1, 		'parent' => $p->ID, 		'hierarchical' => 0, 	 	)); 
			echo '<ul class="subpage-submenu">';

			foreach($subpages as $sp){
				echo '<li data-value="'.$sp->ID.'"><label>'.$sp->post_title.'</label></li>';
			}

			echo '</ul>';
		}

		echo '</li>'; 	
	}

	 ?>



      </ul>
    </div>
  </div>
</div>-->
</form>
<?php
	$content .= ob_get_contents();
	ob_get_clean();
	return $content;
}



// Docs Search
function SearchFilter($query) {
	if(isset($_GET['action']) && $_GET['action'] == 'support_search'){ 

		if ($query->is_search ) {
			$post_type = isset($_REQUEST['post_type'])?$_REQUEST['post_type']:'post';
			$subpages = isset($_REQUEST['subpage'])?$_REQUEST['subpage']:0;

			if($post_type != 'page' && $post_type != 'post') 
				$query->set('post_type' , $post_type);

			else if($subpages > 0) {
				 $query->query_vars['post_parent__in'] =  array($subpages); 
				 $query->set('post_type' , 'page'); 
			}		
		}
	}

	return $query;

}
add_filter('pre_get_posts','SearchFilter');

function remove_menus(){
	remove_menu_page( 'edit.php' );                   //Posts
	remove_menu_page( 'edit-comments.php' );          //Comments

}
add_action( 'admin_menu', 'remove_menus' );
add_action( 'init', 'register_cpt_video' );

function register_cpt_video() {
    $labels = array(
    'name' => _x( 'Videos', 'video' ),
    'singular_name' => _x( 'Video', 'video' ),
    'add_new' => _x( 'Add New', 'video' ),
    'add_new_item' => _x( 'Add New Video', 'video' ),
    'edit_item' => _x( 'Edit Video', 'video' ),
    'new_item' => _x( 'New Video', 'video' ),
    'view_item' => _x( 'View Video', 'video' ),
    'search_items' => _x( 'Search Videos', 'video' ),
    'not_found' => _x( 'No videos found', 'video' ),
    'not_found_in_trash' => _x( 'No videos found in Trash', 'video' ),
    'parent_item_colon' => _x( 'Parent Video:', 'video' ),
    'menu_name' => _x( 'Videos', 'video' ),
    );

    $args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'tags' ),
    'public' => true,
    'show_ui' => true,
	'menu_icon' => 'dashicons-video-alt3',
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => false,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
    );

    // Custom taxonomy for Project Tags  
    register_taxonomy('tagvideo',array('video'), array(  
		'rewrite' => array( 'slug' => 'tag-video' ),  
    ));  

    register_post_type( 'video', $args );
} 