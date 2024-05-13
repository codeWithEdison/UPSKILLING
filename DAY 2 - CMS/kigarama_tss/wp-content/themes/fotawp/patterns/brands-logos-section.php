<?php

/**
 * Title: Brands Logos Section
 * Slug: fotawp/brands-logos-section
 * Categories: fotawp,fotawp-brands
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_brands_logo = array(
  $fotawp_url . 'assets/images/logo1.png',
  $fotawp_url . 'assets/images/logo2.png',
  $fotawp_url . 'assets/images/logo3.png',
  $fotawp_url . 'assets/images/logo4.png',
  $fotawp_url . 'assets/images/logo5.png',
  $fotawp_url . 'assets/images/logo6.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80"}}},"backgroundColor":"background","className":"fotawp-zoom-in-up","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group fotawp-zoom-in-up has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
  <h5 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Trusted and used by 50+ Brands', 'fotawp') ?></h5>
  <!-- /wp:heading -->

  <!-- wp:gallery {"columns":6,"imageCrop":false,"linkTo":"none","sizeSlug":"full","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|70","right":"0"},"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|50"}}},"className":"fotawp-brands-logos is-style-enable-grayscale-mode-on-image"} -->
  <figure class="wp-block-gallery aligncenter has-nested-images columns-6 fotawp-brands-logos is-style-enable-grayscale-mode-on-image" style="margin-top:var(--wp--preset--spacing--70);margin-right:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:image {"id":562,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_brands_logo[0]) ?>" alt="" class="wp-image-562" /></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":563,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_brands_logo[1]) ?>" alt="" class="wp-image-563" /></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":564,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="<?php echo esc_url($fotawp_brands_logo[2]) ?>" alt="" class="wp-image-564" /></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":565,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="<?php echo esc_url($fotawp_brands_logo[3]) ?>" alt="" class="wp-image-565" /></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":566,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_brands_logo[4]) ?>" alt="" class="wp-image-566" /></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":567,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="<?php echo esc_url($fotawp_brands_logo[5]) ?>" alt="" class="wp-image-567" /></figure>
    <!-- /wp:image -->
  </figure>
  <!-- /wp:gallery -->
</div>
<!-- /wp:group -->