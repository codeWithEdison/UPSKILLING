<?php

/**
 * Title: Services Section
 * Slug: fotawp/services-section
 * Categories: fotawp,fotawp-services
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_icon_images = array(
  $fotawp_url . 'assets/images/icon_strategy.svg',
  $fotawp_url . 'assets/images/icon_ecommerce.svg',
  $fotawp_url . 'assets/images/icon_screen.svg',
  $fotawp_url . 'assets/images/icon_data.svg',
  $fotawp_url . 'assets/images/icon_marketing.svg',
  $fotawp_url . 'assets/images/icon_social.svg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"background-alt","textColor":"heading-color","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-heading-color-color has-background-alt-background-color has-text-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"dimRatio":0,"isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|30","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40"}}}} -->
  <div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"className":"fotawp-fade-up","layout":{"type":"constrained","contentSize":"1180px"}} -->
      <div class="wp-block-group fotawp-fade-up" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
          <div class="wp-block-column"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foreground","fontSize":"x-small"} -->
            <h6 class="wp-block-heading has-foreground-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('SERVICES', 'fotawp') ?></h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color"} -->
            <h1 class="wp-block-heading has-heading-color-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);font-size:48px;font-style:normal;font-weight:600"><?php esc_html_e('Our Services', 'fotawp') ?></h1>
            <!-- /wp:heading -->
          </div>
          <!-- /wp:column -->

          <!-- wp:column -->
          <div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
            <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Cras tincidunt tellus at mi tristique rhoncus. Etiam dapibus rutrum leo consectetur accumsan. Vivamus viverra ante turpis, dignissim condimentum elit egestas sit amet. Phasellus', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"fotawp-button-with-icon is-style-button-hover-secondary-color"} -->
              <div class="wp-block-button has-custom-font-size fotawp-button-with-icon is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background wp-element-button" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
              <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
          </div>
          <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
      <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"className":"fotawp-fade-up"} -->
          <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-hover has-background-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
              <div class="wp-block-group"><!-- wp:image {"align":"left","id":1114,"sizeSlug":"full","linkDestination":"none","className":"fotawp-duotone-primary"} -->
                <figure class="wp-block-image alignleft size-full fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[0]) ?>" alt="" class="wp-image-1114" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
                <h6 class="wp-block-heading has-heading-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Business Strategy', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:column -->

          <!-- wp:column {"className":"fotawp-fade-up"} -->
          <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-hover has-background-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
              <div class="wp-block-group"><!-- wp:image {"align":"left","id":167,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"fotawp-duotone-primary"} -->
                <figure class="wp-block-image alignleft size-full is-resized fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[1]) ?>" alt="" class="wp-image-167" style="width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
                <h6 class="wp-block-heading has-heading-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('eCommerce', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:column -->

          <!-- wp:column {"className":"fotawp-fade-up"} -->
          <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-hover has-background-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
              <div class="wp-block-group"><!-- wp:image {"align":"left","id":167,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"fotawp-duotone-primary"} -->
                <figure class="wp-block-image alignleft size-full is-resized fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[2]) ?>" alt="" class="wp-image-167" style="width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
                <h6 class="wp-block-heading has-heading-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Web Development', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"className":"fotawp-fade-up"} -->
          <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-hover has-background-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
              <div class="wp-block-group"><!-- wp:image {"align":"left","id":167,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"fotawp-duotone-primary"} -->
                <figure class="wp-block-image alignleft size-full is-resized fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[3]) ?>" alt="" class="wp-image-167" style="width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
                <h6 class="wp-block-heading has-heading-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('SEO', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:column -->

          <!-- wp:column {"className":"fotawp-fade-up"} -->
          <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-hover has-background-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
              <div class="wp-block-group"><!-- wp:image {"align":"left","id":167,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"fotawp-duotone-primary"} -->
                <figure class="wp-block-image alignleft size-full is-resized fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[4]) ?>" alt="" class="wp-image-167" style="width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
                <h6 class="wp-block-heading has-heading-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Digital Marketing', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:column -->

          <!-- wp:column {"className":"fotawp-fade-up"} -->
          <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-hover has-background-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
              <div class="wp-block-group"><!-- wp:image {"align":"left","id":167,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"fotawp-duotone-primary"} -->
                <figure class="wp-block-image alignleft size-full is-resized fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[5]) ?>" alt="" class="wp-image-167" style="width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
                <h6 class="wp-block-heading has-heading-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Social Media Marketing', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
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