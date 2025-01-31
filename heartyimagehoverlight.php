<?php

/**
*   Plugin Name: Hearty Image Hover Light
*   Plugin URI: http://www.heartyplugins.com/hearty-image-hover-light
*   Description: Hearty Image Hover Light is a free responsive WordPress plugin that lets you upload any image and assign it a title with a Font Awesome icon. On hover, the image can be further customized with a short description and a read more link
*   Version: 1.1
*   Author: Hearty Plugins
*   Author URI: http://www.heartyplugins.com
*   License: http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
*/

// no direct access

if (!defined('ABSPATH')) { die; }

function heartyimagehoverlight_add_css() {

	//------

	wp_register_style('hrty-bootstrap-css', plugins_url('/theme/bootstrap/hrty-bootstrap.css', __FILE__));
	wp_register_style('hrty-fontawesome-css', '//use.fontawesome.com/releases/v5.0.13/css/all.css');

	wp_register_style('heartyimagehoverlight-css', plugins_url('/theme/css/frontend.css', __FILE__));

	//------

	wp_enqueue_style('hrty-bootstrap-css');
	wp_enqueue_style('hrty-fontawesome-css');

  wp_enqueue_style('heartyimagehoverlight-css');

}

function heartyimagehoverlight_add_admin_css() {

	wp_register_style('hrty-bootstrap-css', plugins_url('/theme/bootstrap/hrty-bootstrap.css', __FILE__));
	wp_register_style('hrty-fontawesome-css', '//use.fontawesome.com/releases/v5.0.13/css/all.css');
	wp_register_style('heartyimagehoverlight-admin-css', plugins_url('/theme/css/admin.css', __FILE__));

  wp_enqueue_style('hrty-bootstrap-css');
  wp_enqueue_style('hrty-fontawesome-css');
	wp_enqueue_style('heartyimagehoverlight-admin-css');

	// Add the color picker css file
  wp_enqueue_style( 'wp-color-picker' );

}

function heartyimagehoverlight_add_js() {

	wp_register_script('hrty-bootstrap-js', plugins_url('/theme/bootstrap/hrty-bootstrap.js', __FILE__), array('jquery'));
	wp_register_script('hrty-viewportchecker-js', plugins_url('/theme/js/viewportchecker/viewportchecker.js', __FILE__), array('jquery'));

	wp_enqueue_script('hrty-bootstrap-js');
	wp_enqueue_script('hrty-viewportchecker-js');

}

function heartyimagehoverlight_add_admin_js() {

	wp_enqueue_media();

	wp_register_script('hrty-bootstrap-js', plugins_url('/theme/bootstrap/hrty-bootstrap.js', __FILE__), array('jquery'));
	wp_register_script('heartycolorpicker-js', plugins_url('/theme/js/colorpicker.js', __FILE__), array('wp-color-picker'), false, true);
	wp_register_script('heartyimagehoverlight-admin-js', plugins_url('/theme/js/admin.js', __FILE__), array('jquery'));

	wp_enqueue_script('hrty-bootstrap-js');
	wp_enqueue_script('heartycolorpicker-js');
	wp_enqueue_script('heartyimagehoverlight-admin-js');

}

function heartyimagehoverlight($atts) {

	require_once('inc/view.php');

	$atts = shortcode_atts(array('settings_instance' => 1), $atts, 'heartyimagehoverlight');

	$settings_instance = $atts['settings_instance'];

	$output = HeartyImageHoverLightView::generate_view($settings_instance);

	return $output;

}

function heartyimagehoverlight_widget() {

	require_once('inc/widget.php');

	register_widget('HeartyImageHoverLightWidget');

}

if (is_admin()) {

	require_once('inc/options.php');
	$heartyimagehoverlight_settings_page = new HeartyImageHoverLightSettingsPage();

	if (isset($_GET['page']) && $_GET['page'] == 'heartyimagehoverlight-setting-admin') {

		add_action('admin_enqueue_scripts', 'heartyimagehoverlight_add_admin_css');
		add_action('admin_enqueue_scripts', 'heartyimagehoverlight_add_admin_js');

	} else {

		add_action('widgets_init', 'heartyimagehoverlight_widget');

	}

} else {

	add_action('wp_enqueue_scripts', 'heartyimagehoverlight_add_css');
	add_action('wp_enqueue_scripts', 'heartyimagehoverlight_add_js');

	add_action('widgets_init', 'heartyimagehoverlight_widget');
	add_shortcode('heartyimagehoverlight', 'heartyimagehoverlight');

}

