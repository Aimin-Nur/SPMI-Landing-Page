<?php
/**
 * Title: Header
 * Slug: lemmony/header-agency
 * Categories: lemmony-agency-patterns, header
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"className":"lemmony-mobile-width-full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group lemmony-mobile-width-full"><!-- wp:image {"id":565,"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="<?php echo esc_url( get_home_url() ); ?>"><img src="<?php echo esc_url( get_theme_file_uri("assets/media/content/logo-agency.svg") ); ?>" alt="" class="wp-image-565"/></a></figure>
<!-- /wp:image -->

<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","flexWrap":"wrap"},"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"blockGap":"40px"}},"fontSize":"tiny-plus"} -->
    <!-- wp:navigation-link {"label":"Landing","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- wp:navigation-link {"label":"About us","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- wp:navigation-link {"label":"Hire us","url":"#","kind":"custom","isTopLevelLink":true,"className":"lemmony-desktop-hidden"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"lemmony-mobile-hidden","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group lemmony-mobile-hidden"><!-- wp:social-links {"iconColor":"body","iconColorValue":"#2C2C2C","style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}},"className":"is-style-logos-only-small"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only-small"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"40px","right":"40px","top":"16px","bottom":"16px"}}},"className":"is-style-fill lemmony-button-hover-opacity","fontSize":"tiny"} -->
<div class="wp-block-button has-custom-font-size is-style-fill lemmony-button-hover-opacity has-tiny-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="" style="padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px"><?php esc_html_e( 'Hire us', 'lemmony-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->