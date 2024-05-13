<?php

/**
 * fotawp: Block Patterns
 *
 * @since fotawp 1.0.0
 */

/**
 * Registers pattern categories for fotawp
 *
 * @since fotawp 1.0.0
 *
 * @return void
 */
function fotawp_register_pattern_category()
{
	$block_pattern_categories = array(
		'fotawp-homepage' => array('label' => __('FOTAWP: Homepage Templates', 'fotawp')),
		'fotawp-pages' => array('label' => __('FOTAWP: Page Templates', 'fotawp')),
		'fotawp-header' => array('label' => __('FOTAWP: Header Layout', 'fotawp')),
		'fotawp-footer' => array('label' => __('FOTAWP: Footer Layout', 'fotawp')),
		'fotawp-banner' => array('label' => __('FOTAWP: Banner/Hero Section', 'fotawp')),
		'fotawp-aboutus' => array('label' => __('FOTAWP: About Us Section', 'fotawp')),
		'fotawp-services' => array('label' => __('FOTAWP: Our Service Section', 'fotawp')),
		'fotawp-products' => array('label' => __('FOTAWP: WooCommerce Layouts', 'fotawp')),
		'fotawp-portfolio' => array('label' => __('FOTAWP: Portfolio Section', 'fotawp')),
		'fotawp-counter' => array('label' => __('FOTAWP: Stats Conter Section', 'fotawp')),
		'fotawp-cta' => array('label' => __('FOTAWP: CTA Section', 'fotawp')),
		'fotawp-teams' => array('label' => __('FOTAWP: Team Section', 'fotawp')),
		'fotawp-testimonials' => array('label' => __('FOTAWP: Testimonials Section', 'fotawp')),
		'fotawp-magazine' => array('label' => __('FOTAWP: Magazine Section', 'fotawp')),
		'fotawp-posts' => array('label' => __('FOTAWP: Latest Posts Section', 'fotawp')),
		'fotawp-pricing' => array('label' => __('FOTAWP: Pricing Tables', 'fotawp')),
		'fotawp-brands' => array('label' => __('FOTAWP: Brand Showcase Sections', 'fotawp')),
		'fotawp-contacts' => array('label' => __('FOTAWP: Contact Sections', 'fotawp')),
		'fotawp-faq' => array('label' => __('FOTAWP: FAQ Sections', 'fotawp')),
		'fotawp' => array('label' => __('FOTAWP: All Patterns', 'fotawp')),
	);

	$block_pattern_categories = apply_filters('fotawp_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'fotawp_register_pattern_category', 9);
