<?php


//Font Awesome 
$fa_icons = getFontAwesomeIconArray();
$icons = array();
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
		'show_quote_icon' => array(
			'type' => 'select',
			'label' => __('Show Quote Icon:', 'premium'),
			'desc' => __('', 'premium'),
			'options' => array(
				'yes' => 'Yes',
				'no' => 'No',
			)
		),	
		'quote_icon_color' => array(
			'type' => 'color',
			'label' => __('Quote Icon Color', 'premium'),
			'desc' => __('', 'premium')			
		)
		
	),
	'shortcode' => '[blockquote show_quote_icon={{show_quote_icon}} quote_icon_color={{quote_icon_color}} border_color={{border_color}} background_color={{background_color}} line_height={{line_height}} width={{width}} text_color={{text_color}} ] {{content}} [/blockquote]',
	'popup_title' => __('Blockquote Shortcode', 'premium')
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
				
	'shortcode' => '[button url="{{url}}" color="{{color}}" background_color="{{background_color}}" hover_background_color="{{hover_background_color}}" hover_color="{{hover_color}}" size="{{size}}" target="{{target}}"  icon="{{icon}}" icon_color="{{icon_color}}" text_align="{{text_align}}" font_style="{{font_style}}" target="{{target}}"] {{content}} [/button]',
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
	),	
			
	'shortcode' => '[dropcaps background_color="{{background_color}}" letter_color="{{letter_color}}" type="{{type}}"]{{letter}}[/dropcaps]',
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
			
	'shortcode' => '[highlight color="{{color}}" background_color="{{background_color}}"]{{text}}[/highlight]',
	'popup_title' => __('Highlight Shortcode', 'premium')
);

/*--------------------------------------------------------------------*/
/*	ICON LIST ITEM
/*--------------------------------------------------------------------*/
$premium_shortcodes['icon-list-item'] = array(
	'no_preview' => true,
	'params' => array(
		'icon' => array(
			'type' => 'select',
			'label' => __('Icon:', 'premium'),
			'desc' => __('', 'premium'),
				'options' => $icons
		),	
		'icon_type' => array(
					'type' => 'select',
					'label' => __('Icon Type', 'premium'),
					'desc' => __('', 'premium'),
					'options' => array(
						'circle' => 'Circle',
						'number' => 'Number',
					)
		),
		'icon_color' => array(
					'type' => 'color',
					'label' => __('Icon Color', 'premium'),
					'desc' => __('', 'premium'),
			),
		'icon_border_color' => array(
					'type' => 'color',
					'label' => __('Icon Border Color', 'premium'),
					'desc' => __('', 'premium'),
			),				
        'title' => array(
                'std' => '',
                'type' => 'text',
                'label' => __('Title:', 'premium'),
                'desc' => __('', 'premium'),
            ),	
		'title_color' => array(
					'type' => 'color',
					'label' => __('Title Color', 'premium'),
					'desc' => __('', 'premium'),
			),		
         'title_size' => array(
                'std' => '',
                'type' => 'text',
                'label' => __('Title Size (px)', 'premium'),
                'desc' => __('', 'premium'),
            ),	
				
	),
	
	'shortcode' => '[icon_list_item title_size="{{title_size}}" title_color="{{title_color}}" icon_border_color="{{icon_border_color}}" icon_color="{{icon_color}}" icon_type="{{icon_type}}" icon="{{icon}}" title="{{title}}"/]',
	'popup_title' => __('Icon List Item Shortcode', 'premium')
);

/*--------------------------------------------------------------------*/
/*	ICONS
/*--------------------------------------------------------------------*/
$premium_shortcodes['icon'] = array(
	'no_preview' => true,
	'params' => array(
		'icon' => array(
					'type' => 'select',
					'label' => __('Select Icon:', 'premium'),
					'desc' => __('', 'premium'),
					'options' => $icons
				),

		'type' => array(
					'type' => 'select',
					'label' => __('Type:', 'premium'),
					'desc' => __('', 'premium'),
					'options' => array(
						'circle' => 'Circle',
						'normal' => 'Normal',
						'square' => 'Square',
					)
				),
		'icon_size' => array(
					'type' => 'select',
					'label' => __('Icon Size:', 'premium'),
					'desc' => __('', 'premium'),
					'options' => array(
						'' => 'Default',
						'fa-lx' => 'Small',
						'fa-2x' => 'Normal',
						'fa-3x' => 'Large',
						'fa-4x' => 'Very Large',
					)
				),		
		'icon_color' => array(
			'type' => 'color',
			'label' => __('Icon Color:', 'premium'),
			'desc' => __('', 'premium')
				),		
		'icon_background_color' => array(
			'type' => 'color',
			'label' => __('Icon Background Color:', 'premium'),
			'desc' => __('', 'premium')
				),									
		'link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('URL', 'premium'),
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
				
	),
	
	'shortcode' => '[icon target="{{target}}" link="{{link}}" type="{{type}}" target="{{target}}" icon="{{icon}}" icon_size="{{icon_size}}" icon_color="{{icon_color}}" icon_background_color="{{icon_background_color}}" /]',
	'popup_title' => __('Icon Shortcode', 'premium')
);

/*--------------------------------------------------------------------*/
/*	ICONS W/ TEXT
/*--------------------------------------------------------------------*/
$premium_shortcodes['icons-text'] = array(
	'no_preview' => true,
	'params' => array(
		'box_type' => array(
					'type' => 'select',
					'label' => __('Type:', 'premium'),
					'desc' => __('', 'premium'),
					'options' => array(
						'normal' => 'Normal',
						'icon_in_a_box' => 'Icon in a box',
					)
				),
		'box_border_color' => array(
			'type' => 'color',
			'label' => __('Box Border Color (Box Only)', 'premium'),
			'desc' => __('', 'premium')
				),	
		'box_background_color' => array(
			'type' => 'color',
			'label' => __('Box Background Color (Box Only)', 'premium'),
			'desc' => __('', 'premium')
				),	

		'icon_type' => array(
					'type' => 'select',
					'label' => __('Type:', 'premium'),
					'desc' => __('', 'premium'),
					'options' => array(
						'circle' => 'Circle',
						'normal' => 'Normal',
						'square' => 'Square',
					)
				),

		'icon' => array(
					'type' => 'select',
					'label' => __('Select Icon:', 'premium'),
					'desc' => __('', 'premium'),
					'options' => $icons
				),
		'icon_size' => array(
					'type' => 'select',
					'label' => __('Icon Size:', 'premium'),
					'desc' => __('', 'premium'),
					'options' => array(
						'' => 'Default',
						'fa-lg' => 'Small',
						'fa-2x' => 'Normal',
						'fa-3x' => 'Large',
						'fa-4x' => 'Very Large',
					)
				),		
		'icon_position' => array(
					'type' => 'select',
					'label' => __('Icon Position', 'premium'),
					'desc' => __('', 'premium'),
					'options' => array(
                'top' => 'Top',
                'left' => 'Left',
                'left_from_title' => 'Left From Title',
					)
				),	
		'icon_color' => array(
			'type' => 'color',
			'label' => __('Icon Color:', 'premium'),
			'desc' => __('', 'premium')
				),		
		'icon_background_color' => array(
			'type' => 'color',
			'label' => __('Icon Background Color:', 'premium'),
			'desc' => __('', 'premium')
				),		
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'premium'),
			'desc' => __('', 'premium')
				),
		'title_tag' => array(
					'type' => 'select',
					'label' => __('Title Tag', 'premium'),
					'desc' => __('', 'premium'),
					'options' => array(
                'h2' => 'h2',
                'h3' => 'h3',
                'h4' => 'h4',
                'h5' => 'h5',
                'h6' => 'h6',
					)
				),	
		'title_color' => array(
			'type' => 'color',
			'label' => __('Title Color:', 'premium'),
			'desc' => __('', 'premium')
				),					
		'text' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Text', 'premium'),
			'desc' => __('', 'premium')
				),				
		'text_color' => array(
			'type' => 'color',
			'label' => __('Text Color:', 'premium'),
			'desc' => __('', 'premium')
				),					
		'link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('URL', 'premium'),
			'desc' => __('', 'premium')
				),	
		'link_text' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Link Text', 'premium'),
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
		'link_color' => array(
			'type' => 'color',
			'label' => __('Link Color:', 'premium'),
			'desc' => __('', 'premium')
				),	

				
	),
	
	'shortcode' => '[icon_text box_type="{{box_type}}" box_border_color="{{box_border_color}}" box_background_color="{{box_background_color}}" target="{{target}}" link="{{link}}" link_color="{{link_color}}" link_text="{{link_text}}" icon_type="{{icon_type}}"  target="{{target}}" icon="{{icon}}" icon_size="{{icon_size}}" icon_position="{{icon_position}}" icon_color="{{icon_color}}" icon_background_color="{{icon_background_color}}" title="{{title}}" title_color="{{title_color}}" title_tag="{{title_tag}}" text_color="{{text_color}}" text="{{text}}" /]',
	'popup_title' => __('Icons w/ Text Shortcode', 'premium')
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
						'fa-stackexchange' => 'StackExchange',
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
				
	),
	
	'shortcode' => '[unordered_list number_type="{{number_type}}" style="{{style}}" font_weight="{{font_weight}}"]{{content}}[/unordered_list]',
	'popup_title' => __('Unordered List Shortcode', 'premium')
);


		
?>
