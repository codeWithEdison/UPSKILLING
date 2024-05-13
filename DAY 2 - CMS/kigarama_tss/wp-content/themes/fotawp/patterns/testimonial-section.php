<?php

/**
 * Title: Testimonial Section
 * Slug: fotawp/testimonial-section
 * Categories: fotawp,testimonials, fotawp-testimonials
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
  $fotawp_url  . 'assets/images/fota_testimonial_1.png',
  $fotawp_url  . 'assets/images/fota_testimonial_2.png',
  $fotawp_url  . 'assets/images/fota_testimonial_3.png',
  $fotawp_url  . 'assets/images/review_star.svg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"dimRatio":0,"overlayColor":"background","isDark":false} -->
  <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
      <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"className":"fotawp-flip-up","layout":{"type":"constrained","contentSize":"760px"}} -->
        <div class="wp-block-group fotawp-flip-up"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foreground","fontSize":"x-small"} -->
          <h6 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('TESTIMONIALS', 'fotawp') ?></h6>
          <!-- /wp:heading -->

          <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"40px","lineHeight":"1.4"}},"textColor":"heading-color"} -->
          <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color" style="font-size:40px;font-style:normal;font-weight:600;line-height:1.4"><?php esc_html_e('Voices of Satisfaction: Hear What Our Clients Have to Say!', 'fotawp') ?></h1>
          <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"padding":{"right":"0","left":"0"}}}} -->
        <div class="wp-block-columns" style="margin-top:60px;padding-right:0;padding-left:0"><!-- wp:column {"className":"fotawp-fade-up"} -->
          <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-foregound-alt-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":2897,"width":"auto","height":"20px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
              <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($fotawp_images[3]) ?>" alt="" class="wp-image-2897" style="width:auto;height:20px" /></figure>
              <!-- /wp:image -->

              <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6,"fontSize":"18px"},"spacing":{"margin":{"top":"14px"}}},"textColor":"sub-heading-color"} -->
              <p class="has-sub-heading-color-color has-text-color" style="margin-top:14px;font-size:18px;line-height:1.6"><?php esc_html_e('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
              <!-- /wp:paragraph -->

              <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
              <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:image {"id":1822,"width":"60px","height":"60px","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-1822" style="border-radius:50px;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
                  <h5 class="wp-block-heading" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Patrick Loy', 'fotawp') ?></h5>
                  <!-- /wp:heading -->

                  <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"x-small"} -->
                  <p class="has-foreground-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('Blogger', 'fotawp') ?></p>
                  <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:column -->

          <!-- wp:column {"className":"fotawp-fade-up"} -->
          <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-foregound-alt-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":2897,"width":"auto","height":"20px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
              <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($fotawp_images[3]) ?>" alt="" class="wp-image-2897" style="width:auto;height:20px" /></figure>
              <!-- /wp:image -->

              <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6,"fontSize":"18px"},"spacing":{"margin":{"top":"14px"}}},"textColor":"sub-heading-color"} -->
              <p class="has-sub-heading-color-color has-text-color" style="margin-top:14px;font-size:18px;line-height:1.6"><?php esc_html_e('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
              <!-- /wp:paragraph -->

              <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
              <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:image {"id":93,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-93" style="border-radius:50px;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
                  <h5 class="wp-block-heading" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Liyana Pepp', 'fotawp') ?></h5>
                  <!-- /wp:heading -->

                  <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"x-small"} -->
                  <p class="has-foreground-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('Traveller', 'fotawp') ?></p>
                  <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:column -->

          <!-- wp:column {"className":"fotawp-fade-up"} -->
          <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-foregound-alt-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":2897,"width":"auto","height":"20px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
              <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($fotawp_images[3]) ?>" alt="" class="wp-image-2897" style="width:auto;height:20px" /></figure>
              <!-- /wp:image -->

              <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6,"fontSize":"18px"},"spacing":{"margin":{"top":"14px"}}},"textColor":"sub-heading-color"} -->
              <p class="has-sub-heading-color-color has-text-color" style="margin-top:14px;font-size:18px;line-height:1.6"><?php esc_html_e('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
              <!-- /wp:paragraph -->

              <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
              <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:image {"id":94,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-94" style="border-radius:50px;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
                  <h5 class="wp-block-heading" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Lexy Andrew', 'fotawp') ?></h5>
                  <!-- /wp:heading -->

                  <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"x-small"} -->
                  <p class="has-foreground-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('Writer', 'fotawp') ?></p>
                  <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
      </div>
      <!-- /wp:group -->
    </div>
  </div>
  <!-- /wp:cover -->
</div>
<!-- /wp:group -->