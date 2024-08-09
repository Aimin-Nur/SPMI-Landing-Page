<?php
/**
 * Title: Sidebar
 * Slug: lemmony/sidebar
 * Categories: lemmony-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"midground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-midground-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"small-plus"} -->
<h3 class="has-small-plus-font-size"><?php esc_html_e( 'Can\'t find something?', 'lemmony' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Type keywords","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"is-style-border is-style-border-with-radius"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"radius":"10px"}},"backgroundColor":"midground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-midground-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"small-plus"} -->
<h3 class="has-small-plus-font-size"><?php esc_html_e( 'About The Author', 'lemmony' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:image {"id":3008,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri("assets/media/content/sidebar-author.jpg") ); ?>" alt="" class="wp-image-3008"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.8"><strong><?php esc_html_e( 'As far as I can remember', 'lemmony' ); ?></strong> <?php esc_html_e( 'Lemons always helped me to stay motivated, especially when I applied two slices on my eyes. A blog author should always carry an small hammer at all times. It\'s an au-thor thing, trust me.', 'lemmony' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Explore theme', 'lemmony' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"radius":"10px"}},"backgroundColor":"midground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-midground-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"small-plus"} -->
<h3 class="has-small-plus-font-size"><?php esc_html_e( 'Fresh Articles', 'lemmony' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":13,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"fontSize":"tiny"} -->
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"80px"} -->
<div class="wp-block-column" style="flex-basis:80px"><!-- wp:group {"animationsForBlocks":{},"className":"lemmony-aspect-1_1 has-background-background-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group lemmony-aspect-1_1 has-background-background-color"><!-- wp:post-featured-image {"isLink":true,"width":"80px","height":"80px","sizeSlug":"thumbnail","align":"wide"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"lineHeight":"1.6"}},"fontSize":"tiny-plus"} /-->

<!-- wp:post-date {"textColor":"meta","fontSize":"tiny"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"radius":"10px"}},"backgroundColor":"midground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-midground-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"small-plus"} -->
<h3 class="has-small-plus-font-size"><?php esc_html_e( 'Keep it social', 'lemmony' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:social-links {"className":"is-style-pill-shape"} -->
<ul class="wp-block-social-links is-style-pill-shape"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"radius":"10px"}},"backgroundColor":"midground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-midground-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"small-plus"} -->
<h3 class="has-small-plus-font-size"><?php esc_html_e( 'Categories', 'lemmony' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true,"showOnlyTopLevel":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"radius":"10px"}},"backgroundColor":"midground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-midground-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"small-plus"} -->
<h3 class="has-small-plus-font-size"><?php esc_html_e( 'Tags', 'lemmony' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"smallestFontSize":"13pt","largestFontSize":"13pt"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->