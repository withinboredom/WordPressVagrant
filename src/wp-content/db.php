<?php
/*
Plugin Name: Dev Rectifier
Plugin URI:
Description: Recitifies certain issues
Author: Robert Landers
Version: 1
Author URI: http://withinboredom.info
 */
// paste this in a (new) file, wp-content/db.php

add_filter ( 'pre_option_home', 'test_localhosts' );
add_filter ( 'pre_option_siteurl', 'test_localhosts' );
function test_localhosts( ) {
    if (strcasecmp($_SERVER['HTTP_HOST'], 'localhost') == 0) {
        return "http://localhost";
    }
    else return false;
}
