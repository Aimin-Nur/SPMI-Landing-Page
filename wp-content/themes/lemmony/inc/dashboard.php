<?php
$lemmony_updates_themes = get_site_transient( 'update_themes' );
$lemmony_theme_new_version = !empty( $lemmony_updates_themes->response['lemmony'] ) ? (array)$lemmony_updates_themes->response['lemmony'] : '';
$lemmony_theme_new_version = !empty( $lemmony_theme_new_version['new_version'] ) ? $lemmony_theme_new_version['new_version'] : '';

$lemmony_update_plugins = get_site_transient( 'update_plugins' );
$lemmony_plugin_new_version = !empty( $lemmony_update_plugins->response['lemmony-companion/lemmony-companion.php'] ) ? (array)$lemmony_update_plugins->response['lemmony-companion/lemmony-companion.php'] : '';
$lemmony_plugin_new_version = !empty( $lemmony_plugin_new_version['new_version'] ) ? $lemmony_plugin_new_version['new_version'] : '';

$lemmony_data = is_child_theme() ? wp_get_theme()->parent() : wp_get_theme();
$lemmony_review_notice = false;
if( !get_option( 'lemmony_review_notice_closed' ) ) :
    $lemmony_review_notice = get_option( 'lemmony_install_date' ) < strtotime( '-5 days' ) ? true : false;
endif;
?>
<div class="wrap">
    <div class="lemmony-dash">
        <div class="lemmony-dash-content">
            <div class="lemmony-dash-col">
                <h1>
                    <?php esc_html_e( 'Lemmony Dashboard', 'lemmony' ); ?>
                </h1>

                <div class="lemmony-version">
                    v <?php echo esc_html( $lemmony_data->Version ); ?>
                </div>


                <?php
                /*
                ** General notices
                */
                if( defined( 'LEMMONY_COMPANION' ) ) :
                    if( version_compare( PHP_VERSION, '7.0.0', '<' ) ) :

                        lemmony_notice_template(
                            'warning',
                            __( 'PHP version below minimum', 'lemmony' ),
                            __( 'The version of PHP on your system is below the minimum required by the theme. Please upgrade to at least', 'lemmony' ) . ' <strong>' . __( 'version', 'lemmony' ) . ' 7.0'.'</strong>'
                        );

                    elseif( version_compare( get_bloginfo('version'), '6.1.0', '<' ) ) :

                        lemmony_notice_template(
                            'warning',
                            __( 'WordPress version below minimum', 'lemmony' ),
                            __( 'The version of WordPress on your system is below the minimum required by the theme. Please upgrade to at least', 'lemmony' ) . ' <strong>' . __( 'version', 'lemmony' ) . ' 6.1'.'</strong>'
                        );

                    elseif( $lemmony_theme_new_version ) : 

                        lemmony_notice_template(
                            'update',
                            __( 'Theme update available', 'lemmony' ),
                            __( 'Lemmony', 'lemmony' ) . ' <strong>' . __( 'version', 'lemmony' ) . ' ' . $lemmony_theme_new_version . '</strong> ' .  __( 'update is available', 'lemmony' ),
                            __( 'Open Updates', 'lemmony' )
                        );

                    elseif( $lemmony_plugin_new_version ) : 

                        lemmony_notice_template(
                            'update',
                            __( 'Plugin update available', 'lemmony' ),
                            __( 'Lemmony companion', 'lemmony' ) . ' <strong>' . __( 'version', 'lemmony' ) . ' ' . $lemmony_plugin_new_version . '</strong> ' .  __( 'update is available', 'lemmony' ),
                            __( 'Open Updates', 'lemmony' )
                        );

                    else : 

                        // Review notice
                        if( $lemmony_review_notice ) :
                            lemmony_notice_template(
                                'review',
                                __( 'Enjoying Lemmony theme?', 'lemmony' ),
                                __( "If you're happy with our theme, we'd greatly appreciate your review. Your feedback motivates us to keep improving Lemmony. However, if you encounter any issues or need assistance, please feel free to reach out to our", 'lemmony' ) . ' <a href="https://wordpress.org/support/theme/lemmony/" target="_blank">' . __( ' support center', 'lemmony' ) . '</a>' . '.',
                                __( 'Leave a Review', 'lemmony' ),
                                __( 'Close', 'lemmony' )
                            );
                        endif;

                        // All good
                        lemmony_notice_template(
                            'done',
                            __( 'All set! Theme is installed and ready', 'lemmony' ),
                            __( 'Enjoy Lemmony theme!', 'lemmony' )
                        );

                    endif;
                endif; 


                /*
                ** Import demo content
                */
                if( !defined( 'LEMMONY_COMPANION' ) ) :
                    lemmony_notice_template(
                        'import-unavailable',
                        __( 'Import demo content', 'lemmony' ),
                        __( 'Import Lemmony demo content to get quick start on your website. What will be imported: extra pages and posts with images', 'lemmony' ),
                        __( 'Import', 'lemmony' )
                    ); 
                else :
                    $lemmony_name = defined( 'LEMMONY_CHILD_THEME_NAME' ) ? 'lemmony_' . strtolower( LEMMONY_CHILD_THEME_NAME ) . '_import' : 'lemmony_import';
                    if( !get_option( $lemmony_name ) ) :

                        lemmony_notice_template(
                            'import',
                            __( 'Import demo content', 'lemmony' ),
                            __( 'Import Lemmony demo content to get quick start on your website. What will be imported: extra pages and posts with images', 'lemmony' ),
                            __( 'Import', 'lemmony' )
                        );

                    else :

                        lemmony_notice_template(
                            'import-done',
                            __( 'Content imported', 'lemmony' ),
                            __( 'Enjoy the content! More content available under block editor patterns section', 'lemmony' )
                        );
                        
                    endif;
                endif;
            ?>


                <h2 class="mt-32">
                    <?php esc_html_e( 'Popular Questions', 'lemmony' ); ?>
                </h2>

                <div class="lemmony-dash-questions">
                    <div class="lemmony-dash-question">
                        <strong>
                            <?php esc_html_e( 'How to edit the Lemmony theme?', 'lemmony' ); ?>
                        </strong>
                        <p>
                            <?php esc_html_e( 'Most of our theme content can be edited under', 'lemmony' ); ?>
                            <strong><?php esc_html_e( 'Appearance > Editor', 'lemmony' ); ?></strong>.
                            <?php esc_html_e( 'There you can change our', 'lemmony' ); ?> <strong><?php esc_html_e( 'Templates', 'lemmony' ); ?></strong> <?php esc_html_e( '(like the front page, categories, etc) and', 'lemmony' ); ?>
                            <strong><?php esc_html_e( 'Templates Parts', 'lemmony' ); ?></strong> <?php esc_html_e( '(like header, footer, and sidebar)', 'lemmony' ); ?>.
                            <a href="https://wordpress.org/documentation/article/site-editor/" target="_blank">
                                <?php esc_html_e( 'Learn more', 'lemmony' ); ?>
                            </a>
                        </p>
                    </div>

                    <div class="lemmony-dash-question">
                        <strong>
                            <?php esc_html_e( 'How to add favicon?', 'lemmony' ); ?>
                        </strong>
                        <p>
                            <?php esc_html_e( 'The easiest way to set favicon is by using a site editor and adding a ', 'lemmony' ); ?>
                            <strong><?php esc_html_e( 'site logo', 'lemmony' ); ?></strong>
                            <?php esc_html_e( 'block. Then uploading the favicon image and enabling the', 'lemmony' ); ?>
                            <strong><?php esc_html_e( 'Use as site icon', 'lemmony' ); ?></strong>
                            <?php esc_html_e( 'option', 'lemmony' ); ?>
                        
                        </p>
                    </div>

                    <div class="lemmony-dash-question">
                        <strong>
                            <?php esc_html_e( 'Why the block editor displays multiple "Your site doesn’t include support for the Icon block" notices?', 'lemmony' ); ?>
                        </strong>
                        <p>
                            <?php esc_html_e( 'Lemmony theme needs companion plugin to work correctly. Please install and activate it above', 'lemmony' ); ?>
                        </p>
                    </div>

                    <div class="lemmony-dash-question">
                        <strong>
                            <?php esc_html_e( 'Why is the navigation link in the header greyed out?', 'lemmony' ); ?>
                        </strong>
                        <p>
                        <?php esc_html_e( 'This link has a special class added, "lemmony-desktop-hidden," which means that it will be hidden from desktop users. We have an opposite class for the header button, "lemmony-mobile-hidden"', 'lemmony' ); ?>
                        </p>
                    </div>

                    <div class="lemmony-dash-question">
                        <strong>
                            <?php esc_html_e( 'What is the best way to add a share button?', 'lemmony' ); ?>
                        </strong>
                        <p>
                            <?php esc_html_e( 'We recommend using third-party plugins, which offer the best experience. For example:', 'lemmony' ); ?>
                            <a href="https://wordpress.org/plugins/ultimate-social-media-icons/" target="_blank"><?php esc_html_e( 'this', 'lemmony' ); ?></a>
                            <?php esc_html_e( 'or', 'lemmony' ); ?>
                            <a href="https://wordpress.org/plugins/add-to-any/" target="_blank"><?php esc_html_e( 'this', 'lemmony' ); ?></a>
                            <?php esc_html_e( 'plugin', 'lemmony' ); ?>
                        </p>
                    </div>

                    <div class="lemmony-dash-question">
                        <strong>
                            <?php esc_html_e( 'What is the best WordPress version to use Lemmony on?', 'lemmony' ); ?>
                        </strong>
                        <p>
                            <?php esc_html_e( 'For the best experience we recommend using at least WordPress 6.1', 'lemmony' ); ?>
                        </p>
                    </div>
                </div>

                <a href="https://wordpress.org/support/theme/lemmony/" target="_blank" class="lemmony-dash-link">
                    <div>
                        <div class="lemmony-dash-link-icon">
                            <svg width="34" height="34" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M15.996,30.496c-3.873,0-7.514-1.509-10.253-4.247l0,0l0,0c-5.653-5.653-5.653-14.853,0-20.506 c5.653-5.653,14.852-5.653,20.506,0l0,0c2.739,2.739,4.247,6.38,4.247,10.253s-1.508,7.514-4.247,10.253 S19.87,30.496,15.996,30.496z M7.892,25.515c2.259,1.93,5.101,2.981,8.104,2.981c3.003,0,5.845-1.052,8.104-2.981l-3.911-3.912 c-1.203,0.904-2.66,1.394-4.192,1.394s-2.989-0.489-4.193-1.394L7.892,25.515z M21.603,20.189l3.912,3.911 c1.93-2.259,2.981-5.101,2.981-8.104c0-3.003-1.052-5.845-2.981-8.104l-3.912,3.911c0.904,1.204,1.394,2.661,1.394,4.193 S22.507,18.986,21.603,20.189z M6.478,7.893c-3.968,4.654-3.968,11.553,0,16.207l3.911-3.911c-0.904-1.203-1.393-2.66-1.393-4.192 s0.489-2.989,1.393-4.193L6.478,7.893z M15.996,10.996c-1.335,0-2.591,0.52-3.536,1.464s-1.464,2.2-1.464,3.536 c0,1.335,0.52,2.591,1.464,3.535s2.2,1.465,3.536,1.465c1.335,0,2.591-0.521,3.535-1.465s1.465-2.2,1.465-3.535 c0-1.335-0.521-2.591-1.465-3.536l0,0C18.587,11.516,17.331,10.996,15.996,10.996z M7.893,6.478l3.911,3.911 c1.204-0.904,2.661-1.393,4.193-1.393s2.989,0.489,4.192,1.393L24.1,6.478C19.446,2.51,12.546,2.51,7.893,6.478z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <strong>
                            <?php esc_html_e( 'Support Forum', 'lemmony' ); ?>
                        </strong>
                        <p>
                            <?php esc_html_e( 'Let us know of any issues with the theme', 'lemmony' ); ?>
                        </p>
                    </div>
                </a>

                <a href="https://shufflehound.com/lemmony" target="_blank" class="lemmony-dash-link">
                    <div>
                        <div class="lemmony-dash-link-icon">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 33.5625C14.75 33.5625 12.6406 33.1289 10.6719 32.2617C8.67969 31.418 6.94531 30.2578 5.46875 28.7812C3.99219 27.3047 2.83203 25.5703 1.98828 23.5781C1.12109 21.6094 0.6875 19.5 0.6875 17.25C0.6875 15 1.12109 12.8906 1.98828 10.9219C2.83203 8.92969 3.99219 7.19531 5.46875 5.71875C6.94531 4.24219 8.67969 3.08203 10.6719 2.23828C12.6406 1.37109 14.75 0.9375 17 0.9375C19.25 0.9375 21.3594 1.37109 23.3281 2.23828C25.3203 3.08203 27.0547 4.24219 28.5312 5.71875C30.0078 7.19531 31.168 8.92969 32.0117 10.9219C32.8789 12.8906 33.3125 15 33.3125 17.25C33.3125 19.5 32.8789 21.6094 32.0117 23.5781C31.168 25.5703 30.0078 27.3047 28.5312 28.7812C27.0547 30.2578 25.3203 31.418 23.3281 32.2617C21.3594 33.1289 19.25 33.5625 17 33.5625ZM10.5664 18.375C10.6367 20.3203 10.8711 22.0898 11.2695 23.6836C11.668 25.2773 12.1602 26.6367 12.7461 27.7617C13.3555 28.8867 14.0352 29.7656 14.7852 30.3984C15.5117 31.0078 16.25 31.3125 17 31.3125C17.75 31.3125 18.4883 31.0078 19.2148 30.3984C19.9648 29.7656 20.6328 28.8867 21.2188 27.7617C21.8281 26.6367 22.332 25.2773 22.7305 23.6836C23.1289 22.0898 23.3633 20.3203 23.4336 18.375H10.5664ZM2.97266 18.375C3.08984 19.7109 3.38281 21 3.85156 22.2422C4.32031 23.4609 4.92969 24.5859 5.67969 25.6172C6.45312 26.6484 7.34375 27.5508 8.35156 28.3242C9.38281 29.1211 10.4961 29.7656 11.6914 30.2578C11.1992 29.5781 10.7539 28.8047 10.3555 27.9375C9.95703 27.0703 9.60547 26.1328 9.30078 25.125C9.01953 24.1172 8.79688 23.0508 8.63281 21.9258C8.44531 20.7773 8.33984 19.5938 8.31641 18.375H2.97266ZM25.6836 18.375C25.6602 19.5938 25.5547 20.7773 25.3672 21.9258C25.2031 23.0508 24.9688 24.1172 24.6641 25.125C24.3828 26.1328 24.043 27.0703 23.6445 27.9375C23.2461 28.8047 22.8008 29.5781 22.3086 30.2578C23.5039 29.7656 24.6172 29.1211 25.6484 28.3242C26.6562 27.5273 27.5352 26.625 28.2852 25.6172C29.0586 24.5859 29.6797 23.4609 30.1484 22.2422C30.6172 21 30.9102 19.7109 31.0273 18.375H25.6836ZM25.6836 16.125H31.0273C30.9102 14.7891 30.6172 13.5 30.1484 12.2578C29.6797 11.0391 29.0586 9.91406 28.2852 8.88281C27.5352 7.85156 26.6562 6.94922 25.6484 6.17578C24.6172 5.37891 23.5039 4.73438 22.3086 4.24219C22.8008 4.92188 23.2461 5.69531 23.6445 6.5625C24.043 7.42969 24.3828 8.36719 24.6641 9.375C24.9688 10.3828 25.2031 11.4492 25.3672 12.5742C25.5547 13.7227 25.6602 14.9063 25.6836 16.125ZM10.5664 16.125H23.4688C23.375 14.1797 23.1289 12.4102 22.7305 10.8164C22.332 9.22266 21.8281 7.86328 21.2188 6.73828C20.6328 5.61328 19.9648 4.73438 19.2148 4.10156C18.4883 3.49219 17.75 3.1875 17 3.1875C16.25 3.1875 15.5117 3.49219 14.7852 4.10156C14.0352 4.73438 13.3555 5.61328 12.7461 6.73828C12.1602 7.86328 11.668 9.22266 11.2695 10.8164C10.8711 12.4102 10.6367 14.1797 10.5664 16.125ZM2.97266 16.125H8.31641C8.33984 14.9063 8.44531 13.7227 8.63281 12.5742C8.79688 11.4492 9.01953 10.3828 9.30078 9.375C9.60547 8.36719 9.95703 7.42969 10.3555 6.5625C10.7539 5.69531 11.1992 4.92188 11.6914 4.24219C10.4961 4.73438 9.38281 5.37891 8.35156 6.17578C7.34375 6.94922 6.45312 7.85156 5.67969 8.88281C4.92969 9.91406 4.32031 11.0391 3.85156 12.2578C3.38281 13.5 3.08984 14.7891 2.97266 16.125Z" fill="#191919"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <strong>
                            <?php esc_html_e( 'Main Website', 'lemmony' ); ?>
                        </strong>
                        <p>
                            <?php esc_html_e( 'Explore all of our themes and services', 'lemmony' ); ?>
                        </p>
                    </div>
                </a>
            </div>
            <div class="lemmony-dash-col">
                <div>
                    <h2 class="mt-0">
                        <?php esc_html_e( 'Child themes', 'lemmony' ); ?>
                    </h2>
                    <div class="lemmony-dash-childs">

                        <div class="lemmony-dash-child__item">
                            <div class="lemmony-dash-child__image">
                                <a href="<?php echo esc_url( network_admin_url( 'theme-install.php?theme=lemmony-agency' ) ); ?>" target="_blank">
                                    <img src="<?php echo esc_attr( get_template_directory_uri() . '/assets/media/dashboard-child-agency.png' ); ?>" alt="<?php esc_attr_e( 'Lemmony Agency', 'lemmony' ); ?>" />
                                </a>
                            </div>
                            <div>
                                <h3>
                                    <?php esc_html_e( 'Lemmony Agency', 'lemmony' ); ?>
                                </h3>
                                <p>
                                    <?php esc_html_e( 'Child theme with 25+ patterns, accordion and a slider', 'lemmony' ); ?>
                                </p>
                                <div style="padding-top: 20px;">
                                    <a href="<?php echo esc_url( network_admin_url( 'theme-install.php?theme=lemmony-agency' ) ); ?>" class="lemmony-dash-child__button button-primary button" target="_blank">
                                        Preview
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div>
                    <h2 class="mt-32">
                        <?php esc_html_e( 'Getting started video', 'lemmony' ); ?>
                    </h2>
                    <a href="https://youtu.be/9yYt3QAMHr8" target="_blank" style="display: block; line-height: 1;">
                        <img class="opacity-hover" src="<?php echo esc_url( get_template_directory_uri() . '/assets/media/dashboard-video.png' ); ?>" width="575" style="user-select: none; border-radius: 16px;" />
                    </a>
                </div>


                <?php
                    if( defined( 'LEMMONY_THEME' ) && function_exists( 'lemmony_changelog_tabs' ) ) :
                        lemmony_changelog_tabs();
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>