<?php
/**
 * Phase Block Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'phase_two';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

if(!empty($block['align'])):
   $class_name .= ' align' . esc_attr($block['align']);
endif;

?>

<div <?php echo $anchor;?> class="<?php echo $class_name;?>">

		<div class="row-phase alignwide">
			
			<div class="box-image">
				<img src="<?php the_field('img_phase_02');?>">

				<div class="frame-activities"><?php the_field('html_frameboard_02');?>	
				</div>
			</div>

			<div class="box-text">
                <div class="duration">
					<img src="<?php the_field('arrow_process', 'options');?>">
                    <span style="color:#000" class="time"><?php the_field('phase_name_02');?></span>
                </div>
				
				<h3><?php the_field('title_phase_02');?></h3>
				<?php the_field('text_phase_02');?>
			</div>
		</div>

</div>