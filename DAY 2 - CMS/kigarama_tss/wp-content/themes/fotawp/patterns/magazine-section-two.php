<?php

/**
 * Title: Magazine Section Two
 * Slug: fotawp/magazine-section-two
 * Categories: fotawp,fotawp-magazine
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","level":1,"style":{"spacing":{"margin":{"bottom":"0"}},"typography":{"lineHeight":"1"}},"fontSize":"x-large"} -->
  <h1 class="wp-block-heading has-text-align-left has-x-large-font-size" style="margin-bottom:0;line-height:1"><?php echo esc_html__('News Headline', 'fotawp') ?></h1>
  <!-- /wp:heading -->

  <!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70","right":"0"},"margin":{"bottom":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"2px"}}}} -->
  <div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:2px;margin-bottom:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"60%"} -->
    <div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"constrained"}} -->
      <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":29,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":3}} -->
          <div class="wp-block-query"><!-- wp:post-template -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"var:preset|spacing|20"}},"layout":{"inherit":false}} -->
            <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"width":"100%","style":{"border":{"radius":"7px"}}} /-->

              <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|50"}},"typography":{"lineHeight":"1.2","fontSize":"30px"}},"className":"is-style-title-hover-secondary-color"} /-->

              <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small"} -->
              <div class="wp-block-group has-x-small-font-size" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-date {"textColor":"foreground"} /-->

                <!-- wp:paragraph {"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color">.</p>
                <!-- /wp:paragraph -->

                <!-- wp:post-author-name {"textColor":"foreground"} /-->
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
          </div>
          <!-- /wp:query -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
      <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":29,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
        <div class="wp-block-query"><!-- wp:post-template -->
          <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"var:preset|spacing|20"}},"layout":{"inherit":false}} -->
          <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"height":"160px","style":{"border":{"radius":"5px"}}} /-->

            <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"#262424"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"500","fontSize":"18px"}},"textColor":"foreground","className":"is-style-title-hover-secondary-color"} /-->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small"} -->
            <div class="wp-block-group has-x-small-font-size" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-date /-->

              <!-- wp:paragraph -->
              <p>.</p>
              <!-- /wp:paragraph -->

              <!-- wp:post-author-name /-->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->
          <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->