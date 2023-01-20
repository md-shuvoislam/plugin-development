<?php

/**
* @package MyBasicPlugin
*/

/**
    Plugin Name: My Basic Plugin
    Plugin URI: https://shuvo.work
    Description: Handle the basics with this plugin.
    Version: 1.0.0
    Requires at least: 5.2
    Requires PHP:      7.2
    Author:            Shuvo Islam
    Author URI:        https://shuvo.work
    License:           GPL v2 or later
    License URI:       https://www.gnu.org/licenses/gpl-2.0.html
    Update URI:        https://example.com/my-plugin/
    Text Domain:       my-basics-plugin
    Domain Path:       /languages
*/

if ( ! defined ('ABSPATH') ) {
    die;
}

defined ( 'ABSPATH' ) or die( 'Hey, you can\t access this file, you silly' );

if ( ! function_exists('add_action') ){
    echo 'Hey, you can\t access this file, you silly';
    exit;
}  