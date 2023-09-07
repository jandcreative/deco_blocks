<?php
/**
 * Banner Block Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'jda-hero';
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

<div <?php echo $anchor;?>class="<?php echo $class_name;

?>">


 <?php if(!empty ( $title)) : ?>
    <div class="text">
        <h1><?php echo $title; ?></h1>
          <p><?php echo $descripcion; ?></p>
          <div class="links">
					<a class="button" ref="#">Get Started<div style="display:inline-flex;justify-content:center;align-items:center" class="kt-btn-svg-icon kt-btn-svg-icon-fas_chevron-right kt-btn-side-right"><svg style="display:inline-block;vertical-align:middle" viewBox="0 0 320 512" height="1em" width="1em" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg></div></a>
					
					<a class="button action" href="#" target="_blank">How it works<div style="display:inline-flex;justify-content:center;align-items:center" class="kt-btn-svg-icon kt-btn-svg-icon-fas_caret-right kt-btn-side-right"><svg style="display:inline-block;vertical-align:middle" viewBox="0 0 192 512" height="1em" width="1em" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"></path></svg></div></a>

			</div>
        
    </div>
    <div class="img">
        <img src="<?php echo $img; ?>">
    </div>

    <?php endif;?>
        
</div>


