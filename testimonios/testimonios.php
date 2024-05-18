<?php
/**
 * Testimonios Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'testimonios';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
	$class_name .= ' align' . esc_attr($block['align']);
endif;

// ACF Fields

$title_testimonial = get_field('title_testimonial');
?>

<section <?php echo $anchor; ?> class="<?php echo $class_name; ?>">

	<?php if (!empty($title_testimonial)): ?>
		<h2>
			<?php echo $title_testimonial; ?>
		</h2>
	<?php endif; ?>

		<div class="container-items-testimonials">

			<div class="testimonials-carousel">

				<?php while (have_rows('list_testimonial')):
					the_row(); ?>

					<div class="item">

						<h3><?php the_sub_field('name_testimonial_01'); ?></h3>
						
						<div class="stars">
							<ul>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
							</ul>
						</div>

						<div class="description">
							<p><?php the_sub_field('description_testimonial_01'); ?></p>
						</div>
					</div>

					<div class="item">

						<h3><?php the_sub_field('name_testimonial_02'); ?></h3>

						<div class="stars">
							<ul>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
							</ul>
						</div>

						<div class="description">
							<p><?php the_sub_field('description_testimonial_02'); ?></p>
						</div>

					</div>

					<div class="item">

						<h3><?php the_sub_field('name_testimonial_03'); ?></h3>

						<div class="stars">
							<ul>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
								<li><img src="<?php the_field('icon_star', 'options'); ?>"></li>
							</ul>
						</div>

						<div class="stars"></div>

						<div class="description">
							<p><?php the_sub_field('description_testimonial_03'); ?></p>
						</div>

					</div>

				<?php endwhile; ?>
			</div>

		</div>

</section>