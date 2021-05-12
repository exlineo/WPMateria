<?php

// Appeler la fonction admin_nemateria_plugin
add_action( 'admin_menu', 'admin_nemateria_plugin' );


 function admin_nemateria_plugin()
    {
        // création des onglets du menu dans la page d'administration
        add_menu_page(
	    __('Nemateria', 'nemateria_plugin'), // Page title
	    __('Nemateria', 'nemateria_plugin'), // Menu title
	    'manage_options',  // Capability
	    'nemateria_plugin', // Slug
	    'nemateria_plugin_page', // Callback page function
        'dashicons-format-gallery', // rajout d'une icone personnaliser pour identifier le plugin
        '27' // définit la position du plugin dans le menu latéral de WP
	);
    }
// Charger le contenu de la page HTML de l'admin
function nemateria_plugin_page() {
    require_once('content-admin.php');
    load_nemateria_plugin_page();
}
// Appeler la page CSS
add_action('admin_enqueue_scripts', 'reg_stylesheets');

// Définir le CSS à intégrer
function reg_stylesheets() {
    wp_enqueue_style('stylesheet', plugins_url('../assets/css/style.css',__FILE__));
}
// Appeler la fonction pour intégrer le script javascript
add_action('admin_enqueue_scripts', 'reg_scripts');

// Charger le fichier javascript qui permet de gérer l'onglet avec les contenus administrables (HTML)
function reg_scripts() {
    wp_enqueue_script('test', plugins_url('../assets/js/script.js',__FILE__), [], '1.0.0', true);
}

