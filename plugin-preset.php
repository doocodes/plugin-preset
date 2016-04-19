<?php
/*
* Plugin Name: Plugin Preset
* Version: 1.0.0
* Description: Plugin Description
* Author: Doocodes <milos@themelaboratory.com>
* Text Domain: plugin-preset-domain
*/

if ( ! defined( 'ABSPATH' ) ) exit;


/* -------------------------------------------------------------------------------------------------------- */
/* --------------------------------------------- Core Constants ------------------------------------------- */
/* -------------------------------------------------------------------------------------------------------- */


define( 'DOO_PLUGIN_PRESET_FILE'       , __FILE__ );
define( 'DOO_PLUGIN_PRESET_DIR'        , plugin_dir_path( __FILE__ ) );
define( 'DOO_PLUGIN_PRESET_URI'        , plugin_dir_url( __FILE__ ) );

define( 'DOO_PLUGIN_PRESET_BASE'       , trim(plugin_basename(DOO_PLUGIN_DIR)));

$plugin_data = get_plugin_data(__FILE__);

define( 'DOO_PLUGIN_PRESET_SLUG'       , strtolower(str_replace(' ', '-',  $plugin_data['Name'])));
define( 'DOO_PLUGIN_PRESET_DOMAIN'     , $plugin_data['TextDomain'] );
define( 'DOO_PLUGIN_PRESET_VER'        , $plugin_data['Version']);

define( 'DOO_PLUGIN_PRESET_DEBUG'      , true);



/* -------------------------------------------------------------------------------------------------------- */
/* ------------------------------------------ Prebuilt plugin Features ------------------------------------ */
/* -------------------------------------------------------------------------------------------------------- */


require_once 'inc/helpers.php';
require_once 'inc/class.doo-plugin-preset.php';


// Instantiate Plugin
global $doo_plugin_preset;
$doo_plugin_preset = DOO_Plugin_Preset::single();