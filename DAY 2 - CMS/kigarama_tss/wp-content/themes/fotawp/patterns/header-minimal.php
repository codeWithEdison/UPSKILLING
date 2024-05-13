<?php

/**
 * Title: Header Minimal
 * Slug: fotawp/header-minimal
 * Categories: fotawp, header,fotawp-header
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}}},"gradient":"fourth-primary-gradient","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-fourth-primary-gradient-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
  <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group"><!-- wp:site-logo {"width":50,"style":{"color":{"duotone":"unset"}}} /-->

      <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"large"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
    <div class="wp-block-group">
      <!-- wp:navigation {"textColor":"foregound-alt","overlayBackgroundColor":"foregound-alt","overlayTextColor":"heading-color","className":"fotawp-navigation"} -->
      <!-- wp:home-link {"label":"Home"} /-->
      <!-- wp:page-list /-->
      <!-- /wp:navigation -->

      <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"backgroundColor":"transparent","className":"fotawp-nav-search"} /-->

        <!-- wp:woocommerce/mini-cart {"iconColor":{"name":"Foreground Alternative","color":"#FEFEFE","slug":"foregound-alt","class":"has-foregound-alt-icon-color"},"productCountColor":{"slug":"secondary","color":"#FB9E2D","name":"Secondary","class":"has-secondary-product-count-color"}} /-->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->