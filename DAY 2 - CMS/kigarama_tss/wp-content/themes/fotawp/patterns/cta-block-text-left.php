<?php

/**
 * Title: CTA Block Text Left
 * Slug: fotawp/cta-block-text-left
 * Categories: fotawp,fotawp-cta
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"gradient":"second-primary-gradient","layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group has-second-primary-gradient-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center"} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foregound-alt","fontSize":"xxx-large"} -->
            <h2 class="wp-block-heading has-text-align-left has-foregound-alt-color has-text-color has-xxx-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html__('Let\'s Connect Today', 'fotawp') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"color":{"text":"#d7caea"},"typography":{"lineHeight":1.7}}} -->
            <p class="has-text-align-left has-text-color" style="color:#d7caea;line-height:1.7"><?php echo esc_html__('The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"1.2rem","bottom":"1.2rem"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background wp-element-button" style="padding-top:1.2rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1.2rem;padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html__('Schedule an Appointment', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->