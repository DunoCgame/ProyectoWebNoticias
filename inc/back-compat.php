<?php
/**
 * CoreWeb back compat functionality
 *
 * Prevents CoreWeb from running on WordPress versions prior to 4.4,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.4.
 *
 * @package WordPress
 * @subpackage CoreWeb
 * @since CoreWeb 1.0
 */

/**
 * Prevent switching to CoreWeb on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since CoreWeb 1.0
 */
function CoreWeb_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', 'CoreWeb_upgrade_notice' );
}
add_action( 'after_switch_theme', 'CoreWeb_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * CoreWeb on WordPress versions prior to 4.4.
 *
 * @since CoreWeb 1.0
 *
 * @global string $wp_version WordPress version.
 */
function CoreWeb_upgrade_notice() {
	$message = sprintf( __( 'CoreWeb requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'CoreWeb' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.4.
 *
 * @since CoreWeb 1.0
 *
 * @global string $wp_version WordPress version.
 */
function CoreWeb_customize() {
	wp_die( sprintf( __( 'CoreWeb requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'CoreWeb' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'CoreWeb_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.4.
 *
 * @since CoreWeb 1.0
 *
 * @global string $wp_version WordPress version.
 */
function CoreWeb_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'CoreWeb requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'CoreWeb' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'CoreWeb_preview' );
