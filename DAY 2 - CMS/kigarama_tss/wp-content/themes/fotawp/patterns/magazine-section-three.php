<?php

/**
 * Title: Magazine Section Three
 * Slug: fotawp/magazine-section-three
 * Categories: fotawp,fotawp-magazine
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
<div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"2px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
  <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:2px;padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":"1"}},"fontSize":"x-large"} -->
    <h1 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--20);line-height:1"><?php echo esc_html__('Featured Articles', 'fotawp') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:query {"queryId":29,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":6}} -->
    <div class="wp-block-query"><!-- wp:post-template -->
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"var:preset|spacing|20"}},"layout":{"inherit":false}} -->
      <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"height":"100px","style":{"border":{"radius":"5px"}}} /-->

        <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"#262424"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"500","fontSize":"18px"}},"textColor":"foreground","className":"is-style-title-hover-secondary-color"} /-->

        <!-- wp:post-date {"fontSize":"xx-small"} /-->
      </div>
      <!-- /wp:group -->
      <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->