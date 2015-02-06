<script type="text/javascript">
    var map = null;
var infoWindow = null;
    function openInfoWindow(marker) {
        var markerLatLng = marker.getPosition();        
        infoWindow.setContent([
            '&lt;b&gt;La posicion del marcador es:&lt;/b&gt;&lt;br/&gt;',
            markerLatLng.lat(),
            ', ',
            markerLatLng.lng(),
            '&lt;br/&gt;&lt;br/&gt;Arr&amp;aacute;strame y haz click para actualizar la posici&amp;oacute;n.'
        ].join(''));
        infoWindow.open(map, marker);
    }
  function initialize() {
    var latlng = new google.maps.LatLng(23.554132, -102.6205);
    var myOptions = {
      zoom: 10,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);
    // Function for adding a marker to the page.
    function addMarker(location) {
        marker = new google.maps.Marker({
            position: location,
            map: map,
            draggable: true,
            title:"Ejemplo marcador arrastrable"
        });
    google.maps.event.addListener(marker, 'click', function(){
        openInfoWindow(marker);
    });
}

    // Testing the addMarker function
    CentralPark = new google.maps.LatLng(23.554132, -102.6205);
    addMarker(CentralPark);
}

</script>

