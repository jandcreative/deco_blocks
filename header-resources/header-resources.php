<?php
/**
 * Alpha Resources.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'hero';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

// ACF Fields

$image_logo_resource = get_field('hero_resource_logo');
$title_resource = get_field('hero_resources_title');
$content_resource = get_field('hero_resources_content');
$img_cut_cat = get_field('hero_resources_cat');
?>

<section id="banner" class="hero_resources">
   <div class="hero block" style="text-align:center">

     <div class="box-logo">
         <img src="<?php echo $image_logo_resource?>">
      </div>

      <div class="tags">
         <ul>
            <li>INDUSTRY</li>
            <li>HEADCOUNT</li>
            <li>HQ</li>
            <li>STAGE</li>
         </ul>
      </div>

      <div class="content">
         <h1><?php echo $title_resource ?></h1>
         <?php echo $content_resource ?>

         <p class="entry-meta">
				<?php _e('by','flyingcat');?>
				<picture><?php echo get_avatar( get_the_author_meta('ID'), 42, '', get_the_author() ); ?></picture>
				 <strong><?php the_author(); ?> </strong> -  <span> <?php the_time(get_option('date_format')); ?></span>
		 	</p>

      </div>


   </div>
   <div class="cut-cat">
      <img src="<?php echo $img_cut_cat?>">
   </div>
</section>