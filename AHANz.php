<?php

/*
* Plugin Name: Auto Hide WP Admin Notices by z
* Description: Hide all kind of admin advertisings 
* Version: 2023.1.24
* Author: martinarnedo.es
* Author URI: https://martinarnedo.es/
*/

add_action('admin_enqueue_scripts', 'ahanz');
add_action('login_enqueue_scripts', 'ahanz');
function ahanz() {
	
		echo '<!--esto quita del medio todas las notificaciones, pero siguen estando zZ-->
		    <style>.notice, .notice-warning, .update-nag, .updated, .error, .is-dismissible { display:none; }</style>';
	
}
?>