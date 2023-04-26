<?php

  include_once (TEMPLATEPATH . "/premiumwd-options/includes/theme_info.php"); 

 if(is_admin()){
        // Theme options
        include_once (get_template_directory() . '/premiumwd-options/options/premiumwd_options.php');
        include_once (get_template_directory() . '/premiumwd-options/admin-helper.php');
        include_once (get_template_directory() . '/premiumwd-options/ajax-image.php');
        include_once (get_template_directory() . '/premiumwd-options/generate-options.php');

        new premiumwd_theme_options($options);
        add_action('admin_head', 'premiumwd_admin_head');
}
