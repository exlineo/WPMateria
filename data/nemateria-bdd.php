<?php

// Classe contenant les fonctions permettant d'activer/désactiver/désinstaller les BDD du plugin lors de son installation/désinstallation
class NemateriaBdd
{
    // Active la création des tables mentionnées lors de l'activation du plugin 
    function active()
    {
       data_server();
       data_collection();
       data_notice();
    }

    // Lors de la désactivation du plugin les tables créées précédemment ne sont pas supprimées
    function deactivate()
    {
        //bdd_deactivate();
    }
    
    // Supprime les tables créées précédemment lors de la désinstallation du plugin
    function uninstall()
    {
        bdd_uninstall();
    }
}

/**
 * Creation de la table Server
 */
function data_server(){
    global $wpdb;
      $charset_collate = $wpdb->get_charset_collate();
      
      $sql = "CREATE TABLE IF NOT EXISTS`{$wpdb->base_prefix}nemateriabdd_server` (
    idServeur int AUTO_INCREMENT NOT NULL,
    adresseServeur varchar(100) NOT NULL,
    cleSecurite varchar(100) NOT NULL,
    valeurSecurite varchar(100) NOT NULL,
    statutUtilisateur bool NOT NULL,
    PRIMARY KEY  (idServeur)
  ) $charset_collate;";
  
  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
  dbDelta($sql);
  }

/**
 * Creation de la table Collection
 */
function data_collection(){
  global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE IF NOT EXISTS`{$wpdb->base_prefix}nemateria_collection` (
  idCollection int AUTO_INCREMENT NOT NULL,
  titreCollection varchar(100) NOT NULL,
  alias varchar(100) NOT NULL,
  descriptionCollection varchar(255) NOT NULL,
  typeCollection varchar(56) NOT NULL,
  createur varchar(56) NOT NULL,
  fonds varchar(56) NULL,
  dateCollection date NULL,
  langueCollection varchar(8) NULL,
  notices text NULL,
  series varchar(100) NULL,
  PRIMARY KEY  (idCollection)
) $charset_collate;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($sql);
}

/**
 * Creation de la table Notice
 */
function data_notice(){
  global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE IF NOT EXISTS`{$wpdb->base_prefix}nemateria_notice` (
  idNotice int AUTO_INCREMENT NOT NULL,
  collectionId int NOT NULL,
  dateNotice date NULL,
  prefixNotice varchar(255) NULL,
  metadonnees varchar(255) NOT NULL,
  createurNotice varchar(56) NOT NULL,
  descriptionNotice varchar(255) NOT NULL,
  formatNotice varchar(255) NOT NULL,
  droitsNotice varchar(255)NOT NULL,
  PRIMARY KEY  (idNotice),
  KEY FK_CollectionId (collectionId),
  CONSTRAINT FK_CollectionId FOREIGN KEY (collectionId) REFERENCES `{$wpdb->base_prefix}nemateria_collection` (idCollection)
) $charset_collate;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($sql);
}

/**
 * Supprimer toutes les tables
 */
function bdd_uninstall(){
    global $wpdb;
    $wp_nemateriabdd_server = $wpdb->prefix . "nemateriabdd_server";
    $wp_nemateria_collection = $wpdb->prefix . "nemateria_collection";
    $wp_nemateria_notice = $wpdb->prefix . "nemateria_notice";
  
    $wpdb->query("DROP TABLE IF EXISTS $wp_nemateriabdd_server");
    $wpdb->query("DROP TABLE IF EXISTS $wp_nemateria_collection");
    $wpdb->query("DROP TABLE IF EXISTS $wp_nemateria_notice");
  }