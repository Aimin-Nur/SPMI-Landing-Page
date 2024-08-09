<?php
/**
 * All of the parameters passed to the function where this file is being required are accessible in this scope:
 *
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 */
$textAlign = isset( $attributes['textAlign'] ) ? $attributes['textAlign'] : '';
?>
<p <?php echo wp_kses_data( get_block_wrapper_attributes( [ 'style' => "text-align:{$textAlign};" ] ) ); ?>>
	<?php
		if( get_post_thumbnail_id() ) :
			echo esc_html( get_the_title( get_post_thumbnail_id() ) );
		endif;
	?>
</p>
