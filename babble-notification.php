<?php
/*
Plugin Name: Babble Notification
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Babble Notification Module
Version: 1.0
Author: faishal
Author URI: http://10up.com
License:GPL2
*/
if ( !defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

add_action( 'plugins_loaded', 'babble_notification_loader', 999 );

function babble_notification_loader() {
	include_once 'class-babble-notification.php';
}