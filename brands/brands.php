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
$clients = get_field('title_clients');
$clutch = get_field('img_clutch');
?>


<section <?php echo $anchor;?> id="brands" class="<?php echo $class_name;

?>">

	<h2><?php the_field('title_brands');?></h2>

	<div class="clients">

		<?php while ( have_rows('icons_brands') ) : the_row(); ?> 
		 		 
		<div class="client">
			<a href="<?php the_sub_field('url_logo');?>" target="_blank"><img src="<?php the_sub_field('img_logo');?>"></a>
		</div>

		<?php endwhile; ?>

	</div>

	<div class="badges">

	  <div class="container">
		<h3><?php echo $clients;?></h3>
		
		<div class="labels">
			<div class="clutch">
				<img src="<?php echo $clutch;?>">
			</div>

			<div class="items">

			<?php while ( have_rows('icons_badges') ) : the_row(); ?> 
					<img src="<?php the_sub_field('img_badge');?>">
			<?php endwhile; ?>
				<!-- <img src="http://flyingcat.local/wp-content/uploads/img_badge_spain-1.png">
				<img src="http://flyingcat.local/wp-content/uploads/img_badge_writing.png">
				<img src="http://flyingcat.local/wp-content/uploads/img_badge_glog_services.png"> -->
			</div>
		</div>

	  </div>

	</div>

</section>