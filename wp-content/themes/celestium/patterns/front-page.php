<?php
/**
 * Title: front-page
 * Slug: celestium/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div id="Hero" class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"constrained","contentSize":"80%","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}},"typography":{"fontSize":"60px"}},"textColor":"custom-text-color","className":"mark-gradiant"} -->
<h1 class="wp-block-heading mark-gradiant has-custom-text-color-color has-text-color has-link-color" style="font-size:60px"><?php echo __('Sophisticated <mark style="background-color:#1A66FF;color:#ffffff" class="has-inline-color">Web Solutions</mark> for the Modern Enterprise', 'celestium');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<p class="has-custom-text-color-color has-text-color has-link-color"><?php echo __('Enhance your business with a refined and versatile WordPress theme.', 'celestium');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hero-buttons","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group hero-buttons"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"custom-primary","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"is-style-button-hover-secondary-color is-style-button-hover-gradiant-color is-style-button-hover-gradient-color"} -->
<div class="wp-block-button is-style-button-hover-secondary-color is-style-button-hover-gradiant-color is-style-button-hover-gradient-color" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-white-color has-custom-primary-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><?php echo __('Get Started', 'celestium');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-text-color","style":{"border":{"top":{"width":"2px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"2px"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"className":"is-style-button-primary-color is-style-button-outline-2-color is-style-outline"} -->
<div class="wp-block-button is-style-button-primary-color is-style-button-outline-2-color is-style-outline"><a class="wp-block-button__link has-custom-text-color-color has-text-color has-link-color wp-element-button" style="border-top-width:2px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-width:2px"><?php echo __('Learn More', 'celestium');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/client-1.jpg" alt="<?php echo __('', 'celestium');?>" style="border-radius:100%;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/client-2.jpg" alt="<?php echo __('', 'celestium');?>" style="border-radius:100%;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/client-3.jpg" alt="<?php echo __('', 'celestium');?>" style="border-radius:100%;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color","className":"number-counter"} -->
<h6 class="wp-block-heading number-counter has-custom-text-color-color has-text-color has-link-color"><?php echo __('1000+', 'celestium');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<p class="has-custom-text-color-color has-text-color has-link-color"><?php echo __('Satisfied Customers', 'celestium');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"auto","height":"600px","aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"full-width-image hero-image"} -->
<figure class="wp-block-image aligncenter size-full is-resized full-width-image hero-image"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hero-image.jpg" alt="<?php echo __('', 'celestium');?>" style="aspect-ratio:16/9;object-fit:cover;width:auto;height:600px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"className":"our-products","layout":{"type":"constrained"}} -->
<div class="wp-block-group our-products"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<h2 class="wp-block-heading has-text-align-center has-custom-text-color-color has-text-color has-link-color"><?php echo __('Our Products', 'celestium');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<p class="has-text-align-center has-custom-text-color-color has-text-color has-link-color"><?php echo __('Discover our range of cutting-edge technology products designed to elevate your business to new heights. From software solutions to hardware innovations, our products are crafted with precision and expertise to meet the demands of the modern digital landscape.', 'celestium');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"custom-background-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-custom-background-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"150px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/software-150x150.jpg" alt="<?php echo __('', 'celestium');?>" style="aspect-ratio:1;object-fit:cover;width:150px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<h6 class="wp-block-heading has-custom-text-color-color has-text-color has-link-color"><?php echo __('Enterprise Software Suite', 'celestium');?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<p class="has-custom-text-color-color has-text-color has-link-color"><?php echo __('Boost productivity and efficiency with our comprehensive enterprise software suite. From project management to resource planning, our suite of applications is designed to streamline your business operations and drive growth.', 'celestium');?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"color":{"background":"#ffffff4d"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ffffff4d;color:#ffffff4d"/>
<!-- /wp:separator -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-text-color","style":{"border":{"top":{"width":"2px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"2px"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"className":"is-style-button-primary-color is-style-button-outline-2-color is-style-outline"} -->
<div class="wp-block-button is-style-button-primary-color is-style-button-outline-2-color is-style-outline"><a class="wp-block-button__link has-custom-text-color-color has-text-color has-link-color wp-element-button" style="border-top-width:2px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-width:2px"><?php echo __('Read More', 'celestium');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/transparent-building.png","id":169,"source":"file","title":"transparent-building"}}},"backgroundColor":"custom-background-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-custom-background-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"150px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/network-security-appliances-150x150.jpg" alt="<?php echo __('', 'celestium');?>" style="aspect-ratio:1;object-fit:cover;width:150px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<h6 class="wp-block-heading has-custom-text-color-color has-text-color has-link-color"><?php echo __('Network Security Appliances', 'celestium');?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<p class="has-custom-text-color-color has-text-color has-link-color"><?php echo __('Protect your network from cyber threats with our range of security appliances. From firewalls to intrusion detection systems, our appliances provide robust protection for your data and infrastructure.', 'celestium');?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"color":{"background":"#ffffff4d"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ffffff4d;color:#ffffff4d"/>
<!-- /wp:separator -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-text-color","style":{"border":{"top":{"width":"2px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"2px"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"className":"is-style-button-primary-color is-style-button-outline-2-color is-style-outline"} -->
<div class="wp-block-button is-style-button-primary-color is-style-button-outline-2-color is-style-outline"><a class="wp-block-button__link has-custom-text-color-color has-text-color has-link-color wp-element-button" style="border-top-width:2px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-width:2px"><?php echo __('Read More', 'celestium');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"custom-background-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-custom-background-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"150px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/point-of-sale-systems-150x150.jpg" alt="<?php echo __('', 'celestium');?>" style="aspect-ratio:1;object-fit:cover;width:150px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<h6 class="wp-block-heading has-custom-text-color-color has-text-color has-link-color"><?php echo __('Point-of-Sale Systems', 'celestium');?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<p class="has-custom-text-color-color has-text-color has-link-color"><?php echo __('Simplify your retail operations with our point-of-sale systems. From inventory management to customer transactions, our systems are designed to streamline your sales process and improve customer experiences.', 'celestium');?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"color":{"background":"#ffffff4d"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ffffff4d;color:#ffffff4d"/>
<!-- /wp:separator -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-text-color","style":{"border":{"top":{"width":"2px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"2px"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"className":"is-style-button-primary-color is-style-button-outline-2-color is-style-outline"} -->
<div class="wp-block-button is-style-button-primary-color is-style-button-outline-2-color is-style-outline"><a class="wp-block-button__link has-custom-text-color-color has-text-color has-link-color wp-element-button" style="border-top-width:2px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-width:2px"><?php echo __('Read More', 'celestium');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/transparent-building.png","dimRatio":50,"customOverlayColor":"#272629","isUserOverlayColor":true,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#272629"></span><img class="wp-block-cover__image-background" alt="<?php echo __('', 'celestium');?>" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/transparent-building.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo __('Take the Next Step Towards Innovation', 'celestium');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo __('Ready to elevate your business with cutting-edge technology? Download our latest product now and unlock the full potential of your enterprise.', 'celestium');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"custom-primary","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"is-style-button-hover-gradient-color"} -->
<div class="wp-block-button is-style-button-hover-gradient-color" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-white-color has-custom-primary-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><?php echo __('Download Now', 'celestium');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->