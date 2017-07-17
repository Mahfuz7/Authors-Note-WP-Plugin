<?php
/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link 			http://www.mahfuzurrahman.me/authors-commentary
 * @since 			1.0.0
 *
 * @package 		Authors_Commentary
 * @subpackage 		Authors_Commentary/admin
 */

 /**
  * The dashboard-specific functionality of the plugin.
  *
  * Defines the plugin name, version, and two examples hooks for how to
  * enqueue the dashboard-specific stylesheet and JavaScript
  *
  * @package 			Authors_Commentary
  * @subpackage 		Authors_Commentary/admin
  * @author 			Mahfuz Rahman<asrmahfuz8@gmail.com>
  */
  class Authors_Commentary_Admin {

	  /**
	   * The ID of the plugin .
		*
		* @since 	1.0.0
		* @access 	private
		* @var 		string 	$name 	The ID of the plugin
	   */
		private $name;

		/**
		 * The version of the plugin.
		 *
		 * @since 	1.0.0
		 * @access 	private
		 * @var 		string 	$version 	The version of the plugin
		 */
		private $version;

		/**
		 * A reference to the meta box
		 * @since 	1.2.0
		 * @access 	private
		 * @var 		Authors_Commentary_Meta_Box 	$meta_box 	A reference to the meta box for the plugin.
		 */
		 private $meta_box;

		/**
		 * Initialize the class and set it's properties
		 *
		 * @since 	1.0.0
		 * @var 		string 	$name 		The name of the plugin.
		 * @var 		string 	$version 	The version of the plugin.
		 */
		public function __construct( $name, $version ) {

			$this->name = $name;
			$this->version = $version;
			$this->meta_box = new Authors_Commentary_Meta_Box();

		}
  }
