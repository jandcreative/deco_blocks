<?php
/**
 * Banner Destacado Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'imagenes-proyectos';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

// ACF Fields
$image_01 = get_field('img_proyecto_01');
$image_02 = get_field('img_proyecto_02');
$image_03 = get_field('img_proyecto_03');

$alignment = get_field('alignment');
$border = get_field('border');
?>

	<div class="<?php echo $class_name;?>">

		<?php if (!empty($image_01)): ?>
		<div class="item" style="border-radius:<?php echo $border;?>">
			<img src="<?php echo $image_01;?>" style="border-radius:<?php echo $border;?>">
		</div>
		<?php endif; ?>

		<?php if (!empty($image_02)): ?>
		<div class="item" style="border-radius:<?php echo $border;?>">
			<img src="<?php echo $image_02;?>" style="border-radius:<?php echo $border;?>">
		</div>
		<?php endif; ?>

		<?php if (!empty($image_03)): ?>
		<div class="item" style="border-radius:<?php echo $border;?>">
			<img src="<?php echo $image_03;?>" style="border-radius:<?php echo $border;?>">
		</div>
		<?php endif; ?>

	</div>