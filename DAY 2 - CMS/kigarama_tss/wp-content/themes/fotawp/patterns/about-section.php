<?php

/**
 * Title: About Section
 * Slug: fotawp/about-section
 * Categories: fotawp,fotawp-aboutus
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
  $fotawp_url . 'assets/images/man_with_laptop.svg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"dimRatio":0,"overlayColor":"background","minHeight":692,"minHeightUnit":"px","isDark":false} -->
  <div class="wp-block-cover is-light" style="min-height:692px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"80px"} -->
      <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer -->

      <!-- wp:group {"layout":{"type":"constrained","contentSize":"1180px"}} -->
      <div class="wp-block-group"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"0"}}},"className":"fotawp-fade-up"} -->
          <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up" style="padding-top:0;flex-basis:45%"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foreground","fontSize":"x-small"} -->
            <h6 class="wp-block-heading has-foreground-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600"><?php esc_html_e('OUR STORY', 'fotawp') ?></h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"44px","lineHeight":"1.3"}},"textColor":"heading-color"} -->
            <h2 class="wp-block-heading has-heading-color-color has-text-color" style="margin-top:var(--wp--preset--spacing--20);font-size:44px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Full Site Editing, Take Full Control Over Your Website!', 'fotawp') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
            <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Comes with native builder Full Site Editing/Gutenberg and integration of page builder Elementor adding the full control of site and making FotaWP perfect powerful tools of site builder that you easily build your site without coding knowledge.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"36px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:36px"><!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","style":{"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"1.2em","bottom":"1.2em"}},"border":{"radius":"10px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
              <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:10px;padding-top:1.2em;padding-right:2.5rem;padding-bottom:1.2em;padding-left:2.5rem"><?php esc_html_e('Read More', 'fotawp') ?> </a></div>
              <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
          </div>
          <!-- /wp:column -->

          <!-- wp:column {"verticalAlignment":"center"} -->
          <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":171,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"fotawp-flip-up"} -->
            <figure class="wp-block-image size-full fotawp-flip-up"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-171" /></figure>
            <!-- /wp:image -->
          </div>
          <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
      </div>
      <!-- /wp:group -->

      <!-- wp:spacer -->
      <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer -->
    </div>
  </div>
  <!-- /wp:cover -->
</div>
<!-- /wp:group -->