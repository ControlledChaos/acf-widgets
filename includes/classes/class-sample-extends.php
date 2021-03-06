<?php
/**
 * Sample/starter extended class
 *
 * This extends a parent class to create a unique instance.
 *
 * @see `includes/classes/README.md`;
 *
 * @package    ACF_Widgets
 * @subpackage Classes
 * @category   General
 * @since      1.0.0
 */

namespace ACF_Widgets\Classes;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

class Sample_Extends extends Sample {

	/**
	 * Sample string
	 *
	 * This overrides the property in the parent class.
	 * Document how and where this is used.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    string Returns the string.
	 *                Document what is expected or required.
	 */
	protected $sample_string = 'This redefines the parent property.';

	/**
	 * Sample private string
	 *
	 * This property can only be used in this class.
	 * Document how and where this is used.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    string Returns the string.
	 *                Document what is expected or required.
	 */
	private $sample_private_string = 'This is private property.';

	/**
	 * Instance of the class
	 *
	 * This method can be used to call an instance
	 * of the class from outside the class.
	 *
	 * Delete this method if not needed.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns an instance of the class.
	 */
	public static function instance() {

		// Varialbe for the instance of the class.
		static $sample_extends_instance = null;

		// Set variable for new instance.
		if ( is_null( $sample_extends_instance ) ) {
			$sample_extends_instance = new self;
		}

		// Return the instance.
		return $sample_extends_instance;
	}

	/**
	 * Constructor method
	 *
	 * Calls the parent constructor.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {
		parent :: __construct();
	}

	/**
	 * Sample method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function sample_method() {
		return null;
	}
}

/**
 * Class instance
 *
 * Puts an instance of the class into a function.
 *
 * Returns an instance of the class that can be used
 * instead of calling the class static instance method.
 *
 * Delete this function if not needed.
 *
 * @example Call a method from the namespaced class:
 *          `Classes\acfw_sample_extends_class()->sample_method();`
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function acfw_sample_extends_class() {
	return Sample_Extends :: instance();
}

/**
 * Run an instance of the class.
 *
 * Uncomment to use.
 */
// acfw_sample_extends_class();
