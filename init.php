<?php
/**
 * Initialize plugin functionality
 *
 * @package    ACF_Widgets
 * @subpackage Init
 * @category   Core
 * @since      1.0.0
 */

namespace ACF_Widgets;

// Alias namespaces.
use ACF_Widgets\Classes as Classes;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

// Hook initialization functions.
add_action( 'init', __NAMESPACE__ . '\init' );
add_action( 'admin_init', __NAMESPACE__ . '\admin_init' );

/**
 * Initialization function
 *
 * Loads PHP classes and text domain.
 * Instantiates various classes.
 * Adds settings link in the plugin row.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function init() {

	// Standard plugin installation.
	load_plugin_textdomain(
		'acf-widgets',
		false,
		dirname( ACFW_BASENAME ) . '/languages'
	);

	// If this is in the must-use plugins directory.
	load_muplugin_textdomain(
		'acf-widgets',
		dirname( ACFW_BASENAME ) . '/languages'
	);

	/**
	 * Class autoloader
	 *
	 * The autoloader registers plugin classes for later use,
	 * such as running new instances below.
	 */
	require_once ACFW_PATH . 'includes/autoloader.php';
}

/**
 * Admin initialization function
 *
 * Instantiates various classes.
 *
 * @since  1.0.0
 * @access public
 * @global $pagenow Get the current admin screen.
 * @return void
 */
function admin_init() {

	// Access current admin page.
	global $pagenow;
}
