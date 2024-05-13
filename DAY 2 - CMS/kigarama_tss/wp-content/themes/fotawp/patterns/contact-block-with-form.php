<?php

/**
 * Title: Contact Us Block with Form
 * Slug: fotawp/contact-block-with-form
 * Categories:fotawp-contacts
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:4rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"100px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":6,"textColor":"primary"} -->
            <h6 class="wp-block-heading has-primary-color has-text-color"><?php esc_html_e('Contact Us', 'fotawp') ?></h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"heading-color","fontSize":"xx-large"} -->
            <h1 class="wp-block-heading has-heading-color-color has-text-color has-xx-large-font-size" style="margin-bottom:16px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Keep in Touch', 'fotawp') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":1.6,"fontSize":"16px"}},"textColor":"sub-heading-color"} -->
            <p class="has-sub-heading-color-color has-text-color" style="font-size:16px;font-style:normal;font-weight:400;line-height:1.6"><?php esc_html_e('The purpose of lorem ipsum is to create a natural looking block of text that doesn\'t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"30px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="margin-top:30px"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading"><?php esc_html_e('Address:', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.6,"fontSize":"18px"}},"textColor":"sub-heading-color"} -->
                <p class="has-sub-heading-color-color has-text-color" style="font-size:18px;font-style:normal;font-weight:500;line-height:1.6"><a href="#"><?php esc_html_e('2824 Fleming Street, Montgomery', 'fotawp') ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading"><?php esc_html_e('Phone:', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.6,"fontSize":"18px"}},"textColor":"sub-heading-color"} -->
                <p class="has-sub-heading-color-color has-text-color" style="font-size:18px;font-style:normal;font-weight:500;line-height:1.6"><a href="#"><?php esc_html_e('+1 (012) 345-6789', 'fotawp') ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading"><?php esc_html_e('Email:', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.6,"fontSize":"18px"}},"textColor":"sub-heading-color"} -->
                <p class="has-sub-heading-color-color has-text-color" style="font-size:18px;font-style:normal;font-weight:500;line-height:1.6"><a href="#"><?php esc_html_e('email@example.com', 'fotawp') ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"left":"0px","top":"0px","bottom":"0px"},"blockGap":"0"},"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
        <div class="wp-block-column is-vertically-aligned-center is-style-default" style="border-style:none;border-width:0px;padding-top:0px;padding-bottom:0px;padding-left:0px;flex-basis:45%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"40px","right":"40px"}},"border":{"radius":"0px","width":"1px"}},"borderColor":"tertiary-light","backgroundColor":"foregound-alt","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-border-color has-tertiary-light-border-color has-foregound-alt-background-color has-background" style="border-width:1px;border-radius:0px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><!-- wp:contact-form-7/contact-form-selector {"id":450,"hash":"69d07bc","title":"Contact form 1","className":"fotawp-contact-form"} -->
                <div class="wp-block-contact-form-7-contact-form-selector fotawp-contact-form">[contact-form-7 id="69d07bc" title="Contact form 1"]</div>
                <!-- /wp:contact-form-7/contact-form-selector -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->