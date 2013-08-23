<?php
/*
Plugin Name: Themeium Shortcodes
Plugin URI: http://www.themeium.com/shortcodes
Description: A simple shortcode generator. Add buttons, columns, tabs, toggles and alerts to your theme. Based on ZillaShortcodes.
Version: 1.2
Author: Themeium
Author URI: http://www.themeium.com
*/

class ThemeiumShortcodes {

    function __construct() 
    {	
    	require_once( plugin_dir_path( __FILE__ ) .'shortcodes.php' );
    	define('THEMEIUM _TINYMCE_URI', plugin_dir_url( __FILE__ ) .'tinymce');
		define('THEMEIUM_TINYMCE_DIR', plugin_dir_path( __FILE__ ) .'tinymce');
		
        add_action('init', array(&$this, 'init'));
        add_action('admin_init', array(&$this, 'admin_init'));
	}
	
	/**
	 * Registers TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
	function init()
	{
		if( ! is_admin() )
		{
			wp_enqueue_style( 'themeium-shortcodes', plugin_dir_url( __FILE__ ) . 'shortcodes.css' );
			wp_enqueue_script( 'jquery-ui-accordion' );
			wp_enqueue_script( 'jquery-ui-tabs' );
			wp_enqueue_script( 'themeium-shortcodes-lib', plugin_dir_url( __FILE__ ) . 'js/themeium-shortcodes-lib.js', array('jquery', 'jquery-ui-accordion', 'jquery-ui-tabs') );
		}
		
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
			return;
	
		if ( get_user_option('rich_editing') == 'true' )
		{
			add_filter( 'mce_external_plugins', array(&$this, 'add_rich_plugins') );
			add_filter( 'mce_buttons', array(&$this, 'register_rich_buttons') );
		}
	}
	
	// --------------------------------------------------------------------------
	
	/**
	 * Defins TinyMCE rich editor js plugin
	 *
	 * @return	void
	 */
	function add_rich_plugins( $plugin_array )
	{
		$plugin_array['themeiumShortcodes'] = THEMEIUM_TINYMCE_URI . '/plugin.js';
		return $plugin_array;
	}
	
	// --------------------------------------------------------------------------
	
	/**
	 * Adds TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
	function register_rich_buttons( $buttons )
	{
		array_push( $buttons, "|", 'themeium_button' );
		return $buttons;
	}
	
	/**
	 * Enqueue Scripts and Styles
	 *
	 * @return	void
	 */
	function admin_init()
	{
		// css
		wp_enqueue_style( 'themeium-popup', THEMEIUM_TINYMCE_URI . '/css/popup.css', false, '1.0', 'all' );
		
		// js
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_script( 'jquery-livequery', THEMEIUM_TINYMCE_URI . '/js/jquery.livequery.js', false, '1.1.1', false );
		wp_enqueue_script( 'jquery-appendo', THEMEIUM_TINYMCE_URI . '/js/jquery.appendo.js', false, '1.0', false );
		wp_enqueue_script( 'base64', THEMEIUM_TINYMCE_URI . '/js/base64.js', false, '1.0', false );
		wp_enqueue_script( 'themeium-popup', THEMEIUM_TINYMCE_URI . '/js/popup.js', false, '1.0', false );
		
		wp_localize_script( 'jquery', 'ThemeiumShortcodes', array('plugin_folder' => WP_PLUGIN_URL .'/themeium-shortcodes') );
	}
    
}
$themeium_shortcodes = new ThemeiumShortcodes();

?>