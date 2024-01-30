<?php
/**
 * Form Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'form';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
	$class_name .= ' align' . esc_attr($block['align']);
endif;

// ACF Fields
$color_banner = get_field('color_banner_form');

// Grupos
$content = get_field('contenido_texto');
$content_form = get_field('contenido_form');
?>

	<div class="form" style="background-color:<?php echo $color_banner; ?>">

		<div class="box-content">	
			<h2><?php echo $content['title_form'];?></h2>
			<p><?php echo $content['text_form'];?></p>
			<img src="<?php echo $content['image_form'];?>">
		</div>

		<?php if ($content_form): ?>

		<div class="box-form">
				<?php echo $content_form['form'];?>
		</div>

		<?php endif; ?>

	</div>



