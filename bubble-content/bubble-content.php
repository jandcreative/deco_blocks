<?php
/**
 * Bubble Contentent Block.
 */

$class_name = 'bubble-content';
if (!empty($block['className'])):
   $class_name .= ' ' . esc_attr($block['className']);
endif;

// ACF Fields
$cat_case = get_field('img_cat_case_study');
$html_bubble_content = get_field('html_content_case_study');
?>

<div class="<?php echo $class_name; ?>">

   <div class="item-testimonial">
      <div class="cut-cat"><img src="<?php echo $cat_case; ?>"></div>
      <div class="content">

         <?php echo $html_content_case; ?>

      </div>
   </div>