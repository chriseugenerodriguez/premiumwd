<?php

	function portfolio_style(){
		wp_enqueue_style('masonry', get_template_directory_uri() . '/includes/portfolio/css/masonry.css', '', 'all');	
		wp_enqueue_style('portfolio', get_template_directory_uri() . '/includes/portfolio/css/portfolio.css', '', 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'portfolio_style' );


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
					'desc'    => 'Select the size of the image on portfolio pages.',
					'id'      => $prefix . 'image_size',
					'type'    => 'select',
					'options' => array(
						'item-w1 item-h2' => __( 'Tall', 'ellion' ),
						'item-w1 item-h1'   => __( 'Box', 'ellion' ),
						'item-w2 item-h1' => __( 'Wide', 'ellion' ),
						'item-w2 item-h2'   => __( 'Large', 'ellion' ),
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
				array(
					'name'    => 'Portfolio Type',
					'desc'    => 'Select the portfolio type on how you want your page to render.',
					'id'      => $prefix . 'type',
					'type'    => 'select',
					'options' => array(
						'side' => __( 'Side', 'ellion' ),
						'regular'   => __( 'Regular', 'ellion' ),
						'carousal' => __( 'Carousal', 'ellion' ),
						'full-screen'   => __( 'Full Screen', 'ellion' ),
					),
					'default' => 'side',
				),		
				array(
					'name'    => 'Side Alignment',
					'desc'    => 'For Side Alignment select left or right aligned.',
					'id'      => $prefix . 'align',
					'type'    => 'select',
					'options' => array(
						'left' => __( 'Left', 'ellion' ),
						'right'   => __( 'Right', 'ellion' ),
					),
					'default' => 'left',
				),	
				array(
					'name'    => 'Container Size',
					'desc'    => 'Select the width of your container for your layout, only for regular, side type layout.',
					'id'      => $prefix . 'container',
					'type'    => 'select',
					'options' => array(
						'full' => __( 'Full', 'ellion' ),
						'regular'   => __( 'Regular', 'ellion' ),
					),
					'default' => 'regular',
				),		
				array(
					'name'    => 'Share',
					'desc'    => 'Show social media icons.',
					'id'      => $prefix . 'share',
					'type'    => 'select',
					'options' => array(
						'true' => __( 'Yes', 'ellion' ),
						'false'   => __( 'No', 'ellion' ),
					),
					'default' => 'true',
				),				  		
				array(
					'name'    => 'Like',
					'desc'    => 'Show like button.',
					'id'      => $prefix . 'like',
					'type'    => 'select',
					'options' => array(
						'true' => __( 'Yes', 'ellion' ),
						'false'   => __( 'No', 'ellion' ),
					),
					'default' => 'true',
				),	
				array(
					'name'    => 'Sidebar Scroll',
					'desc'    => 'Scroll sidebar (only works on Side layout)',
					'id'      => $prefix . 'scroll_sidebar',
					'type'    => 'select',
					'options' => array(
						'true' => __( 'Yes', 'ellion' ),
						'false'   => __( 'No', 'ellion' ),
					),
					'default' => 'false',
				),	
				array(
					'name'    => 'Image Margin',
					'desc'    => 'Add margin to seperate your images between each other.',
					'id'      => $prefix . 'image_margin',
					'type'    => 'select',
					'options' => array(
						'true' => __( 'Yes', 'ellion' ),
						'false'   => __( 'No', 'ellion' ),
					),
					'default' => 'true',
				),	
				array(
					'name'    => 'Featured Image',
					'desc'    => 'Show featured image on portfolio single.',
					'id'      => $prefix . 'featured_image',
					'type'    => 'select',
					'options' => array(
						'true' => __( 'Yes', 'ellion' ),
						'false'   => __( 'No', 'ellion' ),
					),
					'default' => 'true',
				),
			  array(
				  'name'    => 'Project Description',
				  'desc'    => 'Describe your project. Seperated from main text',
				  'default' => '',
				  'id'      => $prefix . 'project_description',
				  'type'    => 'wysiwyg',
			  ),
			  array(
				  'name'    => 'Service Title',
				  'desc'    => 'Name the title of your services',
				  'default' => '',
				  'id'      => $prefix . 'services_title',
				  'type'    => 'text',
			  ),
			  array(
				  'name'    => 'Services',
				  'desc'    => 'Add services provided, seperate by comma',
				  'default' => '',
				  'id'      => $prefix . 'services',
				  'type'    => 'text',
			  ),
				array(
					'id'          => $prefix . 'links',
					'type'        => 'group',
					'description' => __( 'Add links for your portfolio', 'cmb' ),
					'options'     => array(
						'group_title'   => __( 'Link {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
						'add_button'    => __( 'Add More Links', 'cmb' ),
						'remove_button' => __( 'Remove Link', 'cmb' ),
						'sortable'      => true, // beta
					),
					// Fields array works the same, except id's only need to be unique for this group. Prefix is not needed.
					'fields'      => array(
					  array(
						  'name'    => 'Link Text',
						  'desc'    => 'Add text for project',
						  'default' => '',
						  'id'      => $prefix . 'text',
						  'type'    => 'text',
					  ),
					  array(
						  'name'    => 'Link',
						  'desc'    => 'Add url for project',
						  'default' => '',
						  'id'      => $prefix . 'url',
						  'type'    => 'text_url',
					  ),
					),
				),
	  					
			),
	);

	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'portfolio_metaboxes' );   




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
		add_action( 'manage_posts_custom_column', array( &$this, 'ellion_thumbnail' ), 10, 1 );
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
		$column_thumb = array( 'thumbnail' => __('Thumbnail', 'ellion' ) );
		$columns = array_slice( $columns, 0, 2, true ) + $column_thumb + array_slice( $columns, 1, NULL, true );
		return $columns;
	}

	function ellion_thumbnail( $column )
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
	        $text = _n( 'Portfolio Item', 'Portfolio Items', intval($num_posts->publish, 'ellion') );
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
	            $text = _n( 'Portfolio Item Pending', 'Portfolio Items Pending', intval($num_posts->pending, 'ellion') );
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


	function li_user_has_loved_post($user_id, $post_id) {
		$loved = get_user_option('li_user_loves', $user_id);
		if(is_array($loved) && in_array($post_id, $loved)) {
			return true; // user has loved post
		}
		return false; // user has not loved post
	}

	function li_store_loved_id_for_user($user_id, $post_id) {
		$loved = get_user_option('li_user_loves', $user_id);
		if(is_array($loved)) {
			$loved[] = $post_id;
		} else {
			$loved = array($post_id);
		}
		update_user_option($user_id, 'li_user_loves', $loved);
	}

	function li_mark_post_as_loved($post_id, $user_id) {
	
		// retrieve the love count for $post_id	
		$love_count = get_post_meta($post_id, '_li_love_count', true);
		if($love_count)
			$love_count = $love_count + 1;
		else
			$love_count = 1;
		
		if(update_post_meta($post_id, '_li_love_count', $love_count)) {	
			// store this post as loved for $user_id	
			li_store_loved_id_for_user($user_id, $post_id);
			return true;
		}
		return false;
	}
	
	function li_get_love_count($post_id) {
		$love_count = get_post_meta($post_id, '_li_love_count', true);
		if($love_count)
			return $love_count;
		return 0;
	}
	
	function li_process_love() {
		if ( isset( $_POST['item_id'] ) && wp_verify_nonce($_POST['love_it_nonce'], 'love-it-nonce') ) {
			if(li_mark_post_as_loved($_POST['item_id'], $_POST['user_id'])) {
				echo 'loved';
			} else {
				echo 'failed';
			}
		}
		die();
	}
	
	  function li_love_link($love_text = null, $loved_text = null) {
	  
		  global $user_ID, $post;	
		  // only show the link when user is logged in and on a singular page
	  
			  ob_start();		
			  // retrieve the total love count for this item
			  $love_count = li_get_love_count($post->ID);
			  
				  // $love_text = is_null($love_text) ? __( 'Like it', 'love_it' ) : $love_text;
				  // $loved_text = is_null($loved_text) ? __( 'You have liked this', 'love_it' ) : $loved_text;
				  
				  // only show the Love It link if the user has NOT previously loved this item
				  if( ! li_user_has_loved_post( $user_ID, get_the_ID() ) ) {
					  echo '<a class="love-it" data-post-id="' . get_the_ID() . '" data-user-id="' .  $user_ID . '"  data-lovecount="' . $love_count . '" ><span class="love-count"><span>' . $love_count . '</span> Likes</span></a>';
				  } else {
					  // show a message to users who have already loved this item
					  echo '<a class="love-it loved" data-lovecount="' . $love_count . '"><span class="love-count"><span>' . $love_count . '</span> Likes</span></a> ';
				  }
			  // append our "Love It" link to the item content.
			  $link = ob_get_clean();
			  return $link;
		  }
			
		
		// adds the Love It link and count to post/page content automatically
	function li_front_end_js() {
		 	wp_enqueue_script( 'love-it', get_template_directory_uri() . '/assets/js/love-it.js', array( 'jquery' ) );	
			wp_localize_script( 'love-it', 'love_it_vars', 
				array( 
					'ajaxurl' => admin_url( 'admin-ajax.php' ),
					'nonce' => wp_create_nonce('love-it-nonce'),
					'already_loved_message' => __('You have already liked this item.', 'love_it'),
					'error_message' => __('Sorry, there was a problem processing your request.', 'love_it')
				) 
			);	
	}
	add_action('wp_footer', 'li_front_end_js', 1);
	add_action('wp_ajax_love_it', 'li_process_love');
	add_action('wp_ajax_nopriv_love_it', 'li_process_love');
