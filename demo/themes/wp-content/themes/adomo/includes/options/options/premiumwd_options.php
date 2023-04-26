<?php 
	 
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
        "desc" => "Paste the URL to your logo, or upload it here. (max: 66x260)",
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
        "default" => "Adomo Theme - Email",
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
		"type" => "checkbox",
		"name" => "Show Footer",
		"id" => array( "premiumwd_footer_show" ),        
		"options" => array(""),
        "desc" => "Choose whether you want to show hide footer.",
		"default" => array("checked")),
				
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
		"type" => "select", 
		"name" => "Widgets", 
		"id" => "premiumwd_footerwidgets", 
		"options" => array('0', '1', '2', '3', '4'),
		"desc" => "Choose the amount of widget columns displayed in your footer.",
		"default" => "0"),

		
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
    "default" => "333333"
	),

	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Active Hover", 
    "id" => "body_active_hover", 
    "default" => "0babdb"
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
    "default" => "666666"
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
    "default" => "f3f3f3"
	),

	 array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Sub Menu Hover Background", 
    "id" => "sub_menu_hover_background", 
    "default" => "eaeaea"
	),

	array(
    "under_section" => "style-text", 
    "type" => "small_heading", 
    "title" => "Search Bar (Header)"), 
	
	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Background", 
    "id" => "search_background", 
    "default" => "444444"
	),
	
	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Text Color", 
    "id" => "search_text", 
    "default" => "bbbbbb"
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
    "default" => "f5f7f8"
	),
	
	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Text Color", 
    "id" => "body_text", 
    "default" => "666666"
	),
	
	array(
    "under_section" => "style-text", 
    "type" => "small_heading", 
    "title" => "Footer"), 
	
	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Background", 
    "id" => "footer_background", 
    "default" => "272727"
	),

	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Border Background", 
    "id" => "footer_border_background", 
    "default" => "333333"
	),
	
	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Bottom Background", 
    "id" => "footer_bottom_background", 
    "default" => "1C1D1E"
	),

	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Header Color", 
    "id" => "footer_headers", 
    "default" => "eeeeee"
	),
	

	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Text Color", 
    "id" => "footer_color", 
    "default" => "bbbbbb"
	),

	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Link Color", 
    "id" => "footer_link", 
    "default" => "999999"
	),

	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Hover Color", 
    "id" => "footer_hover_link", 
    "default" => "cccccc"
	),
	
	///////////////////////////////////////
	// Style Settings Close
	///////////////////////////////////////	
);                    
                            
                            
                            