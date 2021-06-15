<?php
/**
 * Register plugin classes
 *
 * The autoloader registers plugin classes for later use.
 *
 * @package    ACF_Widgets
 * @subpackage Includes
 * @category   Classes
 * @since      1.0.0
 */

namespace ACF_Widgets;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Class files
 *
 * Defines the class directories and file prefixes.
 *
 * @since 1.0.0
 * @var   array Defines an array of class file paths.
 */
define( 'ACFW_CLASS', [
	'core'     => ACFW_PATH . 'includes/classes/core/class-',
	'settings' => ACFW_PATH . 'includes/classes/settings/class-',
	'tools'    => ACFW_PATH . 'includes/classes/tools/class-',
	'media'    => ACFW_PATH . 'includes/classes/media/class-',
	'users'    => ACFW_PATH . 'includes/classes/users/class-',
	'vendor'   => ACFW_PATH . 'includes/classes/vendor/class-',
	'admin'    => ACFW_PATH . 'includes/classes/backend/class-',
	'front'    => ACFW_PATH . 'includes/classes/frontend/class-',
	'general'  => ACFW_PATH . 'includes/classes/class-',
] );

/**
 * Array of classes to register
 *
 * When you add new classes to your version of this plugin you may
 * add them to the following array rather than requiring the file
 * elsewhere. Be sure to include the precise namespace.
 *
 * @since 1.0.0
 * @var   array Defines an array of class files to register.
 */
define( 'ACFW_CLASSES', [

	// Base class.
	'ACF_Widgets\Classes\Base' => ACFW_CLASS['general'] . 'base.php',

	// Core classes.
	// 'ACF_Widgets\Classes\Class' => ACFW_CLASS['core'] . 'file.php',

	// Settings classes.
	// 'ACF_Widgets\Classes\Class' => ACFW_CLASS['settings'] . 'file.php',

	// Tools classes.
	// 'ACF_Widgets\Classes\Class' => ACFW_CLASS['tools'] . 'file.php',

	// Media classes.
	// 'ACF_Widgets\Classes\Class' => ACFW_CLASS['media'] . 'file.php',

	// Users classes.
	// 'ACF_Widgets\Classes\Class' => ACFW_CLASS['users'] . 'file.php',

	// Vendor classes.
	// 'ACF_Widgets\Classes\Class' => ACFW_CLASS['vendor'] . 'file.php',

	// Backend/admin classes,
	// 'ACF_Widgets\Classes\Class' => ACFW_CLASS['admin'] . 'file.php',

	// Frontend classes.
	// 'ACF_Widgets\Classes\Class' => ACFW_CLASS['front'] . 'file.php',

	// General/miscellaneos classes.
	// 'ACF_Widgets\Classes\Class' => ACFW_CLASS['general'] . 'file.php',

] );

/**
 * Autoload class files
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
spl_autoload_register(
	function ( string $class ) {
		if ( isset( ACFW_CLASSES[ $class ] ) ) {
			require ACFW_CLASSES[ $class ];
		}
	}
);
