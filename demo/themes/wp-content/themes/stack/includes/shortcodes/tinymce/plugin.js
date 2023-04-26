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
							title: 'Row',
							text: 'Row',
							onclick: function () {
								tinyMCE.activeEditor.execCommand( "mceInsertContent", false,"[row]--Replace w/ Columns--[/row]")
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
					a.addWithPopup( b, "Icon List Item", "hightlights");
					a.addWithPopup( b, "Icons", "columns");
					a.addWithPopup( b, "Icons w/ Text", "dropcaps");
					a.addWithPopup( b, "Hightlights", "hightlights");
					a.addWithPopup( b, "Row", "social-icons" );
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