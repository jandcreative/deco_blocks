<?php
 /**
 * Case Study Block.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'case-study';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

// ACF Fields
 $logo_case = get_field('logo_case_study');
 $number_case = get_field('number_case_study');
 $title_case = get_field('title_case_study');
?>

<section <?php echo $anchor;?>class="<?php echo $class_name;?>">
  
   <div class="thumb">

         <div class="box-about">
            <div class="brand">
               <img src="<?php echo $logo_case;?>">
            </div>

            <div class="data-content">
               <span class="number-help"><?php echo $number_case;?></span>
               <h2><?php echo $title_case;?></h2>
            </div>
            <button><a style="color:#fff" href="#" target="_blank">
					Gheck out the case study</a>
            </button>
         </div>

   </div>

   <div class="testimonial">

      <div class="item-testimonial">
         <div class="cut-cat"><img src="http://flyingcat.local/wp-content/uploads/img_cut_cat.png"></div>
         <div class="content">

            <p>“Maeva, Leanka and the whole team at Flying Cat have been superb from the start. Their positivity and love for their work is what stands out the most. The perfect match for our business at the stage of growth we're at today. I'd happily recommend them to anyone looking to kick-start their content and SEO strategy from scratch.”</p>

         </div>

         <div class="info-profile">
            <div class="avatar">
               <img src="http://flyingcat.local/wp-content/uploads/img_avatar.png">
            </div>
            <div class="txt">
               <span class="name">Lucas Helaouet</span>   
               <span class="position">Head of Marketing, Spitche</span>
            </div>
         </div>
      </div>
 </section>

