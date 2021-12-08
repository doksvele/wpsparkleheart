<?php
/*
Template Name: Sapņus atbalsta
*/

get_header();
?>
<section>
  <h1>SAPŅUS ATBALSTA</h1>
  <div class="item-2">
    <p>Sadarbības partneri ir uzņēmumi, kuri savā preču vai pakalpojumu ikdienā ir integrējuši SparkleHeart zīmolu un dala ar to konkrētu daļu savu ienākumu.</p>
  </div>
  <div class="box">
    <div class="select-box">
      <p>Uzņemuma atrašanas vieta</p>
      <select id="S1" onchange="Select('S1','S2');filterLocations();">
        <option value="" selected hidden>Izvēlies</option>
        <!--<option value="all">Visas vietas</option>-->
        <option value="riga">Rīga</option>
        <option value="jelgava">Jelgava</option>
        <option value="ogre">Ogre</option>
      </select>
    </div>
    <div class="select-box">
      <p>Uzņēmuma veids</p>
      <select id="S2" onchange="Select('S1','S2');filterLocations();">
        <option value="" selected hidden>Izvēlies</option>
        <!--<option value="all">Visi veidi</option>-->
        <option value="edinasana">Ēdināšana</option>
        <option value="skaistumkopšana">Skaistumkopšana</option>
        <option value="izglitiba">Izglītība</option>
      </select>
    </div>
  </div>
  <table class="list-box riga edinasana">
    <tr>
      <td><img class="foto-27" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_27.png" alt="foto_27"></td>
      <td><h4>PURCH restaurant</h4></td>
      <td><p>+371 25425254<br>Dzelzavas iela 51A</p></td>
    </tr>
  </table>
  <table class="list-box riga edinasana">
    <tr>
      <td><img class="foto-28" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_28.png" alt="foto_28"></td>
      <td><h4>Kurts coffee</h4></td>
      <td><p>+371 23202079<br>Cēsu iela 20, Tērbatas iela 2i</p></td>
    </tr>
  </table>
  <table class="list-box riga skaistumkopšana">
    <tr>
      <td><img class="foto-29" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_29.png" alt="foto_29"></td>
      <td><h4>AUCH beauty home</h4></td>
      <td><p>+371 28361686, +371 23202079<br>Cēsu iela 20</p></td>
    </tr>
  </table>
  <div id="map"></div>
</section>
<?php get_footer(); ?>
<script>
var map;
function ZoomControl(controlDiv, map) {
  controlDiv.style.width = '57px';
  controlDiv.style.height = '136px';
  controlDiv.style.marginTop = '421px';
  controlDiv.style.marginRight = '62px';
  controlDiv.style.marginBottom = '91px';
  var controlWrapper = document.createElement('div');
  controlDiv.appendChild(controlWrapper);
  var zoomInButton = document.createElement('div');
  zoomInButton.classList.add('zoomInButton');
  controlWrapper.appendChild(zoomInButton);
  var zoomOutButton = document.createElement('div');
  zoomOutButton.classList.add('zoomOutButton');
  controlWrapper.appendChild(zoomOutButton);
  google.maps.event.addDomListener(zoomInButton, 'click', function() { map.setZoom(map.getZoom() + 1); });
  google.maps.event.addDomListener(zoomOutButton, 'click', function() { map.setZoom(map.getZoom() - 1); });
}
function initMap() {
  var markers = [];
  const marker1 = '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/marker1.png';
  const marker2 = '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/marker2.png';
  const riga = { lat: 56.949307, lng: 24.110600 };
  const content1 = '<div class="title"><img class="foto-27" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_27.png" alt="foto_27"><div class="title-info"><h3>PURCH restaurant</h3><p>+371 25425254<br>Dzelzavas iela 51A, Rīga</p></div></div>';
  const content2 = '<div class="title"><img class="foto-28" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_28.png" alt="foto_28"><div class="title-info"><h3>Kurts coffee</h3><p>+371 23202079<br>Cēsu iela 20, Rīga</p></div></div>';
  const content3 = '<div class="title"><img class="foto-28" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_28.png" alt="foto_28"><div class="title-info"><h3>Kurts coffee</h3><p>+371 23202079<br>Tērbatas iela 2i, Rīga</p></div></div>';
  const content4 = '<div class="title"><img class="foto-29" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_29.png" alt="foto_29"><div class="title-info"><h3>AUCH beauty home</h3><p>+371 28361686, +371 23202079<br>auchbeauty@gmail.com<br>Cēsu iela 20, Rīga</p></div></div>';
  const content5 = '<h2>Rīga</h2>';
  const content6 = '<h2>Jelgava</h2>';
  const content7 = '<h2>Ogre</h2>';
  var locations = [
    ['0', content1, marker1, 56.957962, 24.191018, 'riga', 'edinasana'],
    ['1', content2, marker1, 56.965151, 24.140532, 'riga', 'edinasana'],
    ['2', content3, marker1, 56.951204, 24.120740, 'riga', 'edinasana'],
    ['3', content4, marker1, 56.965151, 24.140532, 'riga', 'skaistumkopšana'],
    ['4', content5, marker1, 56.940366, 24.085039, 'riga', ''],
    ['5', content5, marker1, 56.940554, 24.095853, 'riga', ''],
    ['6', content5, marker1, 56.932031, 24.091562, 'riga', ''],
    ['7', content5, marker1, 56.939055, 24.101347, 'riga', ''],
    ['8', content5, marker1, 56.953239, 24.108540, 'riga', ''],
    ['9', content5, marker1, 56.954643, 24.117123, 'riga', ''],
    ['10', content5, marker1, 56.953526, 24.123646, 'riga', ''],
    ['11', content5, marker1, 56.949495, 24.115750, 'riga', ''],
    ['12', content5, marker1, 56.945188, 24.112832, 'riga', ''],
    ['13', content5, marker1, 56.943596, 24.122788, 'riga', ''],
    ['14', content5, marker1, 56.947060, 24.129311, 'riga', ''],
    ['15', content5, marker1, 56.950337, 24.134118, 'riga', ''],
    ['16', content5, marker1, 56.946873, 24.141671, 'riga', ''],
    ['17', content5, marker1, 56.951747, 24.125878, 'riga', ''],
    ['18', content5, marker1, 56.950905, 24.122273, 'riga', ''],
    ['19', content5, marker1, 56.956284, 24.136178, 'riga', ''],
    ['20', content5, marker1, 56.953289, 24.150426, 'riga', ''],
    ['21', content5, marker1, 56.949307, 24.110600, 'riga', ''],
    ['22', content5, marker1, 56.937651, 24.063238, 'riga', ''],
    ['23', content5, marker1, 56.947483, 24.077829, 'riga', ''],
    ['24', content5, marker1, 56.942988, 24.089502, 'riga', ''],
    ['25', content6, marker1, 56.65, 23.71278, 'jelgava', ''],
    ['26', content7, marker1, 56.8162, 24.61401, 'ogre', '']
  ];
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: riga,
    disableDefaultUI: true,
    styles: [
      {
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e5e5e5"
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
        "featureType": "administrative.land_parcel",
        "elementType": "labels",
        "stylers": [
          {
            "visibility": "off"
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
        "elementType": "labels.text",
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
            "color": "#dcdcdc"
          }
        ]
      },
      {
        "featureType": "poi.school",
        "stylers": [
          {
            "visibility": "off"
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
        "elementType": "labels",
        "stylers": [
          {
            "visibility": "off"
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
            "color": "#f0f0f0"
          },
          {
            "visibility": "simplified"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels",
        "stylers": [
          {
            "visibility": "off"
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
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "transit.line",
        "stylers": [
          {
            "color": "#d7d7d7"
          }
        ]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#ebebeb"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#cdcdcd"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      }
    ]
  });
  for (var i = 0; i < locations.length; i++) { addMarker(locations[i]); }
  function addMarker(properties) {
    var content = properties[1];
    var icon = properties[2];
    var position = new google.maps.LatLng(properties[3], properties[4]);
    var category1 = properties[5];
    var category2 = properties[6];
    var infoWindow = new google.maps.InfoWindow({ content: '' });
    var marker = new google.maps.Marker({
      map: map,
      icon: icon,
      position: position,
      category1: category1,
      category2: category2,
      infowindow: infoWindow
    });
    markers.push(marker);
    if (properties.icon) { marker.setIcon(properties.icon); }
    google.maps.event.addListener(marker, 'click', (function(marker, content) {
      return function() {
        infoWindow.setContent(content);
        infoWindow.open(map, marker);
        closeAllInfoWindows(map);
        this.infowindow.open(map, this);
      }
    })(marker, content));
  }
  filterLocations = function() {
    category1 = document.getElementById("S1").value;
    category2 = document.getElementById("S2").value;
    for (var i = 0; i < locations.length; i++) {
      properties = markers[i];
      if ((properties.category1 == category1 || category1.length === 0) && (properties.category2 == category2 || category2.length === 0)) {
        properties.setVisible(true);
        closeAllInfoWindows(map);
      } else {
        properties.setVisible(false);
        closeAllInfoWindows(map);
      }
    }
  }
  function closeAllInfoWindows(map) { markers.forEach(function(marker) { marker.infowindow.close(map, marker); }); }
  var zoomControlDiv = document.createElement('div');
  var zoomControl = new ZoomControl(zoomControlDiv, map);
  zoomControlDiv.index = 1;
  map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(zoomControlDiv);
}
initMap();
</script>
<script>
function Select(id1, id2) {
  var items = zxcByClassName('list-box');
  var s1 = document.getElementById(id1), v1 = s1.value, r1 = new RegExp('\\b' + s1.value + '\\b')
  var s2 = document.getElementById(id2), v2 = s2.value, r2 = new RegExp('\\b' + s2.value + '\\b')
  for (var z0 = 0; z0 < items.length; z0++) { items[z0].style.display = ((r1.test(items[z0].className) || v1 == 'all') && (r2.test(items[z0].className) || v2 == 'all')) ? 'block' : 'none'; }
}
function zxcByClassName(nme, el, tag) {
  if (typeof(el) == 'string') el = document.getElementById(el);
  el = el || document;
  for (var tag = tag || '*', reg = new RegExp('\\b' + nme + '\\b'), els = el.getElementsByTagName(tag), ary = [], z0 = 0; z0 < els.length; z0++) {
    if (reg.test(els[z0].className)) ary.push(els[z0]);
  }
  return ary;
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5yjlQCOltOuVNK_PwpC8IBUVyYRidDQc&callback=initMap&libraries=&v=weekly" async></script>
<?php wp_footer(); ?>
</body>
</html>
