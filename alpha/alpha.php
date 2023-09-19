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

<section id="banner" class="hero_home">

<div class="hero">

    <div class="text">
        <h1>Let us be your buddy partner specialised in SEO and Meow.</h1>
        <h2>We specialize in martech, salestech and HRtech.</h2>
          <p>Spend your time on high-level strategy with partner that scales your content operations and gets strategic with SEO</p>
          <div class="links">
					<a class="button" ref="#">Check out our process</a>
         </div>
      <div class="img">
         
      </div>

        
      </div>
</section>