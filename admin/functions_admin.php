<?php

function insert_server($url, $identifiant, $password) {
    global $wpdb;
    $wp_nemateriabdd_server = $wpdb->prefix . "nemateriabdd_server";

    $wpdb->insert($wp_nemateriabdd_server, 
    array(
      'adresseServeur'          => $url,
      'cleSecurite'       => $identifiant,
      'valeurSecurite'       => $password,
    ));
}