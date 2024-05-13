<?php

/**
 * Title: CTA Block Overlay Style
 * Slug: fotawp/cta-block-overlay
 * Categories: fotawp,fotawp-cta
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/pattern_image_1.jpg',
    $fotawp_url . 'assets/images/pattern_image_5.jpg',
    $fotawp_url . 'assets/images/pattern_image_4.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|40","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
        <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"10px","width":"1px"}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-medium has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"align":"wide","id":974,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
                <figure class="wp-block-image alignwide size-full has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-974" style="border-radius:6px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"right":"0","top":"var:preset|spacing|60"}}},"textColor":"heading-color","fontSize":"large"} -->
                <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--60);margin-right:0"><?php echo esc_html__('Easy Customizable', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
                <p class="has-text-align-center" style="font-size:18px"><?php echo esc_html__('FSE block builder is the way of creating site and our customizable features added value on.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"background","textColor":"foreground","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__('Learn More', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
        <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"10px","width":"1px"}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-medium has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"align":"center","id":974,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"},"border":{"radius":"6px"}}} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-974" style="border-radius:6px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"heading-color","fontSize":"large"} -->
                <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html__('Mobile First Approach', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
                <p class="has-text-align-center" style="font-size:18px"><?php echo esc_html__('Modern era of website builder does not imagine without responsive and we will taken care of it seamlessly.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"background","textColor":"foreground","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">Learn More</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
        <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"10px","width":"1px"}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-medium has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"align":"wide","id":164,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"},"border":{"radius":"6px"}}} -->
                <figure class="wp-block-image alignwide size-full has-custom-border"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-164" style="border-radius:6px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"heading-color","fontSize":"large"} -->
                <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html__('Pagebuilder Integrated', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
                <p class="has-text-align-center" style="font-size:18px"><?php echo esc_html__('While it comes with native builder FSE/Block builder and Elementor, making so easy.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"background","textColor":"foreground","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__('Learn More', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->