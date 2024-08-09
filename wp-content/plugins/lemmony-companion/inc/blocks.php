<?php
/*
 * Generate schema for the Accordion block 
*/
if( !function_exists( 'lemmony_companion_accordion' ) ) :
    function lemmony_companion_accordion( $block_content, $block ) {
        // Get the global FAQs array.
        global $lemmony_companion_faqs;

        // Get the title from the block attributes.
        $title = !empty( $block['attrs']['title'] ) ? $block['attrs']['title'] : '';

        // Get the answer from the block innerHTML, and strip the tags if it's a string.
        $answer = !empty( $block['innerBlocks'][0]['innerHTML'] ) ? $block['innerBlocks'][0]['innerHTML'] : '';
        if( is_string( $answer ) ) :
            $answer = str_replace(array("\n", "\r"), ' ', trim( strip_tags( $answer )));
        endif;

        // Add the question and answer to the FAQs array.
        if( $title && $answer ) :
            $lemmony_companion_faqs[] = array(
                "@type" => "Question",
                "name" => $title,
                "acceptedAnswer" => array(
                    "@type" => "Answer",
                    "text" => $answer
                )
            );
        endif;

        // Return the original block content.
        return $block_content;
    }
    add_filter( 'render_block_lemmony-companion/accordion', 'lemmony_companion_accordion', 10, 2 );
endif;


if( !function_exists( 'lemmony_companion_accordion_schema' ) ) :
    function lemmony_companion_accordion_schema() {
        // Get the global FAQs array.
        global $lemmony_companion_faqs;

        // If there are no FAQs, return.
        if ( empty( $lemmony_companion_faqs ) ) {
            return;
        }

        // Generate the structured data for the FAQPage.
        $structured_data = array(
            "@context" => "https://schema.org",
            "@type" => "FAQPage",
            "mainEntity" => $lemmony_companion_faqs
        );

        // Print the structured data.
        echo '<script type="application/ld+json">' . json_encode( $structured_data ) . '</script>';
    }
    add_action( 'wp_footer', 'lemmony_companion_accordion_schema' );
endif;