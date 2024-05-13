<?php
/**
 * Banner Section
 * 
 * slug: rt-education-school/banner
 * title: Banner
 * categories: rt-education-school
 */

return array(
    'title'      =>__( 'Banner', 'rt-education-school' ),
    'categories' => array( 'rt-education-school' ),
    'content'    => '<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner-image.png","id":7,"dimRatio":0,"minHeight":800,"contentPosition":"center center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner-image.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"2px"}},"fontSize":"upper-heading","fontFamily":"saira"} -->
<h3 class="wp-block-heading has-saira-font-family has-upper-heading-font-size" style="font-style:normal;font-weight:500;letter-spacing:2px">'. esc_html('WELCOME BACK TO EDUCATION WEBSITE','rt-education-school') .'</h3>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontSize":"55px","fontStyle":"normal","fontWeight":"400"}},"className":"banner-title","fontFamily":"rowdies"} -->
<h2 class="wp-block-heading banner-title has-rowdies-font-family" style="font-size:55px;font-style:normal;font-weight:400">'. esc_html('Good Education is good teaching &amp; nothing else.','rt-education-school') .'</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"10px"},"typography":{"letterSpacing":"2px"}},"className":"is-style-outline","fontSize":"upper-heading","fontFamily":"saira"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-saira-font-family has-upper-heading-font-size" style="letter-spacing:2px"><a class="wp-block-button__link has-background-color has-text-color has-link-color wp-element-button" style="border-radius:10px"><strong>'. esc_html('View Courses','rt-education-school') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);