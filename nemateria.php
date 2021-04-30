<?php
/*
    Plugin Name: Nemateria Plugin
    Plugin URI: exemple.com 
    Description: plugin Stage Nemateria 2021
    Version: 1.0
    Author: Thomas Grillet
    License: GNU GPL2
    */

defined('ABSPATH') || die();

// 
class Nemateria
{
    public function __construct()
    {
        add_action( 'admin_menu', [ $this, 'admin_awesome_plugin_menu'] );
    }

    public function admin_awesome_plugin_menu()
    {
        add_menu_page(
	    __('My Awesome Plugin', 'my-awesome-plugin'), // Page title
	    __('My Awesome Plugin', 'my-awesome-plugin'), // Menu title
	    'manage_options',  // Capability
	    'my-awesome-plugin', // Slug
	    [ &$this, 'load_awesome_plugin_page'], // Callback page function
	);
    }

    public function load_awesome_plugin_page() 
    { 
        echo '<h1>' . __( 'My Awesome Plugin', 'my-awesome-plugin' ) . '</h1>'; 
        echo '<p>' . __( 'Welcome to My Awesome Plugin', 'my-awesome-plugin' ) . '</p>'; 
    }
}

new Nemateria();