<?php
/*

Template Name: Kapcsolat

*/

get_header();

?>

<section class="section nolinkdecor container">

    <h1 class="mt-5"><?php the_title() ?></h1>
    <div class="row bg-white p-3 mt-4">
        
        <?php if( have_rows('szigetszentmiklos') ): ?>
            <?php while( have_rows('szigetszentmiklos') ): the_row(); 

                // Get sub field values.
                $terkep = get_sub_field('terkep');

                ?>

                <div class="col-12 col-lg-4">
                    <h3>Szigetszentmiklós</h3>
                    <img src="<?php the_sub_field('fenykep'); ?>" alt="Sziget Szerelvény - Szigetszentmiklós">
                    <p class="mt-3"><i class="text-danger bi bi-geo-alt"></i> <a href="https://www.google.com/maps/dir//Szigetszentmikl%C3%B3s,+Gy%C3%A1ri+%C3%BAt+17,+2310/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x4741ef60ee3149cb:0x386d55181f926236?sa=X&ved=2ahUKEwjCjt_HhtjwAhULLBoKHYEKCF0QwwUwAHoECAcQAw" target="blank"><?php the_sub_field('cim') ?></a></p>
                    <p><i class="text-success bi bi-telephone"></i> <a href="tel:<?php the_sub_field('telefon_1') ?>"><?php the_sub_field('telefon_1') ?></a></p>
                    <p><i class="text-success bi bi-telephone"></i> <a href="tel:<?php the_sub_field('telefon_2') ?>"><?php the_sub_field('telefon_2') ?></a></p>
                    <p><i class="text-info bi bi-envelope"></i> <a href="mailto:<?php the_sub_field('email') ?>"><?php the_sub_field('email') ?></a></p>
                </div>
                <div class="col-12 col-lg-4">
                <table class="table table-hover">
                    <h3>Nyitvatartás</h3>
                    <tbody>
                        <tr>
                            <th scope="row">Hétfő</th>
                            <td>7:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Kedd</th>
                            <td>7:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Szerda</th>
                            <td>7:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Csütörtök</th>
                            <td>7:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Péntek</th>
                            <td>7:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Szombat</th>
                            <td>7:00</td>
                            <td>12:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Vasárnap</th>
                            <td colspan="2">ZÁRVA</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="col-12 col-lg-4">
                    <h3>Térkép</h3>
                    <?php if( $terkep ): ?>
                        <div class="acf-map" data-zoom="16">
                            <div class="marker" data-lat="<?php echo esc_attr($terkep['lat']); ?>" data-lng="<?php echo esc_attr($terkep['lng']); ?>"></div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="row bg-white p-3 mt-4">
        
    <?php if( have_rows('taksony') ): ?>
            <?php while( have_rows('taksony') ): the_row(); 

                // Get sub field values.
                $terkep = get_sub_field('terkep');

                ?>

                <div class="col-12 col-lg-4">
                    <h3>Taksony</h3>
                    <img src="<?php the_sub_field('fenykep'); ?>" alt="Sziget Szerelvény - Taksony">
                    <p class="mt-3"><i class="text-danger bi bi-geo-alt"></i> <a href="https://www.google.com/maps/dir/47.3515504,19.0232066/Taksony,+F%C5%91+%C3%BAt+47,+2335/@47.3378507,18.996129,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x4741ef3d8f60bc39:0xa2a9f17fa41164b0!2m2!1d19.0658092!2d47.334494" target="blank"><?php the_sub_field('cim') ?></a></p>
                    <p><i class="text-success bi bi-telephone"></i> <a href="tel:<?php the_sub_field('telefon_1') ?>"><?php the_sub_field('telefon_1') ?></a></p>
                    <p><i class="text-info bi bi-envelope"></i> <a href="mailto:<?php the_sub_field('email') ?>"><?php the_sub_field('email') ?></a></p>
                </div>
                <div class="col-12 col-lg-4">
                <table class="table table-hover">
                    <h3>Nyitvatartás</h3>
                    <tbody>
                        <tr>
                            <th scope="row">Hétfő</th>
                            <td>7:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Kedd</th>
                            <td>7:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Szerda</th>
                            <td>7:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Csütörtök</th>
                            <td>7:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Péntek</th>
                            <td>7:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Szombat</th>
                            <td>7:00</td>
                            <td>12:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Vasárnap</th>
                            <td colspan="2">ZÁRVA</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="col-12 col-lg-4">
                    <h3>Térkép</h3>
                    <?php if( $terkep ): ?>
                        <div class="acf-map" data-zoom="16">
                            <div class="marker" data-lat="<?php echo esc_attr($terkep['lat']); ?>" data-lng="<?php echo esc_attr($terkep['lng']); ?>"></div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>

    <div class="row mt-4">
        <div class="col-12 col-lg-4">
            <div class="bg-white p-3">
                <h3>Általános</h3>
                <i class="text-info bi bi-envelope"></i> <a href="mailto:info@szigetszerelveny.hu">info@szigetszerelveny.hu</a>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="bg-white p-3">
                <h3>Ajánlatkérés</h3>
                <i class="text-info bi bi-envelope"></i> <a href="mailto:bolt@szigetszerelveny.hu">bolt@szigetszerelveny.hu</a>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="bg-white p-3">
                <h3>Pénzügy</h3>
                <i class="text-info bi bi-envelope"></i> <a href="mailto:iroda@szigetszerelveny.hu">iroda@szigetszerelveny.hu</a>
            </div>
        </div>
    </div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxY0Oe1gxAFqwa24I5gKBLuKW6vT8jGLI"></script>
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

<?php get_footer(); ?>
