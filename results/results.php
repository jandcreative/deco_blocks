<?php
/**
 * Results Block Template.
 */

 $class_name = 'results';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;


// ACF Fields
// 01
$image_01 = get_field('result_image_01');
$numbers_01 = get_field('result_number_01');
$description_01 = get_field('result_description_01');

// 02
$image_02 = get_field('result_image_02');
$numbers_02 = get_field('result_number_02');
$description_02 = get_field('result_description_02');

// 03
$image_03 = get_field('result_image_03');
$numbers_03 = get_field('result_number_03');
$description_03 = get_field('result_description_03');

// 04
$image_04 = get_field('result_image_04');
$numbers_04 = get_field('result_number_04');
$description_04 = get_field('result_description_04');
?>


<div class="grid-<?php echo $class_name;?>">

   <div class="bubble">
      <div class="item-result">
         <div class="image">
            <img src="<?php echo $numbers_01;?>">
         </div>
         <span class="number"><?php echo $numbers_01;?></span>
         <span class="description"><?php echo $description_01;?></span>
      </div>

   </div>

   <div class="bubble">
      <div class="item-result">
         <div class="image">
         <img src="<?php echo $numbers_02;?>">
         </div>
         <span class="number"><?php echo $numbers_02;?></span>
         <span class="description"><?php echo $description_02;?></span>
         </div>
   </div>

   <div class="bubble">
      <div class="item-result">
         <div class="image">
         <img src="<?php echo $numbers_03;?>">
         </div>
         <span class="number"><?php echo $numbers_03;?></span>
         <span class="description"><?php echo $description_03;?></span>
      </div>
   </div>

   <div class="bubble">
      <div class="item-result">
         <div class="image">
         <img src="<?php echo $numbers_04;?>">
         </div>
         <span class="number"><?php echo $numbers_04;?></span>
         <span class="description"><?php echo $description_04;?></span>
      </div>
   </div>

</div>

