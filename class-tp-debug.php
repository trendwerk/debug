<?php
/**
 * Plugin Name: Debug
 * Description: Debug tools.
 *
 * Plugin URI: https://github.com/trendwerk/debug
 * 
 * Author: Trendwerk
 * Author URI: https://github.com/trendwerk
 * 
 * Version: 1.0.2
 */

class TP_Debug {

	function __construct() {
		add_action( 'admin_init', array( $this, 'activate' ) );
	}

	/**
	 * Activate debug tools
	 */
	function activate() {
		if( ! defined( 'WP_DEBUG' ) || ! WP_DEBUG )
			return;

		activate_plugin( 'debug-bar/debug-bar.php', null, is_multisite() );
		activate_plugin( 'debug-bar-slow-actions/debug-bar-slow-actions.php', null, is_multisite() );
		activate_plugin( 'kint-debugger/Kint.class.php', null, is_multisite() );
		activate_plugin( 'debug-bar-timber/debug-bar-timber.php', null, is_multisite() );
	}

} new TP_Debug;
