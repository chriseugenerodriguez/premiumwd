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
							title: 'Dropcaps',
							text: 'Dropcaps',
							onclick: function () {
								tinyMCE.activeEditor.execCommand( "mceInsertContent", false,"[dropcaps]--wrap with text--[/dropcaps]")
							}
						},
						{
							title: 'Emphasis',
							text: 'Emphasis',
							onclick: function () {
								tinyMCE.activeEditor.execCommand( "mceInsertContent", false,"[emphasis]--wrap with text--[/emphasis]")
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
							title: 'Portfolio',
							text: 'Portfolio',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Portfolio',
									identifier: 'portfolio'
								})
							}
						},	
						{
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
						},						{
							title: 'Unordered List',
							text: 'Unordered List',
							onclick: function () {
								tinyMCE.activeEditor.execCommand("premiumPopup", false, {
									title: 'Unordered List',
									identifier: 'unordered_list'
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
					a.addWithPopup( b, "Blockquote", "button" );			
					a.addWithPopup( b, "Buttons", "button" );			
					a.addWithPopup( b, "Columns", "columns");
					a.addWithPopup( b, "Dropcaps", "dropcaps");
					a.addWithPopup( b, "Hightlights", "hightlights");
					a.addWithPopup( b, "Row", "row" );
					a.addWithPopup( b, "Slider", "slider" );
					a.addWithPopup( b, "Social Icons", "social-icons" );
					a.addWithPopup( b, "Tabs","tabs");
					a.addWithPopup( b, "Toggles","toggle");
					a.addWithPopup( b, "Unordered List","tabs");
					   
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