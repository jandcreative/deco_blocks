<?php
/**
 * Video Block Template.
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
$html_about_01 = get_field('box_about_01');
$image_video = get_field('image_video');
/* $title = get_field('title_video');

$html = get_field('html_video'); */
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
				<a class="tabs_item_target is_selected" data-tab="tab_one">SEO Strategy + Content</a>
			</li>
			<li class="tabs_item">
				<a class="tabs_item_target" data-tab="tab_two">Content
					Writing</a>
			</li>
			<li class="tabs_item">
				<a class="tabs_item_target" data-tab="tab_three">SEO
					Strategy</a>
			</li>
			<li class="tabs_item">
				<a class="tabs_item_target" data-tab="tab_three">SOP
					toolkits</a>
			</li>
		</ul>
		<div class="tabs_content">



			<div id="tab_two" class="tabs_content_pane">
				<div class="grid-container">

					<div class="container-about">
						<div class="box-about">
							<?php echo $html_about_01; ?>
						</div>

					</div>

					<div class="container-testimonials">


						<div class="owl-carousel owl-reponsive box-testimonials">
							<?php while (have_rows('list_services_01')):
								the_row(); ?>

								<div class="frame-testimonial">
									<div class="row-avatar">

										<div class="avatar">
											<img decoding="async"
												src="http://flyingcat.local/wp-content/uploads/img_avatar_black.png">
										</div>

										<div class="brand">
											<img decoding="async"
												src="http://flyingcat.local/wp-content/uploads/img_case_koyo.png">
										</div>

										<span class="number-help">56%</span>

										<p>Growth and position
											as a thought leader</p>

									</div>

									<div class="separator">
										<img src="http://flyingcat.local/wp-content/uploads/icon_separator.svg">
									</div>

									<div class="row-content">
										<div class="icon"><img
												src="http://flyingcat.local/wp-content/uploads/icon_quotes.svg">
										</div>
										<div class="content">

											<p>
												Misha, Leanka and the whole team at Flying Cat have been superb from the
												start.
												Their positivity and love. </p>

											<div class="position">
												<p><strong>
														Misha Díaz. </strong>
													Editorial Lead, Hotjar </p>
											</div>
										</div>
									</div>
								</div>

							<?php endwhile; ?>
						</div>


					</div>


				</div>

			</div>
		</div>

	</div>


</section>