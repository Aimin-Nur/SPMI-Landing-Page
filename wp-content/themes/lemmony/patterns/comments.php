<?php
/**
 * Title: Comments
 * Slug: lemmony/comments
 * Categories: lemmony-patterns
 * Inserter: false
 */
?>
<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"0","bottom":"40px","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-style-with-icon","fontSize":"medium-plus"} /-->

<!-- wp:comment-template {"className":"is-style-replies-bg"} -->
<!-- wp:post-comments-form /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"fontSize":"extra-small"} -->
<div class="wp-block-columns has-extra-small-font-size"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"tiny"} -->
<div class="wp-block-column has-tiny-font-size"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"8px"}}} -->
<p style="font-size:8px"><strong>•</strong></p>
<!-- /wp:paragraph -->

<!-- wp:comment-date {"fontSize":"extra-small"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content {"fontSize":"tiny-plus"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px","margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:comment-reply-link {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"tiny"} /-->

<!-- wp:comment-edit-link {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"tiny"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"var:preset|spacing|60","bottom":"40px","left":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"24px"}},"backgroundColor":"midground","layout":{"type":"default"}} -->
<div class="wp-block-group has-midground-background-color has-background" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--60);padding-bottom:40px;padding-left:var(--wp--preset--spacing--60)"><!-- wp:post-comments-form /--></div>
<!-- /wp:group --></div>
<!-- /wp:comments -->