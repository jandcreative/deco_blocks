<?php
/**
 * Process Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'process';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
	$class_name .= ' align' . esc_attr($block['align']);
endif;

$title_section = get_field('title_section_process');



$link_process = get_field('button_link_section_process');
$button_process = get_field('button_section_process');
?>
	<div class="list-process" style="color:#fff">

		<?php while (have_rows('list_process')):
			the_row(); ?>

			<div class="item-process">
				<div class="ilustration">
					<img src="<?php the_sub_field('image_process'); ?>">
				</div>
				<div class="content">
					<p><?php the_sub_field('description_process'); ?></p>
				</div>
			</div>

		<?php endwhile; ?>

	</div>

	<?php if (!empty($button_process)): ?>
	<a class="button" href="<?php echo $link_process; ?>">
		<?php echo $button_process; ?>		
	</a>
	<?php endif; ?>