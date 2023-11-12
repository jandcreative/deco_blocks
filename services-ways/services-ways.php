<?php
/**
 * Services Ways Block.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'services-ways';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
	$class_name .= ' align' . esc_attr($block['align']);
endif;


// ACF Fields

//Service 01  - SEO Strategy + Content
$title_service_01 = get_field('title_service_01');
$content_service_01 = get_field('description_service_01');

//Service 02  - Content Writing
$title_service_02 = get_field('title_service_02');
$content_service_02 = get_field('description_service_02');

//Service 03  - SEO Strategy
$title_service_03 = get_field('title_service_03');
$content_service_03 = get_field('description_service_03');

//Service 04  - SOP toolkits
$title_service_04 = get_field('title_service_04');
$content_service_04 = get_field('description_service_04');

?>

<section class="services-ways">
	<div class="container-<?php echo $class_name; ?>">
		<img src="<?php echo $image_cat; ?>">
		<span>SEO and content services</span>
		<h2>
			<?php echo $title; ?>
		</h2>
		<p>Get a whole team of dedicated experts with a cutting-edge
			pulse on technical SEO and content marketing, knowing where
			to prioritize and focus resources.</p>
	</div>

	<div class="tabs-ways-sections">
		<ul class="tabs alignwide">
			<li class="tabs_item">
				<a class="tabs_item_target is_selected" data-tab="tab_one">
					<?php echo $title_service_01; ?>
				</a>
			</li>
			<li class="tabs_item">
				<a class="tabs_item_target" data-tab="tab_two">
					<?php echo $title_service_02; ?>
				</a>
			</li>
			<li class="tabs_item">
				<a class="tabs_item_target" data-tab="tab_three">
					<?php echo $title_service_03; ?>
				</a>
			</li>
			<li class="tabs_item">
				<a class="tabs_item_target" data-tab="tab_three">
					<?php echo $title_service_04; ?>
				</a>
			</li>
		</ul>
		<div class="tabs_content">

			<div id="tab_one" class="tabs_content_pane is_active">
				<div class="grid-container">

					<div class="container-about">
						<div class="box-about">
							<?php if ($content_service_01): ?>

								<?php echo $content_service_01['text'] ?>

								<a class="button" href="<?php echo $content_service_01['link_button'] ?>">
									<?php echo $content_service_01['button'] ?>
								</a>

							<?php endif; ?>
						</div>

					</div>

					<div class="container-testimonials">

						<div class="owl-carousel owl-reponsive box-testimonials">
							<?php while (have_rows('list_services_01')):
								the_row(); ?>

								<div class="frame-testimonial">
									<div class="row-avatar">

										<div class="avatar">
											<img src="<?php the_sub_field('avatar_service_01'); ?>">
										</div>

										<div class="brand">
											<img src="<?php the_sub_field('brand_service_01'); ?>">
										</div>

										<span class="number-help">
											<?php the_sub_field('number_service_01'); ?>
										</span>

										<?php the_sub_field('text_service_01'); ?>

									</div>

									<div class="separator">
										<img src="http://flyingcat.local/wp-content/uploads/icon_separator.svg">
									</div>

									<div class="row-content">
										<div class="icon">
											<img src="http://flyingcat.local/wp-content/uploads/icon_quotes.svg">
										</div>
										<div class="content">

											<?php the_sub_field('testimonial_service_01'); ?>

											<div class="position">
												<p><strong>
														<?php the_sub_field('name_service_01'); ?>
													</strong>
													<?php the_sub_field('position_service_01'); ?>
													<?php the_sub_field('company_service_01'); ?>
												</p>
											</div>
										</div>
									</div>
								</div>

							<?php endwhile; ?>
						</div>

					</div>


				</div>
			</div>


			<?php if (!empty($title_service_02)): ?>
				<div id="tab_two" class="tabs_content_pane">
					<div class="grid-container">

						<div class="container-about">
							<div class="box-about">
								<?php if ($content_service_02): ?>
									<?php echo $content_service_02['text'] ?>
									<a class="button" href="<?php echo $content_service_02['link_button'] ?>">
										<?php echo $content_service_02['button'] ?>
									</a>

								<?php endif; ?>

							</div>

						</div>

						<div class="container-testimonials">


							<div class="owl-carousel owl-reponsive box-testimonials">
								<?php while (have_rows('list_services_02')):
									the_row(); ?>

									<div class="frame-testimonial">
										<div class="row-avatar">

											<div class="avatar">
												<img src="<?php the_sub_field('avatar_service_02'); ?>">
											</div>

											<div class="brand">
												<img src="<?php the_sub_field('brand_service_02'); ?>">
											</div>

											<span class="number-help">
												<?php the_sub_field('number_service_02'); ?>
											</span>

											<?php the_sub_field('text_service_02'); ?>

										</div>

										<div class="separator">
											<img src="http://flyingcat.local/wp-content/uploads/icon_separator.svg">
										</div>

										<div class="row-content">
											<div class="icon">
												<img src="http://flyingcat.local/wp-content/uploads/icon_quotes.svg">
											</div>
											<div class="content">

												<?php the_sub_field('testimonial_service_02'); ?>

												<div class="position">
													<p><strong>
															<?php the_sub_field('name_service_02'); ?>
														</strong>
														<?php the_sub_field('position_service_02'); ?>
														<?php the_sub_field('company_service_02'); ?>
													</p>
												</div>
											</div>
										</div>
									</div>

								<?php endwhile; ?>
							</div>

						</div>


					</div>
				</div>
			<?php endif; ?>

			<?php if (!empty($title_service_03)): ?>
				<div id="tab_three" class="tabs_content_pane">
					<div class="grid-container">

						<div class="container-about">
							<div class="box-about">
								<?php if ($content_service_03): ?>
									<?php echo $content_service_03['text'] ?>
									<a class="button" href="<?php echo $content_service_03['link_button'] ?>">
										<?php echo $content_service_03['button'] ?>
									</a>

								<?php endif; ?>

							</div>

						</div>

						<div class="container-testimonials">


							<div class="owl-carousel owl-reponsive box-testimonials">
								<?php while (have_rows('list_services_03')):
									the_row(); ?>

									<div class="frame-testimonial">
										<div class="row-avatar">

											<div class="avatar">
												<img src="<?php the_sub_field('avatar_service_03'); ?>">
											</div>

											<div class="brand">
												<img src="<?php the_sub_field('brand_service_03'); ?>">
											</div>

											<span class="number-help">
												<?php the_sub_field('number_service_03'); ?>
											</span>

											<?php the_sub_field('text_service_03'); ?>

										</div>

										<div class="separator">
											<img src="http://flyingcat.local/wp-content/uploads/icon_separator.svg">
										</div>

										<div class="row-content">
											<div class="icon">
												<img src="http://flyingcat.local/wp-content/uploads/icon_quotes.svg">
											</div>
											<div class="content">

												<?php the_sub_field('testimonial_service_03'); ?>

												<div class="position">
													<p><strong>
															<?php the_sub_field('name_service_03'); ?>
														</strong>
														<?php the_sub_field('position_service_03'); ?>
														<?php the_sub_field('company_service_03'); ?>
													</p>
												</div>
											</div>
										</div>
									</div>

								<?php endwhile; ?>
							</div>

						</div>

					</div>
				</div>
			<?php endif; ?>

			<?php if (!empty($title_service_04)): ?>
				<div id="tab_four" class="tabs_content_pane">
					<div class="grid-container">

						<div class="container-about">
							<div class="box-about">
								<?php if ($content_service_04): ?>
									<?php echo $content_service_04['text'] ?>
									<a class="button" href="<?php echo $content_service_04['link_button'] ?>">
										<?php echo $content_service_04['button'] ?>
									</a>

								<?php endif; ?>

							</div>

						</div>

						<div class="container-testimonials">


							<div class="owl-carousel owl-reponsive box-testimonials">
								<?php while (have_rows('list_services_03')):
									the_row(); ?>

									<div class="frame-testimonial">
										<div class="row-avatar">

											<div class="avatar">
												<img src="<?php the_sub_field('avatar_service_04'); ?>">
											</div>

											<div class="brand">
												<img src="<?php the_sub_field('brand_service_04'); ?>">
											</div>

											<span class="number-help">
												<?php the_sub_field('number_service_04'); ?>
											</span>

											<?php the_sub_field('text_service_04'); ?>

										</div>

										<div class="separator">
											<img src="http://flyingcat.local/wp-content/uploads/icon_separator.svg">
										</div>

										<div class="row-content">
											<div class="icon">
												<img src="http://flyingcat.local/wp-content/uploads/icon_quotes.svg">
											</div>
											<div class="content">

												<?php the_sub_field('testimonial_service_04'); ?>

												<div class="position">
													<p><strong>
															<?php the_sub_field('name_service_04'); ?>
														</strong>
														<?php the_sub_field('position_service_04'); ?>
														<?php the_sub_field('company_service_04'); ?>
													</p>
												</div>
											</div>
										</div>
									</div>

								<?php endwhile; ?>
							</div>

						</div>

					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>