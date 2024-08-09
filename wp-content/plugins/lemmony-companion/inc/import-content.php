<?php
/**
 * Lemmony import demo content - Agency
 */
if( !function_exists( 'lemmony_import_content_agency' ) && get_template_directory() !== get_stylesheet_directory() ) :
    function lemmony_import_content_agency() {
        $patterns_dir = get_template_directory() . '/patterns';
        $patterns_child_dir = get_stylesheet_directory() . '/patterns';
        $assets_uri = get_template_directory() . '/assets/media/content';
        $assets_child_uri = get_stylesheet_directory() . '/assets/media/content';

        // Posts
        $posts = [
            [
                'title' => 'Is Getting a Dog The First Step To Parenthood?',
                'content' => $patterns_child_dir . '/post-content-rounded.php',
                'excerpt' => 'Hear me out, I’m not crazy. Well a bit but that’s not the point',
                'category' => 'Marketing',
                'tag' => 'Lemmony', 
                'featured_image' => $assets_uri . '/blog1.jpg',
                'featured_title' => 'Image by Living Together at StockSnap',
            ],
            [
                'title' => 'Talking to Inanimate Objects Made Me a Better Designer',
                'content' => $patterns_child_dir . '/post-content-rounded.php',
                'excerpt' => 'Hear me out, I’m not crazy. Well a bit but that’s not the point',
                'category' => 'Hacks',
                'tag' => 'Lemmony',
                'featured_image' => $assets_uri . '/blog3.jpg',
                'featured_title' => 'Image by Togertoer at Pxhere',
            ],
            [
                'title' => 'How to Stay Productive When Working From Home',
                'content' => $patterns_child_dir . '/post-content-rounded.php',
                'excerpt' => 'Hear me out, I’m not crazy. Well a bit but that’s not the point',
                'category' => 'Hacks',
                'tag' => 'Lemmony',
                'featured_image' => $assets_uri . '/blog4.jpg',
                'featured_title' => 'Image by Rawpixel at Pxhere',
                'meta' => [
                    '_wp_page_template' => 'single-sidebar'
                ]
            ],
            [
                'title' => 'Are Mirrorless Cameras Will Go Extinct In The Near Future?',
                'content' => $patterns_child_dir . '/post-content-rounded.php',
                'excerpt' => 'Hear me out, I’m not crazy. Well a bit but that’s not the point',
                'category' => 'Hacks',
                'tag' => 'Lemmony',
                'featured_image' => $assets_child_uri . '/blog7.jpg',
                'featured_title' => 'Image by Richard Revel at StockSnap',
            ],
            [
                'title' => 'What You Should Know When Making a Showcase For Your Products',
                'content' => $patterns_child_dir . '/post-content-rounded.php',
                'excerpt' => 'Hear me out, I’m not crazy. Well a bit but that’s not the point',
                'category' => 'Design',
                'tag' => 'Lemmony',
                'featured_image' => $assets_uri . '/blog2.jpg',
                'featured_title' => 'Image by Shuffehound for Lemmony',
                'meta' => [
                    '_wp_page_template' => 'single-sidebar' 
                ]
            ],
            [
                'title' => 'How Smartphones Have Influenced Our Way Of Thinking',
                'content' => $patterns_child_dir . '/post-content-rounded.php',
                'excerpt' => 'Hear me out, I’m not crazy. Well a bit but that’s not the point',
                'category' => 'Hacks',
                'tag' => 'Lemmony',
                'featured_image' => $assets_uri . '/blog6.jpg',
                'featured_title' => 'Image by Nordwood Themes at Picography',
                'meta' => [
                    '_wp_page_template' => 'single-sidebar'
                ]
            ],
        ];
        $posts = array_reverse( $posts );

        // Pages
        $pages = [
            [
                'title' => 'About Us',
                'content' => $patterns_child_dir . '/pages-about.php',
                'content_child_media' => true,
                'type' => 'page', 
                'meta' => [
                    '_wp_page_template' => 'page-without-title'
                ]
            ],
            [
                'title' => 'Services',
                'content' => $patterns_dir . '/pages-services.php',
                'type' => 'page',
                'meta' => [
                    '_wp_page_template' => 'page-without-title'
                ]
            ],
            [
                'title' => 'Blog',
                'content' => $patterns_child_dir . '/pages-blog.php',
                'content_child_media' => true,
                'type' => 'page',
                'meta' => [
                    '_wp_page_template' => 'page-without-title'
                ]
            ],
            [
                'title' => 'Hire Us',
                'content' => $patterns_dir . '/pages-contacts.php',
                'type' => 'page',
                'meta' => [
                    '_wp_page_template' => 'page-without-title'
                ]
            ],
        ];
        $pages = array_reverse( $pages );
        $posts = array_merge( $posts, $pages);

        return $posts;
    }
endif;