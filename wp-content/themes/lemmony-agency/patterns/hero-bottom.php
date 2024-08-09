<?php
/**
 * Title: Hero bottom
 * Slug: lemmony/hero-bototm
 * Categories: lemmony-agency-patterns
 */
?>
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"className":"lemmony-mobile-center"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center lemmony-mobile-center" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"spacing":{"margin":{"left":"0","top":"0","right":"0","bottom":"0"}},"typography":{"lineHeight":"1.1"}},"fontSize":"huge","animationStyle":"lemmonyFadeInUp","animationSpeed":""} -->
<h2 class="wp-block-heading has-huge-font-size lemmony-animation" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;line-height:1.1;--lemmony-animation-name:lemmonyFadeInUp"><?php esc_html_e( 'The Story About Your Amazing Company', 'lemmony-agency' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|40"}},"animationStyle":""} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"fontSize":"small-plus","animationStyle":"lemmonyFadeInUp","animationSpeed":"","animationDelay":"xsmall"} -->
<p class="has-small-plus-font-size lemmony-animation" style="--lemmony-animation-name:lemmonyFadeInUp;animation-delay:var(--lemmony-delay-xsmall)"><?php esc_html_e( 'It\'s always wise to', 'lemmony-agency' ); ?><strong> <?php esc_html_e( 'add information in chunks.', 'lemmony-agency' ); ?></strong> <?php esc_html_e( 'That way your website users will find it easier to digest content on your site.', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri("assets/media/content/about-hero.jpg") ); ?>","id":552,"dimRatio":0,"contentPosition":"bottom right","isDark":false,"align":"wide","className":"lemmony-parallax lemmony-aspect-2_1 lemmony-rounded-24px"} -->
<div class="wp-block-cover alignwide is-light has-custom-content-position is-position-bottom-right lemmony-parallax lemmony-aspect-2_1 lemmony-rounded-24px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-552" alt="" src="<?php echo esc_url( get_theme_file_uri("assets/media/content/about-hero.jpg") ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->