<?php
/**
 * Team Slider Block Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'team';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

if(!empty($block['align'])):
   $class_name .= ' align' . esc_attr($block['align']);
endif;

// ACF Fields

$title = get_field('title_team')

?>

<section <?php echo $anchor;?> class="<?php echo $class_name;?>">

    <h2><?php echo $title ?></h2>

    <div class="block-spacer medium"></div>

	    <div class="container-team-members">
            <div class="swiper mySwiper">
				<div class="swiper-wrapper">
					<?php while ( have_rows('list_team_member') ) : the_row(); ?>
					<div class="swiper-slide item-team-member">
						<div class="image">
							<img src="<?php the_sub_field('image_team_member');?>">
						</div>
						<div class="content">
							<h3><?php the_sub_field('name_team_member');?></h3>
							<p><?php the_sub_field('position_team_member');?></p>
						</div>
					</div>
					<?php endwhile; ?>
				</div>

				<!-- <div class="swiper-pagination"></div> -->

		    </div>


	    </div>

</section>
