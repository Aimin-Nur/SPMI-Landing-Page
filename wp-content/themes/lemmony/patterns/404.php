<?php
/**
 * Title: 404
 * Slug: lemmony/404
 * Categories: lemmony-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|70","bottom":"164px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:164px"><!-- wp:image {"align":"center","id":3022,"sizeSlug":"full","linkDestination":"none","animationStyle":"lemmonyFadeInUp"} -->
<figure class="wp-block-image aligncenter size-full lemmony-animation" style="--lemmony-animation-name:lemmonyFadeInUp"><img src="<?php echo esc_url( get_theme_file_uri("assets/media/content/404.png") ); ?>" alt="" class="wp-image-3022"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"},"animationStyle":"lemmonyFadeIn"} -->
<div class="wp-block-group lemmony-animation" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);--lemmony-animation-name:lemmonyFadeIn"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"large"} -->
<h1 class="has-text-align-center has-large-font-size" style="line-height:1.4"><?php esc_html_e( 'Sorry! The Page Was Not Found', 'lemmony' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'The page you\'re looking for is not available right now', 'lemmony' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0"><!-- wp:button {"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link wp-element-button" href="/"><?php esc_html_e( 'Back to homepage', 'lemmony' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->