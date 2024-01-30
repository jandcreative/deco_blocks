<?php
/**
 * CTA Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'banner';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
	$class_name .= ' align' . esc_attr($block['align']);
endif;

// ACF Fields
$image_cta = get_field('image_banner_cta');
$title_cta = get_field('title_banner_cta');
$button_cta = get_field('button_banner_cta');
$link_cta = get_field('link_banner_cta');
?>


<section <?php echo $anchor; ?> class="alignwide">
	<div class="banner" style="background-image: url(<?php echo $image_cta; ?>)">

		<div class="box-container">
			<h2>
				<?php echo $title_cta; ?>
			</h2>

			<?php if (!empty($button_cta)): ?>
				<a class="button" href="<?php echo $link_cta; ?>">
					<?php echo $button_cta; ?>
				</a>
			<?php endif; ?>
		</div>

	</div>

</section>
