<?php
/*
    Plugin Name: Nemateria Plugin
    Plugin URI: exemple.com 
    Description: plugin Stage Nemateria 2021
    Version: 1.0
    Author: Thomas Grillet
    License: GNU GPL2
    */

if (! defined('ABSPATH')){
    die;
}

function all_page(){
    require_once('admin/admin.php');
}

all_page();
