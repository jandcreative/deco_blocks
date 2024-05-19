<?php
/**
 * Localizacion MAD Block Template.
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
$txt_localizacion_02 = get_field('txt_localizacion_mad');
$info_localizacion_02 = get_field('info_localizacion_mad');
$key_googlemaps_02 = get_field('key_googlemaps_mad');


// Grupos
$links_social_02 = get_field('links_social_media_mad');
?>

<div class="<?php echo $class_name?>">
	<style type="text/css">

	.acf-map-02 {
		max-width: 740px;
		width: 100%;
		height: 462px;
		border-radius:15px;
	}

	// Fixes potential theme css conflict.
	.acf-map-02 img {
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
	function initMap2( $el ) {

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
			initMarker2( $(this), map );
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
	function initMarker2( $marker, map ) {

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
	function centerMap2( map ) {

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
		$('.acf-map-02').each(function(){
			var map = initMap2( $(this) );
		});
	});

	})(jQuery);
	</script>

	<div class="list-localizacion">
		<div class="content">
			
            <div class="item">
				<?php echo $txt_localizacion_02;?>
			</div>

			<div class="item">
				<?php echo $info_localizacion_02;?>
			</div>

			<div class="item">
				<?php if (!empty($links_social_02['title'])): ?>
					<h3><?php echo $links_social['title'];?></h3>

				<div class="social-icons">			
							 
					<?php if (!empty($links_social_02['instagram'])): ?>
						<a href="<?php echo $links_social_02['instagram'];?>" target="_blank"><i class="fab fa-instagram"></i></a>		
					<?php endif; ?>		

					<?php if (!empty($links_social_02['facebook'])): ?>
						<a href="<?php echo $links_social_02['facebook'];?>" target="_blank"><i class="fab fa-facebook"></i></a>
					<?php endif; ?>		
					
					<?php if (!empty($links_social_02['pinterest'])): ?>
						<a href="<?php echo $links_social_02['pinterest'];?>" target="_blank"><i class="fab fa-pinterest"></i></a>
					<?php endif; ?>

					<?php if (!empty($links_social_02['twitter'])): ?>
						<a href="<?php echo $links_social_02['twitter'];?>" target="_blank"><i class="fab fa-twitter"></i></a>
					<?php endif; ?>
					
					<?php if (!empty($links_social_02['linkedin'])): ?>
						<a href="<?php echo $links_social_02['linkedin'];?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					<?php endif; ?>

				</div>

				<?php endif; ?>		
			</div>
		</div>
		<?php 
	$location_02 = get_field('google_maps_02');
	if( $location_02 ): ?>
		<div class="acf-map-02" data-zoom="16">
			<div class="marker" data-lat="<?php echo esc_attr($location_02['lat']); ?>" data-lng="<?php echo esc_attr($location_02['lng']); ?>"></div>
		</div>
	<?php endif; ?>
	</div>

</section>


