<?php

/**
 * Title: Homepage Template: Creative Agency
 * Slug: fotawp/homepage-template-agency
 * Categories: fotawp,fotawp-homepage
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/pattern_about_full.jpg',
    $fotawp_url . 'assets/images/icon_31.png',
    $fotawp_url . 'assets/images/icon_32.png',
    $fotawp_url . 'assets/images/icon_33.png',
    $fotawp_url . 'assets/images/icon_34.png',
    $fotawp_url . 'assets/images/icon_35.png',
    $fotawp_url . 'assets/images/icon_36.png',
    $fotawp_url . 'assets/images/fota_testimonial_1.png',
    $fotawp_url . 'assets/images/fota_testimonial_2.png',
    $fotawp_url . 'assets/images/fota_testimonial_3.png',
    $fotawp_url . 'assets/images/review_star.svg',
);
?>
<!-- wp:cover {"customOverlayColor":"#5f79bb","minHeight":500,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#5f79bb"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"width":30,"shouldSyncIcon":false} /-->

                    <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"text-alter-color","fontSize":"large"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                <div class="wp-block-group"><!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
                    <!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- wp:navigation-link {"label":"Style Guide","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"105px"} -->
        <div style="height:105px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.5","fontSize":"55px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"foregound-alt"} -->
            <h2 class="wp-block-heading alignwide has-text-align-center has-foregound-alt-color has-text-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:55px;font-style:normal;font-weight:600;line-height:1.5"><?php echo esc_html__('Most Powerful Block based WordPress Theme', 'fotawp') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"bottom":"var:preset|spacing|60","top":"var:preset|spacing|40"}}},"textColor":"foregound-alt","fontSize":"small"} -->
            <p class="has-text-align-center has-foregound-alt-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--60);line-height:1.8"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background-alt","textColor":"heading-color","style":{"spacing":{"padding":{"left":"3rem","right":"3rem","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"radius":"12px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-background-alt-background-color has-text-color has-background wp-element-button" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:3rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:3rem"><?php echo esc_html__('Request Demo', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(180deg,rgb(95,121,187) 46%,rgb(255,255,255) 46%)"},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(180deg,rgb(95,121,187) 46%,rgb(255,255,255) 46%);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"wide","id":1588,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image alignwide size-large"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-1588" /></figure>
    <!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|70","bottom":"120px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"fontSize":"xx-large"} -->
            <h2 class="wp-block-heading has-xx-large-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php echo esc_html__('Delivering top notch products in the industry.', 'fotawp') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
            <p style="line-height:1.5"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
            <p style="line-height:1.5"><?php echo esc_html__('Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it\'s seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"style":{"color":{"background":"#5f79bb"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-background wp-element-button" style="background-color:#5f79bb"><?php echo esc_html__('Read More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"color":{"background":"#eff2f8"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background" style="background-color:#eff2f8;padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color"} -->
            <h2 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color" style="font-style:normal;font-weight:600"><?php echo esc_html__('Our Services', 'fotawp') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.9}},"textColor":"sub-heading-color","fontSize":"small"} -->
            <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.9"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}},"dimensions":{"minHeight":"0px"},"border":{"radius":"10px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-radius:10px;min-height:0px;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:image {"align":"center","id":1647,"width":90,"height":90,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-1647" style="border-radius:50px;object-fit:cover;width:90px;height:90px" width="90" height="90" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="padding-top:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__('CRM Integration', 'fotawp') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html__('Check out our new&nbsp;font generatorand level up your social bios. Need more? Head over to Glyphy for all the&nbsp;fancy fonts&nbsp;and&nbsp;cool symbols&nbsp;you could ever imagine.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"text":"#5f79bb"}},"className":"is-style-button-hover-secondary-color"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-transparent-background-color has-text-color has-background wp-element-button" style="color:#5f79bb;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}},"dimensions":{"minHeight":"0px"},"border":{"radius":"10px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-radius:10px;min-height:0px;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:image {"align":"center","id":1647,"width":90,"height":90,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-1647" style="border-radius:50px;object-fit:cover;width:90px;height:90px" width="90" height="90" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="padding-top:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__('SasS Development', 'fotawp') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html__('Check out our new&nbsp;font generatorand level up your social bios. Need more? Head over to Glyphy for all the&nbsp;fancy fonts&nbsp;and&nbsp;cool symbols&nbsp;you could ever imagine.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"text":"#5f79bb"}},"className":"is-style-button-hover-secondary-color"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-transparent-background-color has-text-color has-background wp-element-button" style="color:#5f79bb;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}},"dimensions":{"minHeight":"0px"},"border":{"radius":"10px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-radius:10px;min-height:0px;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:image {"align":"center","id":1647,"width":90,"height":90,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[3]) ?>" alt="" class="wp-image-1647" style="border-radius:50px;object-fit:cover;width:90px;height:90px" width="90" height="90" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="padding-top:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__('Mobile App', 'fotawp') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html__('Check out our new&nbsp;font generatorand level up your social bios. Need more? Head over to Glyphy for all the&nbsp;fancy fonts&nbsp;and&nbsp;cool symbols&nbsp;you could ever imagine.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"text":"#5f79bb"}},"className":"is-style-button-hover-secondary-color"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-transparent-background-color has-text-color has-background wp-element-button" style="color:#5f79bb;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}},"dimensions":{"minHeight":"0px"},"border":{"radius":"10px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-radius:10px;min-height:0px;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:image {"align":"center","id":1648,"width":90,"height":90,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[4]) ?>" alt="" class="wp-image-1648" style="border-radius:50px;object-fit:cover;width:90px;height:90px" width="90" height="90" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="padding-top:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__('Social Media Marketing', 'fotawp') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html__('Check out our new&nbsp;font generatorand level up your social bios. Need more? Head over to Glyphy for all the&nbsp;fancy fonts&nbsp;and&nbsp;cool symbols&nbsp;you could ever imagine.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"text":"#5f79bb"}},"className":"is-style-button-hover-secondary-color"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-transparent-background-color has-text-color has-background wp-element-button" style="color:#5f79bb;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}},"dimensions":{"minHeight":"0px"},"border":{"radius":"10px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-radius:10px;min-height:0px;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:image {"align":"center","id":1649,"width":90,"height":90,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[5]) ?>" alt="" class="wp-image-1649" style="border-radius:50px;object-fit:cover;width:90px;height:90px" width="90" height="90" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="padding-top:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__('UI/UX Design', 'fotawp') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html__('Check out our new&nbsp;font generatorand level up your social bios. Need more? Head over to Glyphy for all the&nbsp;fancy fonts&nbsp;and&nbsp;cool symbols&nbsp;you could ever imagine.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"text":"#5f79bb"}},"className":"is-style-button-hover-secondary-color"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-transparent-background-color has-text-color has-background wp-element-button" style="color:#5f79bb;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}},"dimensions":{"minHeight":"0px"},"border":{"radius":"10px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-radius:10px;min-height:0px;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:image {"align":"center","id":1649,"width":90,"height":90,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[6]) ?>" alt="" class="wp-image-1649" style="border-radius:50px;object-fit:cover;width:90px;height:90px" width="90" height="90" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="padding-top:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__('Case Study', 'fotawp') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html__('Check out our new&nbsp;font generatorand level up your social bios. Need more? Head over to Glyphy for all the&nbsp;fancy fonts&nbsp;and&nbsp;cool symbols&nbsp;you could ever imagine.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"text":"#5f79bb"}},"className":"is-style-button-hover-secondary-color"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-transparent-background-color has-text-color has-background wp-element-button" style="color:#5f79bb;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"dimRatio":0,"overlayColor":"background","isDark":false} -->
    <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"660px"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"44px"}},"textColor":"heading-color"} -->
                    <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color" style="font-size:44px;font-style:normal;font-weight:600"><?php echo esc_html__('Testimonials', 'fotawp') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"foreground"} -->
                    <p class="has-text-align-center has-foreground-color has-text-color" style="line-height:1.5"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
                <div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:column {"style":{"spacing":{"padding":{"right":"0"}}}} -->
                    <div class="wp-block-column" style="padding-right:0"><!-- wp:group {"style":{"border":{"radius":"10px","color":"#eff2f8","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-default","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-default has-border-color has-background-background-color has-background" style="border-color:#eff2f8;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":726,"width":115,"height":20,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($fotawp_images[10]) ?>" alt="" class="wp-image-726" style="width:115px;height:20px" width="115" height="20" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"foreground"} -->
                            <p class="has-text-align-center has-foreground-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60);line-height:1.5"><?php echo esc_html__('Not only theme, it\s powerful tools for site building, native Full Site Editing block builder make it too easy for use and dozens of patterns, just WOW!!!', 'fotawp') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:image {"align":"center","id":1822,"width":70,"height":70,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url($fotawp_images[7]) ?>" alt="" class="wp-image-1822" style="width:70px;height:70px" width="70" height="70" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"textColor":"heading-color","fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="padding-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php echo esc_html__('Alex T', 'fotawp') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","right":"0","left":"0","bottom":"0"}}},"textColor":"foreground","fontSize":"x-small"} -->
                            <p class="has-text-align-center has-foreground-color has-text-color has-x-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php echo esc_html__('Digital Marketing, CozyThemes', 'fotawp') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"padding":{"right":"0"}}}} -->
                    <div class="wp-block-column" style="padding-right:0"><!-- wp:group {"style":{"border":{"radius":"10px","color":"#eff2f8","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-default","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-default has-border-color has-background-background-color has-background" style="border-color:#eff2f8;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":726,"width":115,"height":20,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($fotawp_images[10]) ?>" alt="" class="wp-image-726" style="width:115px;height:20px" width="115" height="20" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"foreground"} -->
                            <p class="has-text-align-center has-foreground-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60);line-height:1.5"><?php echo esc_html__('Not only theme, it\s powerful tools for site building, native Full Site Editing block builder make it too easy for use and dozens of patterns, just WOW!!!', 'fotawp') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:image {"align":"center","id":1822,"width":70,"height":70,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url($fotawp_images[8]) ?>" alt="" class="wp-image-1822" style="width:70px;height:70px" width="70" height="70" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"textColor":"heading-color","fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="padding-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php echo esc_html__('Alex T', 'fotawp') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","right":"0","left":"0","bottom":"0"}}},"textColor":"foreground","fontSize":"x-small"} -->
                            <p class="has-text-align-center has-foreground-color has-text-color has-x-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php echo esc_html__('Digital Marketing, CozyThemes', 'fotawp') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"padding":{"right":"0"}}}} -->
                    <div class="wp-block-column" style="padding-right:0"><!-- wp:group {"style":{"border":{"radius":"10px","color":"#eff2f8","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-default","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-default has-border-color has-background-background-color has-background" style="border-color:#eff2f8;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":726,"width":115,"height":20,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($fotawp_images[10]) ?>" alt="" class="wp-image-726" style="width:115px;height:20px" width="115" height="20" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"foreground"} -->
                            <p class="has-text-align-center has-foreground-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60);line-height:1.5"><?php echo esc_html__('Not only theme, it\s powerful tools for site building, native Full Site Editing block builder make it too easy for use and dozens of patterns, just WOW!!!', 'fotawp') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:image {"align":"center","id":1822,"width":70,"height":70,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url($fotawp_images[9]) ?>" alt="" class="wp-image-1822" style="width:70px;height:70px" width="70" height="70" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"textColor":"heading-color","fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="padding-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php echo esc_html__('Alex T', 'fotawp') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","right":"0","left":"0","bottom":"0"}}},"textColor":"foreground","fontSize":"x-small"} -->
                            <p class="has-text-align-center has-foreground-color has-text-color has-x-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php echo esc_html__('Digital Marketing, CozyThemes', 'fotawp') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"},"color":{"background":"#5f79bb"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group has-background" style="background-color:#5f79bb;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"64px"}},"textColor":"foregound-alt"} -->
    <h2 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color" style="font-size:64px;font-style:normal;font-weight:700"><?php echo esc_html__('Let\'s Connect Today', 'fotawp') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.7}},"textColor":"foregound-alt","fontSize":"small"} -->
    <p class="has-text-align-center has-foregound-alt-color has-text-color has-small-font-size" style="line-height:1.7"><?php echo esc_html__('The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.', 'fotawp') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"1.2rem","bottom":"1.2rem"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background wp-element-button" style="padding-top:1.2rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1.2rem;padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html__('Schedule an Appointment', 'fotawp') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"background":"#5f79bb"},"border":{"top":{"color":"#7689c5","width":"1px"},"right":{},"bottom":{},"left":{}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background" style="border-top-color:#7689c5;border-top-width:1px;background-color:#5f79bb;margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"textColor":"background"} -->
        <p class="has-background-color has-text-color"><?php echo esc_html__('Proudly powered by WordPress&nbsp;|&nbsp;Theme: FotaWP by&nbsp;CozyThemes.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:social-links {"iconColor":"foregound-alt","iconColorValue":"#FEFEFE","iconBackgroundColor":"transparent","iconBackgroundColorValue":"#ffffff00","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
        <ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

            <!-- wp:social-link {"url":"#","service":"spotify"} /-->

            <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

            <!-- wp:social-link {"url":"#","service":"behance"} /-->
        </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->