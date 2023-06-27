<?php
/**
 * Plugin Name: Collectify
 * Description:  A plugin allows you to add a contract address to blocks of content or posts within WordPress, providing exclusive access to content solely for NFT holders.
 * Plugin URI:  https://github.com/CollectifyApp/Collectify-WordPress-Plugin
 * Author:      Collectify
 * Author URI:  https://collectify.app/
 * Version:     1.0.0
 * Text Domain: collectify
 *
 * @package collectify
 */

define( 'COLLECTIFY_PLUGIN_VERSION', '1.0.0' );
define( 'UNLOCK_PROTOCOL_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'UNLOCK_PROTOCOL_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'UNLOCK_PROTOCOL_BUILD_DIR', UNLOCK_PROTOCOL_PATH . '/assets/build' );
define( 'UNLOCK_PROTOCOL_BUILD_URI', UNLOCK_PROTOCOL_URL . '/assets/build' );
define( 'UNLOCK_PROTOCOL_BASENAME_FILE', plugin_basename( __FILE__ ) );
define( 'UNLOCK_PROTOCOL_PLUGIN_FILE', untrailingslashit( __FILE__ ) );

// phpcs:disable WordPressVIPMinimum.Files.IncludingFile.UsingCustomConstant
require_once UNLOCK_PROTOCOL_PATH . '/inc/helpers/autoloader.php';
require_once UNLOCK_PROTOCOL_PATH . '/inc/helpers/custom-functions.php';
// phpcs:enable WordPressVIPMinimum.Files.IncludingFile.UsingCustomConstant

/**
 * To load plugin manifest class.
 *
 * @since 3.0.0
 *
 * @return void
 */
function unlock_protocol_plugin_loader_collectify() {
	\Unlock_Protocol\Inc\Plugin::get_instance();
}

unlock_protocol_plugin_loader_collectify();
