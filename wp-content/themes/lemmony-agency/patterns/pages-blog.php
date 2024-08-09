<?php
/**
 * Title: Blog page (agency)
 * Slug: lemmony/pages-about-agency
 * Categories: lemmony-pages
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Home', 'lemmony-agency' ); ?></a> <?php esc_html_e( '', 'lemmony-agency' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '/', 'lemmony-agency' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Blog', 'lemmony-agency' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"fontSize":"huge"} -->
<p class="has-huge-font-size" style="font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'In Blog', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"128px"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:128px"><!-- wp:column {"width":"67.2%"} -->
<div class="wp-block-column" style="flex-basis:67.2%"><!-- wp:query {"queryId":14,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null},"displayLayout":{"type":"list","columns":2},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#e0e0e0","minHeight":200,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"className":"lemmony-aspect-3_2 has-midground-alt-background-color lemmony-rounded-24px","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left lemmony-aspect-3_2 has-midground-alt-background-color lemmony-rounded-24px" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#e0e0e0"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"}},"textColor":"body","className":"is-style-boxes","fontSize":"tiny"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"tiny"} -->
<div class="wp-block-group has-tiny-font-size"><!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"4px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"tiny"} -->
<p class="has-tiny-font-size" style="padding-right:4px;font-style:normal;font-weight:600"><?php esc_html_e( 'By', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10"}},"typography":{"fontSize":"8px"}},"textColor":"meta"} -->
<p class="has-meta-color has-text-color" style="padding-right:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10);font-size:8px"><strong>•</strong></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j","isLink":true,"textColor":"meta"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"medium"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-numbers {"className":"lemmony-flex-1"} /-->

<!-- wp:query-pagination-previous {"className":"is-style-button"} /-->

<!-- wp:query-pagination-next {"className":"is-style-button"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"32.8%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column" style="flex-basis:32.8%"><!-- wp:template-part {"slug":"sidebar","theme":"lemmony-agency","tagName":"aside","className":"site-sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->