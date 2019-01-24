<?php
/*
    Plugin Name: JP Simple Maintenance Mode
    Plugin URI: https://janepedia.com
    Description: A basic maintenance mode plugin for WordPress if you're not interested in all the bells and whistles of other plugins.
    Author: Jane Lawson
    Author URI: https://janepedia.com
    Version: 1.0
*/
// if someone attempts to visit plugin directly, they will see a poop emoji
    if ( !function_exists( 'add_action' ) ) {
        echo '&#128169;';
        exit;
    }
// Activate WordPress Maintenance Mode
function wp_maintenance_mode() {
    if (!current_user_can('edit_themes') || !is_user_logged_in()) {
        wp_die('<h1>Under Maintenance</h1>
		<br />Be back whenever.');
    }
}
add_action('get_header', 'wp_maintenance_mode');
?>