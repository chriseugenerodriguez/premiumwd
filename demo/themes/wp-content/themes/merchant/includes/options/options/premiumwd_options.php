<?php 

	global $fontArrays;	 	 
	$all_pages = get_pages();
	$page_options = array();
	$page_list = array();
	$page_list_footer = array();
	$checked_options = array();
	
	foreach ($all_pages as $page){
    $page_list[] = "premiumwd_nav_header_".$page->ID;
    $page_list_footer[] = "premiumwd_nav_footer_".$page->ID;
    $page_title = get_page($page->ID);
    $page_options[] = $page_title->post_title;
    $checked_options[] = "not";
	}

	$options = array(    

	///////////////////////////////////////
	// General Settings Open
	///////////////////////////////////////	
    	array(
        "type" => "section",
        "icon" => "fa fa-cog",
        "title" => "General",
        "id" => "general",
        "expanded" => "true"
		 ),

     	array(
        "section" => "general",
        "type" => "heading",
        "title" => "Main Settings",
        "id" => "general-visual"
   		 ),

    	array(
        "under_section" => "general-visual",
        "type" => "image",
        "placeholder" => "http://example.com/logo.png",
        "name" => "Logo",
        "id" => "premiumwd_logo",
        "desc" => "Paste the URL to your logo, or upload it here. (max: 35x260)",
        "default" => ""),
    
    	array(
        "under_section" => "general-visual",
        "type" => "image",
        "placeholder" => "http://example.com/favicon.png",
        "name" => "Favicon",
        "id" => "premiumwd_favicon",
        "desc" => "Paste the URL to your favicon, or upload it here (resolution of 32x32 or 16x16)",
        "default" => ""),
		   
    	array(
        "under_section" => "general-visual",
        "type" => "text",
        "name" => "Title separator",
        "id" => "premiumwd_title_sep",
        "desc" => "Type a separator to be used in titles (eg. '-' => Home - Page Name )",
        "default" => " |"),
				
		array(
        "under_section" => "general-visual",
        "type" => "checkbox",
        "name" => "Responsive",
        "id" => array("premiumwd_responsive"),        
		"options" => array(""),
        "desc" => "Have your theme be responsive and device friendly.",
        "default" => array("checked")),
 
		array(
        "under_section" => "general-visual",
        "type" => "checkbox",
        "name" => "Scrollbar",
        "id" => array("premiumwd_scrollbar"),        
		"options" => array(""),
        "desc" => "Have your theme include a scrollbar.",
        "default" => array("checked")), 

		array(
        "under_section" => "general-visual",
        "type" => "checkbox",
        "name" => "Loading Screen",
        "id" => array("premiumwd_loading"),        
		"options" => array(""),
        "desc" => "This is highly recommended to keep on when you have a lot of content and users are loading it from their mobile, and or have slow connection speed.",
        "default" => array("checked")),
 		
    	array(
        "section" => "general",
        "type" => "heading",
        "title" => "Code integration",
        "id" => "general-general"
   		),
    
		array(
        "under_section" => "general-general",
        "type" => "checkbox",
        "name" => "Allow these integrations",
        "id" => array("premiumwd_code_allow_google", "premiumwd_code_allow_css", "premiumwd_code_allow_$", "premiumwd_code_allow_childcss"),
        "options" => array("Google analytics", "Custom css", "Custom jQuery", "Child Stylesheet"),
        "desc" => "Choose which code integrations (below) you want to use.",
        "default" => array("checked", "not", "not", "not")),
    	
		array(
        "under_section" => "general-general",
        "type" => "textarea",
        "name" => "Google analytics",
        "display_checkbox_id" => "premiumwd_code_allow_google",
        "placeholder" => "<script>... </script>",
        "id" => "premiumwd_analytics",
        "desc" => "Paste here your google analytics code.",),
    	
		array(
        "under_section" => "general-general",
        "type" => "textarea",
        "name" => "Custom css",
        "display_checkbox_id" => "premiumwd_code_allow_css",
        "placeholder" => "h1 { color: white; }",
        "id" => "premiumwd_custom_css",
        "desc" => "Write here your custom css.",),
    	
		array(
        "under_section" => "general-general",
        "type" => "textarea",
        "display_checkbox_id" => "premiumwd_code_allow_$",
        "name" => "Custom $ Code",
        "placeholder" => "$('h1').hide();",
        "id" => "premiumwd_custom_$",
        "desc" => "This code is executed after document is ready.",),
    	
		array(
        "under_section" => "general-general",
        "type" => "text",
        "display_checkbox_id" => "premiumwd_code_allow_childcss",
        "name" => "Child stylesheet",
        "id" => "premiumwd_code_childcss",
        "desc" => "Enter the URL of a child stylesheet to display.",
        "placeholder" => "http://www.stylesheet.com/stylesheet.css"),
	
		
		array(
        "section" => "general",
        "type" => "heading",
        "title" => "Performance",
        "id" => "general-performance"
   		),

		array(
        "under_section" => "general-performance",
        "type" => "checkbox",
        "name" => "Lazy Load",
        "id" => array("premiumwd_lazy_load"),        
        "options" => array("Yes"),
        "desc" => "Increase the performance of your website page load by lazy loading all static images.",
        "default" => array("checked")),

		array(
        "under_section" => "general-performance",
        "type" => "checkbox",
        "name" => "Minify HTML",
        "id" => array("premiumwd_minify_html"),        
        "options" => array("Yes"),
        "desc" => "Increase the performance of your website page load by minifying the size of your HTML.",
        "default" => array("checked")),
		
		array(
        "under_section" => "general-performance",
        "type" => "checkbox",
        "name" => "Defer Js parsing",
        "id" => array("premiumwd_defer_js"),        
        "options" => array("Yes"),
        "desc" => "Allow your JS files to load after page load to reduce the initial load time. (Highly Recommended)",
        "default" => array("checked")),

		array(
        "under_section" => "general-performance",
        "type" => "checkbox",
        "name" => "Remove query strings from static resources",
        "id" => array("premiumwd_query_strings"),        
        "options" => array("Yes"),
        "desc" => "Help caching and speed performance by removing query strings. (Highly Recommended)",
        "default" => array("checked")),

		array(
        "section" => "general",
        "type" => "heading",
        "title" => "WooCommerce",
        "id" => "general-woocommerce"
   		),

		array(
        "type" => "small_heading",
        "title" => "My Account",
        "under_section" => "general-woocommerce",
    	), 
		
		array(
        "under_section" => "general-woocommerce",
        "type" => "checkbox",
        "name" => "My Account Banner",
        "id" => array("premiumwd_allow_my_account_banner"),
        "options" => array(""),
        "desc" => "Choose whether you want to show banner image.",
        "default" => array("not")),

    	array(
        "under_section" => "general-woocommerce",
        "type" => "image",
        "placeholder" => "http://example.com/logo.png",
		"display_checkbox_id" => "premiumwd_allow_my_account_banner",
        "name" => "Banner Image",
        "id" => "premiumwd_myaccount_banner",
        "desc" => "Paste the url to your banner image.",
        "default" => ""),

    	array(
        "under_section" => "general-woocommerce",
        "type" => "text",
        "placeholder" => "http://example.com/url_to_campaign",
		"display_checkbox_id" => "premiumwd_allow_my_account_banner",
        "name" => "Banner Link",
        "id" => "premiumwd_myaccount_banner_link",
        "desc" => "Paste the link to your banner campaign.",
        "default" => ""),


    	array(
        "under_section" => "general-woocommerce",
        "type" => "text",
        "name" => "Wishlist Link",
        "id" => "premiumwd_my_account_wish_list",
        "desc" => "Only use this if you have wishlist plugin installed from theme installation.",
        "default" => "/wishlist"),

		array(
        "type" => "small_heading",
        "title" => "Shop",
        "under_section" => "general-woocommerce",
    	), 

    	array(
        "under_section" => "general-woocommerce",
        "type" => "text",
        "name" => "Shop Message",
        "id" => "premiumwd_shop_message",
        "desc" => "This is the shop message you can tell customers.",
        "default" => "FREE RETURNS ON ALL ORDERS"),

		array(
        "under_section" => "general-woocommerce",
        "type" => "checkbox",
        "name" => "Sidebar",
        "id" => array("premiumwd_shop_sidebar"),
        "options" => array(""),
        "desc" => "Choose if you want to have a sidebar in your shop.",
        "default" => array("not")),

		array(
        "under_section" => "general-woocommerce",
        "type" => "select",
        "name" => "Products per page",
        "id" => "premiumwd_shop_products_per_page",
        "options" => array("3","6","9","12","15"),
        "desc" => "Choose how many products per page.",
        "default" => "12"),

		array(
        "type" => "small_heading",
        "title" => "Product",
        "under_section" => "general-woocommerce",
    	), 

		array(
        "under_section" => "general-woocommerce",
        "type" => "checkbox",
        "name" => "Navigation",
        "id" => array("premiumwd_shop_single_navigation"),
        "options" => array(""),
        "desc" => "Choose if you want to shop product page navigation.",
        "default" => array("not")),

		array(
        "under_section" => "general-woocommerce",
        "type" => "checkbox",
        "name" => "Social Share",
        "id" => array("premiumwd_shop_single_social"),
        "options" => array(""),
        "desc" => "Choose if you want to shop product page social links.",
        "default" => array("not")),


		array(
        "type" => "small_heading",
        "title" => "Miscellaneous",
        "under_section" => "general-woocommerce",
    	), 

		array(
        "under_section" => "general-woocommerce",
        "type" => "text",
        "name" => "Cart / Checkout Message",
        "id" => "premiumwd_shop_cart_message",
        "desc" => "Have a message to tell users a special message.",
        "default" => "Need help completing your order? Call our customer care team on 0845 604 7457"),
		
		
	///////////////////////////////////////
	// General Settings Close
	///////////////////////////////////////	
    
	///////////////////////////////////////
	// Page Settings Open
	///////////////////////////////////////	
    	array(
        "type" => "section",
        "icon" => "fa fa-copy",
        "title" => "Page Settings",
        "id" => "layout",
        "expanded" => "false"
    	),
    
	 	array(
        "section" => "layout",
        "type" => "heading",
        "title" => "Header",
        "id" => "layout-header",
    	),

 		array(
        "under_section" => "layout-header",
        "type" => "checkbox",
        "name" => "Sticky",
        "id" => array("premiumwd_allow_sticky"),
        "options" => array(""),
        "desc" => "Choose whether or not you want to heave header scroll with page.",
        "default" => array("not")),
		
		array(
        "under_section" => "layout-header",
        "type" => "checkbox",
        "name" => "Mega Menu",
        "id" => array("premiumwd_mega_menu"),
        "options" => array(""),
        "desc" => "Allow the header to have up to four column mega menu.",
        "default" => array("not")),

		array(
        "under_section" => "layout-header",
        "type" => "text",
        "name" => "Width",
        "display_checkbox_id" => "premiumwd_mega_menu",
         "default" => "300px",
        "id" => "premiumwd_mega_menu_width",
        "desc" => "Set the width of your mega menu (px)",),


		array(
        "under_section" => "layout-header",
        "type" => "checkbox",
        "name" => "Header Announcement",
        "id" => array("premiumwd_allow_headline"),
        "options" => array(""),
        "desc" => "Choose whether you want a tagline in your header menu.",
        "default" => array("not")),

		array(
        "under_section" => "layout-header",
        "type" => "text",
        "name" => "Text",
        "display_checkbox_id" => "premiumwd_allow_headline",
         "default" => "Say anything important.",
        "id" => "premiumwd_allow_headline_text",
        "desc" => "Say a headline to grab customers",),

 		array(
        "under_section" => "layout-header",
        "type" => "checkbox",
        "name" => "Search Bar",
        "id" => array("premiumwd_allow_search"),
        "options" => array(""),
        "desc" => "Choose whether or not you want to see a search bar in header.",
        "default" => array("not")),


	    array(
        "section" => "layout",
        "type" => "heading",
        "title" => "Blog",
        "id" => "layout-blog"
    	),
				
		array(
        "under_section" => "layout-blog",
        "type" => "text",
        "name" => "Blog Count",
         "default" => "8",
        "id" => "premiumwd_blog_perpage",
        "desc" => "How many posts per page you want to show.",),				
				
		array(
        "type" => "small_heading",
        "title" => "Post",
        "under_section" => "layout-blog",
    	), 
		
   		array(
        "under_section" => "layout-blog",
		"type" => "checkbox",
		"name" => "Social Bar",
		"id" => array( "premiumwd_blog_social" ),        "options" => array(""),
        "desc" => "Choose whether you want to show hide social bar in single template.",
		"default" => array("checked")),

   		array(
        "under_section" => "layout-blog",
		"type" => "checkbox",
		"name" => "Tags",
		"id" => array( "premiumwd_blog_tags" ),        "options" => array(""),
        "desc" => "Choose whether you want to show hide tags in single template.",
		"default" => array("checked")),

   		array(
        "under_section" => "layout-blog",
		"type" => "checkbox",
		"name" => "Author",
		"id" => array( "premiumwd_blog_author" ),        "options" => array(""),
        "desc" => "Choose whether you want to show hide author info in single template.",
		"default" => array("checked")),

   		array(
        "under_section" => "layout-blog",
		"type" => "checkbox",
		"name" => "Related Posts",
		"id" => array( "premiumwd_blog_related" ),        "options" => array(""),
        "desc" => "Choose whether you want to show hide related posts in single template.",
		"default" => array("checked")),

 		array(
        "under_section" => "layout-blog",
		"type" => "checkbox",
		"name" => "Pagination",
		"id" => array( "premiumwd_blog_pagination" ),        "options" => array(""),
        "desc" => "Choose whether you want to show hide next / prev navigation in single template.",
		"default" => array("checked")),

   		array(
        "under_section" => "layout-blog",
		"type" => "checkbox",
		"name" => "Comments",
		"id" => array( "premiumwd_blog_comments" ),        "options" => array(""),
        "desc" => "Choose whether you want to show hide comments in single template.",
		"default" => array("checked")),

	    array(
        "section" => "layout",
        "type" => "heading",
        "title" => "Contact",
        "id" => "layout-contact"
    	),
		
    	array(
        "under_section" => "layout-contact",
		"type" => "checkbox",
		"name" => "Google Map",
		"id" => array( "premiumwd_gmap_show" ),        
		"options" => array(""), //Required
        "desc" => "Choose whether you want to show google map contact page template.",
		"default" => array("not")),
    
   		array(
        "under_section" => "layout-contact",
        "type" => "text",
        "name" => "GPS Coordinates",
        "display_checkbox_id" => "premiumwd_gmap_show",
        "default" => '38.898748, -77.037684',
        "id" => "premiumwd_gmap_gps",
        "desc" => "Enter your address in GPS format.",),

   		array(
        "under_section" => "layout-contact",
        "type" => "text",
        "name" => "GPS Zoom",
        "display_checkbox_id" => "premiumwd_gmap_show",
        "default" => '14',
        "id" => "premiumwd_gmap_zoom",
        "desc" => "Enter your zoom level.",),

   		array(
        "under_section" => "layout-contact",
        "type" => "image",
        "display_checkbox_id" => "premiumwd_gmap_show",
       "placeholder" => "http://example.com/marker.png",
        "name" => "Map Marker",
        "id" => "premiumwd_gmap_marker",
        "desc" => "Paste the URL to your map icon",
        "default" => ""),
		
    	array(
        "under_section" => "layout-contact",
		"type" => "checkbox",
		"name" => "Get Directions",
		"id" => array( "premiumwd_directions_show" ),        
		"options" => array(""), //Required
        "desc" => "Choose whether you want to show get directions link in google map contact page template.",
		"default" => array("not")),
    
   		array(
        "under_section" => "layout-contact",
        "type" => "text",
        "name" => "Directions link",
        "display_checkbox_id" => "premiumwd_directions_show",
        "default" => 'https://www.google.com/maps/place/38%C2%B053%2755.5%22N+77%C2%B002%2715.7%22W/@38.898748,-77.037684,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x0',
        "id" => "premiumwd_gmap_directions",
        "desc" => "Enter the link you want them to see from google maps.",),

		
    	array(
        "under_section" => "layout-contact",
		"type" => "checkbox",
		"name" => "Contact Form",
		"id" => array( "premiumwd_contact_show" ),        "options" => array(""), //Required
        "desc" => "Choose whether you want to show contact form in contact page template.",
		"default" => array("not")),
    
   		array(
        "under_section" => "layout-contact",
        "type" => "text",
        "name" => "Your e-mail",
        "display_checkbox_id" => "premiumwd_contact_show",
        "default" => get_option('admin_email'),
        "id" => "premiumwd_contact_mail",
        "desc" => "Enter your e-mail, for use in the contact form",),
    
    	array(
        "under_section" => "layout-contact",
        "type" => "text",
        "name" => "E-mail subject",
        "display_checkbox_id" => "premiumwd_contact_show",
        "default" => "Merchant Theme - Email",
        "id" => "premiumwd_contact_subject",
        "desc" => "Write a subject for received e-mails.",),
    
    	array(
        "under_section" => "layout-contact",
        "type" => "textarea",
        "display_checkbox_id" => "premiumwd_contact_show",
        "name" => "E-mail message",
        "default" => "Your message was sent successfully",
        "id" => "premiumwd_contact_message",
        "desc" => "Write a message that will be shown when user sends an e-mail.",),
	

	    array(
        "section" => "layout",
        "type" => "heading",
        "title" => "Footer",
        "id" => "layout-footer"
    	),
		
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "placeholder" => "",
        "name" => "Copyright",
        "id" => "premiumwd_footer_copyright",
        "desc" => "Paste your copyright here.",
        "default" => ""),	

    	array(
        "under_section" => "layout-footer",
		"type" => "checkbox",
		"name" => "Footer Menu",
		"id" => array( "premiumwd_footer_menu_show" ),        
		"options" => array(""), //Required
        "desc" => "Choose whether you want to show footer menu.",
		"default" => array("not")),


   		array(
        "under_section" => "layout-footer",
        "type" => "checkbox",
        "name" => "Payment Gateways",
        "id" => array("premiumwd_pg_visa", "premiumwd_pg_mastercard","premiumwd_pg_paypal","premiumwd_pg_discover","premiumwd_pg_stripe","premiumwd_pg_amazon","premiumwd_pg_amex",),
        "options" => array("Visa", "Mastercard", "PayPal", "Discover", "Stripe", "Amazon", "AMEX"),
        "desc" => "Choose which payment gateways you want to use.",
        "default" => array("checked", "checked", "checked", "checked","checked", "checked", "checked")),
		
		
    		
	///////////////////////////////////////
	// Page Settings Close
	///////////////////////////////////////	
    

	
 
 	///////////////////////////////////////
	// Style Settings Open
	///////////////////////////////////////	
	    array(
        "type" => "section",
        "icon" => "fa fa-magic",
        "title" => "Style Settings",
        "id" => "style",
        "expanded" => "false"
    	),
	
	array(
    "section" => "style",
    "type" => "heading",
    "title" => "Colors",
    "id" => "style-text"
    ),

	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Active", 
    "id" => "body_active", 
    "default" => "e8554e"
	),

	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Active Hover", 
    "id" => "body_active_hover", 
    "default" => "333333"
	),

    
    array(
    "under_section" => "style-text", 
    "type" => "small_heading", 
    "title" => "Header"), 
    array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Header Background", 
    "id" => "header_background", 
    "default" => "333333"
	),
    array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Title color", 
    "id" => "title_color", 
    "default" => "ffffff"
	),

	 array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Header Menu color", 
    "id" => "header_menu_color", 
    "default" => "cccccc"
	),

	 array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Sub Menu color", 
    "id" => "sub_menu_color", 
    "default" => "333333"
	),

    array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Header Menu Hover Background", 
    "id" => "header_hover_background", 
    "default" => "444444"
	),

	 array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Sub Menu Background", 
    "id" => "sub_menu_background", 
    "default" => "f8f8f8"
	),

	 array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Sub Menu Dropdown Background", 
    "id" => "sub_menu_dropdown_background", 
    "default" => "e8e8e8"
	),

	 array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Sub Menu Dropdown Hover Background", 
    "id" => "sub_menu_dropdown_hover_background", 
    "default" => "dddddd"
	),

	array(
    "under_section" => "style-text", 
    "type" => "small_heading", 
    "title" => "Search Bar (Header)"), 
	
	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Border", 
    "id" => "search_border", 
    "default" => "cccccc"
	),
	
	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Text Color", 
    "id" => "search_text", 
    "default" => "434242"
	),

	
	array(
    "under_section" => "style-text", 
    "type" => "small_heading", 
    "title" => "Body"), 
	
	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Background", 
    "id" => "body_background", 
    "default" => "ffffff"
	),
	
	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Text Color", 
    "id" => "body_text", 
    "default" => "666666"
	),
	
	
   		array(
        "section" => "style",
        "type" => "heading",
        "title" => "Typography",
        "id" => "style-typography"
   		 ),
    	
		array(
		"under_section" => "style-typography", 
		"type" => "small_heading", 
		"title" => "Header"), 
		
 	    array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "Logo", 
		"id" => "logo_fontsize", 
		"options" => array('26px','28px', '30px', '32px', '34px', '36px', '38px', '40px'),
		"desc" => "",
		"default" => "26px"),
 
        array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "", 
		"id" => "logo_fontfamily", 
		"options" => $fontArrays,
		"desc" => "",
		"default" => ""),
		    
	    array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "Header Menu", 
		"id" => "header_menu_fontsize", 
		"options" => array('12px','13px', '14px', '15px'),
		"desc" => "",
		"default" => "13px"),
 
        array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "", 
		"id" => "header_menu_fontfamily", 
		"options" => $fontArrays,
		"desc" => "",
		"default" => ""),   
		
		array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "Sub Menu", 
		"id" => "sub_menu_fontsize", 
		"options" => array('12px','13px','14px', '15px', '16px'),
		"desc" => "",
		"default" => "13px"),
		
		array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "", 
		"id" => "sub_menu_fontfamily", 
		"options" => $fontArrays,
		"desc" => "",
		"default" => ""),  
	
    array(
    "under_section" => "style-typography", 
    "type" => "small_heading", 
    "title" => "Body"), 

        array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "Body", 
		"id" => "body_fontfamily", 
		"options" => $fontArrays,
		"desc" => "",
		"default" => ""),

	    
 	    array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "Header Title", 
		"id" => "header_title_fontsize", 
		"options" => array('26px', '28px', '30px'),
		"desc" => "",
		"default" => "26px"),
 
        array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "", 
		"id" => "header_title_fontfamily", 
		"options" => $fontArrays,
		"desc" => "",
		"default" => ""),
		    
   		array(
        "under_section" => "style-typography", 
		"type" => "color", 
		"name" => "", 
		"id" => "header_title_color", 
		"default" => "333333"),
		
 	    array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "Sidebar Title", 
		"id" => "sidebar_title_fontsize", 
		"options" => array('14px', '16px', '18px'),
		"desc" => "",
		"default" => "14px"),
 
        array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "", 
		"id" => "sidebar_title_fontfamily", 
		"options" => $fontArrays,
		"desc" => "",
		"default" => ""),
		    
   		array(
        "under_section" => "style-typography", 
		"type" => "color", 
		"name" => "", 
		"id" => "sidebar_title_fontcolor", 
		"default" => "333333"),

    array(
    "under_section" => "style-typography", 
    "type" => "small_heading", 
    "title" => "Footer"), 

        array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "Footer", 
		"id" => "footer_fontfamily", 
		"options" => $fontArrays,
		"desc" => "",
		"default" => ""),

	
	///////////////////////////////////////
	// Style Settings Close
	///////////////////////////////////////	
);                    
                            
                            
                            