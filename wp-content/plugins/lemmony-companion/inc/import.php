<?php 
function lemmony_companion_import( $posts ) {
    if( !current_user_can( 'activate_plugins' ) || !is_array( $posts ) || !defined('LEMMONY_THEME') ) :
        return;
    endif;

    $name = defined( 'LEMMONY_CHILD_THEME_NAME' ) ? 'lemmony_' . strtolower( LEMMONY_CHILD_THEME_NAME ) . '_import' : 'lemmony_import';
    if( get_option( $name ) ) :
        return;
    endif;


    // Insert blog posts categories
    foreach( $posts as $blog_post ) :
        if( !empty( $blog_post['category'] ) ) :
            $category = get_term_by( 'name', $blog_post['category'], 'category' );
            if( !$category ) :
                wp_insert_term( $blog_post['category'], 'category' );
            endif;
        endif;
    endforeach;


    // Insert blog posts
    foreach( $posts as $blog_post ) :
        $type = !empty( $blog_post['type'] ) ? $blog_post['type'] : 'post';

        // Check if blog post exists by title
        $exists = get_page_by_title( $blog_post['title'], OBJECT, $type );
        $exists_id = !empty( $exists->ID ) ? $exists->ID : 0;
        if( !$exists || ( $exists_id > 0 && get_post_status( $exists_id ) == 'trash' ) ) :

            $content = '';
            if( !empty( $blog_post['content'] ) && file_exists( $blog_post['content'] ) ) :
                $content_child_media = !empty( $blog_post['content_child_media'] ) ? true : false;
                $content = lemmony_companion_import_prepare( file_get_contents( $blog_post['content'] ), $content_child_media );
            endif;

            $post_id = wp_insert_post( [
                'post_title' => $blog_post['title'],
                'post_content' => $content,
                'post_excerpt' => !empty( $blog_post['excerpt'] ) ? $blog_post['excerpt'] : '',
                'post_status' => 'publish',
                'post_type' => $type,
                //'post_date' => date( 'Y-m-d H:i:s', time() )
            ]);

            // Set post meta
            if( !empty( $blog_post['meta'] ) && is_array( $blog_post['meta'] ) ) :
                foreach( $blog_post['meta'] as $key => $meta ) :
                    update_post_meta( $post_id, $key, $meta );
                endforeach;
            endif;

            // Set post category
            if( !empty( $blog_post['category'] ) ) :
                $category = get_term_by( 'name', $blog_post['category'], 'category' );
                wp_set_post_categories( $post_id, $category->term_id );
            endif;

            // Set post category
            if( !empty( $blog_post['tag'] ) ) :
                wp_set_object_terms( $post_id, $blog_post['tag'], 'post_tag', true );
            endif;

            // Set post featured image
            if( !empty( $blog_post['featured_image'] ) ) :
                $image_url = $blog_post['featured_image'];
                $image_name = basename( $image_url );
                $upload_dir = wp_upload_dir();
                $image_data = file_get_contents( $image_url );
                $filename = wp_unique_filename( $upload_dir['path'], $image_name );
                if( wp_mkdir_p( $upload_dir['path'] ) ) :
                    $file = $upload_dir['path'] . '/' . $filename;
                else :
                    $file = $upload_dir['basedir'] . '/' . $filename;
                endif;
                file_put_contents( $file, $image_data );
                $wp_filetype = wp_check_filetype( $filename, null );
                $attachment = [
                    'post_mime_type' => $wp_filetype['type'],
                    'post_title' => sanitize_file_name( $filename ),
                    'post_content' => '',
                    'post_status' => 'inherit',
                ];
                $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
                require_once( ABSPATH . 'wp-admin/includes/image.php' );
                $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
                wp_update_attachment_metadata( $attach_id, $attach_data );
                set_post_thumbnail( $post_id, $attach_id );

                if( !empty( $blog_post['featured_title'] ) ) :
                    wp_update_post([
                        'ID'         => $attach_id,
                        'post_title' => $blog_post['featured_title']
                    ]);
                endif;
            endif;
        endif;
    endforeach;

    // Done
    update_option( $name, true );

    echo json_encode( [ 'done' ] );
    die;
}

function lemmony_companion_import_prepare( $post_content, $content_child_media = false ) {
    if( $content_child_media && is_child_theme() ) :
        // get_theme_file_uri function
        $post_content = preg_replace_callback('/<\?php\s*echo\s*esc_url\(\s*get_theme_file_uri\(\s*"(.*)"\s*\)\s*\)\s*;\s*\?>/', function ($matches) {
            return get_stylesheet_directory_uri() . '/' . $matches[1];
        }, $post_content);
    else :
        // lemmony_media function
        $post_content = preg_replace_callback('/<\?php\s*echo\s*esc_url\(\s*lemmony_media\(\s*"(.*)"\s*\)\s*\)\s*;\s*\?>/', function ($matches) {
            return get_template_directory_uri() . '/assets/media/content/' . $matches[1];
        }, $post_content);

        // get_theme_file_uri function
        $post_content = preg_replace_callback('/<\?php\s*echo\s*esc_url\(\s*get_theme_file_uri\(\s*"(.*)"\s*\)\s*\)\s*;\s*\?>/', function ($matches) {
            return get_template_directory_uri() . '/' . $matches[1];
        }, $post_content);
    endif;


    $post_content = preg_replace_callback('/<\?(?:[^<]+)?\?>/', function ($matches) {
        $text = isset( $matches[0] ) ? $matches[0] : '';
        $text = str_replace( "<?php esc_html_e( '", '', $text );
        $text = str_replace( "', 'lemmony' ); ?>", '', $text );

        if( is_child_theme() ) :
            $theme = wp_get_theme();
            $text_domain = $theme->get( 'TextDomain' );
            $text = str_replace( "', '" . $text_domain . "' ); ?>", '', $text );
        endif;

        return $text;
    }, $post_content);

    return $post_content;
}
