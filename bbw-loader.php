<?php

/*
Plugin Name: BuddyBar Widget
Plugin URI: http://slushman.com/plugins/buddybar-widget
Description: Places all the links on BuddyPressÕs BuddyBar in a sidebar widget.
Version: 0.1
Author: Slushman
Author URI: http://slushman.com
*/

/* Only load code that needs BuddyPress to run once BP is loaded and initialized. */
function buddybar_widget_init() {
    require( dirname( __FILE__ ) . '/buddybar-widget.php' );
}
add_action( 'bp_init', 'buddybar_widget_init' );

/* If you have code that does not need BuddyPress to run, then add it here. */

?>