<?php
/**
 * Video Block Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'video';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

if(!empty($block['align'])):
   $class_name .= ' align' . esc_attr($block['align']);
endif;


// ACF Fields
$video = get_field('video_iframe');
$html = get_field('html_video');
?>


<!-- <div class="container-<?php echo $class_name;?>">
    <?php if( !empty( $image_cat ) ): ?>
		<img src="<?php echo $image_cat;?>">
	<?php endif; ?>
	<h2><?php echo $title;?></h2>
	<div class="video-thumb">
	<a class="wp-video-popup" href="#"><img src="<?php echo $image_video;?>"></a>
   <?php echo $html;?>
	</div>
</div> -->
				

<section class="page-block block-hero block-align-<?php echo $class_name;?> reveal reveal-opacity">

	<div class="<?php echo $class_name;?>-container">

		<?php echo $video;?>

	</div>

</section>

