<?php
$full_path = __FILE__;
$path = explode( 'wp-content', $full_path );
require_once( $path[0] . '/wp-load.php' );
if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'deactivate'){
	global $wpdb;
	$wpdb->query("UPDATE ".$wpdb->prefix."options SET option_name = '_vld_display_old' WHERE option_name = '_vld_display' LIMIT 1");
	echo 1;//delete_option('_vld_display');
	
} else if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'activate'){
	global $wpdb;
	$wpdb->query("UPDATE ".$wpdb->prefix."options SET option_name = '_vld_display' WHERE option_name = '_vld_display_old' LIMIT 1");
	echo 1;//delete_option('_vld_display');
	
}
?>