<?php
/**
 * Title: Query Split
 * Slug: lemmony/query-split
 * Categories: lemmony-agency-patterns
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600"><?php esc_html_e( 'Useful Articles', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'From The Blog', 'lemmony-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":14,"query":{"perPage":"1","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"overlayColor":"background-alt","minHeight":5,"minHeightUnit":"rem","contentPosition":"bottom left","isDark":false,"className":"lemmony-rounded-24px lemmony-aspect-3_2 has-midground-alt-background-color","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left lemmony-rounded-24px lemmony-aspect-3_2 has-midground-alt-background-color" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:5rem"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"body","className":"is-style-boxes","fontSize":"tiny"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.4"}},"fontSize":"medium-plus"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"tiny"} -->
<div class="wp-block-group has-tiny-font-size"><!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"4px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="padding-right:4px;font-style:normal;font-weight:600"><?php esc_html_e( 'By', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"6px","left":"6px"}},"typography":{"fontSize":"8px"}},"textColor":"meta"} -->
<p class="has-meta-color has-text-color" style="padding-right:6px;padding-left:6px;font-size:8px"><strong>•</strong></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|Meta"}}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":14,"query":{"perPage":"3","pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|50"}},"typography":{"lineHeight":"1.6"}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--50);line-height:1.6"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"overlayColor":"background-alt","minHeight":5,"minHeightUnit":"rem","contentPosition":"bottom left","isDark":false,"className":"lemmony-rounded-24px lemmony-aspect-3_2 has-midground-alt-background-color","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left lemmony-rounded-24px lemmony-aspect-3_2 has-midground-alt-background-color" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:5rem"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"body","className":"is-style-boxes","fontSize":"tiny"} /--></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"isLink":true,"fontSize":"small-plus"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"tiny"} -->
<div class="wp-block-group has-tiny-font-size"><!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"4px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="padding-right:4px;font-style:normal;font-weight:600"><?php esc_html_e( 'By', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"6px","left":"6px"}},"typography":{"fontSize":"8px"}},"textColor":"meta"} -->
<p class="has-meta-color has-text-color" style="padding-right:6px;padding-left:6px;font-size:8px"><strong>•</strong></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|Meta"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->