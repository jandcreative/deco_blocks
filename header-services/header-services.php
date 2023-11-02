<?php
/**
 * Header Resources.
 */

$anchor = '';
if (!empty($block['anchor'])):
   $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'services';
if (!empty($block['className'])):
   $class_name .= ' ' . esc_attr($block['className']);
endif;

// ACF Fields

$sub_title_services = get_field('sub_title_bubbles_services');
$title_services = get_field('title_bubbles_services');
$text_banner = get_field('text_banner_services');
?>

<section id="banner" class="hero_services">
   <div class="hero">

      <div class="container">
         <div class="picture">
            <div class="column">
               <mark>
                  <?php echo $sub_title_services; ?>
               </mark>
               <h1>
                  <?php echo $title_services; ?>
               </h1>
            </div>
         </div>

         <div class="text">
            <?php echo $text_banner; ?>

         </div>

      </div>
   </div>
</section>