<?php
/**
 * Hero Home Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'hero-home';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
	$class_name .= ' align' . esc_attr($block['align']);
endif;

// ACF Fields
$title_herohome = get_field('title_hero_home');
$text_herohome = get_field('texto_hero_home');
$button_herohome = get_field('button_hero_home');
$link_herohome = get_field('link_hero_home');
?>

<section <?php echo $anchor; ?> class="<?php echo $class_name; ?>">

	<div class="slider">
		<?php while (have_rows('slider_home')): the_row(); ?>
			<img src="<?php the_sub_field('img_slider'); ?>">
		<?php endwhile; ?>
	</div>
	<div class="box-container">
			<h1><?php echo $title_herohome; ?></h1>
			<p><?php echo $text_herohome; ?></p>
			<a href="<?php echo $link_herohome; ?>"><?php echo $button_herohome; ?></a>
	</div>
</section>