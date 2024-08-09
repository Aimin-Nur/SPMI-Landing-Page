<?php
/**
 * Title: Hero with quote
 * Slug: lemmony/hero-with-quote-agency
 * Categories: lemmony-agency-patterns
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri("assets/media/content/quote-bg.jpg") ); ?>","id":574,"dimRatio":0,"minHeight":90,"minHeightUnit":"vh","contentPosition":"center center","align":"full","className":"lemmony-parallax","style":{"spacing":{"padding":{"top":"0"}}}} -->
<div class="wp-block-cover alignfull lemmony-parallax" style="padding-top:0;min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-574" alt="" src="<?php echo esc_url( get_theme_file_uri("assets/media/content/quote-bg.jpg") ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><?php esc_html_e( 'Inspire to take action', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:lemmony-companion/typing-text {"typingTexts":["Great Quote","Epic Quote","Interesting Quote"],"typingDecoration":"underline","textAlign":"center","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"huge"} -->
<div style="line-height:1.3;text-align:center" class="wp-block-lemmony-companion-typing-text has-huge-font-size"><div class="lemmony-typing-wrapper"><span class="lemmony-typing-prefix"><?php esc_html_e( 'Have Some', 'lemmony-agency' ); ?></span><span class="lemmony-typing-data hidden" style="text-decoration:underline"><span class="lemmony-typing-item"><?php esc_html_e( 'Great Quote', 'lemmony-agency' ); ?></span><span class="lemmony-typing-item"><?php esc_html_e( 'Epic Quote', 'lemmony-agency' ); ?></span><span class="lemmony-typing-item"><?php esc_html_e( 'Interesting Quote', 'lemmony-agency' ); ?></span></span><span class="lemmony-typing-action" style="text-decoration:underline"></span><span class="lemmony-typing-suffix"><?php esc_html_e( 'That You Want to Share', 'lemmony-agency' ); ?></span></div></div>
<!-- /wp:lemmony-companion/typing-text -->

<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}}},"animationStyle":"lemmonyFadeInUp","animationSpeed":""} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile lemmony-animation" style="margin-top:var(--wp--preset--spacing--50);--lemmony-animation-name:lemmonyFadeInUp"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"align":"right","id":561,"width":80,"height":80,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image alignright size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri("assets/media/content/front-client2.jpg") ); ?>" alt="" class="wp-image-561" style="border-radius:100px" width="80" height="80"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"small-plus"} -->
<h2 class="wp-block-heading has-small-plus-font-size"><?php esc_html_e( 'Tim Lemon', 'lemmony-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"midground-alt","fontSize":"tiny-plus"} -->
<p class="has-midground-alt-color has-text-color has-tiny-plus-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Company CEO', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->