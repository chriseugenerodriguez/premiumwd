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
/*	ACCORDION
/*--------------------------------------------------------------------*/
$premium_shortcodes['accordion'] = array(
	'params' => array(),
	'no_preview' => true,
    'shortcode' => '[accordions]{{child_shortcode}}[/accordions]',
	'popup_title' => __('Accordion Content Shortcode', 'premium'),
	'child_shortcode' => array(	
        'params' => array(
		'caption' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title:', 'premium'),
			'desc' => __('', 'premium'),
			
		),
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Content:', 'premium'),
			'desc' => __('Add the toggle content. (HTML Accepted)', 'premium'),
		),

	),
	'shortcode' => '[accordion caption="{{caption}}"]{{content}}[/accordion]',
    'clone_button' => __('Click to Add Another Accordion', 'premium')
	)
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
			'label' => __('Content:', 'premium'),
			'desc' => __('', 'premium'),		
		),
		'text_color' => array(
			'type' => 'color',
			'label' => __('Text Color', 'premium'),
			'desc' => __('', 'premium')			
		),
		'width' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Width (%)', 'premium'),
			'desc' => __('', 'premium'),		
		),
		'line_height' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Line Height (px)', 'premium'),
			'desc' => __('', 'premium'),			
		),
		'background_color' => array(
			'type' => 'color',
			'label' => __('Background Color', 'premium'),
			'desc' => __('', 'premium')			
		),
		'border_color' => array(
			'type' => 'color',
			'label' => __('Border Color', 'premium'),
			'desc' => __('', 'premium')
		),	
		'font_family' => array(
			'type' => 'select',
			'label' => __('Font Family:', 'premium'),
			'desc' => __('', 'premium'),
			'options' => $fontArrays
		),
		
	),
	'shortcode' => '[blockquote border_color={{border_color}} background_color={{background_color}} line_height={{line_height}} width={{width}} text_color={{text_color}} font_family="{{font_family}}" ] {{content}} [/blockquote]',
	'popup_title' => __('Blockquote Shortcode', 'premium')
);

/*--------------------------------------------------------------------*/
/*	SLIDER
/*--------------------------------------------------------------------*/
$premium_shortcodes['slider'] = array(
	'no_preview' => true,
	'params' => array(
			'type' => array(
				'type' => 'select',
				'label' => __('Type:', 'premium'),
				'desc' => __('', 'premium'),
				'options' => array(
					'image' => 'Images',
					'text' => 'Text',
				)
			),
			'pagination' => array(
				'type' => 'select',
				'label' => __('Pagination', 'premium'),
				'desc' => __('', 'premium'),
				'options' => array(
					'true' => 'True',
					'false' => 'False',
				)
			),		
			'navigation' => array(
				'type' => 'select',
				'label' => __('Navigation', 'premium'),
				'desc' => __('', 'premium'),
				'options' => array(
					'true' => 'True',
					'false' => 'False',
				)
			),	
			'items' => array(
				'type' => 'select',
				'label' => __('Items Per Slide', 'premium'),
				'desc' => __('', 'premium'),
				'options' => array(
					'1' => 'One',
					'2' => 'Two',
					'3' => 'Three',
					'4' => 'Four',					
				)
			),	
	),
	'shortcode' => '[slider type="{{type}}" pagination="{{pagination}}" navigation="{{navigation}}" items="{{items}}" ]Wrap Each Slide in a div[/slider]',
	'popup_title' => __('Slider Shortcode', 'premium')
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
			'label' => __('Button URL:', 'premium'),
			'desc' => __('', 'premium')
		),
		
		'target' => array(
			'type' => 'select',
			'label' => __('Link Target:', 'premium'),
			'desc' => __('', 'premium'),
			'options' => array(
				'_self' => '_self',
				'_parent' => '_parent',
				'_top' => '_top',
				'_blank' => '_blank'
			)
		),
		
		'size' => array(
			'type' => 'select',
			'label' => __('Size:', 'premium'),
			'desc' => __('', 'premium'),
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
			'label' => __('Button Text:', 'premium'),
			'desc' => __('', 'premium'),
		),		
		'color' => array(
			'type' => 'color',
			'label' => __('Color:', 'premium'),
			'desc' => __('', 'premium'),
			),			
		'hover_color' => array(
			'type' => 'color',
			'label' => __('Hover Color:', 'premium'),
			'desc' => __('', 'premium'),
			),				
		'background_color' => array(
			'type' => 'color',
			'label' => __('Background Color:', 'premium'),
			'desc' => __('', 'premium'),
			),			
		'hover_background_color' => array(
			'type' => 'color',
			'label' => __('Hover Background Color:', 'premium'),
			'desc' => __('', 'premium'),
			),
		'font_family' => array(
			'type' => 'select',
			'label' => __('Font Family:', 'premium'),
			'desc' => __('', 'premium'),
			'options' => $fontArrays
		),
		'font_style' => array(
			'type' => 'select',
			'label' => __('Font Style:', 'premium'),
			'desc' => __('', 'premium'),
			'options' => array(
				'normal' => 'Normal',
				'italic' => 'Italic'
			)
		),

		'text_align' => array(
			'type' => 'select',
			'label' => __('Text Align:', 'premium'),
			'desc' => __('', 'premium'),
			'options' => array(
				'left' => 'Left',
				'right' => 'Right',
				'center' => 'Center'
			)
		),

		'icon' => array(
			'type' => 'select',
			'label' => __('Icon:', 'premium'),
			'desc' => __('', 'premium'),
				'options' => $icons
			
		),			
		'icon_color' => array(
			'type' => 'color',
			'label' => __('Icon Color:', 'premium'),
			'desc' => __('', 'premium'),
			),
		
			
			
		),
				
	'shortcode' => '[button url="{{url}}" color="{{color}}" background_color="{{background_color}}" hover_background_color="{{hover_background_color}}" hover_color="{{hover_color}}" size="{{size}}" target="{{target}}"  icon="{{icon}}" icon_color="{{icon_color}}" text_align="{{text_align}}" font_style="{{font_style}}" target="{{target}}" font_family="{{font_family}}"] {{content}} [/button]',
	'popup_title' => __('Button Shortcode', 'premium')
);

/*--------------------------------------------------------------------*/
/*	COLUMNS
/*--------------------------------------------------------------------*/
$premium_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ',
	'popup_title' => __('Column Shortcode', 'premium'),
	'no_preview' => true,
	
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Size:', 'premium'),
				'desc' => __('', 'premium'),
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
				'label' => __('Column Content:', 'premium'),
				'desc' => __('', 'premium'),
			)
		),
		
		'shortcode' => '[{{column}}] {{content}} [/{{column}}] ',
		'clone_button' => __('Click to Add Another Column', 'premium')
	)
);

/*--------------------------------------------------------------------*/
/*	DROPCAPS
/*--------------------------------------------------------------------*/
$premium_shortcodes['dropcaps'] = array(
	'no_preview' => true,
	'params' => array(		
	 'type' => array(
			'type' => 'select',
			'label' => __('Type', 'premium'),
			'desc' => __('', 'premium'),
			'options' => array(
                'normal' => 'Normal',
                'square' => 'Square',
                'circle' => 'Circle'			
			)
		),
		'letter' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Letter', 'premium'),
			'desc' => __('', 'premium'),
		),		
		'letter_color' => array(
			'type' => 'color',
			'label' => __('Letter Color', 'premium'),
			'desc' => __('', 'premium'),
		),		
		'background_color' => array(
			'type' => 'color',
			'label' => __('Background Color (Only for Square and Circle type)', 'premium'),
			'desc' => __('', 'premium'),
		),
		'font_family' => array(
			'type' => 'select',
			'label' => __('Font Family:', 'premium'),
			'desc' => __('', 'premium'),
			'options' => $fontArrays
		),
	),	
			
	'shortcode' => '[dropcaps background_color="{{background_color}}" letter_color="{{letter_color}}" type="{{type}}" font_family="{{font_family}}"]{{letter}}[/dropcaps]',
	'popup_title' => __('Dropcaps Shortcode', 'premium')
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
			'label' => __('Text:', 'premium'),
			'desc' => __('', 'premium'),
		),		
		
	 'color' => array(
			'type' => 'color',
			'label' => __('Color:', 'premium'),
			'desc' => __('', 'premium'),

		),
	 'background_color' => array(
			'type' => 'color',
			'label' => __('Background Color:', 'premium'),
			'desc' => __('', 'premium'),

		),
		),
		'font_family' => array(
			'type' => 'select',
			'label' => __('Font Family:', 'premium'),
			'desc' => __('', 'premium'),
			'options' => $fontArrays
		),
			
	'shortcode' => '[highlight color="{{color}}" background_color="{{background_color}}" font_family="{{font_family}}"]{{text}}[/highlight]',
	'popup_title' => __('Highlight Shortcode', 'premium')
);

/*--------------------------------------------------------------------*/
/*	TABS
/*--------------------------------------------------------------------*/
$premium_shortcodes['tabs'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[tabs] {{child_shortcode}}  [/tabs]',
    'popup_title' => __('Tab Shortcode', 'premium'),
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => '',
                'type' => 'text',
                'label' => __('Title:', 'premium'),
                'desc' => __('', 'premium'),
            ),
            'content' => array(
                'std' => '',
                'type' => 'textarea',
                'label' => __('Tab Content:', 'premium'),
                'desc' => __('', 'premium')
            )
        ),
        
        'shortcode' => '[tab title="{{title}}"] {{content}} [/tab]',
        'clone_button' => __('Click to Add Another Tab', 'premium')
    )
);

/*--------------------------------------------------------------------*/
/*	TOGGLE
/*--------------------------------------------------------------------*/
$premium_shortcodes['toggle'] = array(
	'params' => array(),
    'shortcode' => '[toggles] {{child_shortcode}}  [/toggles]',
	'no_preview' => true,
	'popup_title' => __('Toggle Content Shortcode', 'premium'),
		'child_shortcode' => array(
        'params' => array(
		'caption' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title:', 'premium'),
			'desc' => __('', 'premium'),
			
		),	
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Content:', 'premium'),
			'desc' => __('Add the toggle content. (HTML Accepted)', 'premium'),
		),
		
	),
	'shortcode' => '[toggle caption="{{caption}}"] {{content}} [/toggle]',
    'clone_button' => __('Click to Add Another Toggle', 'premium')
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
					'label' => __('Type:', 'premium'),
					'desc' => __('', 'premium'),
					'options' => array(
						'circle' => 'Circle',
						'normal' => 'Normal',
					)
				),
		'icon' => array(
					'type' => 'select',
					'label' => __('Select Icon:', 'premium'),
					'desc' => __('', 'premium'),
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
						'fa-displayexchange' => 'displayExchange',
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
					'label' => __('Size:', 'premium'),
					'desc' => __('', 'premium'),
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
			'label' => __('Icon Link URL:', 'premium'),
			'desc' => __('', 'premium')
				),
		'target' => array(
			'type' => 'select',
			'label' => __('Link Target:', 'premium'),
			'desc' => __('', 'premium'),
			'options' => array(
				'_self' => '_self',
				'_parent' => '_parent',
				'_top' => '_top',
				'_blank' => '_blank'
				)
			),		
		'icon_color' => array(
			'type' => 'color',
			'label' => __('Icon Color:', 'premium'),
			'desc' => __('', 'premium')
				),		
		'icon_hover_color' => array(
			'type' => 'color',
			'label' => __('Icon Hover Color:', 'premium'),
			'desc' => __('', 'premium')
				),
		'background_color' => array(
			'type' => 'color',
			'label' => __('Background Color:', 'premium'),
			'desc' => __('', 'premium')
				),		
		'background_hover_color' => array(
			'type' => 'color',
			'label' => __('Background Hover Color:', 'premium'),
			'desc' => __('', 'premium')
				),
	),
	
	'shortcode' => '[social_icon target="{{target}}" link="{{link}}" icon="{{icon}}" type="{{type}}" size="{{size}}" target="{{target}}" icon_color="{{icon_color}}" icon_hover_color="{{icon_hover_color}}" background_color="{{background_color}}" background_hover_color="{{background_hover_color}}"/]',
	'popup_title' => __('Social Icon Shortcode', 'premium')
);


/*--------------------------------------------------------------------*/
/*	UNORDERED LIST
/*--------------------------------------------------------------------*/
$premium_shortcodes['unordered_list'] = array(
	'no_preview' => true,
	'params' => array(
		'number_type' => array(
					'type' => 'select',
					'label' => __('Number Type', 'premium'),
					'desc' => __('', 'premium'),
					'options' => array(
						'circle' => 'Bullet',
						'number' => 'Number',
					)
				),
		
		'style' => array(
					'type' => 'select',
					'label' => __('Style', 'premium'),
					'desc' => __('', 'premium'),
					'options' => array(
						'circle' => 'Circle',
						'transparent' => 'Transparent',
					)
				),
		
		'font_weight' => array(
					'type' => 'select',
					'label' => __('Font Weight', 'premium'),
					'desc' => __('', 'premium'),
					'options' => array(
						'' => 'Default',
						'light' => 'Light',
						'normal' => 'Normal',
						'bold' => 'Bold',
					)
				),
		'font_family' => array(
			'type' => 'select',
			'label' => __('Font Family:', 'premium'),
			'desc' => __('', 'premium'),
			'options' => $fontArrays
		),
				
	),
	
	'shortcode' => '[unordered_list number_type="{{number_type}}" style="{{style}}" font_weight="{{font_weight}}" font_family="{{font_family}}"]{{content}}[/unordered_list]',
	'popup_title' => __('Unordered List Shortcode', 'premium')
);


		
?>
