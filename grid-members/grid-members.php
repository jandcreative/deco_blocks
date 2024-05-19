<?php
/**
 * Grid Members Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'grid-members';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
	$class_name .= ' align' . esc_attr($block['align']);
endif;

?>
	<div class="list-grid-members">
		<?php while (have_rows('list_members_02')): the_row(); ?>
		<div class="item" style="border-radius: 15px">
			<img src="<?php the_sub_field('img_members');?>">
			<div class="content">
				<div class="text">
					<h3><?php the_sub_field('name_members'); ?></h3>
					<p><?php the_sub_field('position_members'); ?></p>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
