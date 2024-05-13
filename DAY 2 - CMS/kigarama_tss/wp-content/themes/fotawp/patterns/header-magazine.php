<?php

/**
 * Title: Header Magazine
 * Slug: fotawp/header-magazine
 * Categories: fotawp, header,fotawp-header
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
  $fotawp_url . 'assets/images/banner_ads.jpg',
);
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|40","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40"}}},"backgroundColor":"foregound-alt","className":"is-style-fotawp-boxshadow-medium","layout":{"type":"constrained","contentSize":"1180px"}} -->
  <div class="wp-block-group is-style-fotawp-boxshadow-medium has-foregound-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
      <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size"><?php esc_html_e('+1 (012) 345-6789', 'fotawp') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>| </p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size"><?php esc_html_e('email@example.com', 'fotawp') ?></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:columns -->
      <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#747474","iconBackgroundColor":"tertiary-light","iconBackgroundColorValue":"#EFEAF7","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
          <ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

            <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

            <!-- wp:social-link {"url":"#","service":"spotify"} /-->
          </ul>
          <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->
      </div>
      <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
  <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textDecoration":"none"}},"fontSize":"x-large"} /-->

      <!-- wp:image {"id":14,"sizeSlug":"full","linkDestination":"none"} -->
      <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-14" /></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1180px"}} -->
  <div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group"><!-- wp:navigation {"textColor":"foregound-alt","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","lineHeight":1.6}},"fontSize":"x-small"} -->
      <!-- wp:page-list /-->
      <!-- /wp:navigation -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->