<?php
/**
 * Bubble Contentent Block.
 */

$class_name = 'bubble-content';
if (!empty($block['className'])):
   $class_name .= ' ' . esc_attr($block['className']);
endif;

// ACF Fields
$cat_case = get_field('img_cat_bubble_content');
$html_bubble_content = get_field('html_content_bubble_content');
?>

<?php if (!empty($html_bubble_content)): ?>
   <div class="<?php echo $class_name; ?>">

      <div class="item-testimonial">
         <div class="cut-cat"><img src="<?php echo $cat_case; ?>"></div>
         <div class="content">

            <?php echo $html_bubble_content; ?>

         </div>
      </div>
   <?php endif ?>