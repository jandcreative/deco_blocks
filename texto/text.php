<?php
/**
 * Texto Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'text';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

// ACF Fields
$html_text= get_field('html_txt');
?>

<div <?php echo $anchor; ?> class="<?php echo $class_name; ?>">
		
		<?php echo $html_text; ?>

</div>
