<?php
/**
 * Equipo Template.
 */
/* $anchor = '';
if (!empty($block['anchor'])):
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'publications';
if (!empty($block['className'])):
    $class_name .= ' ' . esc_attr($block['className']);
endif;

if (!empty($block['align'])):
    $class_name .= ' align' . esc_attr($block['align']);
endif; */

?>

<div class="list-grid-members-team">

    <?php while (have_rows('listado_equipo')):
        the_row(); ?>

        <div class="item" style="border-radius: 15px">

            <img src="<?php the_sub_field('imagen_persona_equipo'); ?>">

            <div class="content">
                <div class="text">
                    <h3>
                        <?php the_sub_field('nombre_persona_equipo'); ?>
                    </h3>
                    <p>
                        <?php the_sub_field('puesto_persona_equipo'); ?>
                    </p>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
</div>
