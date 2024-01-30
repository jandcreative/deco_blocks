<?php
/**
 * Testimonial Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'testimonial';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
	$class_name .= ' align' . esc_attr($block['align']);
endif;

// ACF Fields

$title_client_testimonial = get_field('title_client_testimonial');
$text_client_testimonial = get_field('text_client_testimonial');

?>

<section <?php echo $anchor; ?> class="<?php echo $class_name; ?>" style="background-color: #dfdfa8">

	<div class="container-testimonial alignwide">

		<div class="description">

			<h2>
				<?php echo $title_client_testimonial; ?>
			</h2>
			<p>
				<?php echo $text_client_testimonial; ?>
			</p>

		</div>


		<div class="container-items-testimonials">

			<div class="owl-carousel owl-reponsive testimonials-carousel">

				<?php while (have_rows('list_client_testimonial')):
					the_row(); ?>


					<div class="block-testimonial">
						<div class="item-testimonial">

							<div class="avatar">
								<img src="<?php the_sub_field('avatar_client_testimonial_01'); ?>">
							</div>

							<div class="content">
								<p>
									<?php the_sub_field('description_client_testimonial_01'); ?>
								</p>

								<div class="position">
									<p><strong>
											<?php the_sub_field('name_client_testimonial_01'); ?>
										</strong>
										<?php the_sub_field('position_client_testimonial_01'); ?>
										<?php the_sub_field('company_client_testimonial_01'); ?>
									</p>
								</div>
							</div>
						</div>

						<div class="item-testimonial">

							<div class="avatar">
								<img src="<?php the_sub_field('avatar_client_testimonial_02'); ?>">
							</div>

							<div class="content">
								<p>
									<?php the_sub_field('description_client_testimonial_02'); ?>
								</p>

								<div class="position">
									<p><strong>
											<?php the_sub_field('name_client_testimonial_02'); ?>
										</strong>
										<?php the_sub_field('position_client_testimonial_02'); ?>
										<?php the_sub_field('company_client_testimonial_02'); ?>
									</p>
								</div>
							</div>
						</div>

						<div class="item-testimonial">

							<div class="avatar">
								<img src="<?php the_sub_field('avatar_client_testimonial_03'); ?>">
							</div>

							<div class="content">
								<p>
									<?php the_sub_field('description_client_testimonial_03'); ?>
								</p>

								<div class="position">
									<p><strong>
											<?php the_sub_field('name_client_testimonial_03'); ?>
										</strong>
										<?php the_sub_field('position_client_testimonial_03'); ?>
										<?php the_sub_field('company_client_testimonial_03'); ?>
									</p>
								</div>
							</div>
						</div>
					</div>

				<?php endwhile; ?>
			</div>

		</div>
	</div>

</section>