<?php

/**
 * Title: Banner/Hero Layout with Background Image and CTA Box
 * Slug: fotawp/banner-layout-with-cta-background-image
 * Categories: fotawp,fotawp-banner
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_icon_images = array(
    $fotawp_url . 'assets/images/icon_easy_customize.svg',
    $fotawp_url . 'assets/images/icon_mobile_first.svg',
    $fotawp_url . 'assets/images/icon_pagebuilder.svg',
    $fotawp_url . 'assets/images/banner_full.jpg'
);
?>
<!-- wp:cover {"url":"<?php echo esc_url($fotawp_icon_images[3]) ?>","id":531,"hasParallax":true,"dimRatio":30,"overlayColor":"heading-color","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover has-parallax" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-30 has-background-dim"></span>
    <div role="img" class="wp-block-cover__image-background wp-image-531 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url($fotawp_icon_images[3]) ?>)"></div>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"11rem","bottom":"0","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"transparent","layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group has-transparent-background-color has-background" style="padding-top:11rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
            <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.4,"fontSize":"4em"}},"textColor":"foregound-alt","fontFamily":"dm-sans"} -->
                <h2 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-dm-sans-font-family" style="font-size:4em;font-style:normal;font-weight:600;line-height:1.4"><?php esc_html_e('Ultimate Machine for Your Business Growth', 'fotawp') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.7}},"textColor":"background","fontSize":"small"} -->
                <p class="has-text-align-center has-background-color has-text-color has-small-font-size" style="line-height:1.7"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"1.3rem","bottom":"1.3rem"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-foregound-alt-background-color has-text-color has-background wp-element-button" style="padding-top:1.3rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1.3rem;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Schedule an Appointment', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->

            <!-- wp:spacer {"height":"360px"} -->
            <div style="height:360px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"0","bottom":"var:preset|spacing|70","left":"0"}}},"className":"fotawp-overlap-ctasection pattern-banner-layout","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group fotawp-overlap-ctasection pattern-banner-layout" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--70);padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
        <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"radius":"4px","width":"1px"}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-medium has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":974,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"fotawp-duotone-primary"} -->
                <figure class="wp-block-image aligncenter size-full fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[0]) ?>" alt="" class="wp-image-974" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"large"} -->
                <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size"><?php esc_html_e('Easy Customizable', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}},"textColor":"sub-heading-color"} -->
                <p class="has-text-align-center has-sub-heading-color-color has-text-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"background","textColor":"foreground","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Learn More ', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
        <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"radius":"4px","width":"1px"}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-medium has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":974,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"fotawp-duotone-primary"} -->
                <figure class="wp-block-image aligncenter size-full fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[1]) ?>" alt="" class="wp-image-974" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"large"} -->
                <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size"><?php esc_html_e('Mobile First Approach', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}},"textColor":"sub-heading-color"} -->
                <p class="has-text-align-center has-sub-heading-color-color has-text-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"background","textColor":"foreground","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Learn More', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
        <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"radius":"4px","width":"1px"}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-medium has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":164,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"fotawp-duotone-primary"} -->
                <figure class="wp-block-image aligncenter size-full fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[2]) ?>" alt="" class="wp-image-164" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"large"} -->
                <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size"><?php esc_html_e('Pagebuilder Integrated', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}},"textColor":"sub-heading-color"} -->
                <p class="has-text-align-center has-sub-heading-color-color has-text-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"background","textColor":"foreground","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Learn More', 'fotawp') ?></a></div>
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