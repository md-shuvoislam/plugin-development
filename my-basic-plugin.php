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

    function __construct() {
        add_action('init', array ( $this, 'custom_post_type' ) );
    }

    // activation 

    function activate() {
        // generate a CPT
        $this->custom_post_type();
        // flush rewrite rules
        flush_rewrite_rules();
    }

    // deactivation

    function deactivate() {
        // flush rewrite rules
        flush_rewrite_rules();
    }

    // uninstall 

    function uninstall() {
        // delete cpt
        // delete all the plugin data from the DB
    }

    function custom_post_type() {
        register_post_type( 'book', ['public' => true, 'label'  => 'Books'] );
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

