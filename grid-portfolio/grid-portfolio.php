<?php
/**
 * Portfolio Block.
 */

$anchor = '';
if (!empty($block['anchor'])):
   $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'grid-portfolio';
if (!empty($block['className'])):
   $class_name .= ' ' . esc_attr($block['className']);
endif;

// ACF Fields


/* 01 */

$select_background_color_01 = get_field('select_background_color_01');
$select_background_image_01 = get_field('select_background_image_01');

$background_box_01 = get_field('background_color_01');
$background_image_box_01 = get_field('background_image_01');

$img_cat_01 = get_field('image_cat_01');
$align_cat_01 = get_field('align_cat_01');
$color_01 = get_field('color_01');

$category_01 = get_field('category_01');
$text_01 = get_field('text_01');
$link_01 = get_field('link_01');
$url_01 = get_field('url_01');


/* 02 */

$select_background_color_02 = get_field('select_background_color_02');
$select_background_image_02 = get_field('select_background_image_02');

$background_box_02 = get_field('background_color_02');
$background_image_box_02 = get_field('background_image_02');

$img_cat_02 = get_field('image_cat_02');
$align_cat_02 = get_field('align_cat_02');
$color_02 = get_field('color_02');

$category_02 = get_field('category_02');
$text_02 = get_field('text_02');
$link_02 = get_field('link_02');
$url_02 = get_field('url_02');


/* 03 */

$select_background_color_03 = get_field('select_background_color_03');
$select_background_image_03 = get_field('select_background_image_03');

$background_box_03 = get_field('background_color_03');
$background_image_box_03 = get_field('background_image_03');

$img_cat_03 = get_field('image_cat_03');
$align_cat_03 = get_field('align_cat_03');
$color_03 = get_field('color_03');

$category_03 = get_field('category_03');
$text_03 = get_field('text_03');
$link_03 = get_field('link_03');
$url_03 = get_field('url_03');


/* 04 */

$select_background_color_04 = get_field('select_background_color_04');
$select_background_image_04 = get_field('select_background_image_04');

$background_box_04 = get_field('background_color_04');
$background_image_box_04 = get_field('background_image_04');

$img_cat_04 = get_field('image_cat_04');
$align_cat_04 = get_field('align_cat_04');
$color_04 = get_field('color_04');

$category_04 = get_field('category_04');
$text_04 = get_field('text_04');
$link_04 = get_field('link_04');
$url_04 = get_field('url_04');


/* 05 */

$select_background_color_05 = get_field('select_background_color_05');
$select_background_image_05 = get_field('select_background_image_05');

$background_box_05 = get_field('background_color_05');
$background_image_box_05 = get_field('background_image_05');

$img_cat_05 = get_field('image_cat_05');
$align_cat_05 = get_field('align_cat_05');
$color_05 = get_field('color_05');

$category_05 = get_field('category_05');
$text_05 = get_field('text_05');
$link_05 = get_field('link_05');
$url_05 = get_field('url_05');


/* 06 */

$select_background_color_06 = get_field('select_background_color_06');
$select_background_image_06 = get_field('select_background_image_06');

$background_box_06 = get_field('background_color_06');
$background_image_box_06 = get_field('background_image_06');

$img_cat_06 = get_field('image_cat_06');
$align_cat_06 = get_field('align_cat_06');
$color_06 = get_field('color_06');

$category_06 = get_field('category_06');
$text_06 = get_field('text_06');
$link_06 = get_field('link_06');
$url_06 = get_field('url_06');

?>

<section <?php echo $anchor; ?>class="<?php echo $class_name; ?>">

   <div class="box"
      style="<?php if ('yes' == $select_background_color_01): ?>background-color:<?php echo $background_box_01; ?>;<?php endif; ?><?php if ('yes' == $select_background_image_01): ?>background-image: url(<?php echo $background_image_box_01; ?>);background-size: cover; background-repeat: no-repeat; <?php endif; ?>">
      <div class="frame">
         <div class="content">
            <?php if (!empty($category_01)): ?>
               <span style="color:<?php echo $color_01; ?>">
                  <?php echo $category_01; ?>
               </span>
            <?php endif; ?>
            <p style="color:<?php echo $color_01; ?>">
               <?php echo $text_01; ?>
            </p>
            <a style="color:<?php echo $color_01; ?>" href="<?php echo $url_01; ?>">
               <?php echo $link_01; ?>
            </a>
            <?php if (!empty($img_cat_01)): ?>
               <div class="img_cat" style="justify-content:<?php echo $align_cat_01; ?>">
                  <img src="<?php echo $img_cat_01; ?>">
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>

   <div class="box"
      style="<?php if ('yes' == $select_background_color_02): ?>background-color:<?php echo $background_box_02; ?>;<?php endif; ?><?php if ('yes' == $select_background_image_02): ?>background-image: url(<?php echo $background_image_box_02; ?>);background-size: cover; background-repeat: no-repeat; <?php endif; ?>">
      <div class="frame">
         <div class="content">
            <?php if (!empty($category_02)): ?>
               <span style="color:<?php echo $color_02; ?>">
                  <?php echo $category_02; ?>
               </span>
            <?php endif; ?>
            <p style="color:<?php echo $color_02; ?>">
               <?php echo $text_02; ?>
            </p>
            <a style="color:<?php echo $color_02; ?>" href="<?php echo $url_02; ?>">
               <?php echo $link_02; ?>
            </a>
            <?php if (!empty($img_cat_02)): ?>
               <div class="img_cat" style="justify-content:<?php echo $align_cat_02; ?>">
                  <img src="<?php echo $img_cat_02; ?>">
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>

   <div class="box"
      style="<?php if ('yes' == $select_background_color_03): ?>background-color:<?php echo $background_box_03; ?>;<?php endif; ?><?php if ('yes' == $select_background_image_03): ?>background-image: url(<?php echo $background_image_box_03; ?>);background-size: cover; background-repeat: no-repeat; <?php endif; ?>">
      <div class="frame">
         <div class="content">
            <?php if (!empty($category_03)): ?>
               <span style="color:<?php echo $color_03; ?>">
                  <?php echo $category_03; ?>
               </span>
            <?php endif; ?>
            <p style="color:<?php echo $color_03; ?>">
               <?php echo $text_03; ?>
            </p>
            <a style="color:<?php echo $color_03; ?>" href="<?php echo $url_03; ?>">
               <?php echo $link_03; ?>
            </a>
            <?php if (!empty($img_cat_03)): ?>
               <div class="img_cat" style="justify-content:<?php echo $align_cat_03; ?>">
                  <img src="<?php echo $img_cat_03; ?>">
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>


   <div class="box"
      style="<?php if ('yes' == $select_background_color_04): ?>background-color:<?php echo $background_box_04; ?>;<?php endif; ?><?php if ('yes' == $select_background_image_04): ?>background-image: url(<?php echo $background_image_box_04; ?>);background-size: cover; background-repeat: no-repeat; <?php endif; ?>">
      <div class="frame">
         <div class="content">
            <?php if (!empty($category_04)): ?>
               <span style="color:<?php echo $color_04; ?>">
                  <?php echo $category_04; ?>
               </span>
            <?php endif; ?>
            <p style="color:<?php echo $color_04; ?>">
               <?php echo $text_04; ?>
            </p>
            <a style="color:<?php echo $color_04; ?>" href="<?php echo $url_04; ?>">
               <?php echo $link_04; ?>
            </a>
            <?php if (!empty($img_cat_04)): ?>
               <div class="img_cat" style="justify-content:<?php echo $align_cat_04; ?>">
                  <img src="<?php echo $img_cat_04; ?>">
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>

   <div class="box"
      style="<?php if ('yes' == $select_background_color_05): ?>background-color:<?php echo $background_box_05; ?>;<?php endif; ?><?php if ('yes' == $select_background_image_05): ?>background-image: url(<?php echo $background_image_box_05; ?>);background-size: cover; background-repeat: no-repeat; <?php endif; ?>">
      <div class="frame">
         <div class="content">
            <?php if (!empty($category_05)): ?>
               <span style="color:<?php echo $color_05; ?>">
                  <?php echo $category_05; ?>
               </span>
            <?php endif; ?>
            <p style="color:<?php echo $color_05; ?>">
               <?php echo $text_05; ?>
            </p>
            <a style="color:<?php echo $color_05; ?>" href="<?php echo $url_05; ?>">
               <?php echo $link_05; ?>
            </a>
            <?php if (!empty($img_cat_05)): ?>
               <div class="img_cat" style="justify-content:<?php echo $align_cat_05; ?>">
                  <img src="<?php echo $img_cat_05; ?>">
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>

   <div class="box"
      style="<?php if ('yes' == $select_background_color_06): ?>background-color:<?php echo $background_box_06; ?>;<?php endif; ?><?php if ('yes' == $select_background_image_06): ?>background-image: url(<?php echo $background_image_box_06; ?>);background-size: cover; background-repeat: no-repeat; <?php endif; ?>">
      <div class="frame">
         <div class="content">
            <?php if (!empty($category_06)): ?>
               <span style="color:<?php echo $color_06; ?>">
                  <?php echo $category_06; ?>
               </span>
            <?php endif; ?>
            <p style="color:<?php echo $color_06; ?>">
               <?php echo $text_06; ?>
            </p>
            <a style="color:<?php echo $color_06; ?>" href="<?php echo $url_06; ?>">
               <?php echo $link_06; ?>
            </a>
            <?php if (!empty($img_cat_06)): ?>
               <div class="img_cat" style="justify-content:<?php echo $align_cat_06; ?>">
                  <img src="<?php echo $img_cat_06; ?>">
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>

   <!--    <?php $grid_case_03 = get_field('grid_case_03');

   if ($grid_case_03): ?>
       <div class="box" style="<?php if ('yes' == $grid_case_03['select_background']): ?>background-color:<?php echo $grid_case_03['background_color']; ?>;<?php endif; ?><?php if ('yes' == $grid_case_03['select_background_image']): ?>background-image: url(<?php echo $grid_case_03['background_image']['url']; ?>);background-size: cover; background-repeat: no-repeat; <?php endif; ?>">
      <div class="frame"> 
         <div class="content">
            <?php if (!empty($grid_case_03['category'])): ?>
               <span style="color:<?php echo $grid_case_03['color']; ?>"><?php echo $grid_case_03['category']; ?></span>
            <?php endif; ?>
            <p style="color:<?php echo $grid_case_03['color']; ?>"><?php echo $grid_case_03['text']; ?></p>
            <a style="color:<?php echo $grid_case_03['color']; ?>" href="<?php echo $grid_case_03['link_url']; ?>"><?php echo $grid_case_03['link']; ?></a>
            <?php if (!empty($grid_case_03['image_cat'])): ?>
               <div class="img_cat" style="justify-content:<?php echo $grid_case_03['align_cat']; ?>">
                  <img src="<?php echo $grid_case_03['image_cat']; ?>">
               </div>
             <?php endif; ?>
         </div>
      </div>
   </div>
<?php endif; ?> -->

</section>