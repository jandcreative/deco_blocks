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
?>
	<div class="list-<?php echo $class_name; ?>">

		<?php while (have_rows('list_members')): the_row(); ?>
		
		<div class="item" style="border-radius: 15px">
			<img src="<?php the_sub_field('img_member'); ?>">
			<div class="content">
				<div class="text">
					<h3><?php the_sub_field('name_member'); ?></h3>
					<p><?php the_sub_field('position_member'); ?></p>
				</div>
			</div>
		</div>

		<?php endwhile; ?>

	</div>
