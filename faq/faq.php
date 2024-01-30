<?php
/**
 * FAQ Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'faq';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

 if(!empty($block['align'])):
    $class_name .= ' align' . esc_attr($block['align']);
 endif;
 
// ACF Fields
?>


<section <?php echo $anchor;?> id="faq">

<div class="<?php echo $class_name;?>">

    <div class="title">
        <h2><?php the_field('title_faq');?></h2>
    </div>

    <div class="container-faq">

        <div class="items-faqs">
        <?php while ( have_rows('list_faq') ) : the_row(); ?>
            <div class="question-box">
                
                <div class="item-faq"> 
                
                    <h3 class="question"><?php the_sub_field('ask_faq');?></h3>
                    <span class="plus"> <img src="<?php the_field('icon', 'options');?>"> </span>
                </div>
                
                <div class="description-ask">
                    <?php the_sub_field('answer_faq');?>
                </div>
            </div>
        <?php endwhile; ?>
        </div>

    </div>

</div>

</section>