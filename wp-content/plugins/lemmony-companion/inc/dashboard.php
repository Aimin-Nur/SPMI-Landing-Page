<?php
/*
 * Disallow direct access
 */
if( !defined( 'ABSPATH' ) ) {
    die( 'Forbidden.' );
}


/**
 * Lemmony dashboard content
 */
if( !function_exists( 'lemmony_dashboard_content' ) ) :
    function lemmony_dashboard_content() {
        if( function_exists( 'lemmony_appearance_content' ) ) :
            lemmony_appearance_content( true );
        else :
        ?>

            <div class="wrap">
                <div class="lemmony-dash">
                    <div class="lemmony-dash-content">
                        <div class="lemmony-dash-col">
                            <h1>
                                <?php esc_html_e( 'Lemmony Dashboard', 'lemmony-companion' ); ?>
                            </h1>

                            <?php if( defined( 'LEMMONY_COMPANION' ) ) : ?>
                                <div class="lemmony-dash-question">
                                    <?php if( version_compare( PHP_VERSION, '7.0.0', '<' ) ) : ?>

                                        <strong class="lemmony-dash-warning">
                                            <?php esc_html_e( 'The version of PHP on your system is below the minimum required by the theme. Please upgrade to at least version 7.0', 'lemmony-companion' ); ?>
                                        </strong>

                                    <?php elseif( version_compare( get_bloginfo('version'), '6.1.0', '<' ) ) : ?>

                                        <strong class="lemmony-dash-warning">
                                            <?php esc_html_e( "The version of WordPress on your system is below the minimum required by the theme. Please upgrade to at least version 6.1", 'lemmony-companion' ); ?>
                                        </strong>

                                    <?php elseif( !defined( 'LEMMONY_THEME' ) ) : ?>

                                        <strong class="lemmony-dash-warning">
                                            <?php esc_html_e( 'Lemmony theme is not active. Please activate it', 'lemmony-companion' ); ?>
                                        </strong>

                                    <?php else : ?>

                                        <strong>
                                            <?php esc_html_e( 'Great! Theme is ready', 'lemmony-companion' ); ?>
                                        </strong>

                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>


                            <h2 class="mt-32">
                                <?php esc_html_e( 'Popular Questions', 'lemmony-companion' ); ?>
                            </h2>

                            <div class="lemmony-dash-questions">
                                <div class="lemmony-dash-question">
                                    <strong>
                                        <?php esc_html_e( 'What is the best WordPress version to use Lemmony on?', 'lemmony-companion' ); ?>
                                    </strong>
                                    <p>
                                        <?php esc_html_e( 'For the best experience we recommend using WordPress 6.1', 'lemmony-companion' ); ?>
                                    </p>
                                </div>

                                <div class="lemmony-dash-question">
                                    <strong>
                                        <?php esc_html_e( 'Why the block editor displays multiple "Your site doesn’t include support for the Icon block" notices?', 'lemmony-companion' ); ?>
                                    </strong>
                                    <p>
                                        <?php esc_html_e( 'Lemmony theme needs companion plugin to work correctly. Please install and activate it above', 'lemmony-companion' ); ?>
                                    </p>
                                </div>
                            </div>

                            <a href="https://shufflehound.com" target="_blank" class="lemmony-dash-link">
                                <div>
                                    <div class="lemmony-dash-link-icon">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 33.5625C14.75 33.5625 12.6406 33.1289 10.6719 32.2617C8.67969 31.418 6.94531 30.2578 5.46875 28.7812C3.99219 27.3047 2.83203 25.5703 1.98828 23.5781C1.12109 21.6094 0.6875 19.5 0.6875 17.25C0.6875 15 1.12109 12.8906 1.98828 10.9219C2.83203 8.92969 3.99219 7.19531 5.46875 5.71875C6.94531 4.24219 8.67969 3.08203 10.6719 2.23828C12.6406 1.37109 14.75 0.9375 17 0.9375C19.25 0.9375 21.3594 1.37109 23.3281 2.23828C25.3203 3.08203 27.0547 4.24219 28.5312 5.71875C30.0078 7.19531 31.168 8.92969 32.0117 10.9219C32.8789 12.8906 33.3125 15 33.3125 17.25C33.3125 19.5 32.8789 21.6094 32.0117 23.5781C31.168 25.5703 30.0078 27.3047 28.5312 28.7812C27.0547 30.2578 25.3203 31.418 23.3281 32.2617C21.3594 33.1289 19.25 33.5625 17 33.5625ZM10.5664 18.375C10.6367 20.3203 10.8711 22.0898 11.2695 23.6836C11.668 25.2773 12.1602 26.6367 12.7461 27.7617C13.3555 28.8867 14.0352 29.7656 14.7852 30.3984C15.5117 31.0078 16.25 31.3125 17 31.3125C17.75 31.3125 18.4883 31.0078 19.2148 30.3984C19.9648 29.7656 20.6328 28.8867 21.2188 27.7617C21.8281 26.6367 22.332 25.2773 22.7305 23.6836C23.1289 22.0898 23.3633 20.3203 23.4336 18.375H10.5664ZM2.97266 18.375C3.08984 19.7109 3.38281 21 3.85156 22.2422C4.32031 23.4609 4.92969 24.5859 5.67969 25.6172C6.45312 26.6484 7.34375 27.5508 8.35156 28.3242C9.38281 29.1211 10.4961 29.7656 11.6914 30.2578C11.1992 29.5781 10.7539 28.8047 10.3555 27.9375C9.95703 27.0703 9.60547 26.1328 9.30078 25.125C9.01953 24.1172 8.79688 23.0508 8.63281 21.9258C8.44531 20.7773 8.33984 19.5938 8.31641 18.375H2.97266ZM25.6836 18.375C25.6602 19.5938 25.5547 20.7773 25.3672 21.9258C25.2031 23.0508 24.9688 24.1172 24.6641 25.125C24.3828 26.1328 24.043 27.0703 23.6445 27.9375C23.2461 28.8047 22.8008 29.5781 22.3086 30.2578C23.5039 29.7656 24.6172 29.1211 25.6484 28.3242C26.6562 27.5273 27.5352 26.625 28.2852 25.6172C29.0586 24.5859 29.6797 23.4609 30.1484 22.2422C30.6172 21 30.9102 19.7109 31.0273 18.375H25.6836ZM25.6836 16.125H31.0273C30.9102 14.7891 30.6172 13.5 30.1484 12.2578C29.6797 11.0391 29.0586 9.91406 28.2852 8.88281C27.5352 7.85156 26.6562 6.94922 25.6484 6.17578C24.6172 5.37891 23.5039 4.73438 22.3086 4.24219C22.8008 4.92188 23.2461 5.69531 23.6445 6.5625C24.043 7.42969 24.3828 8.36719 24.6641 9.375C24.9688 10.3828 25.2031 11.4492 25.3672 12.5742C25.5547 13.7227 25.6602 14.9063 25.6836 16.125ZM10.5664 16.125H23.4688C23.375 14.1797 23.1289 12.4102 22.7305 10.8164C22.332 9.22266 21.8281 7.86328 21.2188 6.73828C20.6328 5.61328 19.9648 4.73438 19.2148 4.10156C18.4883 3.49219 17.75 3.1875 17 3.1875C16.25 3.1875 15.5117 3.49219 14.7852 4.10156C14.0352 4.73438 13.3555 5.61328 12.7461 6.73828C12.1602 7.86328 11.668 9.22266 11.2695 10.8164C10.8711 12.4102 10.6367 14.1797 10.5664 16.125ZM2.97266 16.125H8.31641C8.33984 14.9063 8.44531 13.7227 8.63281 12.5742C8.79688 11.4492 9.01953 10.3828 9.30078 9.375C9.60547 8.36719 9.95703 7.42969 10.3555 6.5625C10.7539 5.69531 11.1992 4.92188 11.6914 4.24219C10.4961 4.73438 9.38281 5.37891 8.35156 6.17578C7.34375 6.94922 6.45312 7.85156 5.67969 8.88281C4.92969 9.91406 4.32031 11.0391 3.85156 12.2578C3.38281 13.5 3.08984 14.7891 2.97266 16.125Z" fill="#191919"/>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <strong>
                                        <?php esc_html_e( 'Visit Main Website', 'lemmony-companion' ); ?>
                                    </strong>
                                    <p>
                                        <?php esc_html_e( 'Handpick best of your offerings and', 'lemmony-companion' ); ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="lemmony-dash-col">
                            <h2>
                                <?php esc_html_e( 'Getting started video', 'lemmony-companion' ); ?>
                            </h2>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/media/video-soon.png' ); ?>" width="575" style="user-select: none;" alt="" />

                            
                            <?php if( defined( 'LEMMONY_THEME' ) ) : ?>
                                <h2 class="mt-32">
                                    <?php esc_html_e( 'Recent Updates', 'lemmony-companion' ); ?>
                                </h2>

                                <?php
                                    global $wp_filesystem;
                                    WP_Filesystem();

                                    $readme_path = get_template_directory().'/readme.txt';
                                    if( $wp_filesystem->exists( $readme_path ) ) :
                                        $readme = $wp_filesystem->get_contents( $readme_path);

                                        $version = 0;
                                        $changelog = 0;
                                        $done = 0;

                                        foreach( explode("\n", $readme ) as $item ) : $item = trim( $item );
                                            if( $changelog && $item && !$done ) :
                                                // Version
                                                if( strpos( $item, '= ') !== false ) :
                                                    if( !$version ) :
                                                        $version = trim( str_replace( '= ', '', $item ) );
                                                        $version = explode( ' ', $version );
                                                        $version = isset( $version[0] ) ? $version[0] : '';
                                                    else :
                                                        $done = 1;
                                                    endif;
                                                endif;


                                                // Show changelog
                                                if( strpos( $item, '* ') !== false && strpos( $item, '-') !== false ) :
                                                    $version_data = explode( ' - ', str_replace( '* ', '', $item ) );
                                                    $type = isset( $version_data[0] ) ? $version_data[0] : '';
                                                    $description = isset( $version_data[1] ) ? $version_data[1] : '';
                                                    if( $type && $description ) :
                                                ?>
                                                    <p>
                                                        <strong><u><?php echo esc_attr( $type ); ?></u></strong> <?php echo esc_attr( $description ); ?>
                                                    </p>
                                                <?php endif; endif;
                                            endif;

                                            if( $item == '== Changelog ==' ) :
                                                $changelog = 1;
                                            endif;
                                        endforeach;

                                        unset( $readme );
                                    endif;
                                ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;
    }
endif;


/**
 * Lemmony dashboard page
 */
if( !function_exists( 'lemmony_dashboard' ) ) :
    function lemmony_dashboard() {
        add_menu_page(
            __( 'Lemmony', 'lemmony-companion' ),
            __( 'Lemmony', 'lemmony-companion' ),
            'manage_options',
            'lemmony',
            'lemmony_dashboard_content',
            get_template_directory_uri() . '/assets/media/lemmony-icon.svg',
            3
        );
    }
    add_action( 'admin_menu', 'lemmony_dashboard' );
endif;