<?php
/**
 * Represents the Author's Commentary Meta Box.
 *
 * @link 			htpp://www.mahfuzurrahman.me/authors-commentary
 * @since 			1.2.0
 * @package 		Author_Commentary
 * @subpackage 	Authors_Commentary/admin
 */

/**
 * Represents the Author's Commentary Meta Box.
 *
 * Registers the meta box with the WordPress API, sets it's properties, and renders the content
 * by including the markup from its associated view.
 *
 * @package 		Authors_Commentary
 * @subpackage 	Authors_Commentary/admin
 * @author 			Mahfuz Rahman <asrmahfuz8@gmail.com>
 */
 class Authors_Commentary_Meta_Box {

	/**
	 * Registers this class with the WordPress API
	 *
	 * @since 	1.2.0
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
	}

	/**
	 * The function responsible for creating the actual meta box.
	 *
	 * @since 	1.2.0
	 */
	public function add_meta_box() {

		add_meta_box(
			'authors-commentary',
			"Author's Commentary",
			array( $this, 'display_meta_box' ),
			'post',
			'normal',
			'default'
		);

	}

	/**
	 * Renders the content of the meta box.
	 *
	 * @since 	1.2.0
	 */
	public function display_meta_box() {
		include_once( 'views/authors-commentary-navigation.php' );
	}

 }
