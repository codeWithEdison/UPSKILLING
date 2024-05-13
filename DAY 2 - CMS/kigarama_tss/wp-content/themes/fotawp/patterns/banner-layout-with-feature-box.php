<?php

/**
 * Title: Banner/Hero Layout with featured Box
 * Slug: fotawp/banner-layout-with-feature-box
 * Categories: fotawp,fotawp-banner
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_icon_images = array(
    $fotawp_url . 'assets/images/banner_full.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","bottom":"0","right":"0","left":"0"},"blockGap":"var:preset|spacing|40"},"color":{"background":"#eff0f3"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#eff0f3;padding-top:0rem;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_icon_images[0]) ?>","id":531,"hasParallax":true,"dimRatio":30,"minHeight":840,"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover has-parallax" style="min-height:840px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span>
        <div role="img" class="wp-block-cover__image-background wp-image-531 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url($fotawp_icon_images[0]) ?>)"></div>
        <div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"173px"} -->
            <div style="height:173px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:group {"layout":{"type":"constrained","contentSize":"860px"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1","fontSize":"64px"}}} -->
                <h1 class="wp-block-heading has-text-align-center" style="font-size:64px;font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Turning Concepts into', 'fotawp') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1","fontSize":"64px"}}} -->
                <h1 class="wp-block-heading has-text-align-center" style="font-size:64px;font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Tangible Results', 'fotawp') ?></h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:spacer {"height":"136px"} -->
            <div style="height:136px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"0","bottom":"0","left":"0"}},"border":{"top":{"style":"none","width":"0px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
            <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"70px"}}}} -->
                <div class="wp-block-columns"><!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
                    <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"className":"is-style-default","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-default" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foregound-alt","fontSize":"large"} -->
                            <h4 class="wp-block-heading has-text-align-left has-foregound-alt-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Easy Customizable', 'fotawp') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px"}}} -->
                            <p class="has-text-align-left" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'fotawp') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
                    <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"className":"is-style-default","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-default" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foregound-alt","fontSize":"large"} -->
                            <h4 class="wp-block-heading has-text-align-left has-foregound-alt-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('100% Responsive', 'fotawp') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px"}}} -->
                            <p class="has-text-align-left" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'fotawp') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
                    <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"className":"is-style-default","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-default" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foregound-alt","fontSize":"large"} -->
                            <h4 class="wp-block-heading has-text-align-left has-foregound-alt-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('eCommerce Ready', 'fotawp') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px"}}} -->
                            <p class="has-text-align-left" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'fotawp') ?></p>
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
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->