<?php

/**
 * Title: Portfolio Section
 * Slug: fotawp/portfolio-section
 * Categories: fotawp, fotawp-portfolio
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
  $fotawp_url . 'assets/images/project_1.png',
  $fotawp_url . 'assets/images/project_2.png'

);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"background","className":"fotawp-portfolio-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group fotawp-portfolio-section has-background-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"dimRatio":0,"overlayColor":"background","minHeight":1312,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"0"}}}} -->
  <div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:0;min-height:1312px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1180px"}} -->
      <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|40"},"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center"} -->
          <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":6,"textColor":"sub-heading-color"} -->
            <h6 class="wp-block-heading has-sub-heading-color-color has-text-color"><?php echo esc_html__('/ Project 01', 'fotawp') ?></h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3em","fontStyle":"normal","fontWeight":"600","lineHeight":"1"}},"textColor":"heading-color"} -->
            <h1 class="wp-block-heading has-heading-color-color has-text-color" style="font-size:3em;font-style:normal;font-weight:600;line-height:1"><?php echo esc_html__('ERP/CRM Development and Integrate!', 'fotawp') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
            <p class="has-foreground-color has-text-color" style="font-size:18px"><?php echo esc_html__('Every project is different and so should the process be. We’ll define a clear framework of how we communicate, exchange feedback and effectively work together.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontSize":"18px"}},"className":"is-style-button-hover-secondary-color"} -->
              <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__('Read More', 'fotawp') ?></a></div>
              <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
          </div>
          <!-- /wp:column -->

          <!-- wp:column {"verticalAlignment":"center"} -->
          <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":1819,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-1819" style="border-radius:10px" /></figure>
            <!-- /wp:image -->
          </div>
          <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|80"},"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center"} -->
          <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":1818,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-1818" style="border-radius:10px" /></figure>
            <!-- /wp:image -->
          </div>
          <!-- /wp:column -->

          <!-- wp:column {"verticalAlignment":"center"} -->
          <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":6,"textColor":"sub-heading-color"} -->
            <h6 class="wp-block-heading has-sub-heading-color-color has-text-color"><?php echo esc_html__('/ Project 02', 'fotawp') ?></h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3em","fontStyle":"normal","fontWeight":"600","lineHeight":"1"}},"textColor":"heading-color"} -->
            <h1 class="wp-block-heading has-heading-color-color has-text-color" style="font-size:3em;font-style:normal;font-weight:600;line-height:1"><?php echo esc_html__('Case Study for AI Impact on Modern Technology', 'fotawp') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
            <p class="has-foreground-color has-text-color" style="font-size:18px"><?php echo esc_html__('Every project is different and so should the process be. We’ll define a clear framework of how we communicate, exchange feedback and effectively work together.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontSize":"18px"}},"className":"is-style-button-hover-secondary-color"} -->
              <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__('Read More', 'fotawp') ?></a></div>
              <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
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