<?php

/**
 * Title: Featured Content Section
 * Slug: fotawp/featured-content-layout
 * Categories:fotawp-aboutus
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/pattern_img_5.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"0"},"blockGap":"20px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-left:0"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"textColor":"foregound-alt"} -->
            <h2 class="wp-block-heading has-foregound-alt-color has-text-color has-link-color" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('A Commitment to Quality and Client Success!', 'fotawp') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-light"}}}},"textColor":"tertiary-light"} -->
            <p class="has-tertiary-light-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"34px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:34px"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-foregound-alt-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e('Schedule Quick Call', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:columns {"style":{"border":{"top":{"color":"var:preset|color|tertiary","width":"1px"}},"spacing":{"padding":{"top":"30px"},"margin":{"top":"30px"}}}} -->
            <div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--tertiary);border-top-width:1px;margin-top:30px;padding-top:30px"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-light"}}}},"textColor":"tertiary-light"} -->
                    <h6 class="wp-block-heading has-tertiary-light-color has-text-color has-link-color"><?php esc_html_e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', 'fotawp') ?></h6>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-light"}}}},"textColor":"tertiary-light"} -->
                    <h6 class="wp-block-heading has-tertiary-light-color has-text-color has-link-color"><?php esc_html_e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', 'fotawp') ?></h6>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[0]) ?>","id":220,"dimRatio":0,"minHeight":650,"isDark":false,"style":{"border":{"radius":"0px"}},"className":"is-style-fotawp-cover-round-style"} -->
            <div class="wp-block-cover is-light is-style-fotawp-cover-round-style" style="border-radius:0px;min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-220" alt="" src="<?php echo esc_url($fotawp_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"> </p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->