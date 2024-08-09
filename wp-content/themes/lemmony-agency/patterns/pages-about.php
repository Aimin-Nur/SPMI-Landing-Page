<?php
/**
 * Title: About page (agency)
 * Slug: lemmony/pages-about-agency
 * Categories: lemmony-pages
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

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:lemmony-companion/counter {"textAlign":"center","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"large-plus"} -->
<div style="line-height:1.3;text-align:center" class="wp-block-lemmony-companion-counter has-large-plus-font-size"><span class="lemmony-counter-wrapper" data-start="0" data-end="10" data-duration="3"><span class="lemmony-counter-number">0</span><span class="lemmony-counter-suffix">+</span></span></div>
<!-- /wp:lemmony-companion/counter -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"small"} -->
<h3 class="wp-block-heading has-text-align-center has-small-font-size" style="line-height:1.4"><?php esc_html_e( 'Years of Experience', 'lemmony-agency' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"right":{"color":"var:preset|color|border-alt","width":"1px"},"left":{"color":"var:preset|color|border-alt","width":"1px"}},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"className":"lemmony-mobile-border-none"} -->
<div class="wp-block-column lemmony-mobile-border-none" style="border-right-color:var(--wp--preset--color--border-alt);border-right-width:1px;border-left-color:var(--wp--preset--color--border-alt);border-left-width:1px;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:lemmony-companion/counter {"textAlign":"center","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"large-plus"} -->
<div style="line-height:1.3;text-align:center" class="wp-block-lemmony-companion-counter has-large-plus-font-size"><span class="lemmony-counter-wrapper" data-start="0" data-end="15" data-duration="3"><span class="lemmony-counter-number">0</span><span class="lemmony-counter-suffix"><?php esc_html_e( 'K+', 'lemmony-agency' ); ?></span></span></div>
<!-- /wp:lemmony-companion/counter -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"small"} -->
<h3 class="wp-block-heading has-text-align-center has-small-font-size"><?php esc_html_e( 'Users Worldwide', 'lemmony-agency' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"textColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-primary-color has-text-color"><!-- wp:lemmony-companion/counter {"textAlign":"left","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"large-plus"} -->
<div style="line-height:1.3;text-align:left" class="wp-block-lemmony-companion-counter has-large-plus-font-size"><span class="lemmony-counter-wrapper" data-start="0" data-end="8" data-duration="3"><span class="lemmony-counter-number">0</span><span class="lemmony-counter-suffix">-</span></span></div>
<!-- /wp:lemmony-companion/counter -->

<!-- wp:lemmony-companion/counter {"textAlign":"left","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"large-plus"} -->
<div style="line-height:1.3;text-align:left" class="wp-block-lemmony-companion-counter has-large-plus-font-size"><span class="lemmony-counter-wrapper" data-start="0" data-end="25" data-duration="3"><span class="lemmony-counter-number">0</span><span class="lemmony-counter-suffix">%</span></span></div>
<!-- /wp:lemmony-companion/counter --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"small"} -->
<h3 class="wp-block-heading has-text-align-center has-small-font-size"><?php esc_html_e( 'Potential Growth', 'lemmony-agency' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"var:preset|spacing|70"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:image {"id":558,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"24px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri("assets/media/content/about-side.jpg") ); ?>" alt="" class="wp-image-558" style="border-radius:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"8%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:8%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1.6","fontStyle":"normal","fontWeight":"600"}},"className":"lemmony-animation lemmonyFadeInUp","fontSize":"small","animationStyle":"lemmonyFadeInUp"} -->
<h5 class="wp-block-heading lemmony-animation lemmonyFadeInUp has-small-font-size lemmony-animation" style="font-style:normal;font-weight:600;line-height:1.6;--lemmony-animation-name:lemmonyFadeInUp"><?php esc_html_e( 'The motivation', 'lemmony-agency' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1.3"},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"className":"lemmony-animation lemmonyFadeInUp","fontSize":"large-plus","animationStyle":"lemmonyFadeInUp"} -->
<h2 class="wp-block-heading lemmony-animation lemmonyFadeInUp has-large-plus-font-size lemmony-animation" style="margin-top:var(--wp--preset--spacing--10);line-height:1.3;--lemmony-animation-name:lemmonyFadeInUp"><?php esc_html_e( 'Epic Company Value Proposition Block', 'lemmony-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"lemmony-animation lemmonyFadeInUp","fontSize":"small-plus","animationStyle":"lemmonyFadeInUp"} -->
<p class="lemmony-animation lemmonyFadeInUp has-small-plus-font-size lemmony-animation" style="--lemmony-animation-name:lemmonyFadeInUp"><?php esc_html_e( 'Don’t shy away from using this helpful block to guide your website users to useful pages.', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"68px","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:68px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20"}},"border":{"radius":"16px"}},"backgroundColor":"midground","layout":{"type":"constrained"},"animationStyle":"lemmonyFadeInUp"} -->
<div class="wp-block-group has-midground-background-color has-background lemmony-animation" style="border-radius:16px;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);--lemmony-animation-name:lemmonyFadeInUp"><!-- wp:lemmony-companion/icon {"icon":"headphones-smile","align":"center","fontSize":"medium-plus"} -->
<div class="wp-block-lemmony-companion-icon aligncenter has-medium-plus-font-size"><div class="lemmony-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" data-reactroot=""><path d="M16.638,30.5c-4.899,0-8.938-3.753-9.393-8.535c-2.101-0.442-3.683-2.311-3.683-4.541v-1.68c0-2.229,1.58-4.096,3.68-4.54 C7.706,5.775,12.274,1.5,17.821,1.5c5.854,0,10.617,4.763,10.617,10.618v6.343c0,3.117-1.362,6.064-3.737,8.088 c-0.421,0.359-1.052,0.31-1.409-0.112c-0.358-0.42-0.309-1.052,0.112-1.409c1.929-1.644,3.034-4.036,3.034-6.566v-6.343 c0-4.752-3.865-8.618-8.617-8.618c-4.45,0-8.123,3.39-8.572,7.723c2.057,0.476,3.594,2.322,3.594,4.521v1.68 c0,2.197-1.535,4.043-3.588,4.521c0.437,3.687,3.582,6.556,7.384,6.556c0.552,0,1,0.447,1,1S17.191,30.5,16.638,30.5z M8.061,13.108c-1.391,0.074-2.499,1.228-2.499,2.636v1.68c0,1.456,1.185,2.641,2.641,2.641c1.456,0,2.64-1.185,2.64-2.641v-1.68 c0-1.408-1.108-2.562-2.499-2.636C8.252,13.121,8.154,13.121,8.061,13.108z M18.833,23.479c-1.912,0-3.604-1.218-4.208-3.029 c-0.175-0.523,0.108-1.09,0.632-1.265c0.522-0.178,1.09,0.107,1.265,0.632c0.332,0.994,1.26,1.662,2.311,1.662 c1.05,0,1.979-0.668,2.312-1.663c0.175-0.522,0.744-0.806,1.266-0.631c0.523,0.175,0.807,0.742,0.631,1.266 C22.436,22.262,20.744,23.479,18.833,23.479z"></path></svg></div></div>
<!-- /wp:lemmony-companion/icon --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":3,"fontSize":"small-plus"} -->
<h3 class="wp-block-heading has-small-plus-font-size"><?php esc_html_e( 'Friendly community', 'lemmony-agency' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"tiny-plus"} -->
<p class="has-tiny-plus-font-size"><?php esc_html_e( 'Have a question? Now you can ask us using this handy-dandy email address.', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"68px","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:68px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20"}},"border":{"radius":"16px"}},"backgroundColor":"midground","layout":{"type":"constrained"},"animationStyle":"lemmonyFadeInUp","animationDelay":"xsmall"} -->
<div class="wp-block-group has-midground-background-color has-background lemmony-animation" style="border-radius:16px;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);--lemmony-animation-name:lemmonyFadeInUp;animation-delay:var(--lemmony-delay-xsmall)"><!-- wp:lemmony-companion/icon {"icon":"check-circle","align":"center","fontSize":"medium-plus"} -->
<div class="wp-block-lemmony-companion-icon aligncenter has-medium-plus-font-size"><div class="lemmony-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" data-reactroot=""><path d="M16,30.5C8.005,30.5,1.5,23.995,1.5,16C1.5,8.005,8.005,1.5,16,1.5S30.5,8.005,30.5,16C30.5,23.995,23.995,30.5,16,30.5z M16,3.5C9.107,3.5,3.5,9.107,3.5,16c0,6.893,5.607,12.5,12.5,12.5S28.5,22.893,28.5,16C28.5,9.107,22.893,3.5,16,3.5z M14.089,20.821L14.089,20.821c-0.265,0-0.52-0.105-0.707-0.293l-3.82-3.821c-0.391-0.391-0.391-1.024,0-1.414 c0.391-0.391,1.023-0.391,1.414,0l3.113,3.114l6.934-6.934c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414l-7.641,7.641 C14.609,20.715,14.354,20.821,14.089,20.821z"></path></svg></div></div>
<!-- /wp:lemmony-companion/icon --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":3,"fontSize":"small-plus"} -->
<h3 class="wp-block-heading has-small-plus-font-size"><?php esc_html_e( 'Theme feature', 'lemmony-agency' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"tiny-plus"} -->
<p class="has-tiny-plus-font-size"><?php esc_html_e( 'Show the steps required for growth, the less the easier on the eye.', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Products &amp; Services', 'lemmony-agency' ); ?> </h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":553,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"24px"}},"animationStyle":""} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri("assets/media/content/about-service1.jpg") ); ?>" alt="" class="wp-image-553" style="border-radius:24px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"40px"}}},"fontSize":"medium-plus"} -->
<h2 class="wp-block-heading has-medium-plus-font-size" style="margin-top:40px"><?php esc_html_e( 'Service One', 'lemmony-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small-plus"} -->
<p class="has-small-plus-font-size"><?php esc_html_e( 'Make a pleasant visual experience for your website visitors. Try to keep your ideas and design in balance.', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textDecoration":"underline"}}} -->
<div class="wp-block-buttons" style="text-decoration:underline"><!-- wp:button {"backgroundColor":"white","textColor":"body","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"lemmony-button-hover-primary-text","fontSize":"tiny-plus"} -->
<div class="wp-block-button has-custom-font-size lemmony-button-hover-primary-text has-tiny-plus-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-body-color has-white-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e( 'Example button', 'lemmony-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:lemmony-companion/icon {"icon":"arrow-right-long","fontSize":"small-plus"} -->
<div class="wp-block-lemmony-companion-icon has-small-plus-font-size"><div class="lemmony-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" data-reactroot=""><polygon points="21.418,24.789 20.004,23.375 26.379,17 1.793,17 1.793,15 26.379,15 20.004,8.625 21.418,7.211 30.207,16 "></polygon></svg></div></div>
<!-- /wp:lemmony-companion/icon --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":554,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"24px"}},"animationStyle":""} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri("assets/media/content/about-service2.jpg") ); ?>" alt="" class="wp-image-554" style="border-radius:24px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"40px"}}},"fontSize":"medium-plus"} -->
<h2 class="wp-block-heading has-medium-plus-font-size" style="margin-top:40px"><?php esc_html_e( 'Awesome Product', 'lemmony-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small-plus"} -->
<p class="has-small-plus-font-size"><?php esc_html_e( 'Don’t shy away from using this helpful block to guide your website users to useful pages.', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textDecoration":"underline"}}} -->
<div class="wp-block-buttons" style="text-decoration:underline"><!-- wp:button {"backgroundColor":"white","textColor":"body","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"lemmony-button-hover-primary-text","fontSize":"tiny-plus"} -->
<div class="wp-block-button has-custom-font-size lemmony-button-hover-primary-text has-tiny-plus-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-body-color has-white-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e( 'Example button', 'lemmony-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:lemmony-companion/icon {"icon":"arrow-right-long","fontSize":"small-plus"} -->
<div class="wp-block-lemmony-companion-icon has-small-plus-font-size"><div class="lemmony-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" data-reactroot=""><polygon points="21.418,24.789 20.004,23.375 26.379,17 1.793,17 1.793,15 26.379,15 20.004,8.625 21.418,7.211 30.207,16 "></polygon></svg></div></div>
<!-- /wp:lemmony-companion/icon --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"border":{"top":{"color":"var:preset|color|border-alt","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|border-alt","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","right":"7vw","left":"7vw"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--border-alt);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--border-alt);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--70);padding-right:7vw;padding-bottom:var(--wp--preset--spacing--70);padding-left:7vw"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"center","animationStyle":""} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"12%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:12%"><!-- wp:image {"id":555,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"24px"}},"animationStyle":"lemmonyFadeInLeft","animationSpeed":"fast"} -->
<figure class="wp-block-image size-full has-custom-border lemmony-animation" style="--lemmony-animation-name:lemmonyFadeInLeft;animation-duration:var(--lemmony-speed-fast)"><img src="<?php echo esc_url( get_theme_file_uri("assets/media/content/about-service-small1.jpg") ); ?>" alt="" class="wp-image-555" style="border-radius:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Search Engine Optimization', 'lemmony-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'A short explanation about the service you can offer your future clients.', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"130px","className":"lemmony-mobile-left"} -->
<div class="wp-block-column is-vertically-aligned-center lemmony-mobile-left" style="flex-basis:130px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"tiny"} -->
<div class="wp-block-button has-custom-font-size has-tiny-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e( 'More', 'lemmony-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"backgroundColor":"border-alt","className":"is-style-wide","animationStyle":"lemmonyFadeIn","animationDelay":"xsmall"} -->
<hr class="wp-block-separator has-text-color has-border-alt-color has-alpha-channel-opacity has-border-alt-background-color has-background is-style-wide lemmony-animation" style="--lemmony-animation-name:lemmonyFadeIn;animation-delay:var(--lemmony-delay-xsmall)"/>
<!-- /wp:separator -->

<!-- wp:columns {"verticalAlignment":"center","animationStyle":""} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"12%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:12%"><!-- wp:image {"id":556,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"24px"}},"animationStyle":"lemmonyFadeInLeft","animationSpeed":"fast","animationDelay":"xsmall"} -->
<figure class="wp-block-image size-full has-custom-border lemmony-animation" style="--lemmony-animation-name:lemmonyFadeInLeft;animation-duration:var(--lemmony-speed-fast);animation-delay:var(--lemmony-delay-xsmall)"><img src="<?php echo esc_url( get_theme_file_uri("assets/media/content/about-service-small2.jpg") ); ?>" alt="" class="wp-image-556" style="border-radius:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Website Design', 'lemmony-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'A short explanation about the service you can offer your future clients.', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"130px","className":"lemmony-mobile-left"} -->
<div class="wp-block-column is-vertically-aligned-center lemmony-mobile-left" style="flex-basis:130px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"tiny"} -->
<div class="wp-block-button has-custom-font-size has-tiny-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e( 'More', 'lemmony-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"backgroundColor":"border-alt","className":"is-style-wide","animationStyle":"lemmonyFadeIn","animationDelay":"xsmall"} -->
<hr class="wp-block-separator has-text-color has-border-alt-color has-alpha-channel-opacity has-border-alt-background-color has-background is-style-wide lemmony-animation" style="--lemmony-animation-name:lemmonyFadeIn;animation-delay:var(--lemmony-delay-xsmall)"/>
<!-- /wp:separator -->

<!-- wp:columns {"verticalAlignment":"center","animationStyle":""} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"12%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:12%"><!-- wp:image {"id":557,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"24px"}},"animationStyle":"lemmonyFadeInLeft","animationSpeed":"fast","animationDelay":"small"} -->
<figure class="wp-block-image size-full has-custom-border lemmony-animation" style="--lemmony-animation-name:lemmonyFadeInLeft;animation-duration:var(--lemmony-speed-fast);animation-delay:var(--lemmony-delay-small)"><img src="<?php echo esc_url( get_theme_file_uri("assets/media/content/about-service-small3.jpg") ); ?>" alt="" class="wp-image-557" style="border-radius:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Branding', 'lemmony-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'A short explanation about the service you can offer your future clients.', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"130px","className":"lemmony-mobile-left"} -->
<div class="wp-block-column is-vertically-aligned-center lemmony-mobile-left" style="flex-basis:130px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"tiny"} -->
<div class="wp-block-button has-custom-font-size has-tiny-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e( 'More', 'lemmony-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","fontSize":"large-plus"} -->
<h2 class="wp-block-heading has-text-align-center has-large-plus-font-size"><?php esc_html_e( 'Check the Most Important Features', 'lemmony-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small-plus"} -->
<p class="has-text-align-center has-small-plus-font-size"><?php esc_html_e( 'The more you tell about your service or project, the easier your client\'s decision will be!', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"className":"lemmony-mobile-center","animationStyle":""} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center lemmony-mobile-center" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","animationStyle":"","animationSpeed":"","animationDelay":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"radius":"24px"}},"className":"is-style-hover-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-hover-bg" style="border-radius:24px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"80px"} -->
<div class="wp-block-column" style="flex-basis:80px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20"}},"border":{"radius":"16px"}},"backgroundColor":"midground","layout":{"type":"constrained","contentSize":""},"animationStyle":"lemmonyFadeInDown"} -->
<div class="wp-block-group has-midground-background-color has-background lemmony-animation" style="border-radius:16px;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);--lemmony-animation-name:lemmonyFadeInDown"><!-- wp:lemmony-companion/icon {"icon":"headphones-smile","align":"center","fontSize":"large"} -->
<div class="wp-block-lemmony-companion-icon aligncenter has-large-font-size"><div class="lemmony-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" data-reactroot=""><path d="M16.638,30.5c-4.899,0-8.938-3.753-9.393-8.535c-2.101-0.442-3.683-2.311-3.683-4.541v-1.68c0-2.229,1.58-4.096,3.68-4.54 C7.706,5.775,12.274,1.5,17.821,1.5c5.854,0,10.617,4.763,10.617,10.618v6.343c0,3.117-1.362,6.064-3.737,8.088 c-0.421,0.359-1.052,0.31-1.409-0.112c-0.358-0.42-0.309-1.052,0.112-1.409c1.929-1.644,3.034-4.036,3.034-6.566v-6.343 c0-4.752-3.865-8.618-8.617-8.618c-4.45,0-8.123,3.39-8.572,7.723c2.057,0.476,3.594,2.322,3.594,4.521v1.68 c0,2.197-1.535,4.043-3.588,4.521c0.437,3.687,3.582,6.556,7.384,6.556c0.552,0,1,0.447,1,1S17.191,30.5,16.638,30.5z M8.061,13.108c-1.391,0.074-2.499,1.228-2.499,2.636v1.68c0,1.456,1.185,2.641,2.641,2.641c1.456,0,2.64-1.185,2.64-2.641v-1.68 c0-1.408-1.108-2.562-2.499-2.636C8.252,13.121,8.154,13.121,8.061,13.108z M18.833,23.479c-1.912,0-3.604-1.218-4.208-3.029 c-0.175-0.523,0.108-1.09,0.632-1.265c0.522-0.178,1.09,0.107,1.265,0.632c0.332,0.994,1.26,1.662,2.311,1.662 c1.05,0,1.979-0.668,2.312-1.663c0.175-0.522,0.744-0.806,1.266-0.631c0.523,0.175,0.807,0.742,0.631,1.266 C22.436,22.262,20.744,23.479,18.833,23.479z"></path></svg></div></div>
<!-- /wp:lemmony-companion/icon --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small-plus","animationStyle":""} -->
<h3 class="wp-block-heading has-small-plus-font-size" style="margin-top:var(--wp--preset--spacing--30);font-style:normal;font-weight:700;line-height:1.4"><?php esc_html_e( 'Friendly support', 'lemmony-agency' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"tiny-plus","animationStyle":""} -->
<p class="has-tiny-plus-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Don’t shy away from using this helpful block to guide your website users to useful pages.', 'lemmony-agency' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textDecoration":"underline"}}} -->
<div class="wp-block-buttons" style="text-decoration:underline"><!-- wp:button {"backgroundColor":"transparent","textColor":"body","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"lemmony-button-hover-primary-text","fontSize":"tiny-plus"} -->
<div class="wp-block-button has-custom-font-size lemmony-button-hover-primary-text has-tiny-plus-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-body-color has-transparent-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e( 'Example button', 'lemmony-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:lemmony-companion/icon {"icon":"arrow-right-long","fontSize":"small-plus"} -->
<div class="wp-block-lemmony-companion-icon has-small-plus-font-size"><div class="lemmony-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" data-reactroot=""><polygon points="21.418,24.789 20.004,23.375 26.379,17 1.793,17 1.793,15 26.379,15 20.004,8.625 21.418,7.211 30.207,16 "></polygon></svg></div></div>
<!-- /wp:lemmony-companion/icon --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","animationStyle":"","animationSpeed":"","animationDelay":"xsmall"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"radius":"24px"}},"className":"is-style-hover-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-hover-bg" style="border-radius:24px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"80px"} -->
<div class="wp-block-column" style="flex-basis:80px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20"}},"border":{"radius":"16px"}},"backgroundColor":"midground","layout":{"type":"constrained","contentSize":""},"animationStyle":"lemmonyFadeInDown","animationDelay":"xsmall"} -->
<div class="wp-block-group has-midground-background-color has-background lemmony-animation" style="border-radius:16px;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);--lemmony-animation-name:lemmonyFadeInDown;animation-delay:var(--lemmony-delay-xsmall)"><!-- wp:lemmony-companion/icon {"icon":"heart","align":"center","fontSize":"large"} -->
<div class="wp-block-lemmony-companion-icon aligncenter has-large-font-size"><div class="lemmony-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" data-reactroot=""><path d="M15.996,28.578c-0.274,0-0.548-0.057-0.804-0.169C9.84,26.039,3.509,21.04,1.791,14.113C0.771,10,2.526,5.801,5.966,4.131 c3.256-1.583,6.941-0.477,10.031,2.949c3.094-3.428,6.784-4.53,10.039-2.948c3.438,1.671,5.192,5.87,4.173,9.981l0,0 c-1.718,6.93-8.053,11.928-13.408,14.296C16.545,28.521,16.271,28.578,15.996,28.578z M8.962,5.437 c-0.729,0-1.443,0.162-2.123,0.492c-2.595,1.261-3.902,4.5-3.107,7.702c1.545,6.232,7.575,10.87,12.269,12.948 c4.687-2.076,10.72-6.713,12.266-12.948l0,0c0.794-3.201-0.513-6.44-3.106-7.701c-2.629-1.28-5.759-0.037-8.376,3.321l-0.789,1.013 l-0.789-1.013C13.271,6.763,11.051,5.437,8.962,5.437z"></path></svg></div></div>
<!-- /wp:lemmony-companion/icon --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small-plus"} -->
<h3 class="wp-block-heading has-small-plus-font-size" style="margin-top:var(--wp--preset--spacing--30);font-style:normal;font-weight:700;line-height:1.4"><?php esc_html_e( 'Made with love', 'lemmony-agency' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"tiny-plus"} -->
<p class="has-tiny-plus-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Make a pleasant visual experience for your website visitors. Try to keep your ideas and design in balance.', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textDecoration":"underline"}}} -->
<div class="wp-block-buttons" style="text-decoration:underline"><!-- wp:button {"backgroundColor":"transparent","textColor":"body","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"lemmony-button-hover-primary-text","fontSize":"tiny-plus"} -->
<div class="wp-block-button has-custom-font-size lemmony-button-hover-primary-text has-tiny-plus-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-body-color has-transparent-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e( 'Example button', 'lemmony-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:lemmony-companion/icon {"icon":"arrow-right-long","fontSize":"small-plus"} -->
<div class="wp-block-lemmony-companion-icon has-small-plus-font-size"><div class="lemmony-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" data-reactroot=""><polygon points="21.418,24.789 20.004,23.375 26.379,17 1.793,17 1.793,15 26.379,15 20.004,8.625 21.418,7.211 30.207,16 "></polygon></svg></div></div>
<!-- /wp:lemmony-companion/icon --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","animationStyle":"","animationSpeed":"","animationDelay":"medium"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"radius":"24px"}},"className":"is-style-hover-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-hover-bg" style="border-radius:24px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"80px"} -->
<div class="wp-block-column" style="flex-basis:80px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20"}},"border":{"radius":"16px"}},"backgroundColor":"midground","layout":{"type":"constrained","contentSize":""},"animationStyle":"lemmonyFadeInDown","animationSpeed":"","animationDelay":"small"} -->
<div class="wp-block-group has-midground-background-color has-background lemmony-animation" style="border-radius:16px;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);--lemmony-animation-name:lemmonyFadeInDown;animation-delay:var(--lemmony-delay-small)"><!-- wp:lemmony-companion/icon {"icon":"reload-circle","align":"center","fontSize":"large"} -->
<div class="wp-block-lemmony-companion-icon aligncenter has-large-font-size"><div class="lemmony-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" data-reactroot=""><path d="M16,30.5C8.005,30.5,1.5,23.995,1.5,16S8.005,1.5,16,1.5S30.5,8.005,30.5,16S23.995,30.5,16,30.5z M16,3.5 C9.107,3.5,3.5,9.107,3.5,16S9.107,28.5,16,28.5S28.5,22.893,28.5,16S22.893,3.5,16,3.5z M15.97,22.998 c-0.334,0-0.671-0.024-1.008-0.073c-3.07-0.443-5.557-3.007-5.914-6.094c-0.231-1.997,0.397-3.997,1.724-5.486 C12.1,9.854,14.005,9,16,9c1.525,0,2.99,0.504,4.183,1.391v-0.41c0-0.552,0.447-1,1-1s1,0.448,1,1v2.909 c0.034,0.375-0.146,0.752-0.492,0.955c-0.163,0.095-0.345,0.135-0.521,0.136l-2.986-0.001c-0.553,0-1-0.448-1-1s0.448-1,1-1 c0,0,0,0,0.001,0l0.786,0C18.121,11.355,17.082,11,16,11c-1.425,0-2.786,0.611-3.734,1.675c-0.962,1.079-1.399,2.473-1.231,3.926 c0.255,2.201,2.027,4.028,4.213,4.345c2.137,0.305,4.166-0.713,5.171-2.604c0.259-0.488,0.863-0.677,1.352-0.414 c0.488,0.259,0.674,0.864,0.414,1.352C20.96,21.586,18.546,22.998,15.97,22.998z"></path></svg></div></div>
<!-- /wp:lemmony-companion/icon --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small-plus"} -->
<h3 class="wp-block-heading has-small-plus-font-size" style="margin-top:var(--wp--preset--spacing--30);font-style:normal;font-weight:700;line-height:1.4"><?php esc_html_e( 'Infinity animations', 'lemmony-agency' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"tiny-plus"} -->
<p class="has-tiny-plus-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Don’t shy away from using this helpful block to guide your website users to useful pages.', 'lemmony-agency' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textDecoration":"underline"}}} -->
<div class="wp-block-buttons" style="text-decoration:underline"><!-- wp:button {"backgroundColor":"transparent","textColor":"body","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"lemmony-button-hover-primary-text","fontSize":"tiny-plus"} -->
<div class="wp-block-button has-custom-font-size lemmony-button-hover-primary-text has-tiny-plus-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-body-color has-transparent-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e( 'Example button', 'lemmony-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:lemmony-companion/icon {"icon":"arrow-right-long","fontSize":"small-plus"} -->
<div class="wp-block-lemmony-companion-icon has-small-plus-font-size"><div class="lemmony-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" data-reactroot=""><polygon points="21.418,24.789 20.004,23.375 26.379,17 1.793,17 1.793,15 26.379,15 20.004,8.625 21.418,7.211 30.207,16 "></polygon></svg></div></div>
<!-- /wp:lemmony-companion/icon --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Check the Most Important Features', 'lemmony-agency' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"lemmony-mobile-left"} -->
<div class="wp-block-column is-vertically-aligned-center lemmony-mobile-left" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Explore site', 'lemmony-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"},"animationStyle":"lemmonyFadeIn"} -->
<div class="wp-block-group lemmony-animation" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);--lemmony-animation-name:lemmonyFadeIn"><!-- wp:lemmony-companion/accordion {"title":"How many patterns does this theme have?","className":"is-open"} -->
<div class="wp-block-lemmony-companion-accordion is-open"><div class="lemmony-accordion-container"><h2 class="lemmony-accordion-title"><?php esc_html_e( 'How many patterns does this theme have?', 'lemmony-agency' ); ?></h2><div class="lemmony-accordion-content"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Don’t shy away from using this helpful block to guide your website users to useful pages. Be the guide that they deserve!', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph --></div></div><div class="lemmony-accordion-icon"></div></div>
<!-- /wp:lemmony-companion/accordion -->

<!-- wp:lemmony-companion/accordion {"title":"Is Lemmony WordPress theme free to use?"} -->
<div class="wp-block-lemmony-companion-accordion"><div class="lemmony-accordion-container"><h2 class="lemmony-accordion-title"><?php esc_html_e( 'Is Lemmony WordPress theme free to use?', 'lemmony-agency' ); ?></h2><div class="lemmony-accordion-content"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Don’t shy away from using this helpful block to guide your website users to useful pages. Be the guide that they deserve!', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph --></div></div><div class="lemmony-accordion-icon"></div></div>
<!-- /wp:lemmony-companion/accordion -->

<!-- wp:lemmony-companion/accordion {"title":"Will this theme will have future updates?"} -->
<div class="wp-block-lemmony-companion-accordion"><div class="lemmony-accordion-container"><h2 class="lemmony-accordion-title"><?php esc_html_e( 'Will this theme will have future updates?', 'lemmony-agency' ); ?></h2><div class="lemmony-accordion-content"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Don’t shy away from using this helpful block to guide your website users to useful pages. Be the guide that they deserve!', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph --></div></div><div class="lemmony-accordion-icon"></div></div>
<!-- /wp:lemmony-companion/accordion -->

<!-- wp:lemmony-companion/accordion {"title":"What is a “Child theme”?"} -->
<div class="wp-block-lemmony-companion-accordion"><div class="lemmony-accordion-container"><h2 class="lemmony-accordion-title"><?php esc_html_e( 'What is a “Child theme”?', 'lemmony-agency' ); ?></h2><div class="lemmony-accordion-content"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Don’t shy away from using this helpful block to guide your website users to useful pages. Be the guide that they deserve!', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph --></div></div><div class="lemmony-accordion-icon"></div></div>
<!-- /wp:lemmony-companion/accordion -->

<!-- wp:lemmony-companion/accordion {"title":"Can I use Lemmony Theme for my clients?"} -->
<div class="wp-block-lemmony-companion-accordion"><div class="lemmony-accordion-container"><h2 class="lemmony-accordion-title"><?php esc_html_e( 'Can I use Lemmony Theme for my clients?', 'lemmony-agency' ); ?></h2><div class="lemmony-accordion-content"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Don’t shy away from using this helpful block to guide your website users to useful pages. Be the guide that they deserve!', 'lemmony-agency' ); ?></p>
<!-- /wp:paragraph --></div></div><div class="lemmony-accordion-icon"></div></div>
<!-- /wp:lemmony-companion/accordion --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

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