<?php
 /**
 * Grid Cases Block.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'grid-cases';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

// ACF Fields
$background_box = get_field('background_color_grid_cases');
$img_cat = get_field('image_cat_grid_cases');
$align_cat = get_field('align_cat_grid_cases');
$color = get_field('color_grid_cases');

$category = get_field('category_grid_cases');
$text = get_field('text_grid_cases');
$link = get_field('link_grid_cases');
$url = get_field('url_grid_cases');

$background_box_02 = get_field('background_color_grid_cases_02');
$img_cat_02 = get_field('image_cat_grid_cases_02');
$align_cat_02 = get_field('align_cat_grid_cases_02');
$color_02 = get_field('color_grid_cases_02');

$text_02 = get_field('text_grid_cases_02');
$link_02 = get_field('link_grid_cases_02');
$url_02 = get_field('url_grid_cases_02');
?>

<section <?php echo $anchor;?>class="<?php echo $class_name;?>">
  
   <div class="box" style="background-color:<?php echo $background_box;?>">
      <div class="frame">
         <div class="content">
            <?php if( !empty( $category ) ): ?>
               <span><?php echo $category;?></span>
            <?php endif; ?>
            <p style="color:<?php echo $color;?>"><?php echo $text;?></p>
            <a style="color:<?php echo $color;?>" href="<?php echo $url;?>"><?php echo $link;?></a>

            <?php if( !empty( $img_cat ) ): ?>
               <div style="display:flex; justify-content:<?php echo $align_cat;?>">
                  <img src="<?php echo $img_cat;?>">
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>

   <div class="box" style="background-color:<?php echo $background_box_02;?>">
      <div class="frame">
         <div class="content">
            <p style="color:<?php echo $color_02;?>"><?php echo $text_02;?></p>
            <a style="color:<?php echo $color_02;?>" href="<?php echo $url_02;?>"><?php echo $link_02;?></a>

            <?php if( !empty( $img_cat_02 ) ): ?>
               <div style="display:flex; justify-content:<?php echo $align_cat_02;?>">
                  <img src="<?php echo $img_cat_02;?>">
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>


   <div class="box" style="background-color:<?php echo $background_box;?>">
      <div class="frame">
         <div class="content">
            <p style="color:<?php echo $color;?>"><?php echo $text;?></p>
            <a style="color:<?php echo $color;?>" href="<?php echo $url;?>"><?php echo $link;?></a>

            <?php if( !empty( $img_cat ) ): ?>
               <div style="display:flex; justify-content:<?php echo $align_cat;?>">
                  <img src="<?php echo $img_cat;?>">
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>


   <div class="box" style="background-color:<?php echo $background_box;?>">
      <div class="frame">
         <div class="content">
            <p style="color:<?php echo $color;?>"><?php echo $text;?></p>
            <a style="color:<?php echo $color;?>" href="<?php echo $url;?>"><?php echo $link;?></a>

            <?php if( !empty( $img_cat ) ): ?>
               <div style="display:flex; justify-content:<?php echo $align_cat;?>">
                  <img src="<?php echo $img_cat;?>">
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>


   <div class="box" style="background-color:<?php echo $background_box;?>">
      <div class="frame">
         <div class="content">
            <p style="color:<?php echo $color;?>"><?php echo $text;?></p>
            <a style="color:<?php echo $color;?>" href="<?php echo $url;?>"><?php echo $link;?></a>

            <?php if( !empty( $img_cat ) ): ?>
               <div style="display:flex; justify-content:<?php echo $align_cat;?>">
                  <img src="<?php echo $img_cat;?>">
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>

   <div class="box" style="background-color:<?php echo $background_box;?>">
      <div class="frame">
         <div class="content">
            <p style="color:<?php echo $color;?>"><?php echo $text;?></p>
            <a style="color:<?php echo $color;?>" href="<?php echo $url;?>"><?php echo $link;?></a>

            <?php if( !empty( $img_cat ) ): ?>
               <div style="display:flex; justify-content:<?php echo $align_cat;?>">
                  <img src="<?php echo $img_cat;?>">
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>




   <!-- <div class="container-<?php echo $class_name;?>">
   <?php if( !empty( $image_cat ) ): ?>
		<img src="<?php echo $image_cat;?>">
	<?php endif; ?>
	<h2><?php echo $title;?></h2>
	<div class="video-thumb">
	<a class="wp-video-popup" href="#"><img src="<?php echo $image_video;?>"></a>
   <?php echo $html;?>
	</div>
</div> -->

<!--    <div class="box" style="background-color:#fcdfd8">
      <div class="frame">
         <div class="content">
            <p style="<?php echo $color;?>">How we helped position TestGorilla as the key voice in skills-based hiring by scaling high-quality frame</p>
            <a style="<?php echo $color;?>" href="#">Know more</a>
            <img src="http://flyingcat.local/wp-content/uploads/img_cat_news.svg">
         </div>
      </div>
   </div>

   <div class="box" style="background-image:url('http://flyingcat.local/wp-content/uploads/img_koyo_02.jpg'); background-size: contain;">
      <div class="frame">
         <div class="content">
            <p style="<?php echo $color;?>">How we helped position TestGorilla as the key voice in skills-based hiring by scaling high-quality frame</p>
            <a style="color:#fff" href="#">Know more</a>
            <img src="http://flyingcat.local/wp-content/uploads/img_cat_news.svg">
         </div>
      </div>
   </div>

   <div class="box" style="background-color:#dfdfa8">
      <div class="frame">
         <div class="content">
            <p>How we helped position TestGorilla as the key voice in skills-based hiring by scaling high-quality frame</p>
            <a style="<?php echo $color;?>" href="#">Know more</a>
            <img src="http://flyingcat.local/wp-content/uploads/img_cat_news.svg">
         </div>
      </div>
   </div>

   <div class="box" style="background-color:#000">
      <div class="frame">
         <div class="content">
         <p style="<?php echo $color;?>">How we helped position TestGorilla as the key voice in skills-based hiring by scaling high-quality frame</p>
         <a style="color:#fff" href="#">Know more</a>
         <img src="http://flyingcat.local/wp-content/uploads/img_cat_news.svg">
         </div>
      </div>
   </div>


   <div class="box" style="bacground-color:#f5f5f5">
      <div class="frame">
         <div class="content">
            <p>How we helped position TestGorilla as the key voice in skills-based hiring by scaling high-quality frame</p>
            <a style="<?php echo $color;?>" href="#">Know more</a>
            <img src="http://flyingcat.local/wp-content/uploads/img_cat_news.svg">
            </div>
      </div>
   </div> -->


 </section>
