<?php

/**
 * Title: Template for 404 page
 * Slug: fotawp/template-404
 * Categories: template
 * Inserter: false
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
  $fotawp_url . 'assets/images/404.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"860px"},"fontSize":"xxxx-large"} -->
<div class="wp-block-group has-background-alt-background-color has-background has-xxxx-large-font-size" style="padding-top: 0; padding-right: var(--wp--preset--spacing--40); padding-bottom: 0; padding-left: var(--wp--preset--spacing--40)">
  <!-- wp:cover {"dimRatio":0,"overlayColor":"background","minHeight":400,"isDark":false,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}}} -->
  <div class="wp-block-cover is-light" style="padding-bottom: var(--wp--preset--spacing--80); min-height: 400px">
    <span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
      <!-- wp:group {"layout":{"type":"constrained"}} -->
      <div class="wp-block-group">
        <!-- wp:image {"align":"center","id":1454,"width":308,"height":146,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#552C8F","#FBF9FE"]}}} -->
        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-1454" width="308" height="146" /></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","textTransform":"uppercase","letterSpacing":"4px"}},"fontSize":"small"} -->
        <h4 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style: normal; font-weight: 300; letter-spacing: 4px; text-transform: uppercase"><?php echo esc_html__('OOPS! Page Not Found!', 'fotawp') ?></h4>
        <!-- /wp:heading -->
      </div>
      <!-- /wp:group -->
    </div>
  </div>
  <!-- /wp:cover -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top: var(--wp--preset--spacing--80); padding-right: var(--wp--preset--spacing--40); padding-bottom: var(--wp--preset--spacing--80); padding-left: var(--wp--preset--spacing--40)">
  <!-- wp:columns -->
  <div class="wp-block-columns">
    <!-- wp:column {"width":"60%"} -->
    <div class="wp-block-column" style="flex-basis: 60%">
      <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
      <h3 class="wp-block-heading has-text-align-left" style="font-style: normal; font-weight: 600"><?php echo esc_html__('Helpful Links', 'fotawp') ?></h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p><?php echo esc_html__('Something went wrong! We couldn\'t find the page you were looking for. But don\'t worry, we\'ve got some other Links that might be helpful:', 'fotawp') ?></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column"></div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->

  <!-- wp:columns -->
  <div class="wp-block-columns">
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
      <h4 class="wp-block-heading" style="margin-bottom: var(--wp--preset--spacing--40)"><?php echo esc_html__('Pages', 'fotawp') ?></h4>
      <!-- /wp:heading -->

      <!-- wp:page-list {"className":"is-style-fotawp-page-list-bullet-hide-style","style":{"typography":{"lineHeight":"2"}}} /-->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"level":4} -->
      <h4 class="wp-block-heading"><?php echo esc_html__('Categories', 'fotawp') ?></h4>
      <!-- /wp:heading -->

      <!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"className":"is-style-fotawp-categories-bullet-hide-style","style":{"typography":{"lineHeight":"2"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"default"}} -->
      <div class="wp-block-group alignfull" style="border-bottom-style: none; border-bottom-width: 0px; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0">
        <!-- wp:heading {"level":4} -->
        <h4 class="wp-block-heading"><?php echo esc_html__('Latest Posts', 'fotawp') ?></h4>
        <!-- /wp:heading -->
      </div>
      <!-- /wp:group -->

      <!-- wp:query {"queryId":31,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full","layout":{"type":"default"}} -->
      <div class="wp-block-query alignfull">
        <!-- wp:post-template {"style":{"typography":{"textTransform":"none"}}} -->
        <!-- wp:post-title {"level":5,"isLink":true,"style":{"layout":{"selfStretch":"fit"},"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"contrast","className":"is-style-title-hover-secondary-color","fontSize":"medium"} /-->
        <!-- /wp:post-template -->
      </div>
      <!-- /wp:query -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->