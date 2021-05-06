<?php

class NemateriaBdd
{
    function active()
    {
       data_server();
    }

    function deactivate()
    {
        bdd_deactivate();
    }
    
    function uninstall()
    {
        // delete CPT
        // delete all the plugin data from the DB   
    }
}

/**
 * Creation of Table Server
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
 * Creation of Table Collection
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
 * Creation of Table Notice
 */
function data_notice(){
  global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE IF NOT EXISTS`{$wpdb->base_prefix}nemateria_notice` (
  idNotice int AUTO_INCREMENT NOT NULL,
  idCollection int NOT NULL,
  dateNotice date NULL,
  prefixNotice varchar(255) NULL,
  metadonnees varchar(255) NOT NULL,
  createurNotice varchar(56) NOT NULL,
  descriptionNotice varchar(255) NOT NULL,
  formatNotice varchar(255) NOT NULL,
  droitsNotice varchar(255)NOT NULL,
  PRIMARY KEY  (idNotice)
  KEY Utilisateur_Echange1_FK (idCollection),
  CONSTRAINT Utilisateur_Echange1_FK FOREIGN KEY (idCollection) REFERENCES `{$wpdb->base_prefix}nemateria_collection` (idCollection),
) $charset_collate;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($sql);
}

/**
 * Delet all table
 */
function bdd_deactivate(){
    global $wpdb;
    $wp_nemateriabdd_server = $wpdb->prefix . "nemateriabdd_server";
    $wp_nemateria_collection = $wpdb->prefix . "nemateria_collection";
    $wp_nemateria_notice = $wpdb->prefix . "nemateria_notice";
  
    $wpdb->query("DROP TABLE IF EXISTS $wp_nemateriabdd_server");
    $wpdb->query("DROP TABLE IF EXISTS $wp_nemateria_collection");
    $wpdb->query("DROP TABLE IF EXISTS $wp_nemateria_notice");
  }