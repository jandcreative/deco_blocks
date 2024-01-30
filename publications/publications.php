<?php
/**
 * Publications Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'publications';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
	$class_name .= ' align' . esc_attr($block['align']);
endif;
// ACF Fields
$title_publications = get_field('title_publications');
$cite_publications = get_field('cite_publications');
?>


<section <?php echo $anchor; ?> class="<?php echo $class_name; ?> alignwide">

	<?php if (!empty($title_publications)): ?>
		<h2>
			<?php the_field('title_publications'); ?>
		</h2>
	<?php endif; ?>

	<?php if (!empty($cite_publications)): ?>
		<cite><?php the_field('cite_publications'); ?></cite>
	<?php endif; ?>

		<div class="clients">

			<?php while (have_rows('icons_publications')):
				the_row(); ?>

				<div class="client">
					<a href="<?php the_sub_field('url_logo'); ?>" target="_blank"><img
							src="<?php the_sub_field('img_logo'); ?>"></a>
				</div>

			<?php endwhile; ?>
		</div>

</section>