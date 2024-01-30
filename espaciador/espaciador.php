<?php
/**
 * Espaciador Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'espaciador';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

// ACF Fields
$size = get_field('size');
?>

    <div class="block-spacer alignwide <?php echo $size;?>"></div>


