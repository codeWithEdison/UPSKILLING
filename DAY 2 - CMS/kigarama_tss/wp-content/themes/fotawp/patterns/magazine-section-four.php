<?php

/**
 * Title: Magazine Section (Must Read Articles)
 * Slug: fotawp/magazine-section-four
 * Categories: fotawp,fotawp-magazine
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|70","top":"var:preset|spacing|70"}},"border":{"top":{"width":"0px","style":"none"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="border-top-style:none;border-top-width:0px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3} -->
  <h3 class="wp-block-heading"><?php echo esc_html__('Must Read Articles', 'fotawp') ?></h3>
  <!-- /wp:heading -->

  <!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"}},"spacing":{"padding":{"top":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;padding-top:0"><!-- wp:query {"queryId":25,"query":{"perPage":"8","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":5}} -->
    <div class="wp-block-query"><!-- wp:post-template -->
      <!-- wp:post-featured-image {"isLink":true,"height":"130px","align":"wide","style":{"border":{"radius":"6px"}}} /-->

      <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-title-hover-secondary-color","fontSize":"medium"} /-->

      <!-- wp:post-date {"fontSize":"xx-small"} /-->
      <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->