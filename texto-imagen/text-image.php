<?php
/**
 * Texto + Imagen Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'text-img';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

// ACF Fields
$html_text_img= get_field('text_txt_img');
$img_text_img = get_field('image_txt_img');

// Grupos
$options_text_img = get_field('options_text_img');

?>

<div <?php echo $anchor; ?> class="<?php echo $class_name; ?> <?php echo $options_text_img['alignment_text_img']; ?>">
		
	<div class="box-text <?php echo $options_text_img['order_text_img'];?>" style="padding:<?php echo $options_text_img['padding_text_img'];?>">
		<?php echo $html_text_img; ?>
	</div>

	<?php if (!empty($img_text_img)): ?>

	<div class="box-img">

		<img src="<?php echo $img_text_img; ?>">

	</div>

	<?php endif; ?>

	</div>
