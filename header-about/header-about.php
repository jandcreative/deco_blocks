<?php
/**
 * Header Resources.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'hero';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

// ACF Fields
$image_about = get_field('hero_image_about');
$title_about = get_field('title_bubbles_about');
?>

<section id="banner" class="hero_about" style="background-color:#DFDFA8">

<div class="hero">
      <div class="pictures">
         <img src="<?php echo $image_about;?>">
      </div>

      <?php if( !empty( $title_about ) ): ?>
      
      <div class="bubble">
            <h1><?php echo $title_about;?></h1>         
      </div>

      <?php endif; ?>
</div>
</section>


