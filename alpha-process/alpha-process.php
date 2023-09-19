<?php
/**
 * Alpha Template.
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
$select_hero = get_field('hero_select');
$title_hero = get_field('hero_title');
$description_hero = get_field('hero_description');
$img_hero = get_field('hero_image');
?>

<section id="banner" class="hero_process">

<div class="hero">

    <div class="text">
        <h1>How we help you achieve <br>5-20% monthly growth</h1>
        
          <p>In our SEO service, we implement a full growth roadmap for <strong>reaching your revenue goals in record time</strong></p>
          <div class="links">
					<a class="button" ref="#">Get a call on the calendar</a>
         </div>
      <div class="img">
         
      </div>

        
      </div>
</section>