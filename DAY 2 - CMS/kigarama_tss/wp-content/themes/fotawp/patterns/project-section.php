<?php

/**
 * Title: Project Section
 * Slug: fotawp/project-section
 * Categories: fotawp
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/project_11.jpg',
    $fotawp_url . 'assets/images/project_22.jpg'

);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","className":"fotawp-portfolio-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group fotawp-portfolio-section has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"120px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|80","left":"0px"}}},"className":"fotawp-projects-columns"} -->
        <div class="wp-block-columns are-vertically-aligned-top fotawp-projects-columns" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"top","style":{"border":{"right":{"color":"var:preset|color|tertiary-light","width":"1px"},"top":[],"bottom":[],"left":[]},"spacing":{"padding":{"right":"70px"}}},"className":"fotawp-fade-up"} -->
            <div class="wp-block-column is-vertically-aligned-top fotawp-fade-up" style="border-right-color:var(--wp--preset--color--tertiary-light);border-right-width:1px;padding-right:70px"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4","textTransform":"capitalize","fontSize":"32px"}},"textColor":"heading-color"} -->
                <h1 class="wp-block-heading has-heading-color-color has-text-color" style="font-size:32px;font-style:normal;font-weight:600;line-height:1.4;text-transform:capitalize"><?php esc_html_e('A user friendly theme built with usability in mind', 'fotawp') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Every project is different and so should the process be. We’ll define a clear framework of how we communicate, exchange feedback and effectively work together.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}}} -->
                <div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontSize":"18px"}},"className":"fotawp-button-with-icon is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button has-custom-font-size fotawp-button-with-icon is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

                <!-- wp:image {"id":3466,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}},"className":"fotawp-flip-up"} -->
                <figure class="wp-block-image size-full has-custom-border fotawp-flip-up"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-3466" style="border-radius:0px;object-fit:cover" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"left":"70px"}}},"className":"fotawp-fade-up"} -->
            <div class="wp-block-column is-vertically-aligned-top fotawp-fade-up" style="padding-left:70px"><!-- wp:image {"id":3467,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}},"className":"fotawp-flip-up"} -->
                <figure class="wp-block-image size-full has-custom-border fotawp-flip-up"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-3467" style="border-radius:0px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.4"},"spacing":{"margin":{"top":"60px"}}},"textColor":"heading-color"} -->
                <h1 class="wp-block-heading has-heading-color-color has-text-color" style="margin-top:60px;font-size:32px;font-style:normal;font-weight:600;line-height:1.4"><?php esc_html_e('Build Your Website to the Ultimate Level with FotaWP', 'fotawp') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Every project is different and so should the process be. We’ll define a clear framework of how we communicate, exchange feedback and effectively work together.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontSize":"18px"}},"className":"fotawp-button-with-icon is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button has-custom-font-size fotawp-button-with-icon is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->