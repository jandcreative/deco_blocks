<?php
 /**
 * Case Study Block.
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

?>

<section <?php echo $anchor;?>class="<?php echo $class_name;?>">
  
   <div class="box" style="background-color:#ff0049">
      <div class="frame">
         <div class="content">
            <p style="color:#fff">How we helped position TestGorilla as the key voice in skills-based hiring by scaling high-quality frame</p>
            <a style="color:#fff" href="#">Know more</a>
            <img src="http://flyingcat.local/wp-content/uploads/img_cat_news.svg">
         </div>
      </div>
   </div>

   <div class="box" style="background-color:#fcdfd8">
      <div class="frame">
         <div class="content">
            <p style="color:#000">How we helped position TestGorilla as the key voice in skills-based hiring by scaling high-quality frame</p>
            <a style="color:#000" href="#">Know more</a>
            <img src="http://flyingcat.local/wp-content/uploads/img_cat_news.svg">
         </div>
      </div>
   </div>

   <div class="box" style="background-image:url('http://flyingcat.local/wp-content/uploads/img_koyo_02.jpg'); background-size: contain;">
      <div class="frame">
         <div class="content">
            <p style="color:#fff">How we helped position TestGorilla as the key voice in skills-based hiring by scaling high-quality frame</p>
            <a style="color:#fff" href="#">Know more</a>
            <img src="http://flyingcat.local/wp-content/uploads/img_cat_news.svg">
         </div>
      </div>
   </div>

   <div class="box" style="background-color:#dfdfa8">
      <div class="frame">
         <div class="content">
            <p>How we helped position TestGorilla as the key voice in skills-based hiring by scaling high-quality frame</p>
            <a style="color:#000" href="#">Know more</a>
            <img src="http://flyingcat.local/wp-content/uploads/img_cat_news.svg">
         </div>
      </div>
   </div>

   <div class="box" style="background-color:#000">
      <div class="frame">
         <div class="content">
         <p style="color:#fff">How we helped position TestGorilla as the key voice in skills-based hiring by scaling high-quality frame</p>
         <a style="color:#fff" href="#">Know more</a>
         <img src="http://flyingcat.local/wp-content/uploads/img_cat_news.svg">
         </div>
      </div>
   </div>


   <div class="box" style="bacground-color:#f5f5f5">
      <div class="frame">
         <div class="content">
            <p>How we helped position TestGorilla as the key voice in skills-based hiring by scaling high-quality frame</p>
            <a style="color:#000" href="#">Know more</a>
            <img src="http://flyingcat.local/wp-content/uploads/img_cat_news.svg">
            </div>
      </div>
   </div>


 </section>
