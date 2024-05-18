<?php
/**
 * Banner Destacado Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'banners-destacados';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

// ACF Fields
$title_destacado= get_field('title_banners_destacados');
$alignment = get_field('alignment');
$border = get_field('border');
$alignment = get_field('alignment');
?>

<section <?php echo $anchor; ?> class="<?php echo $class_name; ?> alignwide">

	<?php if (!empty($title_destacado)):?>
		<h2><?php echo $title_destacado;?></h2>
	<?php endif;?>
		
	<div class="list-banners-destacados">

		<?php while (have_rows('listado_banner_destacado')):
					the_row(); ?>

		<div class="item <?php echo $alignment;?>" style="border-radius:<?php echo $border;?>">
			<img src="<?php the_sub_field('imagen_destacado_01'); ?>">
			<div class="content">

				<div class="text">
					<h3><?php the_sub_field('title_destacado_01'); ?></h3>
					<?php if (($alignment) === 'top'): ?>
						<?php the_sub_field('text_destacado_01'); ?>
					<?php else : ?>
						<a class="button" target="_<?php the_sub_field('open_new_window_01');?>" href="<?php the_sub_field('link_destacado_01'); ?>"><?php the_sub_field('button_destacado_01'); ?></a>
				 	<?php endif; ?>
				</div>
			
			</div>
		</div>

		<div class="item <?php echo $alignment;?>" style="border-radius:<?php echo $border;?>">
			<img src="<?php the_sub_field('imagen_destacado_02'); ?>">
			<div class="content">
				<div class="text">
					<h3><?php the_sub_field('title_destacado_02'); ?></h3>
					<?php if (($alignment) === 'top'): ?>
						<?php the_sub_field('text_destacado_02'); ?>
					<?php else : ?>
						<a class="button" target="<?php the_sub_field('open_new_window_02');?>" href="<?php the_sub_field('link_destacado_02'); ?>"><?php the_sub_field('button_destacado_02'); ?></a>	
					<?php endif; ?>
				</div>
			</div>
		</div>

		<?php endwhile; ?>
	</div>
</section>
