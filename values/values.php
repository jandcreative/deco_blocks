<?php
/**
 * Values Block Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'values';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

if(!empty($block['align'])):
   $class_name .= ' align' . esc_attr($block['align']);
endif;

// ACF Fields

$image_01 = get_field('image_value_01');
$text_01 = get_field('text_value_01');

$image_02 = get_field('image_value_02');
$text_02 = get_field('text_value_02');

$image_03 = get_field('image_value_03');
$text_03 = get_field('text_value_03');

$image_04 = get_field('image_value_04');
$text_04 = get_field('text_value_04');
?>

<section <?php echo $anchor;?> class="<?php echo $class_name;

?>">

	<div class="items-values alignwide">

		<div class="item">
			<img src="<?php echo $image_01;?>">
			<?php echo $text_01;?>
		</div>

		<div class="item">
			<img src="<?php echo $image_02;?>">
			<?php echo $text_02;?>
		</div>

		<div class="item">
			<img src="<?php echo $image_03;?>">
			<?php echo $text_03;?>
		</div>

		<div class="item">
			<img src="<?php echo $image_04;?>">
			<?php echo $text_04;?>
		</div>

	</div>

</section>


