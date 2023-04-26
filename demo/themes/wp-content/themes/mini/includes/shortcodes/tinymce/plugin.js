// closure to avoid namespace collision
(function () {
	// create the plugin
	tinymce.create("tinymce.plugins.PremiumShortcodes", {
	
		init: function ( ed, url ) {
			
			ed.addCommand("premiumPopup", function ( a, params ) {
				var popup = params.identifier;
				
				// load thickbox
				tb_show("Insert Premium Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
			});
			
			var tmce_ver=window.tinyMCE.majorVersion;
					if (tmce_ver>="4") {
						ed.addButton('premium_button', {
                    title: "Insert Premium Shortcode", // title of the button
					text: '',
					type : 'splitbutton',
					'name' : 'premium_button',
				image: PremiumShortcodes.plugin_folder +"/tinymce/images/icon.png", // path to the button's image
				icons: false,
					menu : [
						{
							title: 'Accordion',
							text: 'Accordion',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Accordion',
									identifier: 'accordion'
								})
							}
						},
						{
							title: 'Banners',
							text: 'Banners',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Banners',
									identifier: 'banner'
								})
							}
						},
						{
							title: 'Buttons',
							text: 'Buttons',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Buttons',
									identifier: 'button'
								})
							}
						},
						{
							title: 'Blockquote',
							text: 'Blockquote',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Blockquote',
									identifier: 'blockquote'
								})
							}
						},
						{
							title: 'Call to Action',
							text: 'Call to Action',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Call to Action',
									identifier: 'cta'
								})
							}
						},
						{
							title: 'Columns',
							text: 'Columns',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Columns',
									identifier: 'columns'
								})
							}
						},
						{
							title: 'Container',
							text: 'Container',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Container',
									identifier: 'container'
								})
							}
						},
						{
							title: 'Count',
							text: 'Count',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Count',
									identifier: 'count'
								})
							}
						},
						{
							title: 'Dropcaps',
							text: 'Dropcaps',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Dropcaps',
									identifier: 'dropcaps'
								})
							}
						},						
						{
							title: 'Gallery',
							text: 'Gallery',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Gallery',
									identifier: 'gallery'
								})
							}
						},
						{
							title: 'Google Map',
							text: 'Google Map',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Google Map',
									identifier: 'gmap'
								})
							}
						},
						{
							title: 'Highlights',
							text: 'Highlights',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Highlights',
									identifier: 'highlights'
								})
							}
						},						
						{
							title: 'Icon List Item',
							text: 'Icon List Item',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Icon List Item',
									identifier: 'icon-list-item'
								})
							}
						},					
						{
							title: 'Icons',
							text: 'Icons',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Icon',
									identifier: 'icon'
								})
							}
						},	
						{
							title: 'Icons w/ Text',
							text: 'Icons w/ Text',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Icons w/ Text',
									identifier: 'icons-text'
								})
							}
						},					
						{
							title: 'Latest Post',
							text: 'Latest Post',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Latest Post',
									identifier: 'latest_post'
								})
							}
						},
						{
							title: 'Message',
							text: 'Message',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Message',
									identifier: 'message'
								})
								}
						},
						{
							title: 'Product Categories',
							text: 'Product Categories',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Product Categories',
									identifier: 'woocommerce_categories'
								})
							}
						},
						{
							title: 'Products',
							text: 'Products',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Products',
									identifier: 'woocommerce_recent_products'
								})
							}
						},
						{
							title: 'Product Slider',
							text: 'Product Slider',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Product Slider',
									identifier: 'woocommerce_product_slider'
								})
							}
						},
						{
							title: 'Product Swiper',
							text: 'Product Swiper',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Product Swiper',
									identifier: 'woocommerce_product_swiper'
								})
							}
						},
						
						{
							title: 'Row',
							text: 'Row',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Row',
									identifier: 'row'
								})
								}
						},
						{
							title: 'Parallax',
							text: 'Parallax',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Parallax',
									identifier: 'parallax'
								})
							}
						},
						{
							title: 'Portfolio',
							text: 'Portfolio',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Portfolio',
									identifier: 'portfolio'
								})
							}
						},						{
							title: 'Pricing Table',
							text: 'Pricing Table',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Pricing Table',
									identifier: 'pricing'
								})
							}
						},
						{
							title: 'Progress Bar',
							text: 'Progress Bar',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Progress Bar',
									identifier: 'progress_bar'
								})
							}
						},
						{
							title: 'Separator',
							text: 'Separator',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Separator',
									identifier: 'separator'
								})
							}
						},
						{
							title: 'Slider',
							text: 'Slider',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Slider',
									identifier: 'slider'
								})
							}
						},
						{
							title: 'Social Icons',
							text: 'Social Icons',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Social Icons',
									identifier: 'social-icon'
								})
							}
						},
						{
							title: 'Tabs',
							text: 'Tabs',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Tabs',
									identifier: 'tabs'
								})
							}
						},
						{
							title: 'Toggles',
							text: 'Toggles',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Toggles',
									identifier: 'toggle'
								})
							}
						},						
						{
							title: 'Unordered List',
							text: 'Unordered List',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Unordered List',
									identifier: 'unordered_list'
								})
							}
						},
						{
							title: 'Video Background',
							text: 'Video Background',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Video Background',
									identifier: 'videobg'
								})
							}
						},

					]
                });	
					}
				
			
		},
		
		// creates control instances based on the control's id.
		// our button's id is "premium_button"
		
		createControl: function ( btn, e ) {
			if ( btn == "premium_button" ) {	
				
				var a = this;
				
				// creates the button
				var btn = e.createSplitButton('premium_button', {
                    title: "Insert Premium Shortcode", // title of the button
					image: PremiumShortcodes.plugin_folder +"/tinymce/images/icon.png", // path to the button's image
					icons: false
                });
				
				//Render a DropDown Menu
                btn.onRenderMenu.add(function (c, b) {	
              				
					a.addWithPopup( b, "Accordion", "accordion" );
					a.addWithPopup( b, "Banner", "banner" );			
					a.addWithPopup( b, "Blockquote", "blockquote" );			
					a.addWithPopup( b, "Buttons", "button" );			
					a.addWithPopup( b, "Call to Action", "cta");
					a.addWithPopup( b, "Columns", "columns");
					a.addWithPopup( b, "Container", "container");
					a.addWithPopup( b, "Count", "count");
					a.addWithPopup( b, "Dropcaps", "dropcaps");
					a.addWithPopup( b, "Gallery", "gallery");
					a.addWithPopup( b, "Google Map", "gmap");
					a.addWithPopup( b, "Hightlights", "hightlights");
					a.addWithPopup( b, "Icon List Item", "Icon-list-item");
					a.addWithPopup( b, "Icons", "icons");
					a.addWithPopup( b, "Icons w/ Text", "icon-text");
					a.addWithPopup( b, "Latest Post", "latest_post");
					a.addWithPopup( b, "Message", "row" );
					a.addWithPopup( b, "Row", "row" );
					a.addWithPopup( b, "Parallax", "parallax" );
					a.addWithPopup( b, "Portfolio", "portfolio" );
					a.addWithPopup( b, "Pricing", "pricing" );
					a.addWithPopup( b, "Progress Bar", "progress_bar" );
					a.addWithPopup( b, "Separator", "separator" );
					a.addWithPopup( b, "Social Icons", "social-icons" );
					a.addWithPopup( b, "Slider", "slider" );
					a.addWithPopup( b, "Tabs","tabs");
					a.addWithPopup( b, "Toggles","toggle");
					a.addWithPopup( b, "Unordered List","tabs");
					a.addWithPopup( b, "Video Background","video-background");
					   
				});
                
                return btn;
			}
			
			return null;
		},
		
		addWithPopup: function ( ed, title, id ) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand("premiumPopup", false, {
						title: title,
						identifier: id
					})
				}
			})
		},

		//Insert shortcode into content
		addImmediate: function ( ed, title, sc) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand( "mceInsertContent", false, sc )
				}
			})
		},
		

	});
	
	// add PremiumShortcodes plugin
	tinymce.PluginManager.add("PremiumShortcodes", tinymce.plugins.PremiumShortcodes);
})();