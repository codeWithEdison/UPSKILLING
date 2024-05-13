<?php

/**
 * Title: CTA Block Text Centered
 * Slug: fotawp/cta-block-text-centered
 * Categories: fotawp,fotawp-cta
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"}},"gradient":"second-primary-gradient","layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group has-second-primary-gradient-gradient-background has-background" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"64px"}},"textColor":"foregound-alt"} -->
    <h2 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color" style="font-size:64px;font-style:normal;font-weight:500"><?php esc_html_e('Let\'s Connect Today', 'fotawp') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.7}},"textColor":"foregound-alt","fontSize":"small"} -->
    <p class="has-text-align-center has-foregound-alt-color has-text-color has-small-font-size" style="line-height:1.7"><?php esc_html_e('The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.', 'fotawp') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"1.2rem","bottom":"1.2rem"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background wp-element-button" style="padding-top:1.2rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1.2rem;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Schedule an Appointment', 'fotawp') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->