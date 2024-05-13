<?php

/**
 * Title: Featured CTA box with overlap style
 * Slug: fotawp/featured-cta-box-overlap
 * Categories: fotawp,fotawp-cta
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_icon_images = array(
  $fotawp_url . 'assets/images/icon_easy_customize.svg',
  $fotawp_url . 'assets/images/icon_mobile_first.svg',
  $fotawp_url . 'assets/images/icon_pagebuilder.svg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"className":"fotawp-overlap-ctasection","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group fotawp-overlap-ctasection" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|30","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
    <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"36px","right":"36px","bottom":"36px","left":"36px"}},"border":{"radius":"10px","width":"1px"}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
      <div class="wp-block-group is-style-fotawp-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:10px;padding-top:36px;padding-right:36px;padding-bottom:36px;padding-left:36px"><!-- wp:image {"align":"center","id":974,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"fotawp-duotone-primary"} -->
        <figure class="wp-block-image aligncenter size-full fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[0]) ?>" alt="" class="wp-image-974" /></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
        <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php esc_html_e('Easy Customizable', 'fotawp') ?></h4>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}}} -->
        <p class="has-text-align-center" style="font-size:18px;line-height:1.5"><?php esc_html_e('FSE block builder is the way of creating site and our customizable features added value on.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"background","textColor":"primary","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"fotawp-button-with-icon is-style-button-hover-secondary-color"} -->
          <div class="wp-block-button has-custom-font-size fotawp-button-with-icon is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Learn More', 'fotawp') ?></a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0"}}},"className":"is-style-default"} -->
    <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"36px","right":"36px","bottom":"36px","left":"36px"}},"border":{"radius":"10px","width":"1px"}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
      <div class="wp-block-group is-style-fotawp-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:10px;padding-top:36px;padding-right:36px;padding-bottom:36px;padding-left:36px"><!-- wp:image {"align":"center","id":974,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"fotawp-duotone-primary"} -->
        <figure class="wp-block-image aligncenter size-full fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[1]) ?>" alt="" class="wp-image-974" /></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
        <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php esc_html_e('Mobile First Approach', 'fotawp') ?></h4>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}}} -->
        <p class="has-text-align-center" style="font-size:18px;line-height:1.5"><?php esc_html_e('Modern era of website builder does not imagine without responsive and we will taken care of it seamlessly.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"background","textColor":"primary","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"fotawp-button-with-icon is-style-button-hover-secondary-color"} -->
          <div class="wp-block-button has-custom-font-size fotawp-button-with-icon is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Learn More', 'fotawp') ?></a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
    <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"36px","bottom":"36px","left":"36px","right":"36px"}},"border":{"radius":"10px","width":"1px"}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
      <div class="wp-block-group is-style-fotawp-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:10px;padding-top:36px;padding-right:36px;padding-bottom:36px;padding-left:36px"><!-- wp:image {"align":"center","id":164,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"fotawp-duotone-primary"} -->
        <figure class="wp-block-image aligncenter size-full fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[2]) ?>" alt="" class="wp-image-164" /></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
        <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php esc_html_e('Native Site Editor', 'fotawp') ?></h4>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}}} -->
        <p class="has-text-align-center" style="font-size:18px;line-height:1.5"><?php esc_html_e('While it comes with native builder FSE/Block builder and Elementor, making so easy.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"background","textColor":"primary","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"fotawp-button-with-icon is-style-button-hover-secondary-color"} -->
          <div class="wp-block-button has-custom-font-size fotawp-button-with-icon is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Learn More', 'fotawp') ?></a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->