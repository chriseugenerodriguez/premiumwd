<?php
include_once('../../../../../wp-load.php');
global $shortcode_tags;
/* ------------------------------------- */
/* enter names of shortcode to exclude bellow */
/* ------------------------------------- */
$exclude = array("wp_caption", "embed");
foreach ($shortcode_tags as $key => $val){
     if(!in_array($key,$exclude)){
$shortcodes_list .= '<option value="['.$key.'][/'.$key.']">'.$key.'</option>';
     }
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_bloginfo('home'); ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
<script type="text/javascript">
 
var ButtonDialog = {
	local_ed : 'ed',
	init : function(ed) {
		ButtonDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertButton(ed) {
 
		// Try and remove existing style / blockquote
		tinyMCEPopup.execCommand('mceRemoveNode', false, null);
 
		// set up variables to contain our input values
		var selected = jQuery('#sc_select').val();		 
 
		var output = selected;
 
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
 
		// Return
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(ButtonDialog.init, ButtonDialog);
 
</script>
<div id="button-dialog">
		<form action="/" method="get" accept-charset="utf-8">
		<?php
		echo ' <select id="sc_select"><option>Shortcode</option>';
		echo $shortcodes_list;
		echo '</select>';
		?>
			<br/><br/>
			<div style="text-align:center">	
				<a href="javascript:ButtonDialog.insert(ButtonDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a>
			</div>
		</form>
	</div>
</body>
</html>

