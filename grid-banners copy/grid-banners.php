<?php
/**
 * Banner Destacado Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'grid-banners';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

// ACF Fields
$title_destacado= get_field('title_banners_destacados');
$alignment = get_field('alignment');
$border = get_field('border');

// Grupos
$grid_banner_01 = get_field('grid_banner_01');
$grid_banner_02 = get_field('grid_banner_02');
$grid_banner_03 = get_field('grid_banner_03');
?>
	<div class="list-<?php echo $class_name; ?>">

	<?php if (!empty($grid_banner_01['imagen_fondo'])): ?>

		<div class="item <?php echo $alignment;?>" style="border-radius:<?php echo $grid_banner_01['border'];?>">
			<img src="<?php echo $grid_banner_01['imagen_fondo'];?>">
			<div class="content">
				<div class="text">
					<h3><?php echo $grid_banner_01['title'];?></h3>
					<p><?php echo $grid_banner_01['text'];?></p>
				</div>
			</div>
		</div>

		<?php endif; ?>

		<?php if (!empty($grid_banner_02['imagen_fondo'])): ?>

		<div class="item <?php echo $alignment;?>" style="border-radius:<?php echo $grid_banner_02['border'];?>">
			<img src="<?php echo $grid_banner_02['imagen_fondo'];?>">
			<div class="content">
				<div class="text">
					<h3><?php echo $grid_banner_02['title'];?></h3>
					<p><?php echo $grid_banner_02['text'];?></p>
				</div>
			</div>
		</div>

		<?php endif; ?>

		<?php if (!empty($grid_banner_03['imagen_fondo'])): ?>

		<div class="item <?php echo $alignment;?>" style="border-radius:<?php echo $grid_banner_03['border'];?>">
			<img src="<?php echo $grid_banner_03['imagen_fondo'];?>">
			<div class="content">
				<div class="text">
					<h3><?php echo $grid_banner_03['title'];?></h3>
					<p><?php echo $grid_banner_03['text'];?></p>
				</div>
			</div>
		</div>

		<?php endif; ?>

	</div>
