<?php
/**
 * Accordion Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'faq';
if (!empty($block['className'])):
    $class_name .= ' ' . esc_attr($block['className']);
endif;

// ACF Fields
$accordeon_num = get_field('acordeon_numero');
?>


<section <?php echo $anchor; ?> id="accordion">

    <div class="<?php echo $class_name; ?>">

        <div class="container-accordion">

            <div class="items-accordion-<?php echo $accordeon_num; ?>">
                <?php while (have_rows('list_accordion')):
                    the_row(); ?>
                    <div class="question-box">

                        <div class="item-accordion">
                            <h2>
                                <?php the_sub_field('title_section'); ?>
                            </h2>
                            <span class="plus"> <img src="<?php the_field('icon_arrow', 'options'); ?>"> </span>
                        </div>

                        <div class="description">
                            <?php the_sub_field('content_section'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

        </div>

    </div>

</section>