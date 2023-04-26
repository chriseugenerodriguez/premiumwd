<?php
header('Content-type: text/javascript');
include_once('../../../../../wp-load.php');
?>
(function() {
	tinymce.create('tinymce.plugins.ShortcodesPlugin', {
		init : function(ed, url) {
			ed.addCommand('tinyShortcodes', function() {
				ed.windowManager.open({
					file : '<?php echo get_bloginfo('home'); ?>/wp-content/themes/innovate/premiumwd-options/tinymce/' + '/shortcodes.php',
					width : 180 + parseInt(ed.getLang('example.delta_width', 0)),
					height : 70 + parseInt(ed.getLang('example.delta_height', 0)),
					inline : 1
				}, {
					plugin_url : url
				});
			});
			ed.addButton('shortcodes', {title : 'Shortcodes', cmd : 'tinyShortcodes', image: '<?php echo get_bloginfo('home'); ?>/wp-content/themes/innovate/premiumwd-options/tinymce/' + '/example.png' });
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
