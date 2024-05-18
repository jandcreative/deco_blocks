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

$type_title = get_field('type_title');
?>

<div <?php echo $anchor; ?> class="<?php echo $class_name; ?>">

<?php if (!empty($title_intro)): ?>

		<?php if ($type_title == 'title_01'): ?>
		<h1>
			<?php echo $title_intro; ?>
		</h1>
		<?php endif; ?>

		<?php if ($type_title == 'title_02'): ?>
		<h2>
			<?php echo $title_intro; ?>
		</h2>
		<?php endif; ?>

		<?php if (!empty($txt_intro)): ?>
			
			<?php echo $txt_intro; ?>
			
		<?php endif; ?>
		
<?php endif; ?>

		</div>
