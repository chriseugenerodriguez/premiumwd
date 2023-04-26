<?php
if (!function_exists('premiumwd_admin_head')) {
  
    function premiumwd_admin_head() {    
			
			wp_register_script( 'ajaxupload',get_template_directory_uri() . '/premiumwd-options/js/ajaxupload.js', array( 'jquery' ) );
			wp_register_script( 'jquery-colorpicker',get_template_directory_uri() . '/premiumwd-options/js/colorpicker.js', array( 'jquery' ) );
			wp_register_script( 'mainjs',get_template_directory_uri() . '/premiumwd-options/js/mainJs.js', array( 'jquery' ) );
			wp_register_style( 'options-style',get_template_directory_uri() . '/premiumwd-options/css/style.css', '', 'all');
			wp_register_style( 'colorpicker',get_template_directory_uri() . '/premiumwd-options/css/colorpicker.css', '', 'all');
				
				wp_enqueue_script('ajaxupload');
				wp_enqueue_script('jquery-colorpicker');		
				wp_enqueue_script('mainjs');
			
			wp_enqueue_style('options-style');
			wp_enqueue_style('colorpicker');
	}
		add_action('admin_print_scripts-admin.php','premiumwd_admin_head');
}
?>