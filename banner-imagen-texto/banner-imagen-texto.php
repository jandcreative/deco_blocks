<?php
/**
 * CTA Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'banner-imagen-texto';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
	$class_name .= ' align' . esc_attr($block['align']);
endif;

// ACF Fields
$color_banner = get_field('color_banner_text');
$image_banner_text = get_field('image_banner_text');

$content_banner = get_field('contenido');
?>

<?php if (!empty($content_banner)): ?>

<section <?php echo $anchor; ?> class="alignwide">
	<div class="banner-imagen-texto" style="background-color:<?php echo $color_banner; ?>">

		<div class="text-img">

			<?php if (!empty($image_banner_text)): ?>
				<div class="box-img">
					<img src="<?php echo $image_banner_text; ?>">
				</div>
			<?php endif; ?>

			<?php if ($content_banner): ?>

			<div class="box-content <?php echo $content_banner['spacing_content'];?>">
				<h2><?php echo $content_banner['title_banner_text']; ?></h2>
				<?php echo $content_banner['content_banner_text']; ?>
			</div>

			<?php endif; ?>

		</div>

	</div>

</section>
<?php endif; ?>
