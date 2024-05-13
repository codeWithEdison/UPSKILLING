<?php

/**
 * Title: Header larger with slant banner bottom
 * Slug: fotawp/header-large-with-slant-banner
 * Categories: fotawp, header,fotawp-header
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
  $fotawp_url . 'assets/images/banner_featured_image.png',
);
?>
<!-- wp:cover {"minHeight":780,"minHeightUnit":"px","gradient":"first-primary-gradient","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"className":"fotawpbanner-with-slantbottom"} -->
<div class="wp-block-cover alignfull is-light fotawpbanner-with-slantbottom" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:780px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-first-primary-gradient-gradient-background"></span>
  <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
      <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":48,"shouldSyncIcon":false} /-->

          <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"text-alter-color","fontSize":"large"} /-->
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

    <!-- wp:spacer {"height":"10px"} -->
    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
      <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"right":"0","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0"},"blockGap":"var:preset|spacing|20"}},"className":"is-style-default"} -->
        <div class="wp-block-column is-vertically-aligned-center is-style-default" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0;flex-basis:45%"><!-- wp:heading {"textAlign":"left","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4","fontSize":"48px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"24px","left":"0"}}},"textColor":"foregound-alt"} -->
          <h2 class="wp-block-heading alignwide has-text-align-left has-foregound-alt-color has-text-color" style="margin-top:0;margin-right:0;margin-bottom:24px;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:48px;font-style:normal;font-weight:600;line-height:1.4"><?php esc_html_e('Empowering Your Online Presence: Crafting Experiences That Inspire!', 'fotawp') ?></h2>
          <!-- /wp:heading -->

          <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8","fontSize":"16px"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"foregound-alt"} -->
          <p class="has-foregound-alt-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60);font-size:16px;line-height:1.8"><?php esc_html_e('The placeholder text, beginning with the line lorem ipsum looks like Latin because in its youth, centuries ago, it was Latin.', 'fotawp') ?></p>
          <!-- /wp:paragraph -->

          <!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
          <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background-alt","textColor":"heading-color","style":{"border":{"radius":"10px"},"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"1.3rem","bottom":"1.3rem"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-background-alt-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:10px;padding-top:1.3rem;padding-right:2.5rem;padding-bottom:1.3rem;padding-left:2.5rem"><?php esc_html_e('Request Demo', 'fotawp') ?></a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"secondary","textColor":"foregound-alt","style":{"border":{"radius":"10px"},"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"1.3rem","bottom":"1.3rem"}}},"className":"is-style-button-hover-white-bgcolor","fontSize":"small"} -->
            <div class="wp-block-button has-custom-font-size is-style-button-hover-white-bgcolor has-small-font-size"><a class="wp-block-button__link has-foregound-alt-color has-secondary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:10px;padding-top:1.3rem;padding-right:2.5rem;padding-bottom:1.3rem;padding-left:2.5rem"><?php esc_html_e('Schedule Call', 'fotawp') ?></a></div>
            <!-- /wp:button -->
          </div>
          <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
        <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"align":"right","id":2954,"sizeSlug":"full","linkDestination":"none"} -->
          <figure class="wp-block-image alignright size-full"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-2954" /></figure>
          <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
      </div>
      <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"330px"} -->
    <div style="height:330px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
  </div>
</div>
<!-- /wp:cover -->