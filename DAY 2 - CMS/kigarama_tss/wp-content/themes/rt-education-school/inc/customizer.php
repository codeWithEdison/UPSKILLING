<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage rt-education-school
 * @since rt-education-school 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function rt_education_school_customize_register( $wp_customize ) {
	$wp_customize->add_section( new RT_Education_School_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Education Pro', 'rt-education-school' ),
		'button_text'      => __( 'Upgrade Pro', 'rt-education-school' ),
		'url'              => 'https://www.wpradiant.net/products/school-wordpress-theme/',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'rt_education_school_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function rt_education_school_custom_control_scripts() {
	wp_enqueue_script( 'rt-education-school-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'rt_education_school_custom_control_scripts' );