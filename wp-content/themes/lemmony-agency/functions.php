<?php
/*
 * Disallow direct access
 */
if( !defined( 'ABSPATH' ) ) {
    die( 'Forbidden.' );
}


/**
 * Global constants for companion plugin
 */
define( 'LEMMONY_CHILD_THEME', true );
define( 'LEMMONY_CHILD_THEME_VERSION', '1.1' );
define( 'LEMMONY_CHILD_THEME_NAME', 'Agency' );


/**
 * Theme setup
 */
if( !function_exists( 'lemmony_agency_setup' ) ) :
    function lemmony_agency_setup() {
        /* Register block categories */
        register_block_pattern_category(
            'lemmony-agency-patterns',
            [ 
                'label' => __( 'Lemmony Agency Patterns', 'lemmony-agency' )
            ]
        );
    }
    add_action( 'init', 'lemmony_agency_setup' );
endif;

function display_audit_reports() {
    // The API endpoint URL
    $api_url = 'http://127.0.0.1:8001/api/laporan/spmi';

    // Make the API request
    $response = wp_remote_get($api_url);

    // Check for errors in the response
    if (is_wp_error($response)) {
        return 'Failed to retrieve data.';
    }

    // Get the body of the response
    $body = wp_remote_retrieve_body($response);

    // Decode the JSON response
    $response_data = json_decode($body, true);

    // Check if the response contains the 'data' field
    if (!isset($response_data['data'])) {
        return 'No data found.';
    }

    // Start building the HTML output
    $output = '<div class="audit-reports">';

    // Loop through each report in the data array
    foreach ($response_data['data'] as $report) {
        $output .= '<div class="audit-report">';
        $output .= '<div>';
        $output .= '<h2>' . esc_html($report['judul']) . '</h2>';
        $output .= '<p>Ditambahkan: ' . esc_html($report['created_at']) . '</p>';
        $output .= '</div>';
        $output .= '<a href="' . esc_url($report['tautan']) . '" class="btn-open" target="_blank">Open</a>';
        $output .= '</div>';
    }

    $output .= '</div>';

    return $output;
}

add_shortcode('audit_reports', 'display_audit_reports');

function display_auditors() {
    // The API endpoint URL
    $api_url = 'http://127.0.0.1:8000/api/auditor/spmi';

    // Make the API request
    $response = wp_remote_get($api_url);

    // Check for errors in the response
    if (is_wp_error($response)) {
        return 'Failed to retrieve data.';
    }

    // Get the body of the response
    $body = wp_remote_retrieve_body($response);

    // Decode the JSON response
    $response_data = json_decode($body, true);

    // Check if the response contains the 'data' field
    if (!isset($response_data['data'])) {
        return 'No data found.';
    }

    // Start building the HTML output
    $output = '<div class="auditors">';

    // Loop through each auditor in the data array
    foreach ($response_data['data'] as $auditor) {
        $output .= '<div class="auditor">';
        $output .= '<img src="http://127.0.0.1:8000/auditors/' . esc_html($auditor['foto']) . '" alt="' . esc_html($auditor['nama']) . '">';
        $output .= '<h3>' . esc_html($auditor['nama']) . '</h3>';
        $output .= '<p>Auditor</p>';
        $output .= '</div>';
    }

    $output .= '</div>';

    return $output;
}

add_shortcode('display_auditors', 'display_auditors');

?>

<style>
    .audit-reports {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .audit-report {
        border-bottom: 1px solid #ddd;
        padding: 20px 0;
        margin: 0 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .audit-report h2 {
        font-size: 38px;
        margin: 0;
    }

    .audit-report p {
        margin: 0;
        padding: 10px 0;
        color: #000000;
    }

    .btn-open {
        width: 70px;
        font-weight: bold;
        display: inline-block;
        padding: 10px 20px;
        background-color: #000;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        text-align: center;
        border-radius: 30px;
        transition: background-color 0.3s ease;
        &:hover {
            background-color: #93E9BE;
            cursor: pointer;
    }

</style>

<style>
    .auditors {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .auditor {
        width: 30%;
        text-align: center;
        margin-bottom: 20px;
    }

    .auditor img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .auditor h3 {
        font-size: 18px;
        margin: 10px 0 5px 0;
    }

    .auditor p {
        color: #777;
        margin: 0;
    }
</style>
