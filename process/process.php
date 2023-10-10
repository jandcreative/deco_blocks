<?php
/**
 * Process Block Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'process';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

if(!empty($block['align'])):
   $class_name .= ' align' . esc_attr($block['align']);
endif;

$title_section = get_field('title_section_process');
?>

<section <?php echo $anchor;?> class="<?php echo $class_name;?>">

	<h2><?php echo $title_section?></h2>

	<div class="list-process alignwide" style="color:#fff">

	<?php while ( have_rows('list_process') ) : the_row(); ?>

		<div class="item-process">
			<div class="duration">
				<img src="<?php the_field('arrow_process', 'options');?>">
				<span style="color:#000" class="time"><?php the_sub_field('duration_process');?></span>
			</div>
			<h3 style="color:#ff0049"><?php the_sub_field('title_process');?></h3>
			<p style="color:#000"><?php the_sub_field('description_process');?></p>
		</div>
	
	<?php endwhile; ?>

	</div>
</section>


