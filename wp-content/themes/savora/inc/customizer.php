<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage savora
 * @since savora 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function savora_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Savora_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Savora Pro', 'savora' ),
		'button_text'      => __( 'Upgrade Pro', 'savora' ),
		'url'              => esc_url( SAVORA_BUY_NOW ),
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'savora_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function savora_custom_control_scripts() {
	wp_enqueue_script( 'savora-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'savora_custom_control_scripts' );