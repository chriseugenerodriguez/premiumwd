<?php


//Font Awesome 
$fa_icons = getFontAwesomeIconArray();
$icons = array();
global $fontArrays;
$fontArrays = array_merge(array( '' => ' -- Select --') , $fontArrays);
foreach ($fa_icons as $key => $value) {	
		$icons[$key] = $key;
}

/*--------------------------------------------------------------------*/                							
/*  PRICING TABLE				                							
/*--------------------------------------------------------------------*/
$premium_shortcodes['pricing'] = array(
	'params' => array(),
	'no_preview' => true,
    'shortcode' => '[pricing]{{child_shortcode}}[/pricing]',
	'popup_title' => __('Pricing Table Shortcode', 'ellion'),
	'child_shortcode' => array(	
			'params' => array(
				'title' => array(
					'type' => 'text',
					'std' => '',
					'label' => __('Title', 'ellion'),
					'desc' => __('', 'ellion'),
				),	
				'featured' => array(
					'type' => 'select',
					'label' => __('Featured', 'ellion'),
					'desc' => __('', 'ellion'),
					'options' => array(
						'true' => 'True',
						'false' => 'False',
					)
				),		
				'amount' => array(
					'type' => 'text',
					'std' => '',
					'label' => __('Amount', 'ellion'),
					'desc' => __('', 'ellion'),
				),	
				'button_link' => array(
					'type' => 'text',
					'std' => '',
					'label' => __('Button Link', 'ellion'),
					'desc' => __('', 'ellion'),
				),				
				'button_text' => array(
					'type' => 'text',
					'std' => '',
					'label' => __('Button Text', 'ellion'),
					'desc' => __('', 'ellion'),
		)
	),		
	'shortcode' => '[price title="{{title}}" featured="{{featured}}" amount="{{amount}}" button_link="{{button_link}}" button_text="{{button_text}}"]Put list of items for this table[/price]',
	'clone_button' => __('Click to Add Another Table', 'ellion')
	),
);

/*--------------------------------------------------------------------*/                							
/*  GOOGLE MAP					                							
/*--------------------------------------------------------------------*/
$premium_shortcodes['gmap'] = array(
	'no_preview' => true,
	'params' => array(
			'gps' => array(
				'type' => 'text',
				'std' => '',
				'label' => __('GPS (lat, lng)', 'ellion'),
				'desc' => __('To Find GPS Coordinates, go <a target="_blank" href="http://www.latlong.net/convert-address-to-lat-long.html">here</a>.', 'ellion'),
			),	
			'marker' => array(
				'type' => 'text',
				'std' => '',
				'label' => __('Marker for Google Map', 'ellion'),
				'desc' => __('Add path of google marker image (.png) only', 'ellion'),
			),	
			'height' => array(
				'type' => 'text',
				'std' => '',
				'label' => __('Height', 'ellion'),
				'desc' => __('ex. 500px', 'ellion'),
			),
			'styles' => array(
				'type' => 'text',
				'std' => '',
				'label' => __('Custom Styling', 'ellion'),
				'desc' => __('Add your own google map look <a href="https://snazzymaps.com/" target="_blank">here</a>', 'ellion'),
			),
			'scroll-wheel' => array(
				'type' => 'select',
				'label' => __('Scroll Wheel', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'true' => 'True',
					'false' => 'False',
				)
			),		
			'draggable' => array(
				'type' => 'select',
				'label' => __('Draggable', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'true' => 'True',
					'false' => 'False',
				)
			),	
	
			'zoom' => array(
				'type' => 'select',
				'std' => '',
				'label' => __('Zoom Level', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'4' => '4',
					'5' => '5',
					'6' => '6',
					'7' => '7',
					'8' => '8',	
					'9' => '9',
					'10' => '10',
					'11' => '11',
					'12' => '12',
					'13' => '13',
					'14' => '14',
					'15' => '15',
					'16' => '16',		
					)
			),	

	),
	'shortcode' => '[gmap marker="{{marker}}" data-styles="{{styles}}" scroll-wheel="{{scroll-wheel}}" draggable="{{draggable}}" zoom="{{zoom}}" gps="{{gps}}" height="{{height}}"][/gmap]',
	'popup_title' => __('Google Map Shortcode', 'ellion')
);


/*--------------------------------------------------------------------*/                							
/*  PORTFOLIO				                							
/*--------------------------------------------------------------------*/
$premium_shortcodes['portfolio'] = array(
	'no_preview' => true,
	'params' => array(
			'type' => array(
				'type' => 'select',
				'label' => __('Size', 'ellion'),
				'desc' => __('Select the type of portfolio display', 'ellion'),
				'options' => array(
					'slider' => 'Slider',
					'boxed' => 'Boxed',
				)
			),
			 'title' => array(
 				'type' => 'text',
 				'std' => '',
 				'label' => __('Title', 'ellion'),
				'desc' => __('', 'ellion'),
			 ),	
			 'text' => array(
 				'type' => 'text',
 				'std' => '',
 				'label' => __('Text', 'ellion'),
				'desc' => __('', 'ellion'),
			 ),				 				
			'filter' => array(
				'type' => 'select',
				'label' => __('Filter', 'ellion'),
				'desc' => __('Only works with boxed', 'ellion'),
				'options' => array(
					'yes' => 'Yes',
					'no' => 'No',
				)
			),							
			 'number_of_posts' => array(
 				'type' => 'text',
 				'std' => '',
 				'label' => __('Number of Posts', 'ellion'),
				'desc' => __('', 'ellion'),
			 ),	
			'order_by' => array(
				'type' => 'select',
				'label' => __('Order by', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'menu_order' => 'Order',
					'title' => 'Title',
					'date' => 'Date',
				)
			),
			'order' => array(
				'type' => 'select',
				'label' => __('Order', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'ASC' => 'ASC',
					'DESC' => 'DESC',
				)
			),
			'autoplay' => array(
				'type' => 'select',
				'label' => __('Auto Play', 'ellion'),
				'desc' => __('Only works with slider', 'ellion'),
				'options' => array(
					'true' => 'Yes',
					'false' => 'No',
				)
			),	
			'loop' => array(
				'type' => 'select',
				'label' => __('Loop', 'ellion'),
				'desc' => __('Only works with slider', 'ellion'),
				'options' => array(
					'true' => 'Yes',
					'false' => 'No',
				)
			),
			'show_more' => array(
				'type' => 'select',
				'label' => __('Show More', 'ellion'),
				'desc' => __('Show more button', 'ellion'),
				'options' => array(
					'true' => 'Yes',
					'false' => 'No',
				)
			),							
			'slidespeed' => array(
 				'type' => 'text',
 				'std' => '',
 				'label' => __('Speed to show next item', 'ellion'),
				'desc' => __('If autoplay active (Only with slider)', 'ellion'),
			 ),	
 	),
	'shortcode' => '[portfolio title="{{title}}" text="{{text}}" type="{{type}}" filter="{{filter}}" show_more="{{show_more}}" number_of_posts="{{number_of_posts}}" order_by="{{order_by}}" order="{{order}}" autoplay="{{autoplay}}" loop="{{loop}}" slidespeed="{{slidespeed}}" /]',
  	'popup_title' => __('Portfolio Shortcode', 'ellion')
);


/*--------------------------------------------------------------------*/
/*	ACCORDION
/*--------------------------------------------------------------------*/
$premium_shortcodes['accordion'] = array(
	'params' => array(),
	'no_preview' => true,
    'shortcode' => '[accordions]{{child_shortcode}}[/accordions]',
	'popup_title' => __('Accordion Content Shortcode', 'ellion'),
	'child_shortcode' => array(	
        'params' => array(
		'caption' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title:', 'ellion'),
			'desc' => __('', 'ellion'),
			
		),
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Content:', 'ellion'),
			'desc' => __('Add the toggle content. (HTML Accepted)', 'ellion'),
		),

	),
	'shortcode' => '[accordion caption="{{caption}}"]{{content}}[/accordion]',
    'clone_button' => __('Click to Add Another Accordion', 'ellion')
	)
);

/*--------------------------------------------------------------------*/                							
/*  SEPARATOR				                							
/*--------------------------------------------------------------------*/
$premium_shortcodes['separator'] = array(
	'no_preview' => true,
	'params' => array(
			'color' => array(
				'type' => 'color',
				'label' => __('Color', 'ellion'),
				'desc' => __('', 'ellion')			
			 ),	
			'size' => array(
				'type' => 'select',
				'label' => __('Size', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'tiny' => 'Tiny',
					'small' => 'Small',
					'normal' => 'Normal',
					'big' => 'Big',
      				        'large' => 'Large',
				)
			),	
                        'width' => array(
				'type' => 'select',
				'label' => __('Width', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'full' => 'Full-Width',
					'' => 'Auto',
				)
			),	
			 'margintop' => array(
 				'type' => 'text',
 				'std' => '',
 				'label' => __('Margin Top', 'ellion'),
				'desc' => __('', 'ellion'),
			 ),	
			 'marginbottom' => array(
 				'type' => 'text',
 				'std' => '',
 				'label' => __('Margin Bottom', 'ellion'),
				'desc' => __('', 'ellion'),
			 ),	
 	),
	'shortcode' => '[separator color="{{color}}" size="{{size}}" width="{{width}}" margintop="{{margintop}}" marginbottom="{{marginbottom}}" /]',
  	'popup_title' => __('Separator Shortcode', 'ellion')
);


/*--------------------------------------------------------------------*/
/*	BLOCKQUOTES
/*--------------------------------------------------------------------*/
$premium_shortcodes['blockquote'] = array(
	'no_preview' => true,
	'params' => array(
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Content:', 'ellion'),
			'desc' => __('', 'ellion'),		
		),
		'align' => array(
			'type' => 'select',
			'label' => __('Text Color', 'ellion'),
			'desc' => __('', 'ellion'),
			'options' => array(
					'left' => 'Left',
					'right' => 'right',
				)		
		),
		
	),
	'shortcode' => '[blockquote align="{{align}}" ] {{content}} [/blockquote]',
	'popup_title' => __('Blockquote Shortcode', 'ellion')
);

/*--------------------------------------------------------------------*/
/*	SLIDER
/*--------------------------------------------------------------------*/
$premium_shortcodes['slider'] = array(
	'no_preview' => true,
	'params' => array(
			'type' => array(
				'type' => 'select',
				'label' => __('Type:', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'image' => 'Images',
					'text' => 'Text',
				)
			),
			'pagination' => array(
				'type' => 'select',
				'label' => __('Pagination', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'true' => 'True',
					'false' => 'False',
				)
			),		
			'navigation' => array(
				'type' => 'select',
				'label' => __('Navigation', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'true' => 'True',
					'false' => 'False',
				)
			),	
			'items' => array(
				'type' => 'select',
				'label' => __('Items Per Slide', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'1' => 'One',
					'2' => 'Two',
					'3' => 'Three',
					'4' => 'Four',					
				)
			),	
	),
	'shortcode' => '[slider type="{{type}}" pagination="{{pagination}}" navigation="{{navigation}}" items="{{items}}" ]Wrap Each Slide in a div[/slider]',
	'popup_title' => __('Slider Shortcode', 'ellion')
);


/*--------------------------------------------------------------------*/
/*  BUTTON
/*--------------------------------------------------------------------*/
$premium_shortcodes['button'] = array(
	'no_preview' => true,
	'params' => array(
		'url' => array(
			'std' => 'http://',
			'type' => 'text',
			'label' => __('Button URL:', 'ellion'),
			'desc' => __('', 'ellion')
		),
		
		'target' => array(
			'type' => 'select',
			'label' => __('Link Target:', 'ellion'),
			'desc' => __('', 'ellion'),
			'options' => array(
				'_self' => '_self',
				'_parent' => '_parent',
				'_top' => '_top',
				'_blank' => '_blank'
			)
		),
		
		'size' => array(
			'type' => 'select',
			'label' => __('Size:', 'ellion'),
			'desc' => __('', 'ellion'),
			'options' => array(
				'' => 'Default',
				'small' => 'Small',
				'medium' => 'Medium',
				'large' => 'Large',
				'big_large' => 'Big Large'
			)
		),
		'content' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Button Text:', 'ellion'),
			'desc' => __('', 'ellion'),
		),		
		'color' => array(
			'type' => 'color',
			'label' => __('Color:', 'ellion'),
			'desc' => __('', 'ellion'),
			),			
		'hover_color' => array(
			'type' => 'color',
			'label' => __('Hover Color:', 'ellion'),
			'desc' => __('', 'ellion'),
			),				
		'background_color' => array(
			'type' => 'color',
			'label' => __('Background Color:', 'ellion'),
			'desc' => __('', 'ellion'),
			),			
		'hover_background_color' => array(
			'type' => 'color',
			'label' => __('Hover Background Color:', 'ellion'),
			'desc' => __('', 'ellion'),
			),
		'font_family' => array(
			'type' => 'select',
			'label' => __('Font Family:', 'ellion'),
			'desc' => __('', 'ellion'),
			'options' => $fontArrays
		),
		'font_style' => array(
			'type' => 'select',
			'label' => __('Font Style:', 'ellion'),
			'desc' => __('', 'ellion'),
			'options' => array(
				'normal' => 'Normal',
				'italic' => 'Italic'
			)
		),

		'text_align' => array(
			'type' => 'select',
			'label' => __('Text Align:', 'ellion'),
			'desc' => __('', 'ellion'),
			'options' => array(
				'left' => 'Left',
				'right' => 'Right',
				'center' => 'Center'
			)
		),

		'icon' => array(
			'type' => 'select',
			'label' => __('Icon:', 'ellion'),
			'desc' => __('', 'ellion'),
				'options' => $icons
			
		),			
		'icon_color' => array(
			'type' => 'color',
			'label' => __('Icon Color:', 'ellion'),
			'desc' => __('', 'ellion'),
			),
		
			
			
		),
				
	'shortcode' => '[button url="{{url}}" color="{{color}}" background_color="{{background_color}}" hover_background_color="{{hover_background_color}}" hover_color="{{hover_color}}" size="{{size}}" target="{{target}}"  icon="{{icon}}" icon_color="{{icon_color}}" text_align="{{text_align}}" font_style="{{font_style}}" target="{{target}}" font_family="{{font_family}}"] {{content}} [/button]',
	'popup_title' => __('Button Shortcode', 'ellion')
);

/*--------------------------------------------------------------------*/
/*	COLUMNS
/*--------------------------------------------------------------------*/
$premium_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ',
	'popup_title' => __('Column Shortcode', 'ellion'),
	'no_preview' => true,
	
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Size:', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'one_column' => 'One Column',
					'two_column' => 'Two Column',
					'three_column' => 'Three Column',
					'four_column' => 'Four Column',
					'five_column' => 'Five Column',
					'six_column' => 'Six Column',
					'seven_column' => 'Seven Column',
					'eight_column' => 'Eight Column',
					'nine_column' => 'Nine Column',
					'ten_column' => 'Ten Column',
					'eleven_column' => 'Eleven Column',
					'twelve_column' => 'Twelve Column',
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Column Content:', 'ellion'),
				'desc' => __('', 'ellion'),
			)
		),
		
		'shortcode' => '[{{column}}] {{content}} [/{{column}}] ',
		'clone_button' => __('Click to Add Another Column', 'ellion')
	)
);

/*--------------------------------------------------------------------*/
/*	HIGHLIGHTS
/*--------------------------------------------------------------------*/
$premium_shortcodes['highlights'] = array(
	'no_preview' => true,
	'params' => array(
		'text' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Text:', 'ellion'),
			'desc' => __('', 'ellion'),
		),		
		
	 'color' => array(
			'type' => 'color',
			'label' => __('Color:', 'ellion'),
			'desc' => __('', 'ellion'),

		),
	 'background_color' => array(
			'type' => 'color',
			'label' => __('Background Color:', 'ellion'),
			'desc' => __('', 'ellion'),

		),
		),
		'font_family' => array(
			'type' => 'select',
			'label' => __('Font Family:', 'ellion'),
			'desc' => __('', 'ellion'),
			'options' => $fontArrays
		),
			
	'shortcode' => '[highlight color="{{color}}" background_color="{{background_color}}" font_family="{{font_family}}"]{{text}}[/highlight]',
	'popup_title' => __('Highlight Shortcode', 'ellion')
);

/*--------------------------------------------------------------------*/
/*	TABS
/*--------------------------------------------------------------------*/
$premium_shortcodes['tabs'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[tabs] {{child_shortcode}}  [/tabs]',
    'popup_title' => __('Tab Shortcode', 'ellion'),
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => '',
                'type' => 'text',
                'label' => __('Title:', 'ellion'),
                'desc' => __('', 'ellion'),
            ),
            'content' => array(
                'std' => '',
                'type' => 'textarea',
                'label' => __('Tab Content:', 'ellion'),
                'desc' => __('', 'ellion')
            )
        ),
        
        'shortcode' => '[tab title="{{title}}"] {{content}} [/tab]',
        'clone_button' => __('Click to Add Another Tab', 'ellion')
    )
);

/*--------------------------------------------------------------------*/
/*	TOGGLE
/*--------------------------------------------------------------------*/
$premium_shortcodes['toggle'] = array(
	'params' => array(),
    'shortcode' => '[toggles] {{child_shortcode}}  [/toggles]',
	'no_preview' => true,
	'popup_title' => __('Toggle Content Shortcode', 'ellion'),
		'child_shortcode' => array(
        'params' => array(
		'caption' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title:', 'ellion'),
			'desc' => __('', 'ellion'),
			
		),	
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Content:', 'ellion'),
			'desc' => __('Add the toggle content. (HTML Accepted)', 'ellion'),
		),
		
	),
	'shortcode' => '[toggle caption="{{caption}}"] {{content}} [/toggle]',
    'clone_button' => __('Click to Add Another Toggle', 'ellion')
	)
	);


/*--------------------------------------------------------------------*/
/*	SOCIAL ICON
/*--------------------------------------------------------------------*/
$premium_shortcodes['social-icon'] = array(
	'no_preview' => true,
	'params' => array(
		'type' => array(
					'type' => 'select',
					'label' => __('Type:', 'ellion'),
					'desc' => __('', 'ellion'),
					'options' => array(
						'circle' => 'Circle',
						'normal' => 'Normal',
					)
				),
		'icon' => array(
					'type' => 'select',
					'label' => __('Select Icon:', 'ellion'),
					'desc' => __('', 'ellion'),
					'options' => array(
						'fa-adn' => 'ADN',
						'fa-android' => 'Android',
						'fa-apple' => 'Apple',
						'fa-bitbucket' => 'Bitbucket',
						'fa-bitbucket-sign' => 'Bitbucket-Sign',
						'fa-bitcoin' => 'Bitcoin',
						'fa-btc' => 'BTC',
						'fa-css3' => 'CSS3',
						'fa-dribbble' => 'Dribbble',
						'fa-dropbox' => 'Dropbox',
						'fa-facebook' => 'Facebook',
						'fa-facebook-sign' => 'Facebook-Sign',
						'fa-flickr' => 'Flickr',
						'fa-foursquare' => 'Foursquare',
						'fa-github' => 'GitHub',
						'fa-github-alt' => 'GitHub-Alt',
						'fa-github-sign' => 'GitHub-Sign',
						'fa-gittip' => 'Gittip',
						'fa-google-plus' => 'Google Plus',
						'fa-google-plus-sign' => 'Google Plus-Sign',
						'fa-html5' => 'HTML5',
						'fa-instagram' => 'Instagram',
						'fa-linkedin' => 'LinkedIn',
						'fa-linkedin-sign' => 'LinkedIn-Sign',
						'fa-linux' => 'Linux',
						'fa-maxcdn' => 'MaxCDN',
						'fa-pinterest' => 'Pinterest',
						'fa-pinterest-sign' => 'Pinterest-Sign',
						'fa-renren' => 'Renren',
						'fa-skype' => 'Skype',
						'fa-stackexchange' => 'Stack Exchange',
						'fa-trello' => 'Trello',
						'fa-tumblr' => 'Tumblr',
						'fa-tumblr-sign' => 'Tumblr-Sign',
						'fa-twitter' => 'Twitter',
						'fa-twitter-sign' => 'Twitter-Sign',
						'fa-vk' => 'VK',
						'fa-weibo' => 'Weibo',
						'fa-windows' => 'Windows',
						'fa-xing' => 'Xing',
						'fa-xing-sign' => 'Xing-Sign',
						'fa-youtube' => 'YouTube',
						'fa-youtube-play' => 'YouTube Play',
						'fa-youtube-sign' => 'YouTube-Sign',
					)
				),
		'size' => array(
					'type' => 'select',
					'label' => __('Size:', 'ellion'),
					'desc' => __('', 'ellion'),
					'options' => array(
						'' => 'Default',
						'fa-lg' => 'Small',
						'fa-2x' => 'Normal',
						'fa-3x' => 'Large',
						'fa-4x' => 'Very Large',
					)
				),		
		'link' => array(
			'std' => 'http://',
			'type' => 'text',
			'label' => __('Icon Link URL:', 'ellion'),
			'desc' => __('', 'ellion')
				),
		'target' => array(
			'type' => 'select',
			'label' => __('Link Target:', 'ellion'),
			'desc' => __('', 'ellion'),
			'options' => array(
				'_self' => '_self',
				'_parent' => '_parent',
				'_top' => '_top',
				'_blank' => '_blank'
				)
			),		
		'icon_color' => array(
			'type' => 'color',
			'label' => __('Icon Color:', 'ellion'),
			'desc' => __('', 'ellion')
				),		
		'icon_hover_color' => array(
			'type' => 'color',
			'label' => __('Icon Hover Color:', 'ellion'),
			'desc' => __('', 'ellion')
				),
		'background_color' => array(
			'type' => 'color',
			'label' => __('Background Color:', 'ellion'),
			'desc' => __('', 'ellion')
				),		
		'background_hover_color' => array(
			'type' => 'color',
			'label' => __('Background Hover Color:', 'ellion'),
			'desc' => __('', 'ellion')
				),
	),
	
	'shortcode' => '[social_icon target="{{target}}" link="{{link}}" icon="{{icon}}" type="{{type}}" size="{{size}}" target="{{target}}" icon_color="{{icon_color}}" icon_hover_color="{{icon_hover_color}}" background_color="{{background_color}}" background_hover_color="{{background_hover_color}}"/]',
	'popup_title' => __('Social Icon Shortcode', 'ellion')
);


/*--------------------------------------------------------------------*/
/*	UNORDERED LIST
/*--------------------------------------------------------------------*/
$premium_shortcodes['unordered_list'] = array(
	'no_preview' => true,
	'params' => array(
		'number_type' => array(
					'type' => 'select',
					'label' => __('Number Type', 'ellion'),
					'desc' => __('', 'ellion'),
					'options' => array(
						'circle' => 'Bullet',
						'number' => 'Number',
					)
				),
		
		'style' => array(
					'type' => 'select',
					'label' => __('Style', 'ellion'),
					'desc' => __('', 'ellion'),
					'options' => array(
						'circle' => 'Circle',
						'transparent' => 'Transparent',
					)
				),
		
		'font_weight' => array(
					'type' => 'select',
					'label' => __('Font Weight', 'ellion'),
					'desc' => __('', 'ellion'),
					'options' => array(
						'' => 'Default',
						'light' => 'Light',
						'normal' => 'Normal',
						'bold' => 'Bold',
					)
				),
		'font_family' => array(
			'type' => 'select',
			'label' => __('Font Family:', 'ellion'),
			'desc' => __('', 'ellion'),
			'options' => $fontArrays
		),
				
	),
	
	'shortcode' => '[unordered_list number_type="{{number_type}}" style="{{style}}" font_weight="{{font_weight}}" font_family="{{font_family}}"]{{content}}[/unordered_list]',
	'popup_title' => __('Unordered List Shortcode', 'ellion')
);


/*--------------------------------------------------------------------*/
/*	ROW
/*--------------------------------------------------------------------*/
$premium_shortcodes['row'] = array(
	'popup_title' => __('Row Shortcode', 'ellion'),
	'no_preview' => true,
		'params' => array(
			'margin' => array(
				'type' => 'select',
				'label' => __('Margin:', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'' => 'Yes',
					'no-margin-bottom' => 'No'
				)
			),
		),
		
		'shortcode' => '[row margin="{{margin}}"][/row] ',
);

/*--------------------------------------------------------------------*/
/*	CONTAINER
/*--------------------------------------------------------------------*/
$premium_shortcodes['container'] = array(
	'popup_title' => __('Container Shortcode', 'ellion'),
	'no_preview' => true,
		'params' => array(
			'type' => array(
				'type' => 'select',
				'label' => __('Container:', 'ellion'),
				'desc' => __('', 'ellion'),
				'options' => array(
					'full' => 'Full Width',
					'container' => 'Default'
				)
			),
			'padding' => array(
				'type' => 'text',
				'label' => __('Padding:', 'ellion'),
				'desc' => __('0px 0px 0px 0px', 'ellion'),
				'std' => ''
			),			
		),
		
		'shortcode' => '[container type="{{type}}" padding="{{padding}}"][/container] ',
);
		
?>
