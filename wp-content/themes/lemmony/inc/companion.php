<?php
/*
 * Disallow direct access
 */
if( !defined( 'ABSPATH' ) ) {
    die( 'Forbidden.' );
}


/**
 * Lemmony notice template
 */
if( !function_exists( 'lemmony_notice_template' ) ) :
    function lemmony_notice_template( $type, $title, $description, $button = '', $button2 = '' ) { ?>

        <div class="lemmony-notice lemmony-notice-<?php echo esc_attr( $type ); ?> lemmony-notice-large">
            <div class="lemmony-notice__icon">
                <div class="lemmony-notice__iconbox">
                    <?php if( in_array( $type, [ 'update' ] ) ) : ?>
                        <svg class="lemmony-notice__svg" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.69531 22.356C2.49219 22.356 2.3125 22.2778 2.15625 22.1216C2.01562 21.981 1.94531 21.8091 1.94531 21.606V17.106C1.94531 17.0122 1.96094 16.9185 1.99219 16.8247C2.03906 16.731 2.09375 16.645 2.15625 16.5669C2.17188 16.5513 2.1875 16.5356 2.20312 16.52C2.23438 16.5044 2.26562 16.4888 2.29688 16.4731C2.375 16.4263 2.45312 16.395 2.53125 16.3794C2.625 16.3481 2.71094 16.3403 2.78906 16.356H7.19531C7.39844 16.356 7.57031 16.4341 7.71094 16.5903C7.86719 16.731 7.94531 16.9028 7.94531 17.106C7.94531 17.3091 7.86719 17.4888 7.71094 17.645C7.57031 17.7856 7.39844 17.856 7.19531 17.856H4.24219C4.69531 18.3247 5.17969 18.7466 5.69531 19.1216C6.22656 19.4966 6.78125 19.8169 7.35938 20.0825C7.9375 20.3325 8.54688 20.52 9.1875 20.645C9.82812 20.7856 10.4766 20.856 11.1328 20.856C12.4141 20.856 13.625 20.6138 14.7656 20.1294C15.9062 19.6294 16.8984 18.9575 17.7422 18.1138C18.6016 17.2544 19.2734 16.2622 19.7578 15.1372C20.2578 13.9966 20.5078 12.7778 20.5078 11.481C20.5078 11.2778 20.5781 11.106 20.7188 10.9653C20.8594 10.8091 21.0391 10.731 21.2578 10.731C21.4609 10.731 21.6328 10.8091 21.7734 10.9653C21.9297 11.106 22.0078 11.2778 22.0078 11.481C22.0078 12.981 21.7188 14.3872 21.1406 15.6997C20.5781 17.0278 19.8047 18.1841 18.8203 19.1685C17.8359 20.1528 16.6797 20.9263 15.3516 21.4888C14.0391 22.0669 12.6328 22.356 11.1328 22.356C10.3984 22.356 9.67969 22.2856 8.97656 22.145C8.27344 22.0044 7.59375 21.8013 6.9375 21.5356C6.29688 21.2544 5.67969 20.9185 5.08594 20.5278C4.49219 20.1372 3.94531 19.6841 3.44531 19.1685V21.606C3.44531 21.8091 3.36719 21.981 3.21094 22.1216C3.07031 22.2778 2.89844 22.356 2.69531 22.356ZM1.52344 12.231C1.32031 12.231 1.14062 12.1606 0.984375 12.02C0.84375 11.8638 0.773438 11.6841 0.773438 11.481C0.773438 9.98096 1.0625 8.57471 1.64062 7.26221C2.20312 5.93408 2.97656 4.77783 3.96094 3.79346C4.94531 2.80908 6.10156 2.03564 7.42969 1.47314C8.74219 0.89502 10.1484 0.605957 11.6484 0.605957C12.3828 0.605957 13.1016 0.67627 13.8047 0.816895C14.5078 0.95752 15.1797 1.16846 15.8203 1.44971C16.4766 1.71533 17.1016 2.04346 17.6953 2.43408C18.2891 2.82471 18.8359 3.27783 19.3359 3.79346V1.35596C19.3359 1.15283 19.4062 0.980957 19.5469 0.840332C19.7031 0.684082 19.8828 0.605957 20.0859 0.605957C20.2891 0.605957 20.4609 0.684082 20.6016 0.840332C20.7578 0.980957 20.8359 1.15283 20.8359 1.35596V5.85596C20.8359 5.94971 20.8125 6.04346 20.7656 6.13721C20.7344 6.23096 20.6875 6.31689 20.625 6.39502C20.6094 6.41064 20.5859 6.42627 20.5547 6.44189C20.5391 6.45752 20.5234 6.47314 20.5078 6.48877C20.4141 6.53564 20.3203 6.57471 20.2266 6.60596C20.1484 6.62158 20.0625 6.62158 19.9688 6.60596H15.5859C15.3828 6.60596 15.2031 6.53564 15.0469 6.39502C14.9062 6.23877 14.8359 6.05908 14.8359 5.85596C14.8359 5.65283 14.9062 5.48096 15.0469 5.34033C15.2031 5.18408 15.3828 5.10596 15.5859 5.10596H18.5391C18.0859 4.63721 17.6016 4.21533 17.0859 3.84033C16.5547 3.46533 16 3.15283 15.4219 2.90283C14.8438 2.63721 14.2344 2.44189 13.5938 2.31689C12.9531 2.17627 12.3047 2.10596 11.6484 2.10596C10.3672 2.10596 9.15625 2.35596 8.01562 2.85596C6.875 3.34033 5.875 4.01221 5.01562 4.87158C4.17188 5.71533 3.50781 6.69971 3.02344 7.82471C2.52344 8.96533 2.27344 10.1841 2.27344 11.481C2.27344 11.6841 2.20312 11.8638 2.0625 12.02C1.92188 12.1606 1.74219 12.231 1.52344 12.231Z" fill="#2356DA"/>
                        </svg>
                    <?php elseif( in_array( $type, [ 'import', 'import-done', 'import-unavailable' ] ) ) : ?>
                        <svg class="lemmony-notice__svg" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.3828 22.2388C10.3672 22.2388 10.3438 22.2388 10.3125 22.2388C10.2969 22.2388 10.2812 22.2388 10.2656 22.2388C10.25 22.2388 10.2344 22.2388 10.2188 22.2388C10.2031 22.2388 10.1875 22.231 10.1719 22.2153C9.95312 22.1997 9.73438 22.1606 9.51562 22.0981C9.3125 22.0513 9.11719 21.9731 8.92969 21.8638L2.08594 18.0669C1.60156 17.8013 1.21875 17.4341 0.9375 16.9653C0.65625 16.481 0.515625 15.9653 0.515625 15.4185V6.34814C0.515625 6.30127 0.515625 6.24658 0.515625 6.18408C0.53125 6.12158 0.554688 6.06689 0.585938 6.02002C0.585938 6.00439 0.585938 5.99658 0.585938 5.99658C0.601562 5.99658 0.609375 5.98877 0.609375 5.97314C0.65625 5.89502 0.703125 5.83252 0.75 5.78564C0.8125 5.72314 0.882812 5.67627 0.960938 5.64502L6.53906 3.09033L11.0625 1.00439C11.4844 0.816895 11.9219 0.730957 12.375 0.746582C12.8281 0.746582 13.2578 0.848145 13.6641 1.05127L21.8438 5.15283C21.9219 5.19971 21.9844 5.25439 22.0312 5.31689C22.0938 5.36377 22.1484 5.42627 22.1953 5.50439C22.1953 5.50439 22.1953 5.51221 22.1953 5.52783C22.1953 5.52783 22.2031 5.53564 22.2188 5.55127C22.2344 5.59814 22.2422 5.65283 22.2422 5.71533C22.2578 5.76221 22.2656 5.80908 22.2656 5.85596V15.2778C22.2656 15.8716 22.1016 16.4263 21.7734 16.9419C21.4453 17.4419 21.0078 17.8091 20.4609 18.0435L11.5781 21.981C11.3906 22.0591 11.1953 22.1216 10.9922 22.1685C10.7891 22.2153 10.5859 22.2388 10.3828 22.2388ZM11.0156 11.5513V20.5981L19.875 16.6841C20.1406 16.5591 20.3516 16.3716 20.5078 16.1216C20.6797 15.856 20.7656 15.5747 20.7656 15.2778V7.00439L16.2188 9.13721C16.2188 9.13721 16.2109 9.13721 16.1953 9.13721L11.0156 11.5513ZM2.01562 7.59033V15.4185C2.01562 15.6997 2.08594 15.9575 2.22656 16.1919C2.36719 16.4263 2.55469 16.6138 2.78906 16.7544L9.51562 20.4575V11.5278L2.01562 7.59033ZM2.95312 6.39502L10.2891 10.2388L14.2031 8.41064L6.82031 4.61377L2.95312 6.39502ZM8.55469 3.81689L15.9141 7.61377L19.8047 5.80908L13.0078 2.38721C12.7891 2.29346 12.5625 2.24658 12.3281 2.24658C12.1094 2.23096 11.8984 2.27002 11.6953 2.36377L8.55469 3.81689Z" fill="#191919"/>
                        </svg>
                    <?php elseif( in_array( $type, [ 'warning' ] ) ) : ?>
                        <svg class="lemmony-notice__svg" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16,30.5C8.005,30.5,1.5,23.995,1.5,16S8.005,1.5,16,1.5S30.5,8.005,30.5,16S23.995,30.5,16,30.5z M16,3.5 C9.107,3.5,3.5,9.107,3.5,16S9.107,28.5,16,28.5S28.5,22.893,28.5,16S22.893,3.5,16,3.5z M16.174,23.619c-0.552,0-1-0.447-1-1 v-0.101c0-0.553,0.448-1,1-1s1,0.447,1,1v0.101C17.174,23.172,16.726,23.619,16.174,23.619z M16.174,18.814c-0.552,0-1-0.447-1-1 V8.889c0-0.552,0.448-1,1-1s1,0.448,1,1v8.926C17.174,18.367,16.726,18.814,16.174,18.814z" fill="#da2323" />
                        </svg>
                    <?php elseif( in_array( $type, [ 'review' ] ) ) : ?>
                        <svg class="lemmony-notice__svg" width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.657,29.819c-0.208,0-0.414-0.064-0.588-0.191c-0.294-0.214-0.45-0.571-0.404-0.933l1.085-8.678L1.77,13.633 c-0.249-0.266-0.333-0.646-0.221-0.993c0.113-0.346,0.405-0.604,0.763-0.673l8.589-1.65l4.224-7.659 c0.352-0.638,1.399-0.638,1.751,0l4.224,7.659l8.589,1.65c0.358,0.069,0.65,0.327,0.763,0.673c0.112,0.347,0.027,0.727-0.222,0.993 l-5.979,6.383l1.085,8.679c0.045,0.361-0.109,0.719-0.404,0.933c-0.294,0.216-0.682,0.252-1.013,0.097L16,26.011l-7.918,3.714 C7.946,29.788,7.801,29.819,7.657,29.819z M4.469,13.589l5.061,5.403c0.203,0.217,0.299,0.513,0.262,0.808l-0.918,7.344 l6.701-3.143c0.27-0.127,0.58-0.127,0.85,0l6.701,3.143L22.208,19.8c-0.037-0.295,0.06-0.591,0.263-0.808l5.06-5.403l-7.269-1.396 c-0.292-0.056-0.544-0.239-0.688-0.499L16,5.212l-3.575,6.482c-0.143,0.26-0.395,0.443-0.687,0.499L4.469,13.589z"/>
                        </svg>
                    <?php else : ?>
                        <svg class="lemmony-notice__svg" width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.9453 32.457H9.05469C7.90625 32.457 6.82812 32.2461 5.82031 31.8242C4.78906 31.3789 3.88672 30.7812 3.11328 30.0312C2.36328 29.2578 1.77734 28.3672 1.35547 27.3594C0.910156 26.3281 0.6875 25.2383 0.6875 24.0898C0.6875 23.7852 0.792969 23.5273 1.00391 23.3164C1.23828 23.082 1.50781 22.9648 1.8125 22.9648C2.11719 22.9648 2.375 23.082 2.58594 23.3164C2.82031 23.5273 2.9375 23.7852 2.9375 24.0898C2.9375 25.7773 3.53516 27.2188 4.73047 28.4141C5.92578 29.6094 7.36719 30.207 9.05469 30.207H24.9453C26.6328 30.207 28.0742 29.6094 29.2695 28.4141C30.4648 27.2188 31.0625 25.7773 31.0625 24.0898C31.0625 23.7852 31.168 23.5273 31.3789 23.3164C31.6133 23.082 31.8828 22.9648 32.1875 22.9648C32.4922 22.9648 32.75 23.082 32.9609 23.3164C33.1953 23.5273 33.3125 23.7852 33.3125 24.0898C33.3125 25.2383 33.0898 26.3281 32.6445 27.3594C32.1992 28.3672 31.6016 29.2578 30.8516 30.0312C30.1016 30.7812 29.2109 31.3789 28.1797 31.8242C27.1719 32.2461 26.0938 32.457 24.9453 32.457ZM17 22.543C16.8594 22.543 16.7188 22.5195 16.5781 22.4727C16.4609 22.4023 16.3438 22.3203 16.2266 22.2266C16.2266 22.2031 16.2148 22.1914 16.1914 22.1914L9.44141 15.4414C9.23047 15.2305 9.125 14.9727 9.125 14.668C9.125 14.3398 9.23047 14.0703 9.44141 13.8594C9.67578 13.6484 9.94531 13.543 10.25 13.543C10.5547 13.543 10.8242 13.6484 11.0586 13.8594L15.875 18.6758V1.16797C15.875 0.839844 15.9805 0.570312 16.1914 0.359375C16.4258 0.148438 16.6953 0.0429688 17 0.0429688C17.3047 0.0429688 17.5625 0.148438 17.7734 0.359375C18.0078 0.570312 18.125 0.839844 18.125 1.16797V18.6758L22.9414 13.8594C23.1758 13.6484 23.4453 13.543 23.75 13.543C24.0547 13.543 24.3242 13.6484 24.5586 13.8594C24.7695 14.0703 24.875 14.3398 24.875 14.668C24.875 14.9727 24.7695 15.2305 24.5586 15.4414L17.8086 22.1914C17.7852 22.1914 17.7734 22.2031 17.7734 22.2266C17.6562 22.3203 17.5273 22.4023 17.3867 22.4727C17.2695 22.5195 17.1406 22.543 17 22.543Z" fill="#191919"></path>
                        </svg>
                    <?php endif; ?>


                    <?php if( in_array( $type, [ 'done', 'import-done' ] ) ) : ?>
                        <svg class="lemmony-notice__svg-small" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 19.625C8.71094 19.625 7.49349 19.3776 6.34766 18.8828C5.21484 18.388 4.22526 17.7174 3.37891 16.8711C2.53255 16.0247 1.86198 15.0352 1.36719 13.9023C0.872396 12.7565 0.625 11.5391 0.625 10.25C0.625 8.96094 0.872396 7.74349 1.36719 6.59766C1.86198 5.46484 2.53255 4.47526 3.37891 3.62891C4.22526 2.78255 5.21484 2.11198 6.34766 1.61719C7.49349 1.1224 8.71094 0.875 10 0.875C11.2891 0.875 12.5065 1.1224 13.6523 1.61719C14.7852 2.11198 15.7747 2.78255 16.6211 3.62891C17.4674 4.47526 18.138 5.46484 18.6328 6.59766C19.1276 7.74349 19.375 8.96094 19.375 10.25C19.375 11.5391 19.1276 12.7565 18.6328 13.9023C18.138 15.0352 17.4674 16.0247 16.6211 16.8711C15.7747 17.7174 14.7852 18.388 13.6523 18.8828C12.5065 19.3776 11.2891 19.625 10 19.625ZM10 2.75C8.97135 2.75 8.0013 2.94531 7.08984 3.33594C6.17839 3.72656 5.3776 4.26693 4.6875 4.95703C4.01042 5.63411 3.47656 6.42839 3.08594 7.33984C2.69531 8.2513 2.5 9.22135 2.5 10.25C2.5 11.2786 2.69531 12.2487 3.08594 13.1602C3.47656 14.0716 4.01042 14.8724 4.6875 15.5625C5.3776 16.2396 6.17839 16.7734 7.08984 17.1641C8.0013 17.5547 8.97135 17.75 10 17.75C11.0286 17.75 11.9987 17.5547 12.9102 17.1641C13.8216 16.7734 14.6159 16.2396 15.293 15.5625C15.9831 14.8724 16.5234 14.0716 16.9141 13.1602C17.3047 12.2487 17.5 11.2786 17.5 10.25C17.5 9.22135 17.3047 8.2513 16.9141 7.33984C16.5234 6.42839 15.9831 5.63411 15.293 4.95703C14.6159 4.26693 13.8216 3.72656 12.9102 3.33594C11.9987 2.94531 11.0286 2.75 10 2.75ZM8.80859 13.5703C8.67839 13.5703 8.55469 13.5508 8.4375 13.5117C8.33333 13.4596 8.23568 13.388 8.14453 13.2969L5.76172 10.9141C5.57943 10.7318 5.48828 10.5104 5.48828 10.25C5.48828 9.98958 5.57943 9.76823 5.76172 9.58594C5.94401 9.40365 6.15885 9.3125 6.40625 9.3125C6.66667 9.3125 6.89453 9.40365 7.08984 9.58594L8.80859 11.3047L12.9102 7.20312C13.1055 7.02083 13.3268 6.92969 13.5742 6.92969C13.8346 6.92969 14.056 7.02083 14.2383 7.20312C14.4206 7.38542 14.5117 7.60677 14.5117 7.86719C14.5117 8.1276 14.4206 8.34896 14.2383 8.53125L9.47266 13.2969C9.38151 13.388 9.27734 13.4596 9.16016 13.5117C9.04297 13.5508 8.92578 13.5703 8.80859 13.5703Z" fill="#06A459"/>
                        </svg>
                    <?php endif; ?>
                </div>
            </div>
            <div class="lemmony-notice__content">
                <h3 class="lemmony-notice__title">
                    <?php echo esc_html( $title ); ?>
                </h3>

                <p class="lemmony-notice__description">
                    <?php echo wp_kses_post( $description ); ?>
                </p>

                <?php if( $button ) : ?>
                    <div class="lemmony-notice__buttons">
                        <?php if( in_array( $type, [ 'update' ] ) ) : ?>
                            <a href="<?php echo esc_url( admin_url( 'update-core.php' ) ); ?>" class="lemmony-notice__button button button-primary">
                                <?php echo esc_html( $button ); ?>
                            </a>
                        <?php elseif( in_array( $type, [ 'import' ] ) ) : ?>
                            <button class="lemmony-notice__button lemmony-import-button button button-primary" data-step1="<?php esc_attr_e( 'Importing...', 'lemmony' ); ?>" data-step2="<?php esc_attr_e( 'Done!', 'lemmony' ); ?>"  data-link="<?php echo esc_url( admin_url( 'admin.php?page=lemmony' ) ); ?>">
                                <?php echo esc_html( $button ); ?>
                            </button>
                        <?php elseif( in_array( $type, [ 'import-unavailable' ] ) ) : ?>
                            <button class="lemmony-notice__button button button-primary">
                                <?php echo esc_html( $button ); ?>
                            </button>
                        <?php elseif( in_array( $type, [ 'review' ] ) ) : ?>
                            <a href="https://wordpress.org/support/theme/lemmony/reviews/" class="lemmony-notice__button button button-primary" target="_blank">
                                <?php echo esc_html( $button ); ?>
                            </a>
                            <button class="lemmony-notice__button button button-secondary lemmony-review-dismiss">
                                <?php echo esc_html( $button2 ); ?>
                            </button>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if( in_array( $type, [ 'import-unavailable' ] ) ) : ?>
                    <div class="lemmony-notice__buttons-text">
                        <span>
                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.39062 19.606C8.10156 19.606 6.88411 19.3586 5.73828 18.8638C4.60547 18.369 3.61589 17.6984 2.76953 16.8521C1.92318 16.0057 1.2526 15.0161 0.757812 13.8833C0.263021 12.7375 0.015625 11.52 0.015625 10.231C0.015625 8.94189 0.263021 7.72445 0.757812 6.57861C1.2526 5.4458 1.92318 4.45622 2.76953 3.60986C3.61589 2.76351 4.60547 2.09294 5.73828 1.59814C6.88411 1.10335 8.10156 0.855957 9.39062 0.855957C10.6797 0.855957 11.8971 1.10335 13.043 1.59814C14.1758 2.09294 15.1654 2.76351 16.0117 3.60986C16.8581 4.45622 17.5286 5.4458 18.0234 6.57861C18.5182 7.72445 18.7656 8.94189 18.7656 10.231C18.7656 11.52 18.5182 12.7375 18.0234 13.8833C17.5286 15.0161 16.8581 16.0057 16.0117 16.8521C15.1654 17.6984 14.1758 18.369 13.043 18.8638C11.8971 19.3586 10.6797 19.606 9.39062 19.606ZM9.39062 2.73096C8.36198 2.73096 7.39193 2.92627 6.48047 3.31689C5.56901 3.70752 4.76823 4.24788 4.07812 4.93799C3.40104 5.61507 2.86719 6.40934 2.47656 7.3208C2.08594 8.23226 1.89062 9.20231 1.89062 10.231C1.89062 11.2596 2.08594 12.2297 2.47656 13.1411C2.86719 14.0526 3.40104 14.8534 4.07812 15.5435C4.76823 16.2205 5.56901 16.7544 6.48047 17.145C7.39193 17.5356 8.36198 17.731 9.39062 17.731C10.4193 17.731 11.3893 17.5356 12.3008 17.145C13.2122 16.7544 14.0065 16.2205 14.6836 15.5435C15.3737 14.8534 15.9141 14.0526 16.3047 13.1411C16.6953 12.2297 16.8906 11.2596 16.8906 10.231C16.8906 9.20231 16.6953 8.23226 16.3047 7.3208C15.9141 6.40934 15.3737 5.61507 14.6836 4.93799C14.0065 4.24788 13.2122 3.70752 12.3008 3.31689C11.3893 2.92627 10.4193 2.73096 9.39062 2.73096ZM9.50781 15.3091C9.2474 15.3091 9.02604 15.2179 8.84375 15.0356C8.66146 14.8534 8.57031 14.632 8.57031 14.3716V14.313C8.57031 14.0526 8.66146 13.8312 8.84375 13.6489C9.02604 13.4666 9.2474 13.3755 9.50781 13.3755C9.75521 13.3755 9.97005 13.4666 10.1523 13.6489C10.3477 13.8312 10.4453 14.0526 10.4453 14.313V14.3716C10.4453 14.632 10.3477 14.8534 10.1523 15.0356C9.97005 15.2179 9.75521 15.3091 9.50781 15.3091ZM9.50781 12.3013C9.2474 12.3013 9.02604 12.2101 8.84375 12.0278C8.66146 11.8455 8.57031 11.6242 8.57031 11.3638V5.77783C8.57031 5.53044 8.66146 5.31559 8.84375 5.1333C9.02604 4.93799 9.2474 4.84033 9.50781 4.84033C9.75521 4.84033 9.97005 4.93799 10.1523 5.1333C10.3477 5.31559 10.4453 5.53044 10.4453 5.77783V11.3638C10.4453 11.6242 10.3477 11.8455 10.1523 12.0278C9.97005 12.2101 9.75521 12.3013 9.50781 12.3013Z" fill="#191919"/>
                            </svg>
                        </span>

                        <strong><?php echo esc_html_e( 'Install', 'lemmony' ); ?> <u><?php echo esc_html_e( 'Lemmony Companion', 'lemmony' ); ?></u> <?php echo esc_html_e( 'to import', 'lemmony' ); ?></strong>
                    </div>
                <?php endif; ?>

                <?php if( in_array( $type, [ 'import-done' ] ) ) : ?>
                    <div class="lemmony-notice__buttons-text">
                        <button class="lemmony-import-reset" data-link="<?php echo esc_url( admin_url( 'admin.php?page=lemmony' ) ); ?>">
                            <?php echo esc_html_e( 'Reset import', 'lemmony' ); ?>
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    <?php }
endif;


/**
 * Lemmony companion plugin installation notice
 */
function lemmony_companion_notice() {
    if( !current_user_can( 'activate_plugins' ) ) :
        return;
    endif;

    $page = isset( $_GET['page'] ) ? $_GET['page'] : '';
    if( get_user_meta( get_current_user_id(), 'lemmony-notice-closed', 1 ) == LEMMONY_THEME_VERSION && $page != 'lemmony' ) : 
        return;
    endif;

    $installed = 0;
    $plugin = 'lemmony-companion/lemmony-companion.php';
    if( !is_plugin_active( $plugin ) ) :
        if( !file_exists( WP_PLUGIN_DIR . '/' . $plugin ) ) :
            $installed = 0;
            $step0 = __( 'Install', 'lemmony' );
            $step1 = __( 'Installing...', 'lemmony' );
            $step2 = __( 'Installed!', 'lemmony' );
        else :
            $installed = 1;
            $step0 = __( 'Activate', 'lemmony' );
            $step1 = __( 'Activating...', 'lemmony' );
            $step2 = __( 'Activated!', 'lemmony' );
        endif;

        $plugin_url = 'plugin-install.php?s=lemmony+companion&tab=search&type=term';
        $plugin_url = is_multisite() ? network_admin_url( $plugin_url ) : admin_url( $plugin_url );
        ?>
            <div class="lemmony-notice lemmony-notice-install <?php echo $page == 'lemmony' ? 'lemmony-notice-large ' : ''; ?>notice notice-success is-dismissible">
                <?php if( $page == 'lemmony' ) : ?>
                    <div class="lemmony-notice__icon">
                        <div class="lemmony-notice__iconbox">
                            <svg class="lemmony-notice__svg" width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.9453 32.457H9.05469C7.90625 32.457 6.82812 32.2461 5.82031 31.8242C4.78906 31.3789 3.88672 30.7812 3.11328 30.0312C2.36328 29.2578 1.77734 28.3672 1.35547 27.3594C0.910156 26.3281 0.6875 25.2383 0.6875 24.0898C0.6875 23.7852 0.792969 23.5273 1.00391 23.3164C1.23828 23.082 1.50781 22.9648 1.8125 22.9648C2.11719 22.9648 2.375 23.082 2.58594 23.3164C2.82031 23.5273 2.9375 23.7852 2.9375 24.0898C2.9375 25.7773 3.53516 27.2188 4.73047 28.4141C5.92578 29.6094 7.36719 30.207 9.05469 30.207H24.9453C26.6328 30.207 28.0742 29.6094 29.2695 28.4141C30.4648 27.2188 31.0625 25.7773 31.0625 24.0898C31.0625 23.7852 31.168 23.5273 31.3789 23.3164C31.6133 23.082 31.8828 22.9648 32.1875 22.9648C32.4922 22.9648 32.75 23.082 32.9609 23.3164C33.1953 23.5273 33.3125 23.7852 33.3125 24.0898C33.3125 25.2383 33.0898 26.3281 32.6445 27.3594C32.1992 28.3672 31.6016 29.2578 30.8516 30.0312C30.1016 30.7812 29.2109 31.3789 28.1797 31.8242C27.1719 32.2461 26.0938 32.457 24.9453 32.457ZM17 22.543C16.8594 22.543 16.7188 22.5195 16.5781 22.4727C16.4609 22.4023 16.3438 22.3203 16.2266 22.2266C16.2266 22.2031 16.2148 22.1914 16.1914 22.1914L9.44141 15.4414C9.23047 15.2305 9.125 14.9727 9.125 14.668C9.125 14.3398 9.23047 14.0703 9.44141 13.8594C9.67578 13.6484 9.94531 13.543 10.25 13.543C10.5547 13.543 10.8242 13.6484 11.0586 13.8594L15.875 18.6758V1.16797C15.875 0.839844 15.9805 0.570312 16.1914 0.359375C16.4258 0.148438 16.6953 0.0429688 17 0.0429688C17.3047 0.0429688 17.5625 0.148438 17.7734 0.359375C18.0078 0.570312 18.125 0.839844 18.125 1.16797V18.6758L22.9414 13.8594C23.1758 13.6484 23.4453 13.543 23.75 13.543C24.0547 13.543 24.3242 13.6484 24.5586 13.8594C24.7695 14.0703 24.875 14.3398 24.875 14.668C24.875 14.9727 24.7695 15.2305 24.5586 15.4414L17.8086 22.1914C17.7852 22.1914 17.7734 22.2031 17.7734 22.2266C17.6562 22.3203 17.5273 22.4023 17.3867 22.4727C17.2695 22.5195 17.1406 22.543 17 22.543Z" fill="#191919"/>
                            </svg>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="lemmony-notice__content">
                    <h3 class="lemmony-notice__title">
                        <?php esc_html_e( 'Lemmony Theme Almost Ready!', 'lemmony' ); ?>
                    </h3>
                
                    <p class="lemmony-notice__description">
                        <?php echo esc_html( $step0 ); ?> <?php esc_html_e( 'the Lemmony Companion plugin to get most of the theme.', 'lemmony' ); ?>
                        <br />
                        <?php esc_html_e( 'It includes custom blocks and other essential features.', 'lemmony' ); ?>
                    </p>

                    <div class="lemmony-notice__buttons">
                        <button class="lemmony-notice__button lemmony-install-button button button-primary" data-slug="lemmony-companion" aria-label="Lemmony Companion now" data-name="Lemmony Companion" data-step1="<?php echo esc_attr( $step1 ); ?>" data-step2="<?php echo esc_attr( $step2 ); ?>" data-link="<?php echo esc_url( admin_url( 'admin.php?page=lemmony' ) ); ?>">
                            <?php echo esc_html( $step0 ); ?> <?php esc_html_e( 'Now', 'lemmony' ); ?>
                        </button>
                    </div>

                    <div class="lemmony-notice__manual">
                        <h4>
                            <?php
                                if( !$installed ) :
                                    esc_html_e( 'Please install the plugin manually:', 'lemmony' );
                                else :
                                    esc_html_e( 'Please activate the plugin manually:', 'lemmony' );
                                endif;
                            ?>
                        </h4>
                        <div>
                            1. <?php esc_html_e( 'Go to', 'lemmony' ); ?> <strong><?php esc_html_e( 'Plugins > Add New', 'lemmony' ); ?></strong>,
                            <?php esc_html_e( 'search for', 'lemmony' ); ?> “<strong><a href="<?php echo esc_url( $plugin_url ); ?>" target="_blank"><?php esc_html_e( 'Lemmony Companion', 'lemmony' ); ?></a></strong>”
                            <?php if( !$installed ) : ?>
                                <?php esc_html_e( 'and click on', 'lemmony' ); ?> “<strong><?php esc_html_e( 'Install Now', 'lemmony' ); ?></strong>“
                            <?php endif; ?>
                        </div>
                        <div>
                            2. <?php echo !$installed ? esc_html__( 'After installation is done click on', 'lemmony' ) : esc_html_e( 'Then click on', 'lemmony' ); ?>
                            “<strong><?php esc_html_e( 'Activate', 'lemmony' ); ?></strong>”
                        </div>
                    </div>
                </div>
            </div>
        <?php 
    endif;
}
add_action( 'admin_notices', 'lemmony_companion_notice' );


/**
 * Lemmony companion notice dismiss functionality
 */
add_action( 'wp_ajax_lemmony_companion_notice_dismiss', 'lemmony_companion_notice_dismiss' );
function lemmony_companion_notice_dismiss() {
    if( !current_user_can( 'activate_plugins' ) ) :
        return;
    endif;

	update_user_meta( get_current_user_id(), 'lemmony-notice-closed', LEMMONY_THEME_VERSION );
}


/**
 * Lemmony review notice dismiss functionality
 */
add_action( 'wp_ajax_lemmony_review_notice_dismiss', 'lemmony_review_notice_dismiss' );
function lemmony_review_notice_dismiss() {
    if( !current_user_can( 'activate_plugins' ) ) :
        return;
    endif;

    update_option( 'lemmony_review_notice_closed', 1 );
}



/**
 * Lemmony companion plugin ajax installation/activation functionality
 */
add_action( 'wp_ajax_lemmony_companion_install', 'lemmony_companion_install' );
function lemmony_companion_install() {
    if( !current_user_can( 'activate_plugins' ) ) :
        return;
    endif;

    $plugin = 'lemmony-companion/lemmony-companion.php';
    if( !is_plugin_active( $plugin ) ) :
        // Install plugin
        if( !file_exists( WP_PLUGIN_DIR . '/' . $plugin ) ) :
            require ABSPATH . 'wp-admin/includes/plugin-install.php';
            require ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';

            $api = plugins_api( 'plugin_information', array(
                'slug' => 'lemmony-companion',
                'fields' => array(
                    'short_description' => false,
                    'sections' => false,
                    'requires' => false,
                    'rating' => false,
                    'ratings' => false,
                    'downloaded' => false,
                    'last_updated' => false,
                    'added' => false,
                    'tags' => false,
                    'compatibility' => false,
                    'homepage' => false,
                    'donate_link' => false,
                ),
            ));

            class Lemmony_Quiet_Skin extends \WP_Upgrader_Skin {
                public function feedback( $string, ...$args ) {
                    // No output needed
                }
            }

            $upgrader = new \Plugin_Upgrader( new Lemmony_Quiet_Skin() );
            $upgrader->install( $api->download_link );
        endif;

        // Activate plugin
        activate_plugin( $plugin );
    endif;

    echo json_encode( [ 'done' ] );
    die;
}


/**
 * Lemmony import demo content
 */
if( !function_exists( 'lemmony_import_content' ) ) :
    function lemmony_import_content() {
        $patterns_dir = get_template_directory() . '/patterns';
        $assets_uri = get_template_directory() . '/assets/media/content';

        // Posts
        $posts = [
            [
                'title' => 'Is Getting a Dog The First Step To Parenthood?',
                'content' => $patterns_dir . '/post-content.php',
                'excerpt' => 'Hear me out, I’m not crazy. Well a bit but that’s not the point',
                'category' => 'Hacks',
                'tag' => 'Lemmony', 
                'featured_image' => $assets_uri . '/blog1.jpg',
                'featured_title' => 'Image by Living Together at StockSnap',
            ],
            [
                'title' => 'What You Should Know When Making a Showcase For Your Products',
                'content' => $patterns_dir . '/post-content.php',
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
                'title' => 'Talking to Inanimate Objects Made Me a Better Designer',
                'content' => $patterns_dir . '/post-content.php',
                'excerpt' => 'Hear me out, I’m not crazy. Well a bit but that’s not the point',
                'category' => 'Hacks',
                'tag' => 'Lemmony',
                'featured_image' => $assets_uri . '/blog3.jpg',
                'featured_title' => 'Image by Togertoer at Pxhere',
            ],
            [
                'title' => 'How to Stay Productive When Working From Home',
                'content' => $patterns_dir . '/post-content.php',
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
                'title' => 'Is Design Becoming Too Minimalistic in 2023?',
                'content' => $patterns_dir . '/post-content.php',
                'excerpt' => 'Hear me out, I’m not crazy. Well a bit but that’s not the point',
                'category' => 'News',
                'tag' => 'Lemmony',
                'featured_image' => $assets_uri . '/blog5.jpg',
                'featured_title' => 'Image by Togertoer at Pxhere',
            ],
            [
                'title' => 'How Smartphones Have Influenced Our Way Of Thinking',
                'content' => $patterns_dir . '/post-content.php',
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
                'content' => $patterns_dir . '/pages-about.php',
                'type' => 'page', 
                'meta' => [
                    '_wp_page_template' => 'page-without-title'
                ]
            ],
            [
                'title' => 'Contact Us',
                'content' => $patterns_dir . '/pages-contacts.php',
                'type' => 'page',
                'meta' => [
                    '_wp_page_template' => 'page-without-title'
                ]
            ],
            [
                'title' => 'Gallery',
                'content' => $patterns_dir . '/pages-gallery.php',
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
            ]
        ];
        $pages = array_reverse( $pages );
        $posts = array_merge( $posts, $pages);

        return $posts;
    }
endif;


/**
 * Lemmony import
 */
add_action( 'wp_ajax_lemmony_import', 'lemmony_import' );
function lemmony_import() {
    if( !current_user_can( 'activate_plugins' ) ) :
        return;
    endif;

    // Get content
    $theme = wp_get_theme();
    $theme_name = trim( str_replace( 'lemmony', '', strtolower( $theme->Name ) ) );
    if( is_child_theme() && $theme_name == 'agency' && function_exists( 'lemmony_import_content_agency' ) ) :
        $posts = lemmony_import_content_agency();
    else :
        $posts = lemmony_import_content();
    endif;

    // Do import
    if( function_exists( 'lemmony_companion_import' ) ) :
        return lemmony_companion_import( $posts );
    endif;
}


/**
 * Lemmony import reset
 */
add_action( 'wp_ajax_lemmony_import_reset', 'lemmony_import_reset' );
function lemmony_import_reset() {
    if( !current_user_can( 'activate_plugins' ) ) :
        return;
    endif;

    $name = defined( 'LEMMONY_CHILD_THEME_NAME' ) ? 'lemmony_' . strtolower( LEMMONY_CHILD_THEME_NAME ) . '_import' : 'lemmony_import';
	delete_option( $name );

    echo json_encode( [ 'done' ] );
    die;
}


/**
 * Lemmony install date
 */
if( !function_exists( 'lemmony_set_install_date' ) ) :
    function lemmony_set_install_date() {
        $install_date = get_option( 'lemmony_install_date' );
        if( !$install_date ) :
            update_option( 'lemmony_install_date', current_time( 'timestamp' ) );
        endif;
    }
    add_action('after_switch_theme', 'lemmony_set_install_date');
endif;


/**
 * Lemmony dashobard page under appearance (if companion not activated)
 */
if( !function_exists( 'lemmony_appearance_page' ) ) :
    function lemmony_appearance_page() {
        $plugin = 'lemmony-companion/lemmony-companion.php';
        if( !is_plugin_active( $plugin ) ) :
            add_theme_page( 'Lemmony', 'Lemmony', 'manage_options', 'lemmony', 'lemmony_appearance_content' );
        endif;
    }
    add_action( 'admin_menu', 'lemmony_appearance_page' );
endif;

if( !function_exists( 'lemmony_appearance_content' ) ) :
    function lemmony_appearance_content( $force = 0 ) {
        if( !defined( 'LEMMONY_COMPANION' ) || $force ) :
            // Set install date if needed
            $install_date = get_option( 'lemmony_install_date' );
            if( !$install_date ) :
                update_option( 'lemmony_install_date', current_time( 'timestamp' ) );
            endif;

            // Get dashboard content
            get_template_part( 'inc/dashboard' );
        endif;
    }
endif;


/**
 * Lemmony changelog tabs
 */
function lemmony_changelog_tabs() {
    $tabs = [
        [
            'name' => 'Lemmony',
            'slug' => 'lemmony',
            'path' => get_template_directory().'/readme.txt'
        ]
    ];

    if( is_child_theme() ) :
        $theme = wp_get_theme();
        $tabs[] = [
            'name' => $theme->get( 'Name' ),
            'slug' => $theme->get( 'TextDomain' ),
            'path' => get_stylesheet_directory().'/readme.txt'
        ];
    endif;

    if( defined( 'LEMMONY_COMPANION' ) ) :
        $theme = wp_get_theme();
        $tabs[] = [
            'name' => 'Companion',
            'slug' => 'companion',
            'path' => WP_PLUGIN_DIR . '/lemmony-companion/readme.txt'
        ];
    endif;
?>

    <div>
        <div class="lemmony-tabs mt-32">
            <?php foreach( $tabs as $tab ) : ?>
                <span class="<?php echo $tab['slug'] == 'lemmony' ? 'active' : ''; ?>" data-type="<?php echo esc_attr( $tab['slug'] ); ?>">
                    <?php echo esc_html( $tab['name'] ); ?>
                </span>
            <?php endforeach; ?>
        </div>

        <div class="lemmony-tabs-contents">
            <?php foreach( $tabs as $tab ) : ?>
                <div class="lemmony-tabs-content <?php echo $tab['slug'] == 'lemmony' ? 'active' : ''; ?>" data-type="<?php echo esc_attr( $tab['slug'] ); ?>">
                    <?php lemmony_changelog( $tab['path'] ); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php
}


/**
 * Lemmony changelog
 */
function lemmony_changelog( $readme_path ) {
    $readme_path = $readme_path ? $readme_path : get_template_directory().'/readme.txt';
    if( file_exists( $readme_path ) ) :
        $readme = file_get_contents( $readme_path);

        $version = 0;
        $changelog = 0;
        $done = 0;

        foreach( explode("\n", $readme ) as $item ) : $item = trim( $item );
            if( $changelog && $item && $done < 4 ) :
                // Version
                if( strpos( $item, '= ') !== false ) :
                    $version = trim( str_replace( '= ', '', $item ) );
                    $version = explode( ' ', $version );
                    $version = isset( $version[0] ) ? $version[0] : '';

                    if( !$done ) :
                        echo '<h2 class="mt-32">' . esc_html__( 'Latest update', 'lemmony' ) . ' <u>' . esc_html( $version ) . '</u></h2>';     
                    elseif( $done < 3 ) :
                        echo '<h2 class="mt-32">' . esc_html__( 'Previous update', 'lemmony' ) . ' <u>' . esc_html( $version ) . '</u></h2>';
                    endif;

                    $done++;
                endif;


                // Show changelog
                if( strpos( $item, '* ') !== false && strpos( $item, '-') !== false ) :
                    $version_data = explode( ' - ', str_replace( '* ', '', $item ) );
                    $change_type = isset( $version_data[0] ) ? $version_data[0] : '';
                    $description = isset( $version_data[1] ) ? $version_data[1] : '';
                    if( $change_type && $description ) :
                ?>
                    <p>
                        <strong><u><?php echo esc_html( $change_type ); ?></u></strong> <?php echo esc_html( $description ); ?>
                    </p>
                <?php endif; endif;
            endif;

            if( $item == '== Changelog ==' ) :
                $changelog = 1;
            endif;
        endforeach;

        unset( $readme );
    endif;
}