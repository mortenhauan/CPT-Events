<?php
/*
Plugin Name: Skryf Custom Post Type Events
Version: 1.0dev
Author: Morten Hauan
Author URI: http://hauan.me
*/

/*
LOAD LOCALIZATION FILES
*/
load_plugin_textdomain( 'skryf-cpt-events', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );


/*
INCLUDE CORE FILES
*/
require_once("classes/skryf-cpt-events-core.php"); // Core class



/*
INIT PLUGIN
*/
add_action("init", "skryf_cpt_events_init");
function skryf_cpt_events_init() {

	// Make global
	global $skryf_cpt_events;
	$skryf_cpt_events = new SkryfCptEvents();
	
}