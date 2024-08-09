<?php
/**
 * Title: Hero Cover
 * Slug: lemmony/hero-cover
 * Categories: lemmony-agency-patterns
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri("assets/media/content/about-bg.jpg") ); ?>","id":551,"dimRatio":20,"overlayColor":"background-alt","minHeight":90,"minHeightUnit":"vh","contentPosition":"center center","align":"full","className":"lemmony-parallax","style":{"spacing":{"padding":{"top":"0"}}}} -->
<div class="wp-block-cover alignfull lemmony-parallax" style="padding-top:0;min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-551" alt="" src="<?php echo esc_url( get_theme_file_uri("assets/media/content/about-bg.jpg") ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","contentSize":"1100px"},"animationStyle":"lemmonyFadeInUp","animationSpeed":""} -->
<div class="wp-block-group lemmony-animation" style="--lemmony-animation-name:lemmonyFadeInUp"><!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-center has-huge-font-size"><?php esc_html_e( 'Grow Your Business With Us', 'lemmony-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><?php esc_html_e( 'Next level solutions with Lemmony Agency', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
<div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"textAlign":"left","backgroundColor":"primary","className":"lemmony-button-hover-background-alt","animationStyle":"lemmonyFadeInUp","animationSpeed":"","animationDelay":"xsmall"} -->
<div class="wp-block-button lemmony-button-hover-background-alt lemmony-animation" style="--lemmony-animation-name:lemmonyFadeInUp;animation-delay:var(--lemmony-delay-xsmall)"><a class="wp-block-button__link has-primary-background-color has-background has-text-align-left wp-element-button"><?php esc_html_e( 'Get started', 'lemmony-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->