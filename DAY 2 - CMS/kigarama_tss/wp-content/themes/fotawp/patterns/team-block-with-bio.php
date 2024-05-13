<?php

/**
 * Title: Team block with short bio
 * Slug: fotawp/team-block-with-bio
 * Categories: fotawp,fotawp-teams
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/team_1.jpg',
    $fotawp_url . 'assets/images/team_2.jpg',
    $fotawp_url . 'assets/images/team_3.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"100px","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"44px"}},"textColor":"foregound-alt"} -->
            <h1 class="wp-block-heading has-text-align-left has-foregound-alt-color has-text-color" style="font-size:44px;font-style:normal;font-weight:600"><?php echo esc_html_e('Our Teams', 'fotawp') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}}},"textColor":"background-alt"} -->
            <p class="has-background-alt-color has-text-color has-link-color"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-color has-foregound-alt-background-color has-text-color has-background has-link-color wp-element-button"><?php echo esc_html_e('Meet All Members', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":{"top":"2rem","left":"2rem"}}}} -->
    <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":42,"width":"150px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-42" style="border-radius:50%;aspect-ratio:1;object-fit:cover;width:150px" /></figure>
                <!-- /wp:image -->

                <!-- wp:spacer {"height":"20px"} -->
                <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php echo esc_html_e('John Doe', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","level":6,"style":{"color":{"text":"#7d7d7d"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
                <h6 class="wp-block-heading has-text-align-center has-text-color has-small-font-size" style="color:#7d7d7d;font-style:normal;font-weight:300"><?php echo esc_html_e('Software Engineer', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#25133F","iconBackgroundColor":"background-alt","iconBackgroundColorValue":"#FBF9FE","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
                <ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"github"} /-->
                </ul>
                <!-- /wp:social-links -->

                <!-- wp:paragraph {"align":"center","textColor":"sub-heading-color","fontSize":"small"} -->
                <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size"><?php echo esc_html_e('The placeholder text, beginning with the line&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":42,"width":"150px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-42" style="border-radius:50%;aspect-ratio:1;object-fit:cover;width:150px" /></figure>
                <!-- /wp:image -->

                <!-- wp:spacer {"height":"20px"} -->
                <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php echo esc_html_e('Marcus Henry', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","level":6,"style":{"color":{"text":"#7d7d7d"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
                <h6 class="wp-block-heading has-text-align-center has-text-color has-small-font-size" style="color:#7d7d7d;font-style:normal;font-weight:300"><?php echo esc_html_e('DevOps Engineer', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#25133F","iconBackgroundColor":"background-alt","iconBackgroundColorValue":"#FBF9FE","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
                <ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"github"} /-->
                </ul>
                <!-- /wp:social-links -->

                <!-- wp:paragraph {"align":"center","textColor":"sub-heading-color","fontSize":"small"} -->
                <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size"><?php echo esc_html_e('The placeholder text, beginning with the line&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":42,"width":"150px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-42" style="border-radius:50%;aspect-ratio:1;object-fit:cover;width:150px" /></figure>
                <!-- /wp:image -->

                <!-- wp:spacer {"height":"20px"} -->
                <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php echo esc_html_e('Liyana Tobe', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","level":6,"style":{"color":{"text":"#7d7d7d"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
                <h6 class="wp-block-heading has-text-align-center has-text-color has-small-font-size" style="color:#7d7d7d;font-style:normal;font-weight:300"><?php echo esc_html_e('Software Engineer', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#25133F","iconBackgroundColor":"background-alt","iconBackgroundColorValue":"#FBF9FE","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
                <ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"github"} /-->
                </ul>
                <!-- /wp:social-links -->

                <!-- wp:paragraph {"align":"center","textColor":"sub-heading-color","fontSize":"small"} -->
                <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size"><?php echo esc_html_e('The placeholder text, beginning with the line&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->