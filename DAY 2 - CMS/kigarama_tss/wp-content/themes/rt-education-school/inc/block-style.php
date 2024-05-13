<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage rt-education-school
 * @since rt-education-school 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since rt-education-school 1.0
	 *
	 * @return void
	 */
	function rt_education_school_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'rt-education-school-border',
				'label' => esc_html__( 'Borders', 'rt-education-school' ),
			)
		);

		
	}
	add_action( 'init', 'rt_education_school_register_block_styles' );
}