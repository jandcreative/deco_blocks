<?php
/**
 * CTA Block Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'banner';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

if(!empty($block['align'])):
   $class_name .= ' align' . esc_attr($block['align']);
endif;

// ACF Fields
$select = get_field('select_cta');
$background = get_field('background_color');
$img = get_field('image_banner');
$title = get_field('title_banner');
$text = get_field('text_banner');
$link = get_field('link_banner');
$button = get_field('button_banner');
?>


<section <?php echo $anchor;?> id="banner" class="<?php echo $class_name;

?>">

			<div class="hero-<?php echo $select;?>" style="background-color:<?php echo $background;?>" >

				<div class="container-contact">
					<img src="<?php echo $img;?>">
					<h3><?php echo $title;?></h3>
					<?php echo $text;?>
					
					<?php if( !empty( $button ) ): ?>
						<button><a href="<?php echo $link;?>" target="_blank"><?php echo $button;?></a></button>
					<?php endif; ?>
				</div>
		
					
			</div>

</section>




