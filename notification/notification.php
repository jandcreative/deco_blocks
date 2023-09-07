<?php
/**
 * Notification Block Template.
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


// ACF Fields
$date = get_field('jda_notification_date');
$message= get_field('jda_notification_message');
$button = get_field('jda_notification_button');
$url = get_field('jda_notification_url');

?>

<div <?php echo $anchor;?>class="<?php echo $class_name;
?>">
    <div class="col-left">
        <?php if(!empty ( $date)) : ?>
            <p class="date"><?php echo $date; ?></p>
        <?php endif;?>
        <h3 class="title"><?php echo $message; ?></h3>

    </div>
    <?php if (!empty( $button) && !empty ( $url)): ?>
         <div class="col-right">
            <a href="<?php echo $url; ?>" class="btn"><?php echo $button?></a>
        </div>
    <?php endif;?>
        
</div>


