<?php

/**
 * Title: About Section with Columns 2
 * Slug: fotawp/about-us-with-columns
 * Categories: fotawp,fotawp-aboutus
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/pattern_image_4.jpg',
    $fotawp_url . 'assets/images/pattern_image_5.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","right":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"5rem"}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--60);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"blockGap":{"top":"5rem","left":"4rem"},"padding":{"top":"0"}}}} -->
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

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"30px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":223,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-223" style="border-radius:0px;aspect-ratio:4/3;object-fit:cover" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":224,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px","width":"0px","style":"none"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-224" style="border-style:none;border-width:0px;border-radius:0px;aspect-ratio:4/3;object-fit:cover" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->