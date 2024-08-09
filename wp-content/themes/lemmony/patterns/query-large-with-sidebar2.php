<?php
/**
 * Title: Query large with sidebar 2
 * Slug: lemmony/query-large-with-sidebar2
 * Categories: lemmony-patterns
 */
?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"67.2%"} -->
<div class="wp-block-column" style="flex-basis:67.2%"><!-- wp:query {"queryId":14,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true,"taxQuery":null},"displayLayout":{"type":"list","columns":2},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:post-featured-image {"isLink":true} /-->

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
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"32.8%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column" style="flex-basis:32.8%">
    <!-- wp:template-part {"slug":"sidebar","tagName":"aside","className":"site-sidebar","theme":"<?php echo esc_attr( get_stylesheet() ); ?>"} /-->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->