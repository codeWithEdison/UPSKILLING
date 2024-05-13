<?php

/**
 * Title: Magazine Section One
 * Slug: fotawp/magazine-section-one
 * Categories: fotawp,fotawp-magazine
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|50","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50"}}},"backgroundColor":"tertiary-light","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-tertiary-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
    <div class="wp-block-column" style="flex-basis:60%"><!-- wp:query {"queryId":18,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
      <div class="wp-block-query"><!-- wp:post-template -->
        <!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"overlayColor":"background-alt","focalPoint":{"x":0.5,"y":0.5},"minHeight":440,"isDark":false,"className":"is-style-fotawp-cover-round-style"} -->
        <div class="wp-block-cover is-light is-style-fotawp-cover-round-style" style="min-height:440px"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim-0 has-background-dim"></span>
          <div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"365px"} -->
            <div style="height:365px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"className":"is-style-title-hover-secondary-color","fontSize":"x-large"} /-->

            <!-- wp:post-date {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"foregound-alt","fontSize":"xx-small"} /-->
          </div>
        </div>
        <!-- /wp:cover -->
        <!-- /wp:post-template -->
      </div>
      <!-- /wp:query -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
    <div class="wp-block-column" style="flex-basis:40%"><!-- wp:query {"queryId":34,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
      <div class="wp-block-query"><!-- wp:post-template -->
        <!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"border":{"radius":"5px"}}} /-->

        <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"18px"}},"className":"is-style-title-hover-secondary-color"} /-->

        <!-- wp:post-date {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"xx-small"} /-->
        <!-- /wp:post-template -->
      </div>
      <!-- /wp:query -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->