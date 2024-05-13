<?php

/**
 * Title: Header large with banner
 * Slug: fotawp/header-large-with-banner
 * Categories: fotawp,header, fotawp-header
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
  $fotawp_url . 'assets/images/banner_bg.png',
  $fotawp_url . 'assets/images/banner_image.jpg',
);
?>
<!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url($fotawp_images[0]) ?>","id":3508,"source":"file","title":"banner_bg-2"}},"dimensions":{"minHeight":""},"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"bottom":{"color":"#ffffff21","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
  <div class="wp-block-group" style="border-bottom-color:#ffffff21;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-group"><!-- wp:site-logo {"width":48,"shouldSyncIcon":false} /-->

        <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"text-alter-color","fontSize":"large"} /-->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
      <div class="wp-block-group"><!-- wp:navigation {"textColor":"foregound-alt","overlayBackgroundColor":"foregound-alt","overlayTextColor":"heading-color","className":"fotawp-navigation"} -->
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

  <!-- wp:cover {"dimRatio":0,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"60px"}}}} -->
  <div class="wp-block-cover alignfull is-light" style="margin-top:60px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"460px"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
      <div class="wp-block-group" style="min-height:460px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontSize":"60px","lineHeight":"1.4"},"spacing":{"margin":{"bottom":"24px"}}},"textColor":"foregound-alt","className":"fotawp-flip-up"} -->
        <h1 class="wp-block-heading has-text-align-center fotawp-flip-up has-foregound-alt-color has-text-color has-link-color" style="margin-bottom:24px;font-size:60px;line-height:1.4"><?php esc_html_e('Ignite Your Online Presence, Expand', 'fotawp') ?><br><?php esc_html_e('Your Business Globally!', 'fotawp') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.8","fontSize":"16px"},"spacing":{"margin":{"top":"0","bottom":"2.6rem"}}},"textColor":"foregound-alt","className":"fotawp-fade-up"} -->
        <p class="has-text-align-center fotawp-fade-up has-foregound-alt-color has-text-color" style="margin-top:0;margin-bottom:2.6rem;font-size:16px;line-height:1.8"><?php esc_html_e('The placeholder text, beginning with the line lorem ipsum looks like Latin because in its youth, centuries ago, it was Latin.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"className":"fotawp-slide-up","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-buttons fotawp-slide-up"><!-- wp:button {"backgroundColor":"background-alt","textColor":"heading-color","style":{"border":{"radius":"10px"},"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"1.3rem","bottom":"1.3rem"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
          <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-background-alt-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:10px;padding-top:1.3rem;padding-right:2.5rem;padding-bottom:1.3rem;padding-left:2.5rem"><?php esc_html_e('Request Demo', 'fotawp') ?></a></div>
          <!-- /wp:button -->

          <!-- wp:button {"backgroundColor":"secondary","textColor":"foregound-alt","style":{"border":{"radius":"10px"},"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"1.3rem","bottom":"1.3rem"}}},"className":"is-style-button-hover-white-bgcolor","fontSize":"small"} -->
          <div class="wp-block-button has-custom-font-size is-style-button-hover-white-bgcolor has-small-font-size"><a class="wp-block-button__link has-foregound-alt-color has-secondary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:10px;padding-top:1.3rem;padding-right:2.5rem;padding-bottom:1.3rem;padding-left:2.5rem"><?php esc_html_e('Schedule Call', 'fotawp') ?></a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"60px"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="margin-top:60px"><!-- wp:image {"id":3519,"width":"1180px","sizeSlug":"large","linkDestination":"none","className":"fotawp-zoom-in-up"} -->
          <figure class="wp-block-image size-large is-resized fotawp-zoom-in-up"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-3519" style="width:1180px" /></figure>
          <!-- /wp:image -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
  </div>
  <!-- /wp:cover -->
</div>
<!-- /wp:group -->