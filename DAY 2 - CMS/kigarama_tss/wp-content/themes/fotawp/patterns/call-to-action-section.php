<?php

/**
 * Title: Call to Action
 * Slug: fotawp/call-to-action-section
 * Categories: fotawp,fotawp-cta
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
  $fotawp_url . 'assets/images/templates_stack.png'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"0","left":"0"}}},"className":"fotawp-zoom-in-up","layout":{"type":"constrained"}} -->
<div class="wp-block-group fotawp-zoom-in-up" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"0","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0"}}},"gradient":"third-primary-gradient","layout":{"type":"constrained","contentSize":"1180px"}} -->
  <div class="wp-block-group has-third-primary-gradient-gradient-background has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
      <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"0","bottom":"var:preset|spacing|70"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
          <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"2px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"foregound-alt","fontSize":"x-small"} -->
            <h4 class="wp-block-heading has-foregound-alt-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:2px;line-height:1;text-transform:uppercase"><?php esc_html_e('Meet FotaWP,', 'fotawp') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:heading {"style":{"typography":{"lineHeight":"1.4","fontSize":"44px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0"}}},"textColor":"foregound-alt"} -->
            <h2 class="wp-block-heading has-foregound-alt-color has-text-color" style="margin-top:0;font-size:44px;font-style:normal;font-weight:600;line-height:1.4"><?php esc_html_e('The Ultimate Website Engine for the Modern WordPress.', 'fotawp') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.5","fontSize":"18px"},"spacing":{"margin":{"top":"16px","bottom":"24px"}}},"textColor":"foregound-alt"} -->
            <p class="has-foregound-alt-color has-text-color" style="margin-top:16px;margin-bottom:24px;font-size:18px;font-style:normal;font-weight:400;line-height:1.5"><?php esc_html_e('Even if you are beginner with zero coding knowledge, You can build awesome responsive sites using FOTAWP!', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"heading-color","style":{"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"1.3rem","bottom":"1.3rem"}},"border":{"width":"0px","style":"none","radius":"10px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
              <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-foregound-alt-background-color has-text-color has-background wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:10px;padding-top:1.3rem;padding-right:2.5rem;padding-bottom:1.3rem;padding-left:2.5rem"><?php esc_html_e('Explore Demos', 'fotawp') ?></a></div>
              <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":1893,"sizeSlug":"full","linkDestination":"none"} -->
          <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-1893" /></figure>
          <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
      </div>
      <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->