<?php
/**
 * Intro Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'intro';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

// ACF Fields
$title_intro = get_field('title_intro');
$txt_intro = get_field('text_intro');
?>

<div <?php echo $anchor; ?> class="<?php echo $class_name; ?>">

	<?php if (!empty($title_intro)): ?>

		<h2>
			<?php echo $title_intro; ?>
		</h2>

		<?php if (!empty($txt_intro)): ?>
			<?php echo $txt_intro; ?>
		<?php endif; ?>
		
	<?php endif; ?>

		</div>
