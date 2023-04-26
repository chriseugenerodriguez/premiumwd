<?php

  include_once (TEMPLATEPATH . "/includes/theme_info.php"); 

 if(is_admin()){
        // Theme options
        include_once get_template_directory() . '/includes/options/options/premiumwd_options.php';
        include_once get_template_directory() . '/includes/options/admin-helper.php';
        include_once get_template_directory() . '/includes/options/ajax-image.php';
        include_once get_template_directory() . '/includes/options/generate-options.php';

        new premiumwd_theme_options($options);
        add_action('admin_head', 'premiumwd_admin_head');
}
