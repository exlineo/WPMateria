<?php

add_action( 'admin_menu', 'admin_nemateria_plugin' );


 function admin_nemateria_plugin()
    {
        add_menu_page(
	    __('Nemateria', 'nemateria_plugin'), // Page title
	    __('Nemateria', 'nemateria_plugin'), // Menu title
	    'manage_options',  // Capability
	    'nemateria_plugin', // Slug
	    'nemateria_plugin_page', // Callback page function
        'dashicons-format-gallery',
        '27'
	);
    }

    function nemateria_plugin_page() {
        require_once('content-admin.php');
        load_nemateria_plugin_page();
    }

add_action('admin_enqueue_scripts', 'reg_stylesheets');

function reg_stylesheets() {
    wp_enqueue_style('stylesheet', plugins_url('../assets/css/style.css',__FILE__));
}

add_action('admin_enqueue_scripts', 'reg_scripts');

function reg_scripts() {
    wp_enqueue_script('test', plugins_url('../assets/js/script.js',__FILE__), [], '1.0.0', true);
}

