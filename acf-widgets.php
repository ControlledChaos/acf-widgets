<?php
/**
 * ACF Widgets
 *
 * Dynamic widget creation for ACF.
 *
 * @package     ACF_Widgets
 * @version     1.0.0
 * @link        https://github.com/ControlledChaos/acf-widgets
 *
 * Plugin Name:  ACF Widgets
 * Plugin URI:   https://github.com/ControlledChaos/acf-widgets
 * Description:  Dynamic widget creation for ACF.
 * Version:      1.0.0
 * Author:       Controlled Chaos Design
 * Author URI:   http://ccdzine.com/
 * Text Domain:  acf-widgets
 * Domain Path:  /languages
 * Requires PHP: 5.3
 * Requires at least: 3.8
 * Tested up to: 5.7.1
 */

namespace ACF_Widgets;

// Alias namespaces.
use ACF_Widgets\Classes\Activate as Activate;

 /**
 * License & Warranty
 *
 * ACF Widgets is free software.
 * It can be redistributed and/or modified ad libidum.
 *
 * ACF Widgets is distributed WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Constant: Plugin base name
 *
 * @since 1.0.0
 * @var   string The base name of this plugin file.
 */
define( 'ACFW_BASENAME', plugin_basename( __FILE__ ) );

// Get the PHP version class.
require_once plugin_dir_path( __FILE__ ) . 'includes/classes/class-php-version.php';

// Get plugin configuration file.
require plugin_dir_path( __FILE__ ) . 'config.php';

/**
 * Activation & deactivation
 *
 * The activation & deactivation methods run here before the check
 * for PHP version which otherwise disables the functionality of
 * the plugin.
 */

// Get the plugin activation class.
include_once ACFW_PATH . 'activate/classes/class-activate.php';

// Get the plugin deactivation class.
include_once ACFW_PATH . 'activate/classes/class-deactivate.php';

/**
 * Register the activation & deactivation hooks
 *
 * The namspace of this file must remain escaped by use of the
 * backslash (`\`) prepending the activation hooks and corresponding
 * functions.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
\register_activation_hook( __FILE__, __NAMESPACE__ . '\activate_plugin' );
\register_deactivation_hook( __FILE__, __NAMESPACE__ . '\deactivate_plugin' );

/**
 * Activation callback
 *
 * The code that runs during plugin activation.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function activate_plugin() {

	// Instantiate the Activate class.
	$activate = new Activate\Activate;

	/**
	 * Run methods from the Activate class.
	 * For instance, the sample options method…
	 */

	// Add & update options.
	$activate->options();
}

/**
 * Deactivation callback
 *
 * The code that runs during plugin deactivation.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function deactivate_plugin() {

	// Instantiate the Activate class.
	$activate = new Activate\Deactivate;

	// Run methods from the Deactivate class.
}

/**
 * Disable plugin for PHP version
 *
 * Stop here if the minimum PHP version is not met.
 * Prevents breaking sites running older PHP versions.
 *
 * @since  1.0.0
 * @return void
 */
if ( ! Classes\acfw_php()->version() ) {
	return;
}

// Get the plugin initialization file.
require_once ACFW_PATH . 'init.php';

define( 'ACFW_STORE_URL', 'https://acfwidgets.com' );
define( 'ACFW_ITEM_NAME', 'ACF Widgets' );
define( 'ACFW_FILE' , __FILE__ );

add_action('after_setup_theme', __NAMESPACE__ . '\acfw_globals');
function acfw_globals(){
	if ( apply_filters( 'acfw_lite', false ) )
		define( 'ACFW_LITE', false );
	if ( apply_filters( 'acfw_include', false ) )
		define('ACFW_INCLUDE', true);
}

// Check to see if ACF is active
include_once('includes/acf-404.php');


$GLOBALS['acfw_default_widgets'] = array('pages', 'calendar', 'archives', 'meta', 'search', 'text', 
	'categories', 'recent-posts', 'recent-comments', 'rss', 'tag_cloud', 'nav_menu');

include_once('includes/helper-functions.php');

include_once('includes/admin-setup.php');

require_once('includes/classes/core/ACFW_Widget.php');

require_once('includes/classes/core/ACFW_Widget_Factory.php');

include_once('includes/widgets-setup.php');

include_once('includes/default-widgets.php');
