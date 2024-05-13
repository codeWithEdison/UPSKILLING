<?php

/**
 * Title: Services Block
 * Slug: fotawp/services-block
 * Categories: fotawp,fotawp-services
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/pattern_thumb.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"7rem","bottom":"7rem"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:7rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"top"} -->
    <div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained","contentSize":"750px"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foregound-alt","fontSize":"xx-large"} -->
                <h1 class="wp-block-heading has-text-align-left has-foregound-alt-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Services We Offer', 'fotawp') ?></h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px","lineHeight":1.9}},"textColor":"tertiary-light"} -->
            <p class="has-text-align-left has-tertiary-light-color has-text-color" style="font-size:18px;line-height:1.9"><?php esc_html_e('The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-heading-color-color has-foregound-alt-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e('Explore More Services', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0rem","left":"100px"},"margin":{"top":"100px"}}}} -->
    <div class="wp-block-columns" style="margin-top:100px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":160,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-160" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:60px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"30px"}}},"textColor":"background"} -->
            <h3 class="wp-block-heading has-text-align-left has-background-color has-text-color" style="margin-top:30px;font-size:28px;font-style:normal;font-weight:500"><?php esc_html_e('Mobile Application', 'fotawp') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"color":{"text":"#d7d7d7"},"typography":{"fontSize":"18px"}}} -->
            <p class="has-text-align-left has-text-color" style="color:#d7d7d7;font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"textColor":"foregound-alt","style":{"typography":{"textDecoration":"none"},"border":{"radius":"0px","bottom":{"width":"1px"}},"spacing":{"padding":{"left":"0","right":"0","top":"5px","bottom":"5px"}}},"className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill" style="text-decoration:none"><a class="wp-block-button__link has-foregound-alt-color has-text-color wp-element-button" style="border-radius:0px;border-bottom-width:1px;padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:0"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":160,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-160" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:60px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"30px","bottom":"0"}}},"textColor":"background"} -->
            <h3 class="wp-block-heading has-text-align-left has-background-color has-text-color" style="margin-top:30px;margin-bottom:0;font-size:28px;font-style:normal;font-weight:500"><?php esc_html_e('Research &amp; Case Study', 'fotawp') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"color":{"text":"#d7d7d7"},"typography":{"fontSize":"18px"}}} -->
            <p class="has-text-align-left has-text-color" style="color:#d7d7d7;font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"textColor":"foregound-alt","style":{"typography":{"textDecoration":"none"},"border":{"radius":"0px","bottom":{"width":"1px"}},"spacing":{"padding":{"left":"0","right":"0","top":"5px","bottom":"5px"}}},"className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill" style="text-decoration:none"><a class="wp-block-button__link has-foregound-alt-color has-text-color wp-element-button" style="border-radius:0px;border-bottom-width:1px;padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:0"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0rem","left":"100px"},"margin":{"top":"80px"}}}} -->
    <div class="wp-block-columns" style="margin-top:80px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":160,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-160" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:60px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"30px"}}},"textColor":"background"} -->
            <h3 class="wp-block-heading has-text-align-left has-background-color has-text-color" style="margin-top:30px;font-size:28px;font-style:normal;font-weight:500"><?php esc_html_e('StartUp Ideas', 'fotawp') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"color":{"text":"#d7d7d7"},"typography":{"fontSize":"18px"}}} -->
            <p class="has-text-align-left has-text-color" style="color:#d7d7d7;font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"textColor":"foregound-alt","style":{"typography":{"textDecoration":"none"},"border":{"radius":"0px","bottom":{"width":"1px"}},"spacing":{"padding":{"left":"0","right":"0","top":"5px","bottom":"5px"}}},"className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill" style="text-decoration:none"><a class="wp-block-button__link has-foregound-alt-color has-text-color wp-element-button" style="border-radius:0px;border-bottom-width:1px;padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:0"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":160,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-160" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:60px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"30px","bottom":"0"}}},"textColor":"background"} -->
            <h3 class="wp-block-heading has-text-align-left has-background-color has-text-color" style="margin-top:30px;margin-bottom:0;font-size:28px;font-style:normal;font-weight:500"><?php esc_html_e('Branding & Growth', 'fotawp') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"color":{"text":"#d7d7d7"},"typography":{"fontSize":"18px"}}} -->
            <p class="has-text-align-left has-text-color" style="color:#d7d7d7;font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"textColor":"foregound-alt","style":{"typography":{"textDecoration":"none"},"border":{"radius":"0px","bottom":{"width":"1px"}},"spacing":{"padding":{"left":"0","right":"0","top":"5px","bottom":"5px"}}},"className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill" style="text-decoration:none"><a class="wp-block-button__link has-foregound-alt-color has-text-color wp-element-button" style="border-radius:0px;border-bottom-width:1px;padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:0"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->