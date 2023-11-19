<?php
/*
Plugin Name: CI Bra size calculator
Plugin URI: https://www.calculator.io/bra-size-calculator/
Description: To get a bra that fits properly, it is vital to measure your bra size. This free calculator will tell you how to measure your breast size.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_bra_size_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Bra Size Calculator by Calculator.iO";

function display_ci_bra_size_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Bra Size Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_bra_size_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_bra_size_calculator', 'display_ci_bra_size_calculator' );