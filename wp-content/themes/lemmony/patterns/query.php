<?php
/**
 * Title: Query
 * Slug: lemmony/query
 * Categories: lemmony-patterns, query
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"128px","top":"var:preset|spacing|70"},"margin":{"bottom":"0","top":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:128px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1.6","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<h5 class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.6"><?php esc_html_e( 'Useful Articles', 'lemmony' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"large-plus"} -->
<h2 class="has-large-plus-font-size" style="line-height:1.3"><?php esc_html_e( 'From The Blog', 'lemmony' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":14,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"var:preset|spacing|30","bottom":"var:preset|spacing|20","left":"0px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#e0e0e0","minHeight":5,"minHeightUnit":"rem","contentPosition":"bottom left","isDark":false,"className":"lemmony-aspect-3_2 has-midground-background-color","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left lemmony-aspect-3_2 has-midground-background-color" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:5rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#e0e0e0"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"body","className":"is-style-boxes","fontSize":"tiny"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.6"}},"fontSize":"small-plus"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"tiny"} -->
<div class="wp-block-group has-tiny-font-size"><!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"4px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="padding-right:4px;font-style:normal;font-weight:600"><?php esc_html_e( 'By', 'lemmony' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"6px","left":"6px"}},"typography":{"fontSize":"8px"}},"textColor":"meta"} -->
<p class="has-meta-color has-text-color" style="padding-right:6px;padding-left:6px;font-size:8px"><strong>•</strong></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|Meta"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->