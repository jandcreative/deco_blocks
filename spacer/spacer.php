<?php
/**
 * Espaciador Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'jda-spacer';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

// ACF Fields
$size = get_field('size');
?>

<section <?php echo $anchor;?>class="<?php echo $class_name;?> alignwide">
    <div class="block-spacer <?php echo $size;?>"></div>

 </section>

