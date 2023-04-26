<?php

	function portfolio_masonry_init() {
		if ( is_home() || is_page_template( 'portfolio-masonry.php' ) || is_page_template('portfolio-gallery.php') || is_page_template('portfolio-standard.php') ) {	

			//MASONRY INIT
			wp_enqueue_style('masonry', get_template_directory_uri() . '/includes/portfolio/css/masonry.css', '', 'all');			
			wp_enqueue_script('jquery-masonry-min', get_template_directory_uri() . '/includes/portfolio/js/isotope.min.js', array( 'jquery' ) );
		 }
	}
	add_action('wp_enqueue_scripts','portfolio_masonry_init' );

	function portfolio_plugin_init() {
		if ( is_singular( 'portfolio' ) || is_page_template('portfolio-gallery.php')) {	

			//PORTFOLIO STYLESHEETS
			wp_enqueue_style('plugins', get_template_directory_uri() . '/includes/portfolio/css/plugins.css', '', 'all');			
			wp_enqueue_script('portfolio', get_template_directory_uri() . '/includes/portfolio/js/plugins.js', array('jquery'));	
		}
	}
	add_action('wp_enqueue_scripts','portfolio_plugin_init' );

	//*Gallery shortcode +fancybox
	function gallery_portfolio_sc( $atts, $content = null ) {
		 static $output, $args;
	  $output .= "<div class='flexslider' style='margin-bottom:20px;'><ul class='slides'>";
	  $attachments = get_posts( $args );
	  $image_url = gallery_first_image(); if($image_url) { foreach($image_url as $i) :
		  $output .= "<li>";
		  if (get_option('premiumwd_portfolio_lightbox','true')=='true'): 
		  $output .= "<a class='fancybox' rel='gallery1' href='".$i."' title='". get_the_title()."'>";
		  endif;
		  $output .= "<img width='100%' height='450px' src='".$i."' />";
		  if (get_option('premiumwd_portfolio_lightbox','true')=='true'): 
		  $output .= "</a>";
		  endif;
		  $output .= "</li>";  
		  endforeach; }
		  $output .= " </ul></div>";
		  return $output;
		  }
	add_shortcode( 'gallery-portfolio' , 'gallery_portfolio_sc' );
	
	function slider_portfolio_sc( $atts, $content = null ) {
		 static $output, $args;
		 $count = 1;
		 global $post;
		 $groups = get_post_meta( $post->ID, 'portfolio_repeat_group', true );
		 
	  $output .= "<script src='http://a.vimeocdn.com/js/froogaloop2.min.js'></script><div class='flexslider' style='margin-bottom:20px;'><ul class='slides'>";
	   foreach($groups as $g) :
	   		if(!empty($g['image']) && empty($g['embed'])){
			  $output .= "<li>";
			  if (get_option('premiumwd_portfolio_lightbox','true')=='true'): 
			  $output .= "<a class='fancybox' rel='gallery1' href='".$g['image']."' title='". get_the_title()."'>";
			  endif;
			  $output .= "<img width='100%' height='450px' src='".$g['image']."' />";
			  if (get_option('premiumwd_portfolio_lightbox','true')=='true'): 
			  $output .= "</a>";
			  endif;
			  $output .= "</li>";  
			} else if(!empty($g['embed']) && empty($g['image']) ) {
			  $output .= "<li>";
			  $output .= "<iframe id='video".$count."' height='auto' width='100%' src='" . $g['embed']."?api=1'></iframe>";
			  $output .= "</li>";  
			$count++;
			} else if(!empty($g['embed']) && !empty($g['image'])){
			  $output .= "<li>";
			  if (get_option('premiumwd_portfolio_lightbox','true')=='true'): 
			  $output .= "<a class='fancybox' rel='gallery1' href='".$g['image']."' title='". get_the_title()."'>";
			  endif;
			  $output .= "<img width='100%' height='450px' src='".$g['image']."' />";
			  if (get_option('premiumwd_portfolio_lightbox','true')=='true'): 
			  $output .= "</a>";
			  endif;
			  $output .= "</li>";  
			  
			  $output .= "<li>";
			  $output .= '<iframe id="video'.$count.'" height="auto" width="100%" src="' . $g['embed'].'?api=1"></iframe>';
			  $output .= "</li>";  
				$count++;
			}
		  endforeach; 

		  $output .= " </ul></div>";
		  return $output;
		  }
	add_shortcode( 'slider-portfolio' , 'slider_portfolio_sc' );


// Add the Portfolio Dynamic Content Meta Box
function wpb_initialize_cmb_meta_boxes() {
	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once (TEMPLATEPATH . '/includes/portfolio/meta/init.php');
}

add_action( 'init', 'wpb_initialize_cmb_meta_boxes', 9999 );

//Add Meta Boxes
function portfolio_metaboxes( $meta_boxes ) {
	$post_id = '';
	if (isset($_GET['post'])) {
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	}
	$page_template = get_post_meta( $post_id, '_wp_page_template', true );	 
	$prefix = 'portfolio_'; // Prefix for all fields

	$meta_boxes[] = array(
		'id' => 'portfolio_meta',
		'title' => 'Portfolio Options',
		'pages' => array('portfolio'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(	
				array(
					'name'    => 'Image Size',
					'desc'    => 'Select the size of the image (only used in masonry and index).',
					'id'      => $prefix . 'custom_select',
					'type'    => 'select',
					'options' => array(
						'tall' => __( 'tall (232x464)', 'cmb' ),
						'small'   => __( 'small (232x232)', 'cmb' ),
						'wide' => __( 'wide (464x232)', 'cmb' ),
						'large'   => __( 'large (464x464)', 'cmb' ),
					),
					'default' => 'small',
				),		
			  array(
				  'name'    => 'Layout Type',
				  'desc'    => 'Select layout for media',
				  'id'      => $prefix . 'layout_select',
				  'type'    => 'select',
				  'options' => array(
					  'wide' => __( 'Wide', 'cmb' ),
					  'small'   => __( 'Small', 'cmb' ),
					  'wide_gallery' => __( 'Wide Gallery', 'cmb' ),
					  'small_gallery'   => __( 'Small Gallery', 'cmb' ),

				  ),
				  'default' => 'wide',
			  ),		
			array(
				'id'          => $prefix . 'repeat_group',
				'type'        => 'group',
				'description' => __( 'Import Image or Video (can not mix)', 'cmb' ),
				'options'     => array(
					'group_title'   => __( 'Media {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
					'add_button'    => __( 'Add More Media', 'cmb' ),
					'remove_button' => __( 'Remove Media', 'cmb' ),
					'sortable'      => true, // beta
				),
				// Fields array works the same, except id's only need to be unique for this group. Prefix is not needed.
				'fields'      => array(
					array(
						'name' => 'Image',
						'id'   => 'image',
						'type' => 'file',
					),
					array(
						'name' => 'oEmbed',
						'desc' => 'Enter a youtube, vimeo, or custom URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
						'id' => 'embed',
						'type' => 'oembed',
					),
				),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'portfolio_metaboxes' );


//Add Meta Boxes

	function columns_metaboxes( $meta_boxes ) {
		$post_id = '';
		if (isset($_GET['post'])) {
			$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		}
		$page_template = get_post_meta( $post_id, '_wp_page_template', true );
		if ( $page_template == 'portfolio-columns.php' || $page_template == 'portfolio-columns-text.php' ) {	
		$prefix = 'columns'; // Prefix for all fields
		$meta_boxes[] = array(
			'id' => 'portfolio_columns',
			'title' => 'Portfolio Options',
			'pages' => array('page'), // post type
			'context' => 'normal',
			'priority' => 'high',
			'show_names' => true, // Show field names on the left
			'fields' => array(			
					array(
					'name'    => 'Number of Columns',
					'desc'    => 'Select # of Columns for portfolio layout',
					'id'      => $prefix . 'layout_select',
					'type'    => 'select',
					'options' => array(
						'2' => __( '2', 'cmb' ),
						'3'   => __( '3', 'cmb' ),
						'4' => __( '4', 'cmb' ),
						'5'   => __( '5', 'cmb' ),
						'6'   => __( '6', 'cmb' ),
					),
					'default' => '4',
				),
			),
		);
			 
		}
		return $meta_boxes;
		}
	add_filter( 'cmb_meta_boxes', 'columns_metaboxes' );      


if ( ! class_exists( 'Portfolio_Post_Type' ) ) :
class Portfolio_Post_Type
{
	function __construct()
	{	
		// PORTFOLIO THUMBNAILS		
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'portfolio-single', 690, 650 ); //650 pixels wide & 650 height
		add_image_size( 'portfolio-default', '500', '500', true ); //500 pixels wide & 500 height
		add_image_size( 'portfolio-wide', '1000', '500', true ); //1000 pixels wide & 500 height
		add_image_size( 'portfolio-large', '1000', '1000', true ); //1000 pixels wide & 1000 height
		add_image_size( 'portfolio-tall', '500', '1000', true ); //500 pixels wide & 1000 height
		add_image_size( 'shortcode-project', 302, 270, true ); // 302 pixels wide & 270 height
		add_image_size( 'shortcode-post', 210, 150, true ); // 210 pixels wide & 150 height

		add_action( 'init', array( &$this, 'portfolio_init' ) );
		add_action( 'manage_posts_custom_column', array( &$this, 'display_thumbnail' ), 10, 1 );
		add_action( 'restrict_manage_posts', array( &$this, 'add_taxonomy_filters' ) );
		add_action( 'right_now_content_table_end', array( &$this, 'add_portfolio_counts' ) );
		add_action( 'admin_head', array( &$this, 'custom_post_type_icon' ) );
		add_filter( 'manage_edit-portfolio_columns', array( &$this, 'add_thumbnail_column'), 10, 1 );
	
	}
	
	/*--------------------------------------------------------------------*/
	/*	FLUSH REWRITE RULES
	/*--------------------------------------------------------------------*/
	function plugin_activation() {
		$this->portfolio_init();
		flush_rewrite_rules();
	}
	
	function portfolio_init() {
	
		// REGISTER THE POST TYPE
		$labels = array(
			'name' 				 => __( 'Portfolio', 'premiumwd' ),
			'singular_name' 	 => __( 'Portfolio Item', 'premiumwd' ),
			'add_new' 			 => __( 'Add New', 'premiumwd' ),
			'add_new_item'		 => __( 'Add New Portfolio', 'premiumwd' ),
			'edit_item' 		 => __( 'Edit Portfolio', 'premiumwd' ),
			'new_item' 			 => __( 'Add New', 'premiumwd' ),
			'view_item' 		 => __( 'View Portfolio', 'premiumwd' ),
			'search_items' 		 => __( 'Search Portfolio', 'premiumwd' ),
			'not_found' 		 => __( 'No portfolio items found', 'premiumwd' ),
			'not_found_in_trash' => __( 'No portfolio items found in trash', 'premiumwd' )
		);
		
		$args = array(
	    	'labels' 			=> $labels,
	    	'public' 			=> true,
			'supports' 			=> array( 'title', 'editor', 'thumbnail', 'comments',),
			'capability_type' 	=> 'post',
			'rewrite' 			=> array("slug" => "portfolio"),
			'menu_position' 	=> 5,
			'has_archive' 		=> false
		);
		
		$args = apply_filters('args', $args);

		register_post_type( 'portfolio', $args );
		
		
		// REGISTER TAGS
		$taxonomy_portfolio_tag_labels = array(
			'name' 							=> __( 'Portfolio Tags', 'premiumwd' ),
			'singular_name' 				=> __( 'Portfolio Tag', 'premiumwd' ),
			'search_items' 					=> __( 'Search Portfolio Tags', 'premiumwd' ),
			'popular_items' 				=> __( 'Popular Portfolio Tags', 'premiumwd' ),
			'all_items' 					=> __( 'All Portfolio Tags', 'premiumwd' ),
			'parent_item' 					=> __( 'Parent Portfolio Tag', 'premiumwd' ),
			'parent_item_colon' 			=> __( 'Parent Portfolio Tag:', 'premiumwd' ),
			'edit_item' 					=> __( 'Edit Portfolio Tag', 'premiumwd' ),
			'update_item' 					=> __( 'Update Portfolio Tag', 'premiumwd' ),
			'add_new_item' 					=> __( 'Add New Portfolio Tag', 'premiumwd' ),
			'new_item_name' 				=> __( 'New Portfolio Tag Name', 'premiumwd' ),
			'separate_items_with_commas' 	=> __( 'Separate portfolio tags with commas', 'premiumwd' ),
			'add_or_remove_items' 			=> __( 'Add or remove portfolio tags', 'premiumwd' ),
			'choose_from_most_used' 		=> __( 'Choose from the most used portfolio tags', 'premiumwd' ),
			'menu_name' 					=> __( 'Portfolio Tags', 'premiumwd' )
		);
		
		$taxonomy_portfolio_tag_args = array(
			'labels' => $taxonomy_portfolio_tag_labels,
			'public' => true,
			'show_in_nav_menus' => true,
			'show_ui' => true,
			'show_tagcloud' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'portfolio_tag' ),
			'show_admin_column' => true,
			'query_var' => true
		);
		
		register_taxonomy( 'portfolio_tag', array( 'portfolio' ), $taxonomy_portfolio_tag_args );
		
		
		// REGISTER CATEGORIES
	    $taxonomy_portfolio_category_labels = array(
			'name' 							=> __( 'Portfolio Categories', 'premiumwd' ),
			'singular_name' 				=> __( 'Portfolio Category', 'premiumwd' ),
			'search_items' 					=> __( 'Search Portfolio Categories', 'premiumwd' ),
			'popular_items'					=> __( 'Popular Portfolio Categories', 'premiumwd' ),
			'all_items' 					=> __( 'All Portfolio Categories', 'premiumwd' ),
			'parent_item' 					=> __( 'Parent Portfolio Category', 'premiumwd' ),
			'parent_item_colon' 			=> __( 'Parent Portfolio Category:', 'premiumwd' ),
			'edit_item' 					=> __( 'Edit Portfolio Category', 'premiumwd' ),
			'update_item' 					=> __( 'Update Portfolio Category', 'premiumwd' ),
			'add_new_item' 					=> __( 'Add New Portfolio Category', 'premiumwd' ),
			'new_item_name' 				=> __( 'New Portfolio Category Name', 'premiumwd' ),
			'separate_items_with_commas' 	=> __( 'Separate portfolio categories with commas', 'premiumwd' ),
			'add_or_remove_items' 			=> __( 'Add or remove portfolio categories', 'premiumwd' ),
			'choose_from_most_used' 		=> __( 'Choose from the most used portfolio categories', 'premiumwd' ),
			'menu_name' 					=> __( 'Portfolio Categories', 'premiumwd' ),
	    );
		
	    $taxonomy_portfolio_category_args = array(
			'labels' 			=> $taxonomy_portfolio_category_labels,
			'public' 			=> true,
			'show_in_nav_menus' => true,
			'show_ui' 			=> true,
			'show_admin_column' => true,
			'show_tagcloud'		=> true,
			'hierarchical' 		=> true,
			'rewrite' 			=> array( 'slug' => 'portfolio_category' ),
			'query_var' 		=> true,
	    );
		
	    register_taxonomy( 'portfolio_category', array( 'portfolio' ), $taxonomy_portfolio_category_args );
		
	}

	
	/*===================================================================*/
	/* ADD THUMBNAIL COLUMN
	/*===================================================================*/
	function add_thumbnail_column( $columns )
	{
		$column_thumb = array( 'thumbnail' => __('Thumbnail','bean' ) );
		$columns = array_slice( $columns, 0, 2, true ) + $column_thumb + array_slice( $columns, 1, NULL, true );
		return $columns;
	}

	function display_thumbnail( $column )
	{
		global $post;
		switch ( $column ) {
			case 'thumbnail':
				echo get_the_post_thumbnail( $post->ID, array(35, 35) );
				break;
		}
	}




	/*===================================================================*/
	/* ADD TAXONOMY FILTERS TO THE ADMIN PAGE
	/*===================================================================*/
	function add_taxonomy_filters()
	{
		global $typenow;

		// USE TAXONOMY NAME OR SLUG
		$taxonomies = array( 'portfolio_category', 'portfolio_tag' );

	 	// POST TYPE FOR THE FILTER
		if ( $typenow == 'portfolio' )
		{

			foreach ( $taxonomies as $tax_slug ) {
				$current_tax_slug = isset( $_GET[$tax_slug] ) ? $_GET[$tax_slug] : false;
				$tax_obj = get_taxonomy( $tax_slug );
				$tax_name = $tax_obj->labels->name;
				$terms = get_terms($tax_slug);
				if ( count( $terms ) > 0) {
					echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
					echo "<option value=''>$tax_name</option>";
					foreach ( $terms as $term ) {
						echo '<option value=' . $term->slug, $current_tax_slug == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>';
					}
					echo "</select>";
				}
			}
		}
	}




	/*===================================================================*/
	/* ADD COUNT TO "RIGHT NOW" DASHBOARD WIDGET
	/*===================================================================*/
	function add_portfolio_counts() {
	        if ( ! post_type_exists( 'portfolio' ) )
	        {
	             return;
	        }

	        $num_posts = wp_count_posts( 'portfolio' );
	        $num = number_format_i18n( $num_posts->publish );
	        $text = _n( 'Portfolio Item', 'Portfolio Items', intval($num_posts->publish) );
	        if ( current_user_can( 'edit_posts' ) ) {
	            $num = "<a href='edit.php?post_type=portfolio'>$num</a>";
	            $text = "<a href='edit.php?post_type=portfolio'>$text</a>";
	        }
	        echo '<td class="first b b-portfolio">' . $num . '</td>';
	        echo '<td class="t portfolio">' . $text . '</td>';
	        echo '</tr>';

	        if ($num_posts->pending > 0)
	        {
	            $num = number_format_i18n( $num_posts->pending );
	            $text = _n( 'Portfolio Item Pending', 'Portfolio Items Pending', intval($num_posts->pending) );
	            if ( current_user_can( 'edit_posts' ) ) {
	                $num = "<a href='edit.php?post_status=pending&post_type=portfolio'>$num</a>";
	                $text = "<a href='edit.php?post_status=pending&post_type=portfolio'>$text</a>";
	            }
	            echo '<td class="first b b-portfolio">' . $num . '</td>';
	            echo '<td class="t portfolio">' . $text . '</td>';

	            echo '</tr>';
	        }
	}


	/*===================================================================*/
	/* CUSTOM ICON FOR POST TYPE
	/*===================================================================*/
	function custom_post_type_icon()
	{ ?>
<style type="text/css" media="screen">
#adminmenu #menu-posts-portfolio div.wp-menu-image:before {
	content: '\f322';
}
</style>
<?php
	}
} //END class Portfolio_Post_Type

new Portfolio_Post_Type;

endif;

