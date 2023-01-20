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

// when start plugin use this three on one method secure plugin

// if ( ! defined ('ABSPATH') ) {
//     die;
// }

defined ( 'ABSPATH' ) or die( 'Hey, you can\t access this file, you silly' );

// if ( ! function_exists('add_action') ){
//     echo 'Hey, you can\t access this file, you silly';
//     exit;
// }  

// PHP OOP method on plugin development

class MybasicPlugin {

    // activation 

    function activate() {
        // generate a CPT
        // flush rewrite rules
    }

    // deactivation

    function deactivate() {
        // flush rewrite rules
    }

    // uninstall 

    function uninstall() {
        // delete cpt
        // delete all the plugin data from the DB
    }
}

if ( class_exists('MybasicPlugin') ) {
    $mybasicplugin = new MybasicPlugin();
}


// activation

register_activation_hook( __FILE__, array( $mybasicplugin, 'activate' ) );

// activation

register_deactivation_hook( __FILE__, array( $mybasicplugin, 'deactivate' ) );

// uninstall

