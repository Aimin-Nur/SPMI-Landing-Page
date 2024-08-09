<?php
/**
 * Title: Query large
 * Slug: lemmony/query-large
 * Categories: lemmony-patterns
 */
?>
<!-- wp:query {"queryId":14,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true,"taxQuery":null},"displayLayout":{"type":"list","columns":2},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#e0e0e0","minHeight":200,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"className":"lemmony-aspect-3_2","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left lemmony-aspect-3_2" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#e0e0e0"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","right":"24px","bottom":"12px","left":"24px"},"blockGap":"0"},"border":{"radius":"100px"}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:100px;padding-top:12px;padding-right:24px;padding-bottom:12px;padding-left:24px"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"}},"textColor":"body","fontSize":"tiny"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"medium"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"tiny"} -->
<div class="wp-block-group has-tiny-font-size"><!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"4px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"tiny"} -->
<p class="has-tiny-font-size" style="padding-right:4px;font-style:normal;font-weight:600"><?php esc_html_e( 'By', 'lemmony' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10"}},"typography":{"fontSize":"8px"}},"textColor":"meta"} -->
<p class="has-meta-color has-text-color" style="padding-right:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10);font-size:8px"><strong>•</strong></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j","isLink":true,"textColor":"meta"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-numbers {"className":"lemmony-flex-1"} /-->

<!-- wp:query-pagination-previous {"className":"is-style-button"} /-->

<!-- wp:query-pagination-next {"className":"is-style-button"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->