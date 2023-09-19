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

?>


<section id="banner" class="hero_book">

      <div class="hero">
        <h1>Ready? Book a call</h1>

					<a class="button" ref="#">Get a call on the calendar</a>


        
      </div>
</section>






