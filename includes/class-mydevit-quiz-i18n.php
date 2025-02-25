<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://mydevitsolutions.com
 * @since      1.0.0
 *
 * @package    Mydevit_Quiz
 * @subpackage Mydevit_Quiz/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mydevit_Quiz
 * @subpackage Mydevit_Quiz/includes
 * @author     Mydevit <mydevitdevelopers@gmail.com>
 */
class Mydevit_Quiz_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mydevit-quiz',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
