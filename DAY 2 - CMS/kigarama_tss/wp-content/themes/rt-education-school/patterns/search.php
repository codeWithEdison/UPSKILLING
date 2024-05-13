<?php
/**
 * Search Section
 * 
 * slug: rt-education-school/search-page
 * title: Search Page
 * categories: rt-education-school
 */

return array(
    'title'      =>__( 'Search Page', 'rt-education-school' ),
    'categories' => array( 'rt-education-school' ),
    'content'    => '<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:query {"queryId":46,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"style":{"color":{"background":"#f9f9f9"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f9f9f9"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"content-heading"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","fontSize":"upper-heading"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"fontSize":"small"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","layout":{"type":"constrained","contentSize":""},"fontSize":"medium"} -->
<div class="wp-block-group has-secondary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:700"><!-- wp:post-navigation-link {"type":"previous"} /-->

<!-- wp:post-navigation-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);