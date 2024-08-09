<?php
/**
 * Title: Hero with title
 * Slug: lemmony/hero-with-title
 * Categories: lemmony-patterns
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri("assets/media/content/services-bg.jpg") ); ?>","id":3016,"dimRatio":0,"overlayColor":"primary","minHeight":30,"minHeightUnit":"vw","isDark":false,"align":"full","className":"lemmony-parallax","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"0","bottom":"var:preset|spacing|70","left":"0"}}}} -->
<div class="wp-block-cover alignfull is-light lemmony-parallax" style="padding-top:var(--wp--preset--spacing--70);padding-right:0;padding-bottom:var(--wp--preset--spacing--70);padding-left:0;min-height:30vw"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3016" alt="" src="<?php echo esc_url( get_theme_file_uri("assets/media/content/services-bg.jpg") ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"textColor":"body","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-body-color has-text-color"><!-- wp:heading {"textAlign":"center","level":1,"className":"lemmony-animation lemmonyFadeInUp","fontSize":"huge-plus","animationStyle":"lemmonyFadeInUp"} -->
<h1 class="has-text-align-center lemmony-animation lemmonyFadeInUp has-huge-plus-font-size lemmony-animation" style="--lemmony-animation-name:lemmonyFadeInUp"><?php esc_html_e( 'Services', 'lemmony' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"lemmony-animation lemmonyFadeInUp","fontSize":"medium","animationStyle":"lemmonyFadeInUp","animationDelay":"xsmall"} -->
<p class="has-text-align-center lemmony-animation lemmonyFadeInUp has-medium-font-size lemmony-animation" style="--lemmony-animation-name:lemmonyFadeInUp;animation-delay:var(--lemmony-delay-xsmall)"><?php esc_html_e( 'Experience what we offer', 'lemmony' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->