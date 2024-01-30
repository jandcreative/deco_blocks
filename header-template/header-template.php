<?php
/**
 * Header Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
   $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'hero';
if (!empty($block['className'])):
   $class_name .= ' ' . esc_attr($block['className']);
endif;


// ACF Fields
$brand = get_field('brand');
$content = get_field('content');
$select = get_field('select_hero');

?>

<section id="banner" class="<?php echo $select; ?>">
   <div class="hero">
      <?php if ($content): ?>

         <div class="text">
            <h1>
               <?php echo $content['title_hero']; ?>
            </h1>

            <?php if ($select === "hero_home") {
               echo "<h2>$content[sub_title_hero]</h2>";
            }
            ?>
            <?php echo $content['description_hero']; ?>

            <div class="links">
               <a class="button" href="<?php echo $content['link_hero']; ?>">
                  <?php echo $content['button_hero']; ?>
               </a>
            </div>
         </div>

      <?php endif; ?>

      <?php if ($brand): ?>

         <div class="picture">
            <div class="avatar-brand"><img src="<?php echo $brand['hero_avatar_brand']; ?>"></div>
            <div class="column">
               <img src="<?php echo $brand['logo_brand_hero']; ?>">
               <p>
                  <?php echo $brand['text_brand_hero']; ?>
               </p>
               <div class="info">
                  <span class="name"><strong>
                        <?php echo $brand['name_brand_hero']; ?>
                     </strong></span>
                  <span class="position">
                     <?php echo $brand['position_brand_hero']; ?>
                  </span>
               </div>
            </div>
         </div>

      </div>
   </section>

<?php endif; ?>