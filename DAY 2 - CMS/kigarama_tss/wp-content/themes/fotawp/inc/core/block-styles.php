<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package fotawp
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function fotawp_register_block_styles()
	{
		register_block_style(
			'core/columns',
			array(
				'name'  => 'fotawp-boxshadow',
				'label' => __('Box Shadow', 'fotawp')
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'fotawp-boxshadow',
				'label' => __('Box Shadow', 'fotawp')
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'fotawp-boxshadow-medium',
				'label' => __('Box Shadow Medium', 'fotawp')
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'fotawp-boxshadow-large',
				'label' => __('Box Shadow Large', 'fotawp')
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'fotawp-boxshadow',
				'label' => __('Box Shadow', 'fotawp')
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'fotawp-boxshadow-medium',
				'label' => __('Box Shadow Medium', 'fotawp')
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'fotawp-boxshadow-large',
				'label' => __('Box Shadow Larger', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-boxshadow',
				'label' => __('Box Shadow', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-boxshadow-medium',
				'label' => __('Box Shadow Medium', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-boxshadow-larger',
				'label' => __('Box Shadow Large', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-image-pulse',
				'label' => __('Iamge Pulse Effect', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-boxshadow-hover',
				'label' => __('Box Shadow on Hover', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-image-hover-pulse',
				'label' => __('Hover Pulse Effect', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-image-hover-rotate',
				'label' => __('Hover Rotate Effect', 'fotawp')
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'fotawp-boxshadow-hover',
				'label' => __('Box Shadow on Hover', 'fotawp')
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'fotawp-boxshadow-hover',
				'label' => __('Box Shadow on Hover', 'fotawp')
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'fotawp-boxshadow-hover',
				'label' => __('Box Shadow on Hover', 'fotawp')
			)
		);

		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-background-with-round',
				'label' => __('Background with round corner style', 'fotawp')
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-background-with-round-small',
				'label' => __('Background with small round corner style', 'fotawp')
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-background-with-border-small-round',
				'label' => __('Background with border small round corner style', 'fotawp')
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-primary-color',
				'label' => __('Title hover: Primary color', 'fotawp')
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-secondary-color',
				'label' => __('Title hover: Secondary color', 'fotawp')
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-tertiary-color',
				'label' => __('Title hover: Tertiary color', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-primary-color',
				'label' => __('Button hover: Primary Color', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-secondary-color',
				'label' => __('Button hover: Secondary Color', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-primary-bgcolor',
				'label' => __('Button hover: Primary color fill', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-secondary-bgcolor',
				'label' => __('Button hover: Secondary color fill', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-tertiary-bgcolor',
				'label' => __('Button hover: Tertiary color fill', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-white-bgcolor',
				'label' => __('Button hover: White color fill', 'fotawp')
			)
		);

		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-primary-color',
				'label' => __('Read More hover: Primary Color', 'fotawp')
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-secondary-color',
				'label' => __('Read More hover: Secondary Color', 'fotawp')
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-tertiary-color',
				'label' => __('Read More hover: Tertiary Color', 'fotawp')
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-primary-fill',
				'label' => __('Read More hover: Primary Fill', 'fotawp')
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-secondary-fill',
				'label' => __('Read More hover: secondary Fill', 'fotawp')
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-tertiary-fill',
				'label' => __('Read More hover: Tertiary Fill', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'list-style-no-bullet',
				'label' => __('List Style: Hide bullet', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'hide-bullet-list-link-hover-style-primary',
				'label' => __('List Style: Link over style with primary color and hide bullet', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'hide-bullet-list-link-hover-style-secondary',
				'label' => __('List Style: Link hover style with secondary color and hide bullet', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'hide-bullet-list-link-hover-style-tertiary',
				'label' => __('List Style: Link hover style with tertiary color and hide bullet', 'fotawp')
			)
		);
		register_block_style(
			'core/gallery',
			array(
				'name'  => 'enable-grayscale-mode-on-image',
				'label' => __('Enable Grayscale Mode on Image', 'fotawp')
			)
		);
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'social-icon-border',
				'label' => __('Border Style', 'fotawp')
			)
		);
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'fotawp-post-featured-image-overlap',
				'label' => __('Top Overlap Style', 'fotawp')
			)
		);
		register_block_style(
			'core/page-list',
			array(
				'name'  => 'fotawp-page-list-bullet-hide-style',
				'label' => __('Hide Bullet Style', 'fotawp')
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'fotawp-categories-bullet-hide-style',
				'label' => __('Hide Bullet Style', 'fotawp')
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'fotawp-cover-round-style',
				'label' => __('Round Corner Style', 'fotawp')
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'fotawp-cover-round-overlap',
				'label' => __('Round Corner with Overlap Style', 'fotawp')
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'  => 'fotawp-heading-transparentfill-outline-stroke',
				'label' => __('Heading Primary Stroke Style', 'fotawp')
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'  => 'fotawp-heading-transparentfill-outline-stroke-secondary',
				'label' => __('Heading Secondary Stroke Style', 'fotawp')
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'  => 'fotawp-heading-transparentfill-outline-stroke-heading',
				'label' => __('Heading Color Stroke Style', 'fotawp')
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'  => 'fotawp-heading-transparentfill-outline-stroke-foreground',
				'label' => __('Heading Foreground Stroke Style', 'fotawp')
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'  => 'fotawp-heading-transparentfill-outline-stroke-tertiary',
				'label' => __('Heading Tertiary Stroke Style', 'fotawp')
			)
		);
	}
	add_action('init', 'fotawp_register_block_styles');
}
