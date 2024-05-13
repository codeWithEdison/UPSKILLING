<?php

/**
 * Title: Testimonial Section 2 Columns
 * Slug: fotawp/testimonial-section-cols
 * Categories: fotawp,testimonials,fotawp-testimonials
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/fota_testimonial_1.png',
    $fotawp_url . 'assets/images/fota_testimonial_2.png',
    $fotawp_url . 'assets/images/fota_testimonial_3.png',
    $fotawp_url . 'assets/images/fota_testimonial_4.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"70px","right":"var:preset|spacing|70","bottom":"100px","left":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:70px;padding-right:var(--wp--preset--spacing--70);padding-bottom:100px;padding-left:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"left","level":1,"textColor":"foregound-alt","fontSize":"xx-large"} -->
    <h1 class="wp-block-heading has-text-align-left has-foregound-alt-color has-text-color has-xx-large-font-size"><?php esc_html_e('Testimonials', 'fotawp') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"left","textColor":"foregound-alt","fontSize":"medium"} -->
    <p class="has-text-align-left has-foregound-alt-color has-text-color has-medium-font-size"><?php esc_html_e('Lorem ipsum, or ipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.', 'fotawp') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6,"fontSize":"18px"}}} -->
                <p style="font-size:18px;line-height:1.6"><?php esc_html_e('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"15px","margin":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:30px"><!-- wp:image {"id":1822,"width":"60px","style":{"border":{"radius":"50px"}},"className":"is-resized"} -->
                    <figure class="wp-block-image is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-1822" style="border-radius:50px;width:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
                        <h5 class="wp-block-heading"><?php esc_html_e('Peter P', 'fotawp') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Blogger / Lifestyle', 'fotawp') ?></p>
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
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6,"fontSize":"18px"}}} -->
                <p style="font-size:18px;line-height:1.6"><?php esc_html_e('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"15px","margin":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:30px"><!-- wp:image {"id":1822,"width":"60px","style":{"border":{"radius":"50px"}},"className":"is-resized"} -->
                    <figure class="wp-block-image is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-1822" style="border-radius:50px;width:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
                        <h5 class="wp-block-heading"><?php esc_html_e('Romanov L', 'fotawp') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Author', 'fotawp') ?></p>
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

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6,"fontSize":"18px"}}} -->
                <p style="font-size:18px;line-height:1.6"><?php esc_html_e('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"15px","margin":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:30px"><!-- wp:image {"id":1822,"width":"60px","style":{"border":{"radius":"50px"}},"className":"is-resized"} -->
                    <figure class="wp-block-image is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-1822" style="border-radius:50px;width:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
                        <h5 class="wp-block-heading"><?php esc_html_e('Rozi Loreal', 'fotawp') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Public Speaker', 'fotawp') ?></p>
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
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6,"fontSize":"18px"}}} -->
                <p style="font-size:18px;line-height:1.6"><?php esc_html_e('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"15px","margin":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:30px"><!-- wp:image {"id":1822,"width":"60px","style":{"border":{"radius":"50px"}},"className":"is-resized"} -->
                    <figure class="wp-block-image is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[3]) ?>" alt="" class="wp-image-1822" style="border-radius:50px;width:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
                        <h5 class="wp-block-heading"><?php esc_html_e('Johnathona D', 'fotawp') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Buisness Owner', 'fotawp') ?></p>
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