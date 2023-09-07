

<?php
/**
 * Pricing Block Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'jda-notification';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

if(!empty($block['align'])):
   $class_name .= ' align' . esc_attr($block['align']);
endif;

?>


<div class="package-container">

    <div class="card messaging <?php the_field('box_featured_messaging');?>">
        <div class="most-popular"><span><?php the_field('text_featured_messaging');?></span></div>
        <div class="message">
            <h3><?php the_field('title_messaging');?></h3>
            <p><?php the_field('description_messaging');?></p>
        </div>
        <div class="price">
            <h4 class="text1"><mark class="dolar">$</mark><?php the_field('text_price_monthly_messaging');?><mark>/ mo</mark></h4>
            <h4 class="text2"><mark class="dolar">$</mark><?php the_field('text_price_yearly_messaging');?><mark>/ mo</mark></h4>
            <p class="text3"><?php the_field('text_monthly_messaging');?></p>
            <p class="text4"><?php the_field('text_yearly_messaging');?></p>
         </div>

        <button><a target="_blank" href="<?php the_field('button_link_messages');?>"><?php the_field('button_text_messaging');?></a></button>


        <ul class="list">
         <?php while ( have_rows('list_features_messages') ) : the_row(); ?>
                
                
            <li><i class="fas fa-check"></i><?php the_sub_field('feature_message');?></li>

        <?php endwhile; ?>

         </ul>

    </div>

     <div class="card pro <?php the_field('box_featured_pro');?>">
        <div class="most-popular"><span><?php the_field('text_featured_pro');?></span></div>
        <div class="message">
            <div class="most-popular-white"><span></span></div>
            <h3><?php the_field('title_pro');?></h3>
            <p><?php the_field('description_pro');?></p>
        </div>
        <div class="price">
            <h4 class="text1"><mark class="dolar">$</mark><?php the_field('text_price_monthly_pro');?><mark>/ mo</mark></h4>
            <h4 class="text2"><mark class="dolar">$</mark><?php the_field('text_price_yearly_pro');?><mark>/ mo</mark></h4>
            <p class="text3"><?php the_field('text_monthly_pro');?></p>
            <p class="text4"><?php the_field('text_yearly_pro');?></p>
         </div>

       <button><a target="_blank" href="<?php the_field('button_link_pro');?>"><?php the_field('button_text_pro');?></a></button>
        
       
        <ul class="list">
        <p><?php the_field('text_feature_plus_pro');?></p>
        <?php while ( have_rows('list_features_pro') ) : the_row(); ?>
                
                
                    <li><i class="fas fa-check"></i><?php the_sub_field('feature_pro');?></li>
                       
                 

        <?php endwhile; ?>

        </ul>


    </div>

     <div class="card enterprise <?php the_field('box_featured_enterprise');?>">
        <div class="most-popular"><span><?php the_field('text_featured_enterprise');?></span></div>
        <div class="message">
             <h3><?php the_field('title_enterprise');?></h3>
            <p><?php the_field('description_enterprise');?></p>
        </div>
        <div class="price">
            <h4 class="text1"><?php the_field('text_price_monthly_enterprise');?></h4>
            <h4 class="text2"><?php the_field('text_price_yearly_enterprise');?></h4>
            <p class="text3"><?php the_field('text_monthly_enterprise');?></p>
            <p class="text4"><?php the_field('text_yearly_enterprise');?></p>
         </div>

         <button><a target="_blank" href="<?php the_field('button_link_enterprise');?>"><?php the_field('button_text_enterprise');?></a></button>

         <ul class="list">
         <p><?php the_field('text_feature_plus_enterprise');?></p>
         <?php while ( have_rows('list_features_enterprise') ) : the_row(); ?>							    
               
                    <li><i class="fas fa-check"></i><?php the_sub_field('feature_enterprise');?></li>						     

        <?php endwhile; ?>
        </ul>
    </div>

</div>

