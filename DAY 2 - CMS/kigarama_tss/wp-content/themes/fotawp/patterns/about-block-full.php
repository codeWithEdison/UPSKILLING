<?php

/**
 * Title: About Block Full Width
 * Slug: fotawp/about-block-full
 * Categories: fotawp,fotawp-aboutus
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/pattern_img_1.jpg',
    $fotawp_url . 'assets/images/pattern_img_2.jpg'

);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","bottom":"0rem","right":"0","left":"0"},"blockGap":"0rem"}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:0rem;padding-right:0;padding-bottom:0rem;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0rem","left":"0rem"},"padding":{"top":"0"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0"><!-- wp:column {"verticalAlignment":"center","width":"58.6%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58.6%"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[0]) ?>","id":255,"dimRatio":0,"minHeight":500,"isDark":false} -->
            <div class="wp-block-cover is-light" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-255" alt="" src="<?php echo esc_url($fotawp_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"> </p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|70","bottom":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70);flex-basis:50%"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":1.2,"fontSize":"44px"}},"textColor":"foregound-alt"} -->
            <h1 class="wp-block-heading has-foregound-alt-color has-text-color" style="font-size:44px;line-height:1.2"><?php esc_html_e('Mobile Integration for Better Business!', 'fotawp') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}},"textColor":"background-alt"} -->
            <p class="has-background-alt-color has-text-color" style="font-size:18px"><?php esc_html_e('The purpose of lorem ipsum is to create a natural looking block of text that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful.', 'fotawp') ?></p>
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

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0rem"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70);flex-basis:50%"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.2"}},"textColor":"foregound-alt","fontSize":"xx-large"} -->
            <h1 class="wp-block-heading has-foregound-alt-color has-text-color has-xx-large-font-size" style="line-height:1.2"><?php esc_html_e('Mobile Integration for Better Business!', 'fotawp') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}},"textColor":"background-alt"} -->
            <p class="has-background-alt-color has-text-color" style="font-size:18px"><?php esc_html_e('The purpose of lorem ipsum is to create a natural looking block of text that doesn\'t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text can be very useful.', 'fotawp') ?></p>
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

        <!-- wp:column {"verticalAlignment":"center","width":"58.6%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58.6%"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[1]) ?>","id":254,"dimRatio":0,"minHeight":500,"isDark":false} -->
            <div class="wp-block-cover is-light" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-254" alt="" src="<?php echo esc_url($fotawp_images[1]) ?>" data-object-fit="cover" />
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