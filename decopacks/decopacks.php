<?php
/**
 * Decopacks Block Template.
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

// Decopack General

$tipo = get_field('type_decopack');
$intro = get_field('intro_decopack');

// Decopack 01

$destacado_01 = get_field('destacado_decopack_01');
$imagen_01 = get_field('img_decopack_01');
$title_01 = get_field('title_decopack_01');
$text_01 = get_field('text_decopack_01');
$button_01 = get_field('button_decopack_01');
$link_01 = get_field('link_decopack_01');

// Grupo
$propiedades_01 = get_field('list_features_01');

// Decopack 02

$destacado_02 = get_field('destacado_decopack_02');
$imagen_02 = get_field('img_decopack_02');
$title_02 = get_field('title_decopack_02');
$text_02 = get_field('text_decopack_02');
$button_02 = get_field('button_decopack_02');
$link_02 = get_field('link_decopack_02');

// Grupo
$propiedades_02 = get_field('list_features_02');

// Decopack 03

$destacado_03 = get_field('destacado_decopack_03');
$imagen_03 = get_field('img_decopack_03');
$title_03 = get_field('title_decopack_03');
$text_03 = get_field('text_decopack_03');
$button_03= get_field('button_decopack_03');
$link_03 = get_field('link_decopack_03');

// Grupo
$propiedades_03 = get_field('list_features_03');

?>

<div <?php echo $anchor; ?> class="<?php echo $class_name; ?> <?php echo $tipo;?>">

	<div class="list-decopacks">

		<div class="item">
			<?php echo $intro;?>
		</div>

		<div class="item-decopack <?php echo $destacado_01;?>">
			<?php if( 'destacado' == $destacado_01 ): ?>
				<span class="label">Más vendido</span>
			<?endif?>
			<div class="img">
				<img src="<?php echo $imagen_01;?>">
			</div>
			<div class="content">
				<h3><?php echo $title_01;?></h3>
				<p><?php echo $text_01;?></p>
			</div>
			<div class="content-table">
				<div class="row">
					<p><?php the_field('txt_propiedad_estilo', 'options');?></p>
					<?php if ('check' == $propiedades_01['test_estilo']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01['test_estilo']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_videollamada', 'options');?></p>
					<p class="value"><?php echo $propiedades_01['videollamada'];?></p>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_visita_presencial', 'options');?></p>
					<?php if ('uncheck' == $propiedades_01['visita_presencial']): ?>
						<p class="value">No</p>
					<?endif?>
					<?php if ('one' == $propiedades_01['visita_presencial']): ?>
						<p class="value">1</p>
					<?endif?>
					<?php if ('two' == $propiedades_01['visita_presencial']): ?>
						<p class="value">2</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_comunicacion', 'options');?></p>
					<?php if ('check' == $propiedades_01['comunicacion_continua']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01['comunicacion_continua']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_conceptos', 'options');?></p>
					<?php if ('uncheck' == $propiedades_01['concepto_creativo']): ?>
						<p class="value">No</p>
					<?endif?>
					<?php if ('one' == $propiedades_01['concepto_creativo']): ?>
						<p class="value">1</p>
					<?endif?>
					<?php if ('two' == $propiedades_01['concepto_creativo']): ?>
						<p class="value">2</p>
					<?endif?>
					<?php if ('three' == $propiedades_01['concepto_creativo']): ?>
						<p class="value">3</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_mobiliario', 'options');?></p>
					<?php if ('check' == $propiedades_01['distribucion_mobiliario']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01['distribucion_mobiliario']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_representacion_visual', 'options');?></p>
					<?php if ('check' == $propiedades_01['representacion_visual']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01['representacion_visual']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_render', 'options');?></p>
					<?php if ('check' == $propiedades_01['render']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01['render']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_lista_mobiliario', 'options');?></p>
					<?php if ('check' == $propiedades_01['lista_mobiliario']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01['lista_mobiliario']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_servicio_compra', 'options');?></p>
					<?php if ('check' == $propiedades_01['servicio_entrega']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_01['servicio_entrega']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row price">
					<?php if (!empty($propiedades_01['precio'])):?>
						<p><?php echo $propiedades_01['precio'];?>€</p>
					<?php endif;?>
				</div>
			</div>
			<div class="content-button">
					<a href="<?php echo $link_01;?>" class="button-decopack">Lo quiero</a>
			</div>
		</div>

		<div class="item-decopack <?php echo $destacado_02;?>">
			<?php if( 'destacado' == $destacado_02 ): ?>
				<span class="label">Más vendido</span>
			<?endif?>
			<div class="img">
				<img src="<?php echo $imagen_02;?>">
			</div>
			<div class="content">
				<h3><?php echo $title_02;?></h3>
				<p><?php echo $text_02;?></p>
			</div>
			<div class="content-table">
				<div class="row">
					<p><?php the_field('txt_propiedad_estilo', 'options');?></p>
					<?php if ('check' == $propiedades_02['test_estilo']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02['test_estilo']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_videollamada', 'options');?></p>
					<p class="value"><?php echo $propiedades_02['videollamada'];?></p>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_visita_presencial', 'options');?></p>
					<?php if ('uncheck' == $propiedades_02['visita_presencial']): ?>
						<p class="value">No</p>
					<?endif?>
					<?php if ('one' == $propiedades_02['visita_presencial']): ?>
						<p class="value">1</p>
					<?endif?>
					<?php if ('two' == $propiedades_02['visita_presencial']): ?>
						<p class="value">2</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_comunicacion', 'options');?></p>
					<?php if ('check' == $propiedades_02['comunicacion_continua']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02['comunicacion_continua']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_conceptos', 'options');?></p>
					<?php if ('uncheck' == $propiedades_02['concepto_creativo']): ?>
						<p class="value">No</p>
					<?endif?>
					<?php if ('one' == $propiedades_02['concepto_creativo']): ?>
						<p class="value">1</p>
					<?endif?>
					<?php if ('two' == $propiedades_02['concepto_creativo']): ?>
						<p class="value">2</p>
					<?endif?>
					<?php if ('three' == $propiedades_02['concepto_creativo']): ?>
						<p class="value">3</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_mobiliario', 'options');?></p>
					<?php if ('check' == $propiedades_02['distribucion_mobiliario']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02['distribucion_mobiliario']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_representacion_visual', 'options');?></p>
					<?php if ('check' == $propiedades_02['representacion_visual']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02['representacion_visual']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_render', 'options');?></p>
					<?php if ('check' == $propiedades_02['render']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02['render']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_lista_mobiliario', 'options');?></p>
					<?php if ('check' == $propiedades_02['lista_mobiliario']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02['lista_mobiliario']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_servicio_compra', 'options');?></p>
					<?php if ('check' == $propiedades_02['servicio_entrega']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_02['servicio_entrega']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row price">
					<?php if (!empty($propiedades_02['precio'])):?>
						<p><?php echo $propiedades_02['precio'];?>€</p>
					<?php endif;?>
				</div>
			</div>
			<div class="content-button">
					<a href="<?php echo $link_02;?>" class="button-decopack">Lo quiero</a>
			</div>
		</div>

		<div class="item-decopack <?php echo $destacado_03;?>">
			<?php if( 'destacado' == $destacado_03 ): ?>
				<span class="label">Más vendido</span>
			<?endif?>
			<div class="img">
				<img src="<?php echo $imagen_03;?>">
			</div>
			<div class="content">
				<h3><?php echo $title_03;?></h3>
				<p><?php echo $text_03;?></p>
			</div>
			<div class="content-table">
				<div class="row">
					<p><?php the_field('txt_propiedad_estilo', 'options');?></p>
					<?php if ('check' == $propiedades_03['test_estilo']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03['test_estilo']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_videollamada', 'options');?></p>
					<p class="value"><?php echo $propiedades_03['videollamada'];?></p>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_visita_presencial', 'options');?></p>
					<?php if ('uncheck' == $propiedades_03['visita_presencial']): ?>
						<p class="value">No</p>
					<?endif?>
					<?php if ('one' == $propiedades_03['visita_presencial']): ?>
						<p class="value">1</p>
					<?endif?>
					<?php if ('two' == $propiedades_03['visita_presencial']): ?>
						<p class="value">2</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_comunicacion', 'options');?></p>
					<?php if ('check' == $propiedades_03['comunicacion_continua']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03['comunicacion_continua']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_conceptos', 'options');?></p>
					<?php if ('uncheck' == $propiedades_03['concepto_creativo']): ?>
						<p class="value">No</p>
					<?endif?>
					<?php if ('one' == $propiedades_03['concepto_creativo']): ?>
						<p class="value">1</p>
					<?endif?>
					<?php if ('two' == $propiedades_03['concepto_creativo']): ?>
						<p class="value">2</p>
					<?endif?>
					<?php if ('three' == $propiedades_03['concepto_creativo']): ?>
						<p class="value">3</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_mobiliario', 'options');?></p>
					<?php if ('check' == $propiedades_03['distribucion_mobiliario']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03['distribucion_mobiliario']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_representacion_visual', 'options');?></p>
					<?php if ('check' == $propiedades_03['representacion_visual']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03['representacion_visual']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_render', 'options');?></p>
					<?php if ('check' == $propiedades_03['render']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03['render']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_lista_mobiliario', 'options');?></p>
					<?php if ('check' == $propiedades_03['lista_mobiliario']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03['lista_mobiliario']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row">
					<p><?php the_field('txt_propiedad_servicio_compra', 'options');?></p>
					<?php if ('check' == $propiedades_03['servicio_entrega']): ?>
						<p class="value">Sí</p>
					<?endif?>
					<?php if ('uncheck' == $propiedades_03['servicio_entrega']): ?>
						<p class="value">No</p>
					<?endif?>
				</div>
				<div class="row price">
					<?php if (!empty($propiedades_03['precio'])):?>
						<p><?php echo $propiedades_03['precio'];?>€</p>
					<?php endif;?>
				</div>
			</div>
		
			<div class="content-button">
					<a href="<?php echo $link_03;?>" class="button-decopack">Lo quiero</a>
			</div>
		</div>

	</div>
	
	<div class="frame-table">
		<div class="list-decopacks table">

		<div class="item">
			<p><?php the_field('txt_propiedad_estilo', 'options');?></p>
		</div>

		<div class="item-decopack <?php echo $destacado_01;?>">
			<div class="content">
				<?php if ('check' == $propiedades_01['test_estilo']): ?>
					<img src="<?php the_field('icon_check', 'options');?>">
				<?endif?>
				<?php if ('uncheck' == $propiedades_01['test_estilo']): ?>
					<img src="<?php the_field('icon_uncheck', 'options');?>">
				<?endif?>
			</div>
		
		</div>
		<div class="item-decopack <?php echo $destacado_02;?>">
			<div class="content">
				<?php if ('check' == $propiedades_02['test_estilo']): ?>
					<img src="<?php the_field('icon_check', 'options');?>">
				<?endif?>
				<?php if ('uncheck' == $propiedades_02['test_estilo']): ?>
					<img src="<?php the_field('icon_uncheck', 'options');?>">
				<?endif?>
			</div>
		</div>
		<div class="item-decopack <?php echo $destacado_03;?>">
			<div class="content">
				<?php if ('check' == $propiedades_03['test_estilo']): ?>
					<img src="<?php the_field('icon_check', 'options');?>">
				<?endif?>
				<?php if ('uncheck' == $propiedades_03['test_estilo']): ?>
					<img src="<?php the_field('icon_uncheck', 'options');?>">
				<?endif?>
			</div>
		</div>
		</div>
		<div class="list-decopacks table">

			<div class="item">
				<p><?php the_field('txt_propiedad_videollamada', 'options');?></p>
			</div>

			<div class="item-decopack <?php echo $destacado_01;?>">
				<div class="content">
					<p><?php echo $propiedades_01['videollamada'];?></p>
				</div>
			</div>

			<div class="item-decopack <?php echo $destacado_02;?>">
				<div class="content">
					<p><?php echo $propiedades_02['videollamada'];?></p>
				</div>
			</div>

			<div class="item-decopack <?php echo $destacado_03;?>">
				<div class="content">
					<p><?php echo $propiedades_03['videollamada'];?></p>
				</div>
			</div>

		</div>

		<div class="list-decopacks table">

			<div class="item">
				<p><?php the_field('txt_propiedad_visita_presencial', 'options');?></p>
			</div>

			<div class="item-decopack <?php echo $destacado_01;?>">
				<div class="content">
					<?php if ('uncheck' == $propiedades_01['visita_presencial']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
					<?php if ('one' == $propiedades_01['visita_presencial']): ?>
						<p>1</p>
					<?endif?>
					<?php if ('two' == $propiedades_01['visita_presencial']): ?>
						<p>2</p>
					<?endif?>
				</div>
			</div>

			<div class="item-decopack <?php echo $destacado_02;?>">
				<div class="content">
					<?php if ('uncheck' == $propiedades_02['visita_presencial']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
					<?php if ('one' == $propiedades_02['visita_presencial']): ?>
						<p>1</p>
					<?endif?>
					<?php if ('two' == $propiedades_02['visita_presencial']): ?>
						<p>2</p>
					<?endif?>
				</div>
			</div>

			<div class="item-decopack <?php echo $destacado_03;?>">
				<div class="content">
					<?php if ('uncheck' == $propiedades_03['visita_presencial']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
					<?php if ('one' == $propiedades_03['visita_presencial']): ?>
						<p>1</p>
					<?endif?>
					<?php if ('two' == $propiedades_03['visita_presencial']): ?>
						<p>2</p>
					<?endif?>
				</div>
			</div>

		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_comunicacion', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01;?>">
				<div class="content">
					<?php if ('check' == $propiedades_01['comunicacion_continua']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_01['comunicacion_continua']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02;?>">
				<div class="content">
					<?php if ('check' == $propiedades_02['comunicacion_continua']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_02['comunicacion_continua']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03;?>">
				<div class="content">
					<?php if ('check' == $propiedades_03['comunicacion_continua']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_03['comunicacion_continua']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>

		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_conceptos', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01;?>">
				<div class="content">
					<?php if ('uncheck' == $propiedades_01['concepto_creativo']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
					<?php if ('one' == $propiedades_01['concepto_creativo']): ?>
						<p>1</p>
					<?endif?>
					<?php if ('two' == $propiedades_01['concepto_creativo']): ?>
						<p>2</p>
					<?endif?>
					<?php if ('three' == $propiedades_01['concepto_creativo']): ?>
						<p>3</p>
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02;?>">
				<div class="content">
					<?php if ('uncheck' == $propiedades_02['concepto_creativo']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
					<?php if ('one' == $propiedades_02['concepto_creativo']): ?>
						<p>1</p>
					<?endif?>
					<?php if ('two' == $propiedades_02['concepto_creativo']): ?>
						<p>2</p>
					<?endif?>
					<?php if ('three' == $propiedades_02['concepto_creativo']): ?>
						<p>3</p>
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03;?>">
				<div class="content">
					<?php if ('uncheck' == $propiedades_03['concepto_creativo']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
					<?php if ('one' == $propiedades_03['concepto_creativo']): ?>
						<p>1</p>
					<?endif?>
					<?php if ('two' == $propiedades_03['concepto_creativo']): ?>
						<p>2</p>
					<?endif?>
					<?php if ('three' == $propiedades_03['concepto_creativo']): ?>
						<p>3</p>
					<?endif?>
				</div>
			</div>
		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_mobiliario', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01;?>">
				<div class="content">
					<?php if ('check' == $propiedades_01['distribucion_mobiliario']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_01['distribucion_mobiliario']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02;?>">
				<div class="content">
					<?php if ('check' == $propiedades_02['distribucion_mobiliario']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_02['distribucion_mobiliario']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03;?>">
				<div class="content">
					<?php if ('check' == $propiedades_03['distribucion_mobiliario']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_03['distribucion_mobiliario']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_representacion_visual', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01;?>">
				<div class="content">
					<?php if ('check' == $propiedades_01['representacion_visual']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_01['representacion_visual']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02;?>">
				<div class="content">
					<?php if ('check' == $propiedades_02['representacion_visual']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_02['representacion_visual']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03;?>">
				<div class="content">
					<?php if ('check' == $propiedades_03['representacion_visual']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_03['representacion_visual']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_render', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01;?>">
				<div class="content">
					<?php if ('check' == $propiedades_01['render']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_01['render']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02;?>">
				<div class="content">
					<?php if ('check' == $propiedades_02['render']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_02['render']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03;?>">
				<div class="content">
					<?php if ('check' == $propiedades_03['render']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_03['render']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_lista_mobiliario', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01;?>">
				<div class="content">
					<?php if ('check' == $propiedades_01['lista_mobiliario']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_01['lista_mobiliario']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02;?>">
				<div class="content">
					<?php if ('check' == $propiedades_02['lista_mobiliario']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_02['lista_mobiliario']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03;?>">
				<div class="content">
					<?php if ('check' == $propiedades_03['lista_mobiliario']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_03['lista_mobiliario']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
		</div>
		<div class="list-decopacks table">
			<div class="item">
				<p><?php the_field('txt_propiedad_servicio_compra', 'options');?></p>
			</div>
			<div class="item-decopack <?php echo $destacado_01;?>">
				<div class="content">
					<?php if ('check' == $propiedades_01['servicio_entrega']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_01['servicio_entrega']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02;?>">
				<div class="content">
					<?php if ('check' == $propiedades_02['servicio_entrega']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_02['servicio_entrega']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03;?>">
				<div class="content">
					<?php if ('check' == $propiedades_03['servicio_entrega']): ?>
						<img src="<?php the_field('icon_check', 'options');?>">
					<?endif?>
					<?php if ('uncheck' == $propiedades_03['servicio_entrega']): ?>
						<img src="<?php the_field('icon_uncheck', 'options');?>">
					<?endif?>
				</div>
			</div>
		</div>
		<div class="list-decopacks table">
			<div class="item">
			
			</div>
			<div class="item-decopack <?php echo $destacado_01;?> price">
				<div class="content">
					<?php if (!empty($propiedades_01['precio'])):?>
						<p><?php echo $propiedades_01['precio'];?>€</p>
					<?php endif;?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_02;?> price">
				<div class="content">
					<?php if (!empty($propiedades_02['precio'])):?>
						<p><?php echo $propiedades_02['precio'];?>€</p>
					<?php endif;?>
				</div>
			</div>
			<div class="item-decopack <?php echo $destacado_03;?> price">
				<div class="content">
					<?php if (!empty($propiedades_03['precio'])):?>
						<p><?php echo $propiedades_03['precio'];?>€</p>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>

	<div class="buttons">
		<div class="list-decopacks button">

			<div class="item">
					
			</div>

			<div class="item-decopack <?php echo $destacado_01;?>">
				<div class="content">
					<a href="<?php echo $link_01;?>" class="button-decopack">Lo quiero</a>
				</div>
			</div>

			<div class="item-decopack <?php echo $destacado_02;?>">
				<div class="content">
					<a href="<?php echo $link_02;?>" class="button-decopack">Lo quiero</a>
				</div>
			</div>

			<div class="item-decopack <?php echo $destacado_03;?>">
				<div class="content">
					<a href="<?php echo $link_03;?>" class="button-decopack">Lo quiero</a>
				</div>
			</div>

		</div>
	</div>
</div>