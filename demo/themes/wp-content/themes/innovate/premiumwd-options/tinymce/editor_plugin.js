(function() {
	tinymce.create('tinymce.plugins.ShortcodesPlugin', {
		init : function(ed, url) {
			ed.addCommand('tinyShortcodes', function() {
				ed.windowManager.open({
					file : PremiumShortcodes.template_directory + '/premiumwd-options/tinymce/shortcodes.php',
					width : 250 + parseInt(ed.getLang('example.delta_width', 0)),
					height : 150 + parseInt(ed.getLang('example.delta_height', 0)),
					inline : 1
				}, {
					plugin_url : url
				});
			});
			ed.addButton('shortcodes', {title : 'Shortcodes', cmd : 'tinyShortcodes', image: PremiumShortcodes.template_directory + '/premiumwd-options/tinymce/example.png' });
		},
		getInfo : function() {
			return {
				longname : 'Shortcodes',
				author : 'Daniil S.',
				authorurl : 'http://example.com',
				infourl : 'http://example.com',
				version : tinymce.majorVersion + "." + tinymce.minorVersion
			};
		}
	});
	tinymce.PluginManager.add('shortcodes', tinymce.plugins.ShortcodesPlugin);
})();
