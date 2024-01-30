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
$title_destacado = get_field('title_banners_destacados');
$alignment = get_field('alignment');
$border = get_field('border');
?>

<div <?php echo $anchor; ?> class="<?php echo $class_name; ?>">

	<!-- 	<?php if (!empty($title_destacado)): ?>
		<h2>
			<?php echo $title_destacado; ?>
		</h2>
	<?php endif; ?> -->

	<div class="container-decopack alignwide">

		<div class="info-decopacks">
			<div class="top-content">
				<p>Nuestro Decopack más popular es tu opción si necesitas un proyecto integral de interiorismo para tu
					hogar.</p>
			</div>

			<div class="bottom-content">
				
			<ul class="list-items">
						<div class="item">
							<p>Test de estilo</p>
						</div>
						<div class="item">
							<p>Videollamada con un Interiorista Profesional para plantear el problema y conversar una
								solución en el momento</p>
						</div>
						<div class="item">
							<p>Comunicación continua con tu interiorista por teléfono, mail, WhatsApp o videollamada.
							</p>
						</div>
						<div class="item">
							<p>Conceptos cretaivos</p>
						</div>

						<div class="item">
							<p>Render 3D</p>
						</div>

						<div class="item">
							<p>Lista de mobiliario y objetos de decoración</p>
						</div>
						<div class="item">
							<p>Opción de servicio de compra entrega y montaje de muebles</p>
						</div>
					</ul>
			</div>
		</div>

		<div class="list-decopacks-base">

			<div class="item-decopack-base">
				<div class="top-content">
					<div class="img">
						<img src="https://jandcreative-dev.com/decotherapy/wp-content/uploads/img_decopack_express.svg">
					</div>
					<div class="content">
						<h3>Decopack Express</h3>
						<p>Nuestro Decopack más popular es tu opción si necesitas un proyecto integral de interiorismo
							para tu hogar.</p>
					</div>
				</div>

				<div class="bottom-content">

					<ul class="list-items">
						<div class="item">
							<p>Test de estilo</p>
							<img src="https://jandcreative-dev.com/decotherapy/wp-content/uploads/check.svg">
						</div>
						<div class="item">
							<p>Videollamada con un Interiorista Profesional para plantear el problema y conversar una
								solución en el momento</p>
							<p class="time">40 min</p>
						</div>
						<div class="item">
							<p>Comunicación continua con tu interiorista por teléfono, mail, WhatsApp o videollamada.
							</p>
						</div>
						<div class="item">
							<p>Conceptos cretaivos</p>
						</div>

						<div class="item">
							<p>Render 3D</p>
						</div>

						<div class="item">
							<p>Lista de mobiliario y objetos de decoración</p>
						</div>
						<div class="item">
							<p>Opción de servicio de compra entrega y montaje de muebles</p>
						</div>
					</ul>
				</div>
			</div>
			<div class="separator"></div>
			<div class="item-decopack-base">
				<div class="top-content">
					<div class="img">
						<img src="https://jandcreative-dev.com/decotherapy/wp-content/uploads/img_decopack_express.svg">
					</div>
					<div class="content">
						<h3>Decopack Express</h3>
						<p>Nuestro Decopack más popular es tu opción si necesitas un proyecto integral de interiorismo
							para tu hogar.</p>
					</div>
				</div>

				<div class="bottom-content">

					<ul class="list-items">
						<div class="item">
							<p>Test de estilo</p>
							<img src="https://jandcreative-dev.com/decotherapy/wp-content/uploads/check.svg">
						</div>
						<div class="item">
							<p>Videollamada con un Interiorista Profesional para plantear el problema y conversar una
								solución en el momento</p>
							<p class="time">40 min</p>
						</div>
						<div class="item">
							<p>Comunicación continua con tu interiorista por teléfono, mail, WhatsApp o videollamada.
							</p>
						</div>
						<div class="item">
							<p>Conceptos cretaivos</p>
						</div>

						<div class="item">
							<p>Render 3D</p>
						</div>

						<div class="item">
							<p>Lista de mobiliario y objetos de decoración</p>
						</div>
						<div class="item">
							<p>Opción de servicio de compra entrega y montaje de muebles</p>
						</div>
					</ul>
				</div>
			</div>


			<!-- <div class="item-decopack-base">
				<div class="img">
					<img src="https://jandcreative-dev.com/decotherapy/wp-content/uploads/img_decopack_express.svg">
				</div>
				<div class="content">
					<h3>Decopack Express</h3>
					<p>Nuestro Decopack más popular es tu opción si necesitas un proyecto integral de interiorismo para
						tu
						hogar.</p>
				</div>

				<ul class="list-items">
					<div class="item">
						<img src="https://jandcreative-dev.com/decotherapy/wp-content/uploads/check.svg">
					</div>
					<div class="item">
						<p>40 mins</p>
					</div>
					<div class="item">
						<img src="https://jandcreative-dev.com/decotherapy/wp-content/uploads/check.svg">
					</div>
					<div class="item">
						<img src="https://jandcreative-dev.com/decotherapy/wp-content/uploads/check.svg">
					</div>
				</ul>
			</div> -->

		</div>
	</div>
</div>