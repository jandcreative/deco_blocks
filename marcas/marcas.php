<?php
/**
 * Brands Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'marcas';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
	$class_name .= ' align' . esc_attr($block['align']);
endif;
// ACF Fields
$title_brands = get_field('title_brands');
?>


<section <?php echo $anchor; ?> class="<?php echo $class_name; ?> alignwide">

	<?php if (!empty($title_brands)): ?>
	<h2>
		<?php the_field('title_brands'); ?>
	</h2>
	<?php endif; ?>

	<div class="clients">

		<?php while (have_rows('icons_brands')):
			the_row(); ?>

			<div class="client">
				<a href="<?php the_sub_field('url_logo'); ?>" target="_blank"><img
						src="<?php the_sub_field('img_logo'); ?>"></a>
			</div>

		<?php endwhile; ?>

	</div>



</section>