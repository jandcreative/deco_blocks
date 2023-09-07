<?php
/**
 * Banner Block Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'jda-banner';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

if(!empty($block['align'])):
   $class_name .= ' align' . esc_attr($block['align']);
endif;


// ACF Fields
$title = get_field('title_banner');
$text = get_field('text_banner');
$link = get_field('link_banner');
$button = get_field('button_banner');

?>

<section id="banner" class="banner">

			<div class="hero-contact">

				<div class="container-contact">

					<h3><?php the_field('title');?></h3>
					<?php the_field('text',);?>

					<button><a href="<?php the_field('link');?>" target="_blank"><?php the_field('button');?></a></button>
				</div>
					
			</div>

</section>

