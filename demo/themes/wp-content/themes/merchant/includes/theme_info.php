<?php

if(!defined('THEME_NAME')){
    $premiumwd_theme_data = wp_get_theme();
    define('THEME_NAME', $premiumwd_theme_data->Name);
    define('THEME_AUTHOR', $premiumwd_theme_data->Author);
    define('THEME_VERSION', trim($premiumwd_theme_data->Version));
    define('FRAMEWORK_VERSION', '1.0');
    define('FRAMEWORK_NAME', 'Premiumwd Framework');
    define('THEME_MENU_TITLE', 'Theme Options'); //Define your menu title
    define('THEME_MENU_SLUG', 'premiumwd_theme_options'); //Define your menu slug
    define('THEME_DOMAIN', 'Merchant');
    define('THEME_PRODUCT_ID', 'Merchant');
}