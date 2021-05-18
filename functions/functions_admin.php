<?php

// Fonction permettant d'intégrer les variables à la table correspondante
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

function recup_server() {
  global $wpdb;	// Appel de la BDD 
	$wp_nemateriabdd_server = $wpdb->base_prefix . 'nemateriabdd_server'; // Sécurisation de la table
	$WPBDD_url_server = $wpdb->get_results("SELECT idServeur, adresseServeur FROM $wp_nemateriabdd_server"); // Requête à la BDD
  return $WPBDD_url_server;
}