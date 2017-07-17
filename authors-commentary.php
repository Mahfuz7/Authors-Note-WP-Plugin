<?php
/**
 * The plugin bootstrap file.
 *
 * This file is responsible for starting the plugin using the main plugin
 * class file.
 *
 * @link 				http://www.mahfuzurrahman.me
 * @version 			1.0.0
 * @package 			Authors_Commentary
 *
 * @wordpress-plugin
 * Plugin Name: 		Authors_Commentary
 * Plugin URI: 			http://www.mahfuzurrahman.me/authors-commentary
 * Author: 				Mahfuz Rahman
 * Author URI:			http://www.mahfuzurrahman.me/
 * License: 			GPL-2.0+
 * License URI: 		http://www.gnu.org/license/gpl-2.0.txt
 * Text Domain: 		authors-commentary
 */

 // If this file is called directly, aboart.
 if( ! defined( 'WPINC' ) ) {
	die;
 }

/**
 * The core plugin class that is used to define meta boxes, their tabs,
 * the views, and partial content for each of tabs.
 */
require_once plugin_dir_path( __FILE__ ) . 'admin/class-authors-commentary.php';

/**
 * The class is represents the meta box that will display the navigation tabs and each of the
 * fields for the meta box.
 */
 require_once plugin_dir_path( __FILE__ ) . '/admin/class-authors-commentary-meta-box.php';

/**
 * Begins execution of the plugin.
 *
 * Everything for this particular plugin will be done so from within the
 * Authors_Commentary/admin subpackage. This means that there is no reason to setup
 * any hooks untill we're in the context of the Authors_Commentary_Admin class .
 *
 * @since 		1.0.0
 */
function run_authors_commentary() {
	$authors_commentary = new Authors_Commentary_Admin( 'acme-plugin-name', '1.0.0' );
}

run_authors_commentary();
