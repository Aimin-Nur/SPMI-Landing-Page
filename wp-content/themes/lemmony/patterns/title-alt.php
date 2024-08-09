<?php
/**
 * Title: Title (alternative)
 * Slug: lemmony/title-alt
 * Categories: lemmony-patterns
 */
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"13%"} -->
<div class="wp-block-column" style="flex-basis:13%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column"><!-- wp:lemmony-companion/typing-text {"typingTexts":["Great Quote","Amazing Quote","Epic Quote"],"typingDecoration":"underline","textAlign":"center","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"huge-plus","animationDelay":"small"} -->
<div style="line-height:1.2;text-align:center" class="wp-block-lemmony-companion-typing-text has-huge-plus-font-size"><div class="lemmony-typing-wrapper"><span class="lemmony-typing-prefix"><?php esc_html_e( 'Have', 'lemmony' ); ?></span><span class="lemmony-typing-data hidden" style="text-decoration:underline"><span class="lemmony-typing-item"><?php esc_html_e( 'Great Quote', 'lemmony' ); ?></span><span class="lemmony-typing-item"><?php esc_html_e( 'Amazing Quote', 'lemmony' ); ?></span><span class="lemmony-typing-item"><?php esc_html_e( 'Epic Quote', 'lemmony' ); ?></span></span><span class="lemmony-typing-action" style="text-decoration:underline"></span><span class="lemmony-typing-suffix"><?php esc_html_e( 'That You Want to Share?', 'lemmony' ); ?></span></div></div>
<!-- /wp:lemmony-companion/typing-text -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
<h5 class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:500;line-height:1.4"><?php esc_html_e( 'Inspire to Act', 'lemmony' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"13%"} -->
<div class="wp-block-column" style="flex-basis:13%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->