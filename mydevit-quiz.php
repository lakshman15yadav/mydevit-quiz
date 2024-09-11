<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mydevitsolutions.com
 * @since             1.0.0
 * @package           Mydevit_Quiz
 *
 * @wordpress-plugin
 * Plugin Name:       MyDevIt Quiz Plugin
 * Plugin URI:        https://mydevitsolutions.com
 * Description:       Plugin for mileage calculate
 * Version:           1.0.0
 * Author:            Mydevit
 * Author URI:        https://mydevitsolutions.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mydevit-quiz
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MYDEVIT_QUIZ_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mydevit-quiz-activator.php
 */
function activate_mydevit_quiz() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mydevit-quiz-activator.php';
	Mydevit_Quiz_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mydevit-quiz-deactivator.php
 */
function deactivate_mydevit_quiz() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mydevit-quiz-deactivator.php';
	Mydevit_Quiz_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mydevit_quiz' );
register_deactivation_hook( __FILE__, 'deactivate_mydevit_quiz' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mydevit-quiz.php';
add_shortcode( 'calculator_form', 'display_mydevit_calculator' );
function display_mydevit_calculator($atts) {

	$attributes = shortcode_atts( array(
		'title' => false,
		'limit' => 4,
	), $atts );
	
	ob_start();

	// include template with the arguments (The $args parameter was added in v5.5.0)
	require_once plugin_dir_path( __FILE__ ) . 'includes/index.php';

	return ob_get_clean();

}
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mydevit_quiz() {

	$plugin = new Mydevit_Quiz();
	$plugin->run();

}
run_mydevit_quiz();
