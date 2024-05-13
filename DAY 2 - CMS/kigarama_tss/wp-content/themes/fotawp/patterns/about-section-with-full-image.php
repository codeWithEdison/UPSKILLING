<?php

/**
 * Title: About Section with full Image
 * Slug: fotawp/about-section-with-full-image
 * Categories: fotawp,fotawp-aboutus
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/pattern_about_full.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"5rem"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:3rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:3rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[0]) ?>","id":223,"dimRatio":0,"focalPoint":{"x":0.4,"y":0.15},"minHeight":540,"isDark":false,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover is-light" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-223" alt="" src="<?php echo esc_url($fotawp_images[0]) ?>" style="object-position:40% 15%" data-object-fit="cover" data-object-position="40% 15%" />
        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0rem","left":"60px"},"padding":{"top":"0"}}}} -->
    <div class="wp-block-columns" style="padding-top:0"><!-- wp:column {"verticalAlignment":"top","width":"45%"} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"xx-large"} -->
            <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:600;line-height:1.5"><?php esc_html_e('Explore the Best Value of Your Business!', 'fotawp') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer {"height":"10px"} -->
            <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"foregound-alt","style":{"typography":{"textDecoration":"none"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|60","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60"}}},"className":"is-style-button-hover-primary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-primary-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-foregound-alt-color has-secondary-background-color has-text-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->