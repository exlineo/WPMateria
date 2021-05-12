<?php
/*
    Plugin Name: Nemateria Plugin
    Plugin URI: exemple.com 
    Description: plugin Stage Nemateria 2021
    Version: 1.0
    Author: Thomas Grillet
    License: GNU GPL2
    */

// si la constante ABSPATH n’est pas définie (autrement dit si quelqu’un cherche à accéder à ce fichier en-dehors de WordPress) on coupe court à tout
if (! defined('ABSPATH')){
    die;
}

function all_page(){
    require_once('admin/admin.php');
    require_once('data/nemateria-bdd.php');
}

all_page();

/**
 * Activation of the plugin with the BDD
 */
if ( class_exists('NemateriaBdd')){
    $nemateria = new NemateriaBdd();
    // activation
    register_activation_hook(__FILE__, array($nemateria, 'active'));
    
    // deactivation
    //register_deactivation_hook(__FILE__, array($nemateria, 'deactivate'));
    
    // uninstall
    register_uninstall_hook(__FILE__, array($nemateria, 'uninstall'));
}