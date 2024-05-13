<?php

/**
 * Title: Contact Us Block with Map full width
 * Slug: fotawp/contact-block-map-full
 * Categories: fotawp,fotawp-contacts
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:html -->
    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87875.42875656532!2d-86.37198421745961!3d32.388118773485566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888e8194b0d481f9%3A0x8e1b511d354285ff!2sMontgomery%2C%20AL%2C%20USA!5e0!3m2!1sen!2snp!4v1689317919328!5m2!1sen!2snp" width="100%" height="560" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    <!-- /wp:html -->

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"100px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                <h2 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Keep in Touch', 'fotawp') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.7,"fontSize":"18px"}}} -->
                <p style="font-size:18px;line-height:1.7"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top"} -->
            <div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"margin":{"top":"30px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
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
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->