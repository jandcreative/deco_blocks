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
$image_cat = get_field('image_cat_video');
$title = get_field('title_video');
$image_video = get_field('image_video');
$html = get_field('html_video');
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
			<div id="tab_one" class="tabs_content_pane is_active">

				<div class="grid-container">

					<div class="container-about">
						<div class="box-about">
							<h3>We'll create and manage the strategy, as well as produce and optimize all content assets
								needed.</h3>

							<ul>
								<li>Audit and strategy</li>
								<li>Audit and strategy</li>
								<li>Audit and strategy</li>
							</ul>

							<a class="button" href="#">Find out more</a>

						</div>

					</div>

					<div class="container-testimonials">

						<div class="box-testimonials">

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


								<div class="content">
									<p>
										Maeva, Leanka and the whole team at Flying Cat have been superb from the start.
										Their positivity and love for their work is what stands out the most. The
										perfect match for our business at the stage of growth we're at today. I'd
										happily recommend them to anyone looking to kick-start their content and SEO
										strategy from scratch. </p>

									<div class="position">
										<p><strong>
												Iker Sattler. </strong>
											Editorial Lead, Hotjar </p>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
			<div id="tab_two" class="tabs_content_pane">
				<div class="grid-container">

					<div class="container-about">
						<div class="box-about">
							<h3>We'll create and manage the strategy, as well as produce and optimize all content assets
								needed.</h3>

							<ul>
								<li>Audit and strategy</li>
								<li>Audit and strategy</li>
								<li>Audit and strategy</li>
							</ul>

							<a class="button" href="#">Find out more</a>

						</div>

					</div>

					<div class="container-testimonials">

						<div class="box-testimonials">

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


								<div class="content">
									<p>
										Misha, Leanka and the whole team at Flying Cat have been superb from the start.
										Their positivity and love. </p>

									<div class="position">
										<p><strong>
												Misha Díaz. </strong>
											Editorial Lead, Hotjar </p>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
			<div id="tab_three" class="tabs_content_pane">
				<div class="grid-container">

					<div class="container-about">
						<div class="box-about">
							<h3>We'll create and manage the strategy, as well as produce and optimize all content assets
								needed.</h3>

							<ul>
								<li>Audit and strategy</li>
								<li>Audit and strategy</li>
								<li>Audit and strategy</li>
							</ul>

							<a class="button" href="#">Find out more</a>

						</div>

					</div>

					<div class="container-testimonials">

						<div class="box-testimonials">

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


								<div class="content">
									<p>
										Misha, Leanka and the whole team at Flying Cat have been superb from the start.
										Their positivity and love. </p>

									<div class="position">
										<p><strong>
												Misha Díaz. </strong>
											Editorial Lead, Hotjar </p>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
			<div id="tab_four" class="tabs_content_pane">
				<div class="grid-container">

					<div class="container-about">
						<div class="box-about">
							<h3>We'll create and manage the strategy, as well as produce and optimize all content assets
								needed.</h3>

							<ul>
								<li>Audit and strategy</li>
								<li>Audit and strategy</li>
								<li>Audit and strategy</li>
							</ul>

							<a class="button" href="#">Find out more</a>

						</div>

					</div>

					<div class="container-testimonials">

						<div class="box-testimonials">

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


								<div class="content">
									<p>
										Misha, Leanka and the whole team at Flying Cat have been superb from the start.
										Their positivity and love. </p>

									<div class="position">
										<p><strong>
												Misha Díaz. </strong>
											Editorial Lead, Hotjar </p>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</section>