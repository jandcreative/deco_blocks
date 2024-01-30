<?php
/**
 * Localizacion Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])):
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
endif;

$class_name = 'localizacion';
if (!empty($block['className'])):
	$class_name .= ' ' . esc_attr($block['className']);
endif;

// ACF Fields
$txt_localizacion = get_field('txt_localizacion');
$info_localizacion = get_field('info_localizacion');

// Grupos
$links_social = get_field('links_social_media');
?>

<div class="<?php echo $class_name?>">
	<style type="text/css">

	.acf-map {
		max-width: 740px;
		width: 100%;
		height: 462px;
		border-radius:15px;
	}

	// Fixes potential theme css conflict.
	.acf-map img {
	max-width: inherit !important;
	}
	</style>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-rJfouQ23ni_4QEHz9bnYqzq-bp1qNmg&callback=Function.prototype"></script>
	<script type="text/javascript">
	(function( $ ) {

	/**
	* initMap
	*
	* Renders a Google Map onto the selected jQuery element
	*
	* @date    22/10/19
	* @since   5.8.6
	*
	* @param   jQuery $el The jQuery element.
	* @return  object The map instance.
	*/
	function initMap( $el ) {

		// Find marker elements within map.
		var $markers = $el.find('.marker');

		// Create gerenic map.
		var mapArgs = {
			zoom        : $el.data('zoom') || 16,
			mapTypeId   : google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map( $el[0], mapArgs );

		// Add markers.
		map.markers = [];
		$markers.each(function(){
			initMarker( $(this), map );
		});

		// Center map based on markers.
		centerMap( map );

		// Return map instance.
		return map;
	}

	/**
	* initMarker
	*
	* Creates a marker for the given jQuery element and map.
	*
	* @date    22/10/19
	* @since   5.8.6
	*
	* @param   jQuery $el The jQuery element.
	* @param   object The map instance.
	* @return  object The marker instance.
	*/
	function initMarker( $marker, map ) {

		// Get position from marker.
		var lat = $marker.data('lat');
		var lng = $marker.data('lng');
		var latLng = {
			lat: parseFloat( lat ),
			lng: parseFloat( lng )
		};

		// Create marker instance.
		var marker = new google.maps.Marker({
			position : latLng,
			map: map
		});

		// Append to reference for later use.
		map.markers.push( marker );

		// If marker contains HTML, add it to an infoWindow.
		if( $marker.html() ){

			// Create info window.
			var infowindow = new google.maps.InfoWindow({
				content: $marker.html()
			});

			// Show info window when marker is clicked.
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open( map, marker );
			});
		}
	}

	/**
	* centerMap
	*
	* Centers the map showing all markers in view.
	*
	* @date    22/10/19
	* @since   5.8.6
	*
	* @param   object The map instance.
	* @return  void
	*/
	function centerMap( map ) {

		// Create map boundaries from all map markers.
		var bounds = new google.maps.LatLngBounds();
		map.markers.forEach(function( marker ){
			bounds.extend({
				lat: marker.position.lat(),
				lng: marker.position.lng()
			});
		});

		// Case: Single marker.
		if( map.markers.length == 1 ){
			map.setCenter( bounds.getCenter() );

		// Case: Multiple markers.
		} else{
			map.fitBounds( bounds );
		}
	}

	// Render maps on page load.
	$(document).ready(function(){
		$('.acf-map').each(function(){
			var map = initMap( $(this) );
		});
	});

	})(jQuery);
	</script>

	<div class="list-localizacion">
		<div class="content">
			
            <div class="item">
				<?php echo $txt_localizacion;?>
			</div>

			<div class="item">
				<?php echo $info_localizacion;?>
			</div>

			<div class="item">
				<?php if (!empty($links_social['title'])): ?>
					<h3><?php echo $links_social['title'];?></h3>

				<div class="social-icons">			
							 
					<?php if (!empty($links_social['instagram'])): ?>
						<a href="<?php echo $links_social['instagram'];?>" target="_blank"><i class="fab fa-instagram"></i></a>		
					<?php endif; ?>		

					<?php if (!empty($links_social['facebook'])): ?>
						<a href="<?php echo $links_social['facebook'];?>" target="_blank"><i class="fab fa-facebook"></i></a>
					<?php endif; ?>		
					
					<?php if (!empty($links_social['pinterest'])): ?>
						<a href="<?php echo $links_social['pinterest'];?>" target="_blank"><i class="fab fa-pinterest"></i></a>
					<?php endif; ?>

					<?php if (!empty($links_social['twitter'])): ?>
						<a href="<?php echo $links_social['twitter'];?>" target="_blank"><i class="fab fa-twitter"></i></a>
					<?php endif; ?>
					
					<?php if (!empty($links_social['linkedin'])): ?>
						<a href="<?php echo $links_social['linkedin'];?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					<?php endif; ?>

				</div>

				<?php endif; ?>		
			</div>
		</div>
		<?php 
	$location = get_field('google_maps');
	if( $location ): ?>
		<div class="acf-map" data-zoom="16">
			<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
		</div>
	<?php endif; ?>
	</div>

</section>


