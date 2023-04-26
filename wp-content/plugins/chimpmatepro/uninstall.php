<?php
/** 
 * ChimpMate Pro - WordPress MailChimp Assistant
 *
 * @package   ChimpMate Pro - WordPress MailChimp Assistant
 * @author    Voltroid<care@voltroid.com>
 * @link      http://voltroid.com/chimpmate
 * @copyright 2015 Voltroid
 */

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

global $wpdb;

if ( is_multisite() ) {

} else {
	
}