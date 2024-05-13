<?php

/**
 * Title: Banner/Hero Layout with Primary Background
 * Slug: fotawp/banner-layout-primary-background
 * Categories: fotawp,fotawp-banner
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/pattern_about_full.jpg',
    $fotawp_url . 'assets/images/pattern_img_5.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"0","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"gradient":"first-primary-gradient","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-first-primary-gradient-gradient-background has-background" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|80"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"860px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"}},"textColor":"foregound-alt","fontSize":"xxx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-xxx-large-font-size" style="font-style:normal;font-weight:600;line-height:1.5"><?php esc_html_e('Meet the Tech Partner for Your Business Growth', 'fotawp') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#d7caea"},"typography":{"lineHeight":1.7}}} -->
        <p class="has-text-align-center has-text-color" style="color:#d7caea;line-height:1.7"><?php esc_html_e('The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"secondary","textColor":"heading-color","style":{"spacing":{"padding":{"left":"2rem","right":"2rem","top":"1.2rem","bottom":"1.2rem"}}},"className":"is-style-button-hover-white-bgcolor"} -->
            <div class="wp-block-button is-style-button-hover-white-bgcolor"><a class="wp-block-button__link has-heading-color-color has-secondary-background-color has-text-color has-background wp-element-button" style="padding-top:1.2rem;padding-right:2rem;padding-bottom:1.2rem;padding-left:2rem"><?php esc_html_e('Schedule an Appointment', 'fotawp') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[0]) ?>","id":76,"dimRatio":0,"minHeight":560,"isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-76" alt="" src="<?php echo esc_url($fotawp_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[1]) ?>","id":77,"dimRatio":0,"minHeight":560,"isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-77" alt="" src="<?php echo esc_url($fotawp_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
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