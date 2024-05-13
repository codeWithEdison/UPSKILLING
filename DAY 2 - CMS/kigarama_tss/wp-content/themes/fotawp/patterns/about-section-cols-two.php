<?php

/**
 * Title: About Section 2 Columns
 * Slug: fotawp/about-section-cols-two
 * Categories: fotawp,fotawp-aboutus
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/pattern_img_2.jpg',
    $fotawp_url . 'assets/images/pattern_img_1.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","right":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"5rem"}},"backgroundColor":"tertiary-light","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-tertiary-light-background-color has-background" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--60);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"760px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":1.2,"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-xxx-large-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Explore the Best Value of Your Business!', 'fotawp') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.6}},"textColor":"foreground","fontSize":"small"} -->
        <p class="has-text-align-center has-foreground-color has-text-color has-small-font-size" style="line-height:1.6"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"5rem","left":"4rem"},"padding":{"top":"0"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"id":254,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-254" style="border-radius:10px;aspect-ratio:4/3;object-fit:cover" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.3"}},"textColor":"heading-color"} -->
            <h2 class="wp-block-heading has-heading-color-color has-text-color" style="line-height:1.3"><?php esc_html_e('Mobile Integration for Better Business!', 'fotawp') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
            <p class="has-foreground-color has-text-color" style="font-size:18px"><?php esc_html_e('The purpose of lorem ipsum is to create a natural looking block of text that doesn\'t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text can be very useful.', 'fotawp') ?></p>
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

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"4rem"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.3"}},"textColor":"heading-color"} -->
            <h2 class="wp-block-heading has-heading-color-color has-text-color" style="line-height:1.3"><?php esc_html_e('Mobile Integration for Better Business!', 'fotawp') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
            <p class="has-foreground-color has-text-color" style="font-size:18px"><?php esc_html_e('The purpose of lorem ipsum is to create a natural looking block of text that doesn\'t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text can be very useful.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer {"height":"10px"} -->
            <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"foregound-alt","style":{"typography":{"textDecoration":"none"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"className":"is-style-button-hover-primary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-primary-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-foregound-alt-color has-secondary-background-color has-text-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"id":255,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-255" style="border-radius:10px;aspect-ratio:4/3;object-fit:cover" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->