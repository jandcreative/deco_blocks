<?php
/**
 * Video Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'video';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
	$class_name .= ' align' . esc_attr($block['align']);
endif;


// ACF Fields
$image_cat = get_field('image_cat_video');
$title = get_field('title_video');
$image_video = get_field('image_video');
$html = get_field('html_video');
?>

<div class="container-<?php echo $class_name; ?> reveal-opacity">
	<img src="<?php echo $image_cat; ?>">
	<h2>
		<?php echo $title; ?>
	</h2>
	<div class="video-thumb">
		<a class="wp-video-popup" href="#"><img src="<?php echo $image_video; ?>"></a>
		<?php echo $html; ?>
	</div>
</div>