<?php

/**
 * Title: Featured CTA Box
 * Slug: fotawp/featured-cta-box
 * Categories: fotawp,fotawp-cta
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_icon_images = array(
  $fotawp_url . 'assets/images/icon_easy_customize.svg',
  $fotawp_url . 'assets/images/icon_mobile_first.svg',
  $fotawp_url . 'assets/images/icon_pagebuilder.svg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","right":"var:preset|spacing|40","bottom":"4rem","left":"var:preset|spacing|40"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:4rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|30","bottom":"0","left":"0"}}},"className":"is-style-default fotawp-fade-up"} -->
    <div class="wp-block-column is-style-default fotawp-fade-up" style="border-style:none;border-width:0px;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"36px","bottom":"0px","left":"36px"}},"border":{"radius":"10px","width":"0px","style":"none"}},"className":"is-style-default fotawp-cta-box","layout":{"type":"constrained"}} -->
      <div class="wp-block-group is-style-default fotawp-cta-box" style="border-style:none;border-width:0px;border-radius:10px;padding-top:0px;padding-right:36px;padding-bottom:0px;padding-left:36px"><!-- wp:image {"align":"center","id":974,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"cta-icon"} -->
        <figure class="wp-block-image aligncenter size-full cta-icon"><img src="<?php echo esc_url($fotawp_icon_images[0]) ?>" alt="" class="wp-image-974" /></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
        <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--50);font-style:normal;font-weight:600"><?php esc_html_e('Easy Customizable', 'fotawp') ?></h4>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
        <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--40);font-size:18px;line-height:1.5"><?php esc_html_e('FSE block builder is the way of creating site and our customizable features added value on.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"transparent","textColor":"primary","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"fotawp-button-with-icon is-style-button-hover-secondary-color"} -->
          <div class="wp-block-button has-custom-font-size fotawp-button-with-icon is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Learn More', 'fotawp') ?></a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0"}}},"className":"is-style-default fotawp-fade-up"} -->
    <div class="wp-block-column is-style-default fotawp-fade-up" style="border-style:none;border-width:0px;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"36px","bottom":"0px","left":"36px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"className":"is-style-default fotawp-cta-box","layout":{"type":"constrained"}} -->
      <div class="wp-block-group is-style-default fotawp-cta-box" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:36px;padding-bottom:0px;padding-left:36px"><!-- wp:image {"align":"center","id":974,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"cta-icon"} -->
        <figure class="wp-block-image aligncenter size-full cta-icon"><img src="<?php echo esc_url($fotawp_icon_images[1]) ?>" alt="" class="wp-image-974" /></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
        <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--50);font-style:normal;font-weight:600"><?php esc_html_e('Mobile First Approach', 'fotawp') ?></h4>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
        <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--40);font-size:18px;line-height:1.5"><?php esc_html_e('Modern era of website builder does not imagine without responsive and we will taken care of it seamlessly.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"transparent","textColor":"primary","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"fotawp-button-with-icon is-style-button-hover-secondary-color"} -->
          <div class="wp-block-button has-custom-font-size fotawp-button-with-icon is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Learn More', 'fotawp') ?></a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default fotawp-fade-up"} -->
    <div class="wp-block-column is-style-default fotawp-fade-up" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"36px","right":"36px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"className":"is-style-default fotawp-cta-box","layout":{"type":"constrained"}} -->
      <div class="wp-block-group is-style-default fotawp-cta-box" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:36px;padding-bottom:0px;padding-left:36px"><!-- wp:image {"align":"center","id":164,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"cta-icon"} -->
        <figure class="wp-block-image aligncenter size-full cta-icon"><img src="<?php echo esc_url($fotawp_icon_images[2]) ?>" alt="" class="wp-image-164" /></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
        <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--50);font-style:normal;font-weight:600"><?php esc_html_e('Native Site Editor', 'fotawp') ?></h4>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
        <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--40);font-size:18px;line-height:1.5"><?php esc_html_e('While it comes with native builder FSE/Block builder and Elementor, making so easy.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"transparent","textColor":"primary","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"fotawp-button-with-icon is-style-button-hover-secondary-color"} -->
          <div class="wp-block-button has-custom-font-size fotawp-button-with-icon is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Learn More', 'fotawp') ?></a></div>
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