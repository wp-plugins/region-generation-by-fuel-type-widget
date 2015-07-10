<?php
/*
Plugin Name: Australian Live Generation By Fuel Type Widget
Plugin URI: http://reneweconomy.com.au/
Description: Use [region-generation-by-fuel-type-widget token='your-api-token'] to insert this widget into your page.
Author: Global-Roam
Author URI: http://www.global-roam.com/
Version: 1.1
*/

add_shortcode( 'region-generation-by-fuel-type-widget', 'region_generation_by_fuel_type_widget' );

function region_generation_by_fuel_type_widget( $atts ) {

	// short code attributes can only contain upper and lowercase letters, digits and underscores
	// https://codex.wordpress.org/Shortcode_API
	$apiToken = $atts['token'];

	$shortcode_text = '<div id="gr-widget-region-generation-by-fuel-type"></div>';
	$shortcode_text .= '<script id="gr-widget-region-generation-by-fuel-type-script" ';
	$shortcode_text .= 'data-api-token="' . $apiToken . '" ';
	$shortcode_text .= 'src="http://widgets.global-roam.com/widgets/regionGenerationByFuelType" ';
	$shortcode_text .= 'type="text/javascript">';
	$shortcode_text .= '</script>';

	return $shortcode_text;
}
