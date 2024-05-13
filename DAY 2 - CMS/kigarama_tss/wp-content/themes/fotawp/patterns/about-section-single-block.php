<?php

/**
 * Title: About Section Single Block
 * Slug: fotawp/about-section-single-block
 * Categories: fotawp,fotawp-aboutus
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/pattern_img_5.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"tertiary-light","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-tertiary-light-background-color has-background" style="padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[0]) ?>","id":220,"dimRatio":0,"minHeight":650,"isDark":false,"className":"is-style-fotawp-cover-round-style"} -->
            <div class="wp-block-cover is-light is-style-fotawp-cover-round-style" style="min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-220" alt="" src="<?php echo esc_url($fotawp_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"> </p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":6,"textColor":"accent"} -->
            <h6 class="wp-block-heading has-accent-color has-text-color"><?php echo esc_html__('About Us', 'fotawp') ?></h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color"} -->
            <h1 class="wp-block-heading has-heading-color-color has-text-color" style="font-style:normal;font-weight:500"><?php echo esc_html__('Explore Our Story', 'fotawp') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":1.6}},"textColor":"sub-heading-color","fontSize":"small"} -->
            <p class="has-sub-heading-color-color has-text-color has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.6"><?php echo esc_html__('The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer {"height":"5px"} -->
            <div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|60","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60"}},"typography":{"textDecoration":"none"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-background-color has-tertiary-background-color has-text-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><?php echo esc_html__('Read More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->