<?php

	function portfolio_style(){
	wp_enqueue_style('masonry', get_template_directory_uri() . '/includes/portfolio/css/masonry.css', '', 'all');	
	}
	add_action( 'wp_enqueue_scripts', 'portfolio_style', 1 ); 
	
	function portfolio_masonry_init() {
			wp_enqueue_script('portfolio-plugins', get_template_directory_uri() . '/includes/portfolio/js/plugins.js', array( 'jquery' ) );
	}
	add_action('wp_footer','portfolio_masonry_init', 10 );




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
						'item-w1 item-h2' => __( 'Tall (600x900)', 'cmb' ),
						'item-w1 item-h1'   => __( 'Small (600x450)', 'cmb' ),
						'item-w2 item-h1' => __( 'Wide (1200x450)', 'cmb' ),
						'item-w2 item-h2'   => __( 'Large (1200x900)', 'cmb' ),
					),
					'default' => 'item-w1 item-h1',
				),		
			  array(
				  'name'    => 'Excerpt',
				  'desc'    => 'Write a short excerpt for project, leave blank if not used',
				  'default' => '',
				  'id'      => $prefix . 'layout_excerpt',
				  'type'    => 'text',
			  ),		
			),
	);

	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'portfolio_metaboxes' );   

function portfolio_title_metaboxes( $meta_boxes ) {
	$post_id = '';
	if (isset($_GET['post'])) {
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	}
	$page_template = get_post_meta( $post_id, '_wp_page_template', true );	 
	$prefix = 'page_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'title_options',
		'title' => 'Title Options',
		'pages' => array('portfolio'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(	
				array(
					'name' => 'Background Color',
					'id'   => $prefix . 'background_color',
					'type' => 'colorpicker',
					'default'  => '#F7F8FA',
					'repeatable' => false,
				),
				array(
						'name' => 'Background Image',
						'id' => $prefix . 'image',
						'type' => 'file',
						'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
				),    
				array(
					'name' => 'Parallax',
					'desc' => 'Background image scrolls with the page.',
					'id' => $prefix . 'parallax_checkbox',
					'type' => 'checkbox'
				),		
				array(
					'name' => 'Title Color',
					'id'   => $prefix . 'header_color',
					'type' => 'colorpicker',
					'default'  => '#333',
					'repeatable' => false,
				),
				array(
					'name' => 'Sub Header Color',
					'id'   => $prefix . 'sub_color',
					'type' => 'colorpicker',
					'default'  => '#ccc',
					'repeatable' => false,
				),
                                array(
					'name' => 'Min Height',
					'desc' => 'This is mainly used for transparent header section.',
					'id' => $prefix . 'height_checkbox',
				    'default' => '300',
				    'id'      => $prefix . 'height_heading',
				    'type'    => 'text',
				),	
			),
	);
	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'portfolio_title_metaboxes' );   

if ( ! class_exists( 'Portfolio_Post_Type' ) ) :
class Portfolio_Post_Type
{
	function __construct()
	{	
		// PORTFOLIO THUMBNAILS		
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'portfolio-small', '600', '450', true ); 
		add_image_size( 'portfolio-wide', '1200', '450', true ); 
		add_image_size( 'portfolio-large', '1200', '900', true ); 
		add_image_size( 'portfolio-tall', '600', '900', true ); 

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
			'add_new_item'		 => __( 'Add New', 'premiumwd' ),
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
			'supports' 			=> array( 'title', 'editor', 'thumbnail',),
			'capability_type' 	=> 'post',
			'rewrite' 			=> array("slug" => "portfolio"),
			'menu_position' 	=> 5,
			'has_archive' 		=> false
		);
		
		$args = apply_filters('args', $args);

		register_post_type( 'portfolio', $args );
		
		// REGISTER CATEGORIES
	    $taxonomy_portfolio_category_labels = array(
			'name' 						=> __( 'Categories', 'premiumwd' ),
			'singular_name' 				=> __( 'Portfolio Category', 'premiumwd' ),
			'search_items' 					=> __( 'Search Portfolio Categories', 'premiumwd' ),
			'popular_items'					=> __( 'Popular Portfolio Categories', 'premiumwd' ),
			'all_items' 					=> __( 'All Portfolio Categories', 'premiumwd' ),
			'parent_item' 					=> __( 'Parent Portfolio Category', 'premiumwd' ),
			'parent_item_colon' 				=> __( 'Parent Portfolio Category:', 'premiumwd' ),
			'edit_item' 					=> __( 'Edit Portfolio Category', 'premiumwd' ),
			'update_item' 					=> __( 'Update Portfolio Category', 'premiumwd' ),
			'add_new_item' 					=> __( 'Add New Portfolio Category', 'premiumwd' ),
			'new_item_name' 				=> __( 'New Portfolio Category Name', 'premiumwd' ),
			'separate_items_with_commas' 			=> __( 'Separate portfolio categories with commas', 'premiumwd' ),
			'add_or_remove_items' 				=> __( 'Add or remove portfolio categories', 'premiumwd' ),
			'choose_from_most_used' 			=> __( 'Choose from the most used portfolio categories', 'premiumwd' ),
			'menu_name' 					=> __( 'Categories', 'premiumwd' ),
	    );
		
	    $taxonomy_portfolio_category_args = array(
			'labels' 		=> $taxonomy_portfolio_category_labels,
			'public' 		=> true,
			'show_in_nav_menus' 	=> true,
			'show_ui' 		=> true,
			'show_admin_column' 	=> true,
			'show_tagcloud'		=> true,
			'hierarchical' 		=> true,
			'rewrite' 		=> array( 'slug' => 'portfolio_category' ),
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

