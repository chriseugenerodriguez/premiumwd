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
        "name" => "Loading Screen",
        "id" => array("premiumwd_loading"),        
		"options" => array(""),
        "desc" => "This is highly recommended to keep on when you have a lot of content and users are loading it from their mobile, and or have slow connection speed.",
        "default" => array("checked")),

		array(
        "under_section" => "general-visual",
        "type" => "checkbox",
        "name" => "Back to Top",
        "id" => array("premiumwd_back_top"),        
		"options" => array(""),
        "desc" => "Have a arrow show when you scroll to prompt users an options without scrolling to go back to top of page.",
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
        "name" => "Fluid Container",
        "id" => array("premiumwd_allow_fluid"),
        "options" => array(""),
        "desc" => "Choose whether or not you want to heave header be full width or fixed width.",
        "default" => array("not")),

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
			"type" => "small_heading", 
			"title" => "Sidemenu"
		),

    	array(
			"under_section" => "layout-header",
        "type" => "image",
        "placeholder" => "http://example.com/background.png",
        "name" => "Background Image",
        "id" => "premiumwd_sidemenu_background",
        "desc" => "Paste the URL to your sidemenu background, or upload it here.",
        "default" => ""),


 		array(
        "under_section" => "layout-header",
        "type" => "checkbox",
        "name" => "About",
        "id" => array("premiumwd_sidemenu_about"),
        "options" => array(""),
        "desc" => "Choose whether or not you want to show company info on sidemenu.",
        "default" => array("not")),

   		array(
        "under_section" => "layout-header",
        "type" => "text",
        "name" => "About description",
        "display_checkbox_id" => "premiumwd_sidemenu_about",
        "default" => '',
        "id" => "premiumwd_sidemenu_description",
        "desc" => "Write some info about your company to show on sidemenu.",),

		
    	array(
        "section" => "layout",
        "type" => "heading",
        "title" => "Portfolio",
        "id" => "layout-portfolio"
   	 ),
	
	array(
        "under_section" => "layout-portfolio",
        "type" => "checkbox",
	"default" => array("checked"),		
	"name" => "Portfolio Filter",
 	"options" => array("Yes"), //Required
	"id" => array("premiumwd_filter"),
        "desc" => "Choose whether you want to show a filter."
        ),

		array(
        "under_section" => "layout-portfolio",
        "type" => "text",
        "name" => "Portfolio Count",
         "default" => "4",
        "id" => "premiumwd_portfolio_perpage",
        "desc" => "How many projects per page you want to show.",),				

 		array(
        "under_section" => "layout-portfolio",
        "type" => "checkbox",
        "name" => "Animated Posts",
        "id" => array("premiumwd_portfolio_animated"),
        "options" => array(""),
        "desc" => "Show animated posts show when pages loads.",
        "default" => array("not")),


	array(
        "under_section" => "layout-portfolio",
        "type" => "select",
        "name" => "Hover Animation",
		"options" => array('1','2','3','4'),
		"id" => "premiumwd_hover_animation",
        "desc" => "Choose the animation you want to show when user hovers over project.",
        "default" => "1"
        ),
	
	array(
        "under_section" => "layout-portfolio",
        "type" => "select",
	"name" => "Thumbnail Info",
 	"options" => array('Category','Excerpt', 'Any'),
	"id" =>"premiumwd_thumbnail_info",
        "desc" => "Choose the project thumbnail information to display.",
        "default" => "Any"
        ),	
	
	array(
        "under_section" => "layout-portfolio",
        "type" => "select",
	"name" => "Thumbnail Style",
 	"options" => array('Light','Dark'),
	"id" => "premiumwd_thumbnail_style",
        "desc" => "Choose the project thumbnail hover colors.",
        "default" => "Light"
        ),
		  	
		array(
        "under_section" => "layout-portfolio",
        "type" => "text",
        "name" => "Portfolio URL",
         "default" => "",
        "id" => "premiumwd_portfolio_url",
        "desc" => "Type for portfolio slug for users to be able to switch back and forth when viewing single items.",),				

	array(
        "under_section" => "layout-portfolio",
	"type" => "small_heading", 
	"title" => "Single Post"
	),
    
	array(
		"under_section" => "layout-portfolio",
		"type" => "checkbox",
		"default" => array("not"),
		"name" => "Pagination",
		"options" => array("Yes"), //Required
		"id" => array("premiumwd_portfolio_pagination"),
		"desc" => "Include pagination to navigate to different posts."
	), 



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
        "under_section" => "layout-blog",
        "type" => "checkbox",
        "name" => "Sidebar",
        "id" => array("premiumwd_blog_sidebar"),
        "options" => array(""),
        "desc" => "Include a Sidebar in your blog.",
        "default" => array("not")),

 		array(
        "under_section" => "layout-blog",
        "type" => "checkbox",
        "name" => "Animated Posts",
        "id" => array("premiumwd_blog_animated"),
        "options" => array(""),
        "desc" => "Show animated posts show when pages loads.",
        "default" => array("not")),

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
		"name" => "Contact Form",
		"id" => array( "premiumwd_contact_show" ),       
		 "options" => array(""), //Required
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
		"name" => "Footer Widgets",
		"id" => array( "premiumwd_footer_widgets" ),        
		"options" => array(""), //Required
        "desc" => "Choose whether you want to add some widgets in the footer.",
		"default" => array("not")),

		array(
        "under_section" => "layout-footer",
        "type" => "select",
        "name" => "Widget Count",
        "display_checkbox_id" => "premiumwd_footer_widgets",
		"options" => array("1", "2", "3", "4"), //Required
        "id" => "premiumwd_footer_widget_count",
        "desc" => "Select how many widget columns you want to show in your footer.",
		"default" => array("4")),

	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "placeholder" => "",
        "name" => "Copyright",
        "id" => "premiumwd_copyright",
        "desc" => "Paste your copyright here.",
        "default" => ""),	

	array(
	"under_section" => "layout-footer",
	"type" => "checkbox_image",
	"show_labels" => "false",
	"name" => "Social media",
	"id" => array( 
		   "premiumwd_social_twitter",
		   "premiumwd_social_facebook",
		   "premiumwd_social_linkedin",
		   "premiumwd_social_google-plus",
		   "premiumwd_social_dribbble",
		   "premiumwd_social_youtube",
		   "premiumwd_social_rss",
		   "premiumwd_social_pinterest",
		   "premiumwd_social_skype",
		   "premiumwd_social_instagram",
		   "premiumwd_social_flickr",
		   "premiumwd_social_tumblr",
		   "premiumwd_social_dropbox",
		   "premiumwd_social_foursquare",
		   "premiumwd_social_stack-exchange",
		   "premiumwd_social_weibo",
		   "premiumwd_social_github",
		   "premiumwd_social_envelope"
        	),
        
			"options" => array( 
		   "premiumwd_social_twitter",
		   "premiumwd_social_facebook",
		   "premiumwd_social_linkedin",
		   "premiumwd_social_google-plus",
		   "premiumwd_social_dribbble",
		   "premiumwd_social_youtube",
		   "premiumwd_social_rss",
		   "premiumwd_social_pinterest",
		   "premiumwd_social_skype",
		   "premiumwd_social_instagram",
		   "premiumwd_social_flickr",
		   "premiumwd_social_tumblr",
		   "premiumwd_social_dropbox",
		   "premiumwd_social_foursquare",
		   "premiumwd_social_stack-exchange",
		   "premiumwd_social_weibo",
		   "premiumwd_social_github",
		   "premiumwd_social_envelope"
        	),
			
       	"image_src" => array(
			esc_url( get_stylesheet_directory_uri())."/includes/options/images/icons/"."twitter.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."facebook.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."linkedin.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."google-plus.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."dribbble.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."youtube.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."rss.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."pininterest.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."skype.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."instagram.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."flickr.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."tumblr.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."dropbox.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."foursquare.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."stackexchange.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."weibo.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."github.png",
		   esc_url( get_stylesheet_directory_uri() )."/includes/options/images/icons/"."envelope.png"
			),

	"image_size" => array("30"),    
	"desc" => "Choose which social icons you want to display in footer.",
	"default" => array("not", "not", "not", "not", "not", "not", "not", "not", "not", "not", "not", "not", "not", "not", "not", "not", "not", "not")
	),
   
    
    	array(
        "type" => "small_heading",
        "title" => "Social media links",
        "under_section" => "layout-footer"
    	), 
    	
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Twitter",
        "display_checkbox_id" => "premiumwd_social_twitter",
        "id" => "premiumwd_social_twitter_url",
        "placeholder" => "Twitter url",
        "desc" => "Paste url to your Twitter"
	),
           
        array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Facebook",
        "display_checkbox_id" => "premiumwd_social_facebook",
        "id" => "premiumwd_social_facebook_url",
        "placeholder" => "Facebook url",
        "desc" => "Paste url to your Facebook"
	),
                           
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Linkedin",
        "display_checkbox_id" => "premiumwd_social_linkedin",
        "id" => "premiumwd_social_linkedin_url",
        "placeholder" => "Linkedin url",
        "desc" => "Paste url to your Linkedin"
	),    
                
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Google Plus",
        "display_checkbox_id" => "premiumwd_social_google-plus",
        "id" => "premiumwd_social_google-plus_url",
        "placeholder" => "Google Plus url",
        "desc" => "Paste url to your Google Plus"
	),
        	
        array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Dribbble",
        "display_checkbox_id" => "premiumwd_social_dribbble",
        "id" => "premiumwd_social_dribbble_url",
        "placeholder" => "Dribbble url",
        "desc" => "Paste url to your Dribbble"
	),
        				
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Youtube",
        "display_checkbox_id" => "premiumwd_social_youtube",
        "id" => "premiumwd_social_youtube_url",
        "placeholder" => "Youtube url",
        "desc" => "Paste url to your Youtube"
	),
        	
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "RSS",
        "display_checkbox_id" => "premiumwd_social_rss",
        "id" => "premiumwd_social_rss_url",
        "placeholder" => "RSS url",
        "desc" => "Paste url to your RSS"
	),
        	
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Pinterest",
        "display_checkbox_id" => "premiumwd_social_pinterest",
        "id" => "premiumwd_social_pinterest_url",
        "placeholder" => "Pinterest url",
        "desc" => "Paste url to your Pinterest"
	),
        			
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Skype",
        "display_checkbox_id" => "premiumwd_social_skype",
        "id" => "premiumwd_social_skype_url",
        "placeholder" => "Skype url",
        "desc" => "Paste url to your Skype"
	),
        			
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Instagram",
        "display_checkbox_id" => "premiumwd_social_instagram",
        "id" => "premiumwd_social_instagram_url",
        "placeholder" => "Instagram url",
        "desc" => "Paste url to your Instagram"
	),
        						
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Flickr",
        "display_checkbox_id" => "premiumwd_social_flickr",
        "id" => "premiumwd_social_flickr_url",
        "placeholder" => "Flickr url",
        "desc" => "Paste url to your Flickr"
	),
        			
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Tumblr",
        "display_checkbox_id" => "premiumwd_social_tumblr",
        "id" => "premiumwd_social_tumblr_url",
        "placeholder" => "Tumblr url",
        "desc" => "Paste url to your Tumblr"
	),
        			
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Dropbox",
        "display_checkbox_id" => "premiumwd_social_dropbox",
        "id" => "premiumwd_social_dropbox_url",
        "placeholder" => "Dropbox url",
        "desc" => "Paste url to your Dropbox"
	),
        			
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Foursquare",
        "display_checkbox_id" => "premiumwd_social_foursquare",
        "id" => "premiumwd_social_foursquare_url",
        "placeholder" => "Foursquare url",
        "desc" => "Paste url to your Foursquare"
	),
        			
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "stack-exchange",
        "display_checkbox_id" => "premiumwd_social_stack-exchange",
        "id" => "premiumwd_social_stack-exchange_url",
        "placeholder" => "stack-exchange url",
        "desc" => "Paste url to your stack-exchange"
	),
        			
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Weibo",
        "display_checkbox_id" => "premiumwd_social_weibo",
        "id" => "premiumwd_social_weibo_url",
        "placeholder" => "Weibo url",
        "desc" => "Paste url to your Weibo"
	),
        			
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Github",
        "display_checkbox_id" => "premiumwd_social_github",
        "id" => "premiumwd_social_github_url",
        "placeholder" => "Github url",
        "desc" => "Paste url to your Github"
	),
        			
	array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Envelope",
        "display_checkbox_id" => "premiumwd_social_envelope",
        "id" => "premiumwd_social_envelope_url",
        "placeholder" => "Envelope url",
        "desc" => "Paste url to your Envelope"
	),
    		
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
    "default" => "ffffff"
	),
    array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Title Color", 
    "id" => "title_color", 
    "default" => "333333"
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
    "name" => "Header Menu Hover Background", 
    "id" => "header_hover_background", 
    "default" => "444444"
	),
	 array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Sub Menu Color", 
    "id" => "sub_menu_color", 
    "default" => "333333"
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
    "name" => "Sub Menu Hover Background", 
    "id" => "sub_menu_hover_background", 
    "default" => "dddddd"
	),


	 array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Sub Menu Hover Color", 
    "id" => "sub_menu_hover", 
    "default" => "333333"
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
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Sidebar Text Color", 
    "id" => "sidebar_title_color", 
    "default" => "666666"
	),	
	
	array(
    "under_section" => "style-text", 
    "type" => "small_heading", 
    "title" => "Footer"), 

	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Widget Background", 
    "id" => "footer_widget_background", 
    "default" => "F7F8FA"
	),
	
	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Copyright Background", 
    "id" => "footer_copyright_background", 
    "default" => "F7F8FA"
	),
	
	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Widget Titles", 
    "id" => "footer_titles", 
    "default" => "666666"
	),

	array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Widget Text", 
    "id" => "footer_text", 
    "default" => "666666"
	),

    array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Widget Links", 
    "id" => "footer_widget_links", 
    "default" => "222222"
	),	

    array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Widget Links Hover", 
    "id" => "footer_widget_links_hover", 
    "default" => "333333"
	),	
 
    array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Copyright Text", 
    "id" => "footer_copyright", 
    "default" => "666666"
	),	

     array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Social Links", 
    "id" => "footer_social_links", 
    "default" => "222222"
	),	

     array(
    "under_section" => "style-text", 
    "type" => "color", 
    "name" => "Social Links Hover", 
    "id" => "footer_social_links_hover", 
    "default" => "333333"
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
		"default" => "12px"),
		
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
		"name" => "Text", 
		"id" => "body_fontfamily", 
		"options" => $fontArrays,
		"desc" => "",
		"default" => ""),
	
 	    array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "", 
		"id" => "body_fontsize", 
		"options" => array('13px', '14px', '15px', '16px', '17px'),
		"desc" => "",
		"default" => "15px"),
	    
 	    array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "Headers", 
		"id" => "header_title_fontfamily", 
		"options" => $fontArrays,
		"desc" => "",
		"default" => ""),


		
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
    "type" => "small_heading", 
    "title" => "Footer"), 

 	    array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "Text Size", 
		"id" => "footer_fontsize", 
		"options" => array('12px','14px', '16px', '18px'),
		"desc" => "",
		"default" => "14px"),

        array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "Widgets Titles", 
        "display_checkbox_id" => "premiumwd_footer_widgets",
		"id" => "footer_widgets_fontfamily", 
		"options" => $fontArrays,
		"desc" => "",
		"default" => ""),

        array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "Widgets Text", 
        "display_checkbox_id" => "premiumwd_footer_widgets",
		"id" => "footer_widgets_fontfamily_text", 
		"options" => $fontArrays,
		"desc" => "",
		"default" => ""),


        array(
        "under_section" => "style-typography", 
		"type" => "select", 
		"name" => "Copyright", 
		"id" => "footer_copyright_fontfamily", 
		"options" => $fontArrays,
		"desc" => "",
		"default" => ""),
	
	///////////////////////////////////////
	// Style Settings Close
	///////////////////////////////////////	
);                    
                            
                            
                            