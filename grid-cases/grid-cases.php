<?php
 /**
 * Case Study Block.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'case-study';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

// ACF Fields
/* Brands */
$background_case = get_field('background_case_study');
$logo_case = get_field('logo_case_study');
$number_case = get_field('number_case_study');
$title_case = get_field('title_case_study');
$button_case = get_field('button_case_study');
$link_case = get_field('link_case_study');

/* Testimonial */
$cat_case = get_field('img_cat_case_study');
$html_content_case = get_field('html_content_case_study');
$img_avatar_case = get_field('img_avatar_case_study');
$name_case = get_field('name_case_study');
$position_case = get_field('position_case_study');
?>

<section <?php echo $anchor;?>class="<?php echo $class_name;?>">
  
   <div class="thumb" style="background-image: url('<?php echo $background_case;?>');">
</div>
 </section>
