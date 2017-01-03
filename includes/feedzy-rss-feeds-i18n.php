<?php
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://themeisle.com
 * @since      3.0.0
 *
 * @package    feedzy-rss-feeds
 * @subpackage feedzy-rss-feeds/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      3.0.0
 * @package    feedzy-rss-feeds
 * @subpackage feedzy-rss-feeds/includes
 * @author     Themeisle <friends@themeisle.com>
 */
class Feedzy_Rss_Feeds_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    3.0.0
	 * @access   public
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'feedzy_rss_translate',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}