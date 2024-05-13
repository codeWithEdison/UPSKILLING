<?php

/**
 * Title: Team block
 * Slug: fotawp/team-block-white
 * Categories: fotawp,fotawp-teams
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/team_1.jpg',
    $fotawp_url . 'assets/images/team_2.jpg',
    $fotawp_url . 'assets/images/team_3.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"44px","fontStyle":"normal","fontWeight":"600"}}} -->
            <h2 class="wp-block-heading has-text-align-left" style="font-size:44px;font-style:normal;font-weight:600"><?php echo esc_html_e('Meet the Team', 'fotawp') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph -->
            <p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_e('Meet All Members', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"24px"},"margin":{"top":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[0]) ?>","id":139,"dimRatio":30,"minHeight":460,"contentPosition":"bottom left","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-139" alt="" src="<?php echo esc_url($fotawp_images[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html_e('John Doe', 'fotawp') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                        <p class="has-text-align-left" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_e('Founder', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"iconColor":"foregound-alt","iconColorValue":"#FEFEFE","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
                        <ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"github"} /-->

                            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[1]) ?>","id":144,"dimRatio":30,"minHeight":460,"contentPosition":"bottom left","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-144" alt="" src="<?php echo esc_url($fotawp_images[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html_e('Robert Marcus', 'fotawp') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                        <p class="has-text-align-left" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_e('Entrepreneur', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"iconColor":"foregound-alt","iconColorValue":"#FEFEFE","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
                        <ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"github"} /-->

                            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[2]) ?>","id":145,"dimRatio":40,"minHeight":460,"contentPosition":"bottom left","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-145" alt="" src="<?php echo esc_url($fotawp_images[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html_e('Kristina Dole', 'fotawp') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                        <p class="has-text-align-left" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_e('Project Manager', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"iconColor":"foregound-alt","iconColorValue":"#FEFEFE","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
                        <ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"github"} /-->

                            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->