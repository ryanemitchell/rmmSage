<?php
/**
 * Prevent update notification for plugin
 * MOstly for WP SYNC DB as I (@ryanemitchell) prefer an older version.
 *
 */
function disable_plugin_updates( $value ) {

	$pluginsToDisable = [
		'wp-migrate-db-pro/wp-migrate-db-pro.php',
		'plugin-folder2/plugin2.php'
	];

	if ( isset($value) && is_object($value) ) {
		foreach ($pluginsToDisable as $plugin) {
			if ( isset( $value->response[$plugin] ) ) {
				unset( $value->response[$plugin] );
			}
		}
	}
	return $value;
}
add_filter( 'site_transient_update_plugins', 'disable_plugin_updates' );
