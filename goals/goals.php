<?php
/**
 * Goals Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'goals';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

 if(!empty($block['align'])):
    $class_name .= ' align' . esc_attr($block['align']);
 endif;
 
// ACF Fields
// 01
$title_01 = get_field('title_01_goals');
$content_01 = get_field('html_01_goals');
//02
$title_02 = get_field('title_02_goals');
$content_02 = get_field('html_02_goals');
//03
$title_03 = get_field('title_03_goals');
$content_03 = get_field('html_03_goals');
?>


<section <?php echo $anchor;?> id="goals">

    <div class="<?php echo $class_name;?>">

        <div class="container-goals">

            <div class="items-tabs">
                <div class="question-box">
                    
                    <div class="item-faq"> 
                    
                        <h3 class="question"><?php echo $title_01;?></h3>
                        <span class="plus"><img src="<?php the_field('icon', 'options');?>"></span>
                    </div>
                    
                    <div class="description-ask">
                        <?php echo $content_01; ?>
                    </div>
                </div>

                <div class="question-box">
                    
                    <div class="item-faq"> 
                    
                        <h3 class="question"><?php echo $title_02;?></h3>
                        <span class="plus"><img src="<?php the_field('icon', 'options');?>"></span>
                    </div>
                    
                    <div class="description-ask">
                        <?php echo $content_02; ?>
                    </div>
                </div>

                <div class="question-box">
                    
                    <div class="item-faq"> 
                    
                        <h3 class="question"><?php echo $title_03;?></h3>
                        <span class="plus"><img src="<?php the_field('icon', 'options');?>"></span>
                    </div>
                    
                    <div class="description-ask">
                        <?php echo $content_03; ?>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>