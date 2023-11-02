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
$select = get_field('hero_select');

?>

<section id="banner" class="<?php echo $select; ?>">
   <div class="hero">
      <?php if ($content): ?>

         <div class="text">
            <h1>
               <?php echo $content['hero_title']; ?>
            </h1>
            <h2>
               <?php echo $content['hero_sub_title']; ?>
            </h2>

            <?php echo $content['hero_description']; ?>

            <div class="links">
               <a class="button" href="#">Check out our process</a>
            </div>
         </div>

      <?php endif; ?>

      <?php if ($brand): ?>

         <div class="picture">
            <div class="column">
               <img src="https://jandcreative-dev.com/flyingcat/wp-content/uploads/logo_operto_white.svg">
               <p>
                  <?php echo $brand['hero_text_brand']; ?><!-- Their approach led to a significant increase in monthly revenue and contributed to our rapid growth. -->
               </p>
               <div class="info">
                  <span class="name"><strong>
                        <?php echo $brand['hero_name_brand']; ?><!-- Robert Hartman -->
                     </strong></span>
                  <span class="position">
                     <?php echo $brand['hero_position_brand']; ?><!-- Former Creative Director -->
                  </span>
               </div>
            </div>
         </div>

      </div>
   </section>

<?php endif; ?>