<?php

/**
 * Title: Testimonial Section 3 Columns box Style
 * Slug: fotawp/testimonial-block-three-col
 * Categories: fotawp,testimonials,fotawp-testimonials
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/fota_testimonial_1.png',
    $fotawp_url . 'assets/images/fota_testimonial_2.png',
    $fotawp_url . 'assets/images/fota_testimonial_3.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|50","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"heading-color"} -->
    <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color"><?php echo esc_html__('Testimonials', 'fotawp') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"sub-heading-color"} -->
    <p class="has-text-align-center has-sub-heading-color-color has-text-color"><?php echo esc_html__('Lorem ipsum, or&nbsp;lipsum&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs.', 'fotawp') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-alt-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6,"fontSize":"18px"}},"textColor":"sub-heading-color"} -->
                <p class="has-sub-heading-color-color has-text-color" style="font-size:18px;line-height:1.6"><?php echo esc_html__('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0.55rem","margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:image {"id":1822,"width":60,"height":60,"style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-1822" style="border-radius:50px" width="60" height="60" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
                        <h5 class="wp-block-heading"><?php echo esc_html__('Mox M', 'fotawp') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php echo esc_html__('Blogger / Lifestyle', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-alt-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6,"fontSize":"18px"}},"textColor":"sub-heading-color"} -->
                <p class="has-sub-heading-color-color has-text-color" style="font-size:18px;line-height:1.6"><?php echo esc_html__('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0.55rem","margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:image {"id":93,"width":60,"height":60,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-93" style="border-radius:50px" width="60" height="60" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
                        <h5 class="wp-block-heading"><?php echo esc_html__('Mox M', 'fotawp') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php echo esc_html__('Blogger / Lifestyle', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-alt-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6,"fontSize":"18px"}},"textColor":"sub-heading-color"} -->
                <p class="has-sub-heading-color-color has-text-color" style="font-size:18px;line-height:1.6"><?php echo esc_html__('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0.55rem","margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:image {"id":94,"width":60,"height":60,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-94" style="border-radius:50px" width="60" height="60" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
                        <h5 class="wp-block-heading"><?php echo esc_html__('Mox M', 'fotawp') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php echo esc_html__('Blogger / Lifestyle', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->