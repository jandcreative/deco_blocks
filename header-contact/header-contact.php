<?php
/**
 * Banner Book a Call Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
   $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'banner';
if (!empty($block['className'])):
   $class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
   $class_name .= ' align' . esc_attr($block['align']);
endif;

// ACF Fields
$title_contact = get_field('title_contact_header');
$button_contact = get_field('button_contact_header');
$link_contact = get_field('link_contact_header');
?>

<section id="banner" class="hero_book">
   <div class="hero">
      <h1>
         <?php echo $title_contact; ?>
      </h1>
      <a class="button" href="<?php echo $link_contact; ?>">
         <?php echo $button_contact; ?>
      </a>
   </div>
</section>