<?php
/**
 * Values Block Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'values';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

if(!empty($block['align'])):
   $class_name .= ' align' . esc_attr($block['align']);
endif;

// ACF Fields

//Item Values
$image_01 = get_field('image_value_01');
$text_01 = get_field('text_value_01');

$image_02 = get_field('image_value_02');
$text_02 = get_field('text_value_02');

$image_03 = get_field('image_value_03');
$text_03 = get_field('text_value_03');

$image_04 = get_field('image_value_04');
$text_04 = get_field('text_value_04');


//Item Tetsimonia
$avatar_testimonial = get_field('avatar_testimonial_value');
$description_testimonial = get_field('description_testimonial_value');
$name_testimonial = get_field('name_testimonial_value');
$position_testimonial = get_field('position_testimonial_value');
$company_testimonial = get_field('company_testimonial_value');

?>

<section <?php echo $anchor;?> class="<?php echo $class_name;?>">

	<div class="items-values alignblock" style="color:#fff">

		<?php if( !empty( $image_01 ) ): ?>
			<div class="item">
				<img src="<?php echo $image_01;?>">
				<?php echo $text_01;?>
			</div>
		<?php endif; ?>

		<?php if( !empty( $image_02 ) ): ?>
				<div class="item">
				<img src="<?php echo $image_02;?>">
				<?php echo $text_02;?>
			</div>
		<?php endif; ?>
        
		<?php if( !empty( $image_03 ) ): ?>
			<div class="item">
				<img src="<?php echo $image_03;?>">
				<?php echo $text_03;?>
			</div>
		<?php endif; ?>

		<?php if( !empty( $image_04 ) ): ?>
			<div class="item">
				<img src="<?php echo $image_04;?>">
				<?php echo $text_04;?>
			</div>
		<?php endif; ?>

	</div>

	<div class="item-testimonial">

		<?php if( !empty( $avatar_testimonial ) ): ?>

			<div class="avatar">
				<img src="<?php echo $avatar_testimonial;?>">
			</div>

		<?php endif; ?>

			<div class="content">
				<div class="description" style="color:#fff">
				<p><?php echo $description_testimonial;?></p>
				
				<div class="position">
					<p><strong><?php echo $name_testimonial;?> </strong><?php echo $position_testimonial;?>, <?php echo $company_testimonial;?></p>
				</div>
			</div>
	</div>

</section>


