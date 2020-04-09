<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       ludwigbethnicer.me
 * @since      1.0.0
 *
 * @package    User_role_redirect_page
 * @subpackage User_role_redirect_page/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    User_role_redirect_page
 * @subpackage User_role_redirect_page/includes
 * @author     Ludwig Bethnicer C. Napigkit <napigkitludwigbethnicer@gmail.com>
 */
class User_role_redirect_page_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'user_role_redirect_page',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
