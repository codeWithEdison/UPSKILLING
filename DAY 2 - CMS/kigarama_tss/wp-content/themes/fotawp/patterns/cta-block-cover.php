<?php

/**
 * Title: CTA Block with Background Image
 * Slug: fotawp/cta-block-cover
 * Categories: fotawp,fotawp-cta
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/banner_full.jpg',
);
?>
<!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[0]) ?>","id":292,"dimRatio":80,"minHeight":450,"gradient":"first-primary-gradient"} -->
<div class="wp-block-cover" style="min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-first-primary-gradient-gradient-background"></span><img class="wp-block-cover__image-background wp-image-292" alt="" src="<?php echo esc_url($fotawp_images[0]) ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"860px"}} -->
        <div class="wp-block-group" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"64px"}},"textColor":"foregound-alt"} -->
            <h2 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color" style="font-size:64px;font-style:normal;font-weight:600"><?php esc_html_e('Let\'s Connect Today', 'fotawp') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#d7caea"},"typography":{"lineHeight":1.7}},"fontSize":"medium"} -->
            <p class="has-text-align-center has-text-color has-medium-font-size" style="color:#d7caea;line-height:1.7"><?php esc_html_e('The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"1.2rem","bottom":"1.2rem"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background wp-element-button" style="padding-top:1.2rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1.2rem;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Schedule an Appointment', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->