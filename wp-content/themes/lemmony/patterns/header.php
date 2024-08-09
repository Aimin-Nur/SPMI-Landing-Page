<?php
/**
 * Title: Header
 * Slug: lemmony/header
 * Categories: lemmony-patterns, header
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:image {"id":2956,"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="<?php echo esc_url( get_home_url() ); ?>"><img src="<?php echo esc_url( get_theme_file_uri("assets/media/content/logo.svg") ); ?>" alt="" class="wp-image-2956"/></a></figure>
<!-- /wp:image -->

<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","flexWrap":"wrap"},"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"blockGap":"40px"}},"fontSize":"tiny-plus"} -->
    <!-- wp:navigation-link {"label":"Landing","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- wp:navigation-submenu {"label":"Pages","url":"#","kind":"custom","isTopLevelItem":true} -->
        <!-- wp:navigation-link {"label":"About us","description":"Get to know us better","url":"#","kind":"custom","isTopLevelLink":false} /-->
        <!-- wp:navigation-link {"label":"Services","description":"Explore what we offer","url":"#","kind":"custom","isTopLevelLink":false} /-->
        <!-- wp:navigation-link {"label":"Contact us","description":"Let's get in touch","url":"#","kind":"custom","isTopLevelLink":false} /-->
    <!-- /wp:navigation-submenu -->
    <!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- wp:navigation-link {"label":"Gallery","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- wp:navigation-link {"label":"Contact us","url":"#","kind":"custom","isTopLevelLink":true,"className":"lemmony-desktop-hidden"} /-->
<!-- /wp:navigation -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"lemmony-mobile-hidden","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group lemmony-mobile-hidden"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"right":"32px","left":"32px","top":"16px","bottom":"16px"}}},"fontSize":"tiny"} -->
<div class="wp-block-button has-custom-font-size has-tiny-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link wp-element-button" style="padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php esc_html_e( 'Contact us', 'lemmony' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->