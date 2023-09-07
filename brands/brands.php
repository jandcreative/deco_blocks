<?php
/**
 * Brands Block Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'brands';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

if(!empty($block['align'])):
   $class_name .= ' align' . esc_attr($block['align']);
endif;


// ACF Fields
$title = get_field('jda_hero_title');
$descripcion = get_field('jda_hero_description');
$img = get_field('jda_hero_image');
?>


<section <?php echo $anchor;?> id="brands" class="<?php echo $class_name;

?>">

	<h2><?php the_field('title_brands');?></h2>

	<div class="clients">

		<?php while ( have_rows('icons_brands') ) : the_row(); ?> 
		 		 
		<div class="client">
			<a href="<?php the_sub_field('url_logo');?>" target="_blank"><img src="<?php the_sub_field('logo');?>"></a>
		</div>

		<?php endwhile; ?>

	</div>

</section>

