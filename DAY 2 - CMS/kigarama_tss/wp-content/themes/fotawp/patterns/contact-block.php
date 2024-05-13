<?php

/**
 * Title: Contact Us Block with Map
 * Slug: fotawp/contact-block
 * Categories: fotawp,fotawp-contacts
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":6,"textColor":"primary"} -->
            <h6 class="wp-block-heading has-primary-color has-text-color"><?php esc_html_e('Contact Us', 'fotawp') ?></h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"heading-color","fontSize":"xx-large"} -->
            <h1 class="wp-block-heading has-heading-color-color has-text-color has-xx-large-font-size" style="margin-bottom:16px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Keep in Touch', 'fotawp') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":1.6}},"textColor":"sub-heading-color","fontSize":"small"} -->
            <p class="has-sub-heading-color-color has-text-color has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.6"><?php esc_html_e('The purpose of lorem ipsum is to create a natural looking block of text that doesn\'t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text.', 'fotawp') ?></p>
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

        <!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"left":"15px","top":"15px","bottom":"10px","right":"15px"},"blockGap":"0"},"border":{"width":"1px"}},"borderColor":"tertiary-light","backgroundColor":"foregound-alt","className":"is-style-default"} -->
        <div class="wp-block-column is-vertically-aligned-top is-style-default has-border-color has-tertiary-light-border-color has-foregound-alt-background-color has-background" style="border-width:1px;padding-top:15px;padding-right:15px;padding-bottom:10px;padding-left:15px"><!-- wp:html -->
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87875.42875656532!2d-86.37198421745961!3d32.388118773485566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888e8194b0d481f9%3A0x8e1b511d354285ff!2sMontgomery%2C%20AL%2C%20USA!5e0!3m2!1sen!2snp!4v1689317919328!5m2!1sen!2snp" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            <!-- /wp:html -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->