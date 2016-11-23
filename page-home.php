<?php
/**
* Template name: Page Home
*/
get_header();
 ?>
 <div class="foresteria-box-map">
   <div class="overlay2">
     <h2 class="col-xs-12">Foresteria Venezia</h2>
     <div class="foresteria-box-map-link col-xs-12">
        <a href="#">Scopri di più <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
     </div>
     <div class="close-foresteria-box-map">
       <i class="fa fa-times" aria-hidden="true"></i>
     </div>
  </div>
</div>
<div class="section1">
  <div class="valign-wrapper">
    <div class="valign">
      <div class="container-fluid cf-custom-section1">
        <div class="text-section1 text-center">
          <h2><?php the_field('titolo_prima_sezione')?></h2>
          <p><?php the_field('testo_prima_sezione') ?>
        </div>
        <div class="back-right">

        </div>
        <div class="back-left">

        </div>
        <div class="button-section1 text-center">
          <a href="<?php the_field('link_prima_sezione')?>"><?php the_field('testo_link_prima_sezione')?></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section2">
  <div class="valign-wrapper">
    <div class="valign">
      <div class="container-fluid">
        <div class="col-md-3 col-xs-12 category-map" data-cat="All">
          <div class="img-categoria" style="background-image: url('<?php the_field('immagine_prima_categoria')?>'); background-color: <?php the_field('colore_di_sfondo_immagine_prima_categoria')?>;">
          </div>
          <div class="text-categoria">
            <p><?php the_field('testo_prima_categoria')?></p>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 category-map" data-cat="Arte">
          <div class="img-categoria1" style="background-image: url('<?php the_field('immagine_seconda_categoria')?>'); background-color: <?php the_field('colore_di_sfondo_immagine_seconda_categoria')?>;">
          </div>
          <div class="text-categoria">
            <p><?php the_field('testo_seconda_categoria')?></p>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 category-map" data-cat="Resto">
          <div class="img-categoria2" style="background-image: url('<?php the_field('immagine_terza_categoria')?>'); background-color: <?php the_field('colore_di_sfondo_immagine_terza_categoria')?>;">
          </div>
          <div class="text-categoria">
            <p><?php the_field('testo_terza_categoria')?></p>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 category-map" data-cat="Mare">
          <div class="img-categoria3" style="background-image: url('<?php the_field('immagine_quarta_categoria')?>'); background-color: <?php the_field('colore_di_sfondo_immagine_quarta_categoria')?>;">
          </div>
          <div class="text-categoria">
            <p><?php the_field('testo_quarta_categoria')?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section3">
  <?php
  $args = array(
    'post_type' => 'foresterie'
               );
  $posts = new WP_Query($args);
  while( $posts->have_posts() ) : $posts->the_post();
   ?>
   <?php
   $posizione = get_field('posizione');
   if ($posizione):
    ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single_post_thumbnail' ); ?>
    <?php $cat = get_the_category(); ?>
   <div class="map-marker" data-linktext="<?php the_field('linktext_map')?>" data-link="<?php the_field('link_map')?>" data-cat="<?php echo $cat[0]->name; ?>" data-icon="<?php the_field('icona');?>" data-lat="<?php echo $posizione['lat'];?>"
   data-lng="<?php echo $posizione['lng'];?>" data-title="<?php the_title();?>" data-img="<?php echo $image[0];?>">
   </div>
 <?php endif; ?>

 <?php endwhile; ?>
 <?php wp_reset_query(); ?>
  <div id="map">

  </div>
  <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 41.909986, lng: 12.3959157},
          zoom: 5,
          styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.business",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "visibility": "on"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      },
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
        });



        var markerList = [];
        var visibleMarker = [];

        jQuery('.map-marker').each(function(){
          var marker = {
            position: {
              lat: jQuery(this).data('lat'),
              lng: jQuery(this).data('lng')
            },
            map: map,
            title: jQuery(this).data('title'),
            img: jQuery(this).data('img'),
            category: jQuery(this).data('cat'),
            animation: google.maps.Animation.DROP,
            icon: jQuery(this).data('icon'),
            link: jQuery(this).data('link'),
            linktext: jQuery(this).data('linktext')
          }
          markerList.push(marker);
        });

        function showMarker(category){

          for(var i = 0; i < visibleMarker.length; i++){
            visibleMarker[i].setMap(null)
          }

          visibleMarker = [];

          for(var i = 0; i < markerList.length; i++){
            if(category && category != 'All'){
              if(markerList[i].category === category){
                var infoW = new google.maps.InfoWindow({
                  content: '<div class="iw-title">' + markerList[i].title + '</div>' +
                  '<div class="iw-foto"> <img src="' + markerList[i].img + '"></div>"' +
                  '<a class="iw-link" href="' + markerList[i].link + '">' + markerList[i].linktext + '</a>'
                });
                var marker = new google.maps.Marker(markerList[i]);
                marker.addListener('click', function(){
                  infoW.open(map, marker)
                })
                visibleMarker.push(marker);
              }
            }else{
              var infoW = new google.maps.InfoWindow({
                content: '<div class="iw-title">' + markerList[i].title + '</div>' +
                '<div class="iw-foto"> <img src="' + markerList[i].img + '"></div>"' +
                '<a class="iw-link" href="' + markerList[i].link + '">' + markerList[i].linktext + '</a>'
              });
              var marker = new google.maps.Marker(markerList[i]);
              marker.addListener('click', function(){
                infoW.open(map, marker)
              })
              visibleMarker.push(marker);
            }
          }
        }

        showMarker();

        jQuery('.category-map').on('click', function(){
          var categoria = jQuery(this).data('cat');
          showMarker(categoria);
        });


      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAh8xPNfX4k-DFvb7LA3fypf9tO6x3_cDM&callback=initMap"
    async defer></script>
</div>
<div class="section4">
  <div class="col-md-6 col-xs-12 first-image-section4 text-center" style="background-image: url('<?php the_field('sfondo_primo_box')?>');">
    <div class="overlay2">
      <h2><?php the_field('titolo_primo_box')?></h2>
      <?php the_field('testo_primo_box')?>
      <a href="<?php the_field('link_primo_box')?>"><?php the_field('testo_link_primo_box')?></a>
    </div>
  </div>
  <div class="col-md-6 col-xs-12 first-image-section4 second-image-section4 text-center" style="background-image: url('<?php the_field('sfondo_secondo_box')?>');">
    <div class="overlay2">
      <h2><?php the_field('titolo_secondo_box')?></h2>
      <?php the_field('testo_secondo_box')?>
      <a href="<?php the_field('primo_link_secondo_box')?>" class="img-allineate-left"><?php the_field('testo_primo_link_secondo_box')?></a>
      <a href="<?php the_field('secondo_link_secondo_box')?>" class="img-allineate-right"><?php the_field('testo_secondo_link_secondo_box')?></a>
    </div>
  </div>
  <div class="col-xs-12 first-image-section4 second-image-section4 third-image-section4 text-center" style="background-image: url('<?php the_field('sfondo_ultimo_box')?>');">
    <div class="overlay2">
      <div class="image-buono" style="background-image: url('<?php the_field('immagine_ultimo_box')?>'); border: 3px solid <?php the_field('colore_traccia_immagine_ultimo_box')?>;">

      </div>
      <h2 class="text-buono"><?php the_field('titolo_ultimo_box')?></h2>
      <div class="container-fluid cf-custom-third-image-section4">
      <?php the_field('testo_ultimo_box')?>
      </div>
      <a href="<?php the_field('link_ultimo_box')?>"><?php the_field('testo_link_ultimo_box')?></a>
    </div>
  </div>
</div>
 <?php
get_footer();
 ?>
