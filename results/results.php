<?php
/**
 * Results Block Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'brands';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

if(!empty($block['align'])):
   $class_name .= ' align' . esc_attr($block['align']);
endif;

// ACF Fields
/* $clients = get_field('title_clients');
$clutch = get_field('img_clutch'); */
?>


<section <?php echo $anchor;?> id="brands" class="<?php echo $class_name;

?>">


</section>