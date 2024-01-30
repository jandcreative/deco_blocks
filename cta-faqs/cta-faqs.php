<?php
/**
 * CTA Faq Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'banner-faqs';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
	$class_name .= ' align' . esc_attr($block['align']);
endif;

// ACF Fields
$color_cta_faq = get_field('color_banner_cta_faq');
$image_cta_faq = get_field('ilustration_banner_cta_faq');
$title_cta_faq = get_field('title_banner_cta_faq');
$text_cta_faq = get_field('text_banner_cta_faq');
$button_cta_faq = get_field('button_banner_cta_faq');
$link_cta_faq = get_field('link_banner_cta_faq');
?>


<section <?php echo $anchor; ?> class="alignwide">
	<div class="banner-faqs" style="background-color: <?php echo $color_cta_faq; ?>">

		<div class="ilustration">
			<img src="<?php echo $image_cta_faq;?>">
		</div>

		<div class="box-container">
			<h2>
				<?php echo $title_cta_faq; ?>
			</h2>

			<div class="text">
				<p>
					<?php echo $text_cta_faq; ?>
				</p>
			</div>

			<?php if (!empty($button_cta_faq)): ?>
				<a class="button" href="<?php echo $link_cta_faq; ?>">
					<?php echo $button_cta_faq; ?>
				</a>
			<?php endif; ?>
		</div>

	</div>

</section>