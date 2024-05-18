<?php
/**
 * Decopacks Pymes Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'decopacks';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

// ACF Fields

// Decopack Pyme

$intro_pyme = get_field('intro_decopack_pyme');

// Decopack 01

$destacado_01_pyme = get_field('destacado_decopack_pyme_01');
$imagen_01_pyme = get_field('img_decopack_pyme_01');
$title_01_pyme = get_field('title_decopack_pyme_01');
$text_01_pyme = get_field('text_decopack_pyme_01');
$button_01_pyme = get_field('button_decopack_pyme_01');
$link_01_pyme = get_field('link_decopack_pyme_01');

// Grupo
$propiedades_01_pyme = get_field('list_features_pyme_01');

// Decopack 02

$destacado_02_pyme = get_field('destacado_decopack_pyme_02');
$imagen_02_pyme = get_field('img_decopack_pyme_02');
$title_02_pyme = get_field('title_decopack_pyme_02');
$text_02_pyme = get_field('text_decopack_pyme_02');
$button_02_pyme = get_field('button_decopack_pyme_02');
$link_02_pyme = get_field('link_decopack_pyme_02');

// Grupo
$propiedades_02_pyme = get_field('list_features_pyme_02');

// Decopack 03

$destacado_03_pyme = get_field('destacado_decopack_pyme_03');
$imagen_03_pyme = get_field('img_decopack_pyme_03');
$title_03_pyme = get_field('title_decopack_pyme_03');
$text_03_pyme = get_field('text_decopack_pyme_03');
$button_03_pyme = get_field('button_decopack_pyme_03');
$link_03_pyme = get_field('link_decopack_pyme_03');

// Grupo
$propiedades_03_pyme = get_field('list_features_pyme_03');

?>

<div <?php echo $anchor; ?> class="<?php echo $class_name; ?> company">

	<div class="list-decopacks">

		<div class="item">
			<?php echo $intro_pyme;?>
		</div>

		<div class="item-decopack <?php echo $destacado_01_pyme;?>">
			<?php if( 'destacado' == $destacado_01_pyme ): ?>
				<span class="label">Más vendido</span>
			<?endif?>
			<div class="img">
				<img src="<?php echo $imagen_01_pyme;?>">
			</div>
			<div class="content">
				<h3><?php echo $title_01_pyme;?></h3>
				<p><?php echo $text_01_pyme;?></p>
			</div>
			<div class="content-table">
				<!-- <div class="row">
					<p><?php the_field('txt_propiedad_estilo_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_01_pyme['test_estilo']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['test_estilo']): ?>
						<p class="value">No</p>
					<?endif?>
				</div> -->
				<div class="row">
					<p><?php the_field('txt_propiedad_videollamada_pyme', 'options');?></p>
					<p class="value"><?php echo $propiedades_01_pyme['videollamada'];?></p>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_visita_prensencial_pyme', 'options');?></p>
					<?php if ('uncheck' == $propiedades_01_pyme['visita_presencial']): ?>
						<p class="value">No</p>
					<?endif?>
					<?php if ('one' == $propiedades_01_pyme['visita_presencial']): ?>
						<p class="value">1</p>
					<?endif?>
					<?php if ('two' == $propiedades_01_pyme['visita_presencial']): ?>
						<p class="value">2</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_comunicacion_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_01_pyme['comunicacion_continua']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['comunicacion_continua']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_conceptos_pyme', 'options');?></p>
					<?php if ('uncheck' == $propiedades_01_pyme['concepto_creativo']): ?>
						<p class="value">No</p>
					<?endif?>
					<?php if ('one' == $propiedades_01_pyme['concepto_creativo']): ?>
						<p class="value">1</p>
					<?endif?>
					<?php if ('two' == $propiedades_01_pyme['concepto_creativo']): ?>
						<p class="value">2</p>
					<?endif?>
					<?php if ('three' == $propiedades_01_pyme['concepto_creativo']): ?>
						<p class="value">3</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_creacion_concepto_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_01_pyme['creacion_concepto']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['creacion_concepto']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>	
				<div class="row">
					<p><?php the_field('txt_propiedad_mobiliario_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_01_pyme['distribucion_mobiliario']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['distribucion_mobiliario']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_representacion_visual_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_01_pyme['representacion_visual']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['representacion_visual']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_render_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_01_pyme['render']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['render']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_lista_mobiliario_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_01_pyme['lista_mobiliario']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['lista_mobiliario']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_servicio_compra_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_01_pyme['servicio_entrega']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['servicio_entrega']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row price">
					<?php if (!empty($propiedades_01_pyme['precio'])):?>
						<p><?php echo $propiedades_01_pyme['precio'];?>€</p>
					<?php endif;?>
				</div>
			</div>
			<div class="content-button">
					<a href="<?php echo $link_01_pyme;?>" class="button-decopack">Lo quiero</a>
			</div>
		</div>

		<div class="item-decopack <?php echo $destacado_02_pyme;?>">
			<?php if( 'destacado' == $destacado_02_pyme ): ?>
				<span class="label">Más vendido</span>
			<?endif?>
			<div class="img">
				<img src="<?php echo $imagen_02_pyme;?>">
			</div>
			<div class="content">
				<h3><?php echo $title_02_pyme;?></h3>
				<p><?php echo $text_02_pyme;?></p>
			</div>
			<div class="content-table">
				<!-- <div class="row">
					<p><?php the_field('txt_propiedad_estilo_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_02_pyme['test_estilo']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['test_estilo']): ?>
						<p class="value">No</p>
					<?endif?>
				</div> -->
				<div class="row">
					<p><?php the_field('txt_propiedad_videollamada_pyme', 'options');?></p>
					<p class="value"><?php echo $propiedades_02_pyme['videollamada'];?></p>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_visita_prensencial_pyme', 'options');?></p>
					<?php if ('uncheck' == $propiedades_02_pyme['visita_presencial']): ?>
						<p class="value">No</p>
					<?endif?>
					<?php if ('one' == $propiedades_02_pyme['visita_presencial']): ?>
						<p class="value">1</p>
					<?endif?>
					<?php if ('two' == $propiedades_02_pyme['visita_presencial']): ?>
						<p class="value">2</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_videollamada_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_02_pyme['comunicacion_continua']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['comunicacion_continua']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_conceptos', 'options');?></p>
					<?php if ('uncheck' == $propiedades_02_pyme['concepto_creativo']): ?>
						<p class="value">No</p>
					<?endif?>
					<?php if ('one' == $propiedades_02_pyme['concepto_creativo']): ?>
						<p class="value">1</p>
					<?endif?>
					<?php if ('two' == $propiedades_02_pyme['concepto_creativo']): ?>
						<p class="value">2</p>
					<?endif?>
					<?php if ('three' == $propiedades_02_pyme['concepto_creativo']): ?>
						<p class="value">3</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_creacion_concepto_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_02_pyme['creacion_concepto']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['creacion_concepto']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_mobiliario_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_02_pyme['distribucion_mobiliario']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['distribucion_mobiliario']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_representacion_visual_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_02_pyme['representacion_visual']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['representacion_visual']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_render_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_02_pyme['render']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['render']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_lista_mobiliario_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_02_pyme['lista_mobiliario']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['lista_mobiliario']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_servicio_compra_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_02_pyme['servicio_entrega']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['servicio_entrega']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row price">
					<?php if (!empty($propiedades_02_pyme['precio'])):?>
						<p><?php echo $propiedades_02_pyme['precio'];?>€</p>
					<?php endif;?>
				</div>
			</div>
			<div class="content-button">
					<a href="<?php echo $link_02_pyme;?>" class="button-decopack">Lo quiero</a>
			</div>
		</div>

		<div class="item-decopack <?php echo $destacado_03_pyme;?>">
			<?php if( 'destacado' == $destacado_03_pyme ): ?>
				<span class="label">Más vendido</span>
			<?endif?>
			<div class="img">
				<img src="<?php echo $imagen_03_pyme;?>">
			</div>
			<div class="content">
				<h3><?php echo $title_03_pyme;?></h3>
				<p><?php echo $text_03_pyme;?></p>
			</div>
			<div class="content-table">
				<!-- <div class="row">
					<p><?php the_field('txt_propiedad_estilo_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_03_pyme['test_estilo']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['test_estilo']): ?>
						<p class="value">No</p>
					<?endif?>
				</div> -->
				<div class="row">
					<p><?php the_field('txt_propiedad_videollamada_pyme', 'options');?></p>
					<p class="value"><?php echo $propiedades_03_pyme['videollamada'];?></p>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_visita_prensencial_pyme', 'options');?></p>
					<?php if ('uncheck' == $propiedades_03_pyme['visita_presencial']): ?>
						<p class="value">No</p>
					<?endif?>
					<?php if ('one' == $propiedades_03_pyme['visita_presencial']): ?>
						<p class="value">1</p>
					<?endif?>
					<?php if ('two' == $propiedades_03_pyme['visita_presencial']): ?>
						<p class="value">2</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_conceptos', 'options');?></p>
					<?php if ('uncheck' == $propiedades_03_pyme['concepto_creativo']): ?>
						<p class="value">No</p>
					<?endif?>
					<?php if ('one' == $propiedades_03_pyme['concepto_creativo']): ?>
						<p class="value">1</p>
					<?endif?>
					<?php if ('two' == $propiedades_03_pyme['concepto_creativo']): ?>
						<p class="value">2</p>
					<?endif?>
					<?php if ('three' == $propiedades_03_pyme['concepto_creativo']): ?>
						<p class="value">3</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_creacion_concepto_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_03_pyme['creacion_concepto']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['creacion_concepto']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_mobiliario_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_03_pyme['distribucion_mobiliario']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['distribucion_mobiliario']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_representacion_visual_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_03_pyme['representacion_visual']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['representacion_visual']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_render_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_03_pyme['render']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['render']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_lista_mobiliario_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_03_pyme['lista_mobiliario']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['lista_mobiliario']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_servicio_compra_pyme', 'options');?></p>
					<?php if ('check' == $propiedades_03_pyme['servicio_entrega']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['servicio_entrega']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row price">
					<?php if (!empty($propiedades_03_pyme['precio'])):?>
						<p><?php echo $propiedades_03_pyme['precio'];?>€</p>
					<?php endif;?>
				</div>
			</div>
			<div class="content-button">
					<a href="<?php echo $link_03_pyme;?>" class="button-decopack">Lo quiero</a>
			</div>
		</div>

	</div>
	
	<div class="frame-table">
	<!-- 	<div class="list-decopacks table">

		<div class="item">
			<p><?php the_field('txt_propiedad_estilo_pyme', 'options');?></p>
		</div>

		<div class="item-decopack <?php echo $destacado_01_pyme;?>">
			<div class="content">
				<?php if ('check' == $propiedades_01_pyme['test_estilo']): ?>
					<img src="<?php the_field('icon_check_pyme', 'options');?>">
				<?endif?>
				<?php if ('uncheck' == $propiedades_01_pyme['test_estilo']): ?>
					<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
				<?endif?>
			</div>
		
		</div>
		<div class="item-decopack <?php echo $destacado_02_pyme;?>">
			<div class="content">
				<?php if ('check' == $propiedades_02_pyme['test_estilo']): ?>
					<img src="<?php the_field('icon_check_pyme', 'options');?>">
				<?endif?>
				<?php if ('uncheck' == $propiedades_02_pyme['test_estilo']): ?>
					<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
				<?endif?>
			</div>
		</div>
		<div class="item-decopack <?php echo $destacado_03_pyme;?>">
			<div class="content">
				<?php if ('check' == $propiedades_03_pyme['test_estilo']): ?>
					<img src="<?php the_field('icon_check_pyme', 'options');?>">
				<?endif?>
				<?php if ('uncheck' == $propiedades_03_pyme['test_estilo']): ?>
					<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
				<?endif?>
			</div>
		</div>
		</div> -->
		<div class="list-decopacks table">

			<div class="item">
				<p><?php the_field('txt_propiedad_videollamada_pyme', 'options');?></p>
			</div>

			<div class="item-decopack <?php echo $destacado_01_pyme;?>">
				<div class="content">
					<p><?php echo $propiedades_01_pyme['videollamada'];?></p>
				</div>
			</div>

			<div class="item-decopack <?php echo $destacado_02_pyme;?>">
				<div class="content">
					<p><?php echo $propiedades_02_pyme['videollamada'];?></p>
				</div>
			</div>

			<div class="item-decopack <?php echo $destacado_03_pyme;?>">
				<div class="content">
					<p><?php echo $propiedades_03_pyme['videollamada'];?></p>
				</div>
			</div>

		</div>

		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_visita_prensencial_pyme', 'options');?></p>
			</div>

			<div class="item-decopack <?php echo $destacado_01_pyme;?>">
				<div class="content">
					<?php if ('uncheck' == $propiedades_01_pyme['visita_presencial']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
					<?php if ('one' == $propiedades_01_pyme['visita_presencial']): ?>
						<p>1</p>
					<?endif?>
					<?php if ('two' == $propiedades_01_pyme['visita_presencial']): ?>
						<p>2</p>
					<?endif?>
				</div>
			</div>

			<div class="item-decopack <?php echo $destacado_02_pyme;?>">
				<div class="content">
					<?php if ('uncheck' == $propiedades_02_pyme['visita_presencial']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
					<?php if ('one' == $propiedades_02_pyme['visita_presencial']): ?>
						<p>1</p>
					<?endif?>
					<?php if ('two' == $propiedades_02_pyme['visita_presencial']): ?>
						<p>2</p>
					<?endif?>
				</div>
			</div>

			<div class="item-decopack <?php echo $destacado_03_pyme;?>">
				<div class="content">
					<?php if ('uncheck' == $propiedades_03_pyme['visita_presencial']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
					<?php if ('one' == $propiedades_03_pyme['visita_presencial']): ?>
						<p>1</p>
					<?endif?>
					<?php if ('two' == $propiedades_03_pyme['visita_presencial']): ?>
						<p>2</p>
					<?endif?>
				</div>
			</div>

		</div>
		
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_comunicacion_pyme', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_01_pyme['comunicacion_continua']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['comunicacion_continua']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_02_pyme['comunicacion_continua']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['comunicacion_continua']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_03_pyme['comunicacion_continua']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['comunicacion_continua']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>

		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_conceptos', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01_pyme;?>">
				<div class="content">
					<?php if ('uncheck' == $propiedades_01_pyme['concepto_creativo']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
					<?php if ('one' == $propiedades_01_pyme['concepto_creativo']): ?>
						<p>1</p>
					<?endif?>
					<?php if ('two' == $propiedades_01_pyme['concepto_creativo']): ?>
						<p>2</p>
					<?endif?>
					<?php if ('three' == $propiedades_01_pyme['concepto_creativo']): ?>
						<p>3</p>
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02_pyme;?>">
				<div class="content">
					<?php if ('uncheck' == $propiedades_02_pyme['concepto_creativo']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
					<?php if ('one' == $propiedades_02_pyme['concepto_creativo']): ?>
						<p>1</p>
					<?endif?>
					<?php if ('two' == $propiedades_02_pyme['concepto_creativo']): ?>
						<p>2</p>
					<?endif?>
					<?php if ('three' == $propiedades_02['concepto_creativo']): ?>
						<p>3</p>
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03_pyme;?>">
				<div class="content">
					<?php if ('uncheck' == $propiedades_03_pyme['concepto_creativo']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
					<?php if ('one' == $propiedades_03_pyme['concepto_creativo']): ?>
						<p>1</p>
					<?endif?>
					<?php if ('two' == $propiedades_03_pyme['concepto_creativo']): ?>
						<p>2</p>
					<?endif?>
					<?php if ('three' == $propiedades_03_pyme['concepto_creativo']): ?>
						<p>3</p>
					<?endif?>
				</div>
			</div>
		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_creacion_concepto_pyme', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_01_pyme['creacion_concepto']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['creacion_concepto']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_02_pyme['creacion_concepto']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['creacion_concepto']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_03_pyme['creacion_concepto']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['creacion_concepto']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_mobiliario_pyme', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_01_pyme['distribucion_mobiliario']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['distribucion_mobiliario']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_02_pyme['distribucion_mobiliario']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['distribucion_mobiliario']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_03_pyme['distribucion_mobiliario']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['distribucion_mobiliario']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_representacion_visual_pyme', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_01_pyme['representacion_visual']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['representacion_visual']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_02_pyme['representacion_visual']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['representacion_visual']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_03_pyme['representacion_visual']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['representacion_visual']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_render_pyme', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_01_pyme['render']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['render']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_02_pyme['render']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['render']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_03_pyme['render']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['render']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_lista_mobiliario_pyme', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_01_pyme['lista_mobiliario']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['lista_mobiliario']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_02_pyme['lista_mobiliario']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['lista_mobiliario']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_03_pyme['lista_mobiliario']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['lista_mobiliario']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_servicio_compra_pyme', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_01_pyme['servicio_entrega']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_01_pyme['servicio_entrega']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_02_pyme['servicio_entrega']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_02_pyme['servicio_entrega']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03_pyme;?>">
				<div class="content">
					<?php if ('check' == $propiedades_03_pyme['servicio_entrega']): ?>
						<img src="<?php the_field('icon_check_pyme', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_03_pyme['servicio_entrega']): ?>
						<img src="<?php the_field('icon_uncheck_pyme', 'options');?>">
					<?endif?>
				</div>
			</div>
		</div>
		<div class="list-decopacks table">
			<div class="item">
			
			</div>
			<div class="item-decopack <?php echo $destacado_01_pyme;?> price">
				<div class="content">
					<?php if (!empty($propiedades_01_pyme['precio'])):?>
						<p><?php echo $propiedades_01_pyme['precio'];?>€</p>
					<?php endif;?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02_pyme;?> price">
				<div class="content">
					<?php if (!empty($propiedades_02_pyme['precio'])):?>
						<p><?php echo $propiedades_02_pyme['precio'];?>€</p>
					<?php endif;?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03_pyme;?> price">
				<div class="content">
					<?php if (!empty($propiedades_03_pyme['precio'])):?>
						<p><?php echo $propiedades_03_pyme['precio'];?>€</p>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>

	<div class="buttons">
		<div class="list-decopacks button">

			<div class="item">
					
			</div>

			<div class="item-decopack <?php echo $destacado_01_pyme;?>">
				<div class="content">
					<a href="<?php echo $link_01_pyme;?>" class="button-decopack">Lo quiero</a>
				</div>
			</div>

			<div class="item-decopack <?php echo $destacado_02_pyme;?>">
				<div class="content">
					<a href="<?php echo $link_02_pyme;?>" class="button-decopack">Lo quiero</a>
				</div>
			</div>

			<div class="item-decopack <?php echo $destacado_03_pyme;?>">
				<div class="content">
					<a href="<?php echo $link_03_pyme;?>" class="button-decopack">Lo quiero</a>
				</div>
			</div>

		</div>
	</div>
</div>