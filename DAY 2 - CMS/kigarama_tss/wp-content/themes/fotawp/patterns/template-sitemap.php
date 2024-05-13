<?php

/**
 * Title: Sitemap Page Template
 * Slug: fotawp/template-sitemap
 * Categories: template
 * Inserter: false
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top: var(--wp--preset--spacing--80); padding-right: var(--wp--preset--spacing--40); padding-bottom: var(--wp--preset--spacing--80); padding-left: var(--wp--preset--spacing--40)">
    <!-- wp:post-title {"textAlign":"center","level":1} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top: var(--wp--preset--spacing--80); padding-right: var(--wp--preset--spacing--40); padding-bottom: var(--wp--preset--spacing--80); padding-left: var(--wp--preset--spacing--40)">
    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":4} -->
            <h4 class="wp-block-heading"><?php echo esc_html__('Pages', 'fotawp') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:page-list {"className":"is-style-fotawp-page-list-bullet-hide-style","style":{"typography":{"lineHeight":"2"}}} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":4} -->
            <h4 class="wp-block-heading"><?php echo esc_html__('Categories', 'fotawp') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"className":"is-style-fotawp-categories-bullet-hide-style","style":{"typography":{"lineHeight":"2"}}} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":4} -->
            <h4 class="wp-block-heading"><?php echo esc_html__('Posts', 'fotawp') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:query {"queryId":31,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full","layout":{"type":"default"}} -->
            <div class="wp-block-query alignfull">
                <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignfull" style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0">
                    <!-- wp:post-template {"style":{"typography":{"textTransform":"none"}}} -->
                    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px","justifyContent":"left","wideSize":"780px"}} -->
                    <div class="wp-block-group">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="padding-bottom: 0">
                            <!-- wp:post-title {"isLink":true,"style":{"layout":{"selfStretch":"fit"},"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"500","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","className":"is-style-title-hover-secondary-color"} /-->

                            <!-- wp:post-date {"textAlign":"left","format":"n/j/Y","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"letterSpacing":"1px","fontSize":"0.9rem"}},"textColor":"contrast"} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40","right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"780px"}} -->
                <div class="wp-block-group" style="margin-top: 0; margin-bottom: 0; padding-top: var(--wp--preset--spacing--60); padding-right: 0; padding-bottom: var(--wp--preset--spacing--40); padding-left: 0">
                    <!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <!-- wp:query-pagination-previous {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"letterSpacing":"1px","fontSize":"0.9rem","textTransform":"uppercase"}}} /-->

                    <!-- wp:query-pagination-next {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"letterSpacing":"1px","fontSize":"0.9rem","textTransform":"uppercase"}}} /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->