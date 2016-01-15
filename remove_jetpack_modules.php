<?php
add_filter( 'jetpack_get_available_modules', 'prefix_hide_jetpack_modules' );
/**
* Disable all non-whitelisted jetpack modules.
*
* As it's written, this will allow all of the currently available Jetpack
* modules to work display and be activated normally.
*
* If there's a module you'd like to disable, simply comment it out or remove it
* from the whitelist and it will no longer be available for activation.
*
* @author WP Site Care
* @link   http://www.wpsitecare.com/disable-jetpack-modules/
* @param  array $modules the existing list of Jetpack modules
* @return array $modules the amended list of Jetpack modules
*/
function prefix_hide_jetpack_modules( $modules ) {
	// A list of Jetpack modules which are allowed to activate.
	$whitelist = array(
		'after-the-deadline',
		'carousel',
		'comments',
		'contact-form',
		'custom-content-types',
		'custom-css',
		'enhanced-distribution',
		'gravatar-hovercards',
		'infinite-scroll',
		'json-api',
		'latex',
		'likes',
		'manage',
		'markdown',
		'minileven',
		'monitor',
		'notes',
		'omnisearch',
		'photon',
		'post-by-email',
		'protect',
		'publicize',
		'related-posts',
		'sharedaddy',
		'shortcodes',
		'shortlinks',
		'site-icon',
		'sso',
		'stats',
		'subscriptions',
		'tiled-gallery',
		'vaultpress',
		'verification-tools',
		'videopress',
		'widget-visibility',
		'widgets',
	);

	return array_intersect_key( $modules, array_flip( $whitelist ) );
}