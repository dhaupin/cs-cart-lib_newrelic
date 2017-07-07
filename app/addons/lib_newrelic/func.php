<?php

use Tygh\Registry;

if(!defined('BOOTSTRAP')) {die('Access denied');}

if(!function_exists('newrelic_get_browser_timing_header')) {
	function newrelic_get_browser_timing_header() {
		echo '<!--[if IE]><!-- Function "newrelic_get_browser_timing_header()" was not found. Install or enable PHP agent https://docs.newrelic.com/docs/agents/php-agent --><![endif]-->';
	}
}

if(!function_exists('newrelic_get_browser_timing_footer')) {
	function newrelic_get_browser_timing_footer() {
		echo '<!--[if IE]><!-- Function "newrelic_get_browser_timing_footer()" was not found. Install or enable PHP agent https://docs.newrelic.com/docs/agents/php-agent --><![endif]-->';
	}
}

function fn_lib_newrelic_compat() {
	
	$module = extension_loaded('newrelic') ? '<span style="color:green;">Loaded</span>' : '<span style="color:red;">Not Loaded</span>';
	$auto_instrument = ini_get('newrelic.browser_monitoring.auto_instrument') ? '<span style="color:green;">Enabled</span>' : '<span style="color:red;">Disabled</span>';
	
	$html = '<p style="text-align: center;">';
	$html .= "<strong>Newrelic PHP Module: $module</strong></br>";
	$html .= "<strong>Auto Instrument: $auto_instrument</strong></br>";
	$html .= '</p>';
	
	return $html;
}