
<br>
<h1> Barrios de Latacunga</h1>
<br>
<div id="mapa1" style="width:80%; height:400px; margin: 0 auto; border:2px solid black;"></div>


<script type="text/javascript">
function initMap(){
    // Creando una coordenada
    var coordenadaCentral = new google.maps.LatLng(-0.9232675208161709, -78.61275749804615);

    var miMapa = new google.maps.Map(
        document.getElementById('mapa1'),
        {
            center: coordenadaCentral,
            zoom: 16, // Ajusta el valor del zoom según tu preferencia
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
    );

    var marcadorUTC = new google.maps.Marker({
        position: coordenadaCentral,
        map: miMapa,
        title: 'BUITRON CAYO ISACC RODRIGO'
    });
    var marcadorUTC= new google.maps.Marker({
        position:new google.maps.LatLng(-0.9223488157632094, -78.61267508465659),
        map: miMapa,
        title: 'UTC Matriz',

      });

    // Crear infowindow con contenido personalizado (imagen)

    var infowindow = new google.maps.InfoWindow({
        content: '<img src="data:image/png;base64,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" alt="Descripción de la imagen">'
    });

    // Agregar evento al marcador para mostrar el infowindow cuando se pasa el ratón
    google.maps.event.addListener(marcadorUTC, 'mouseover', function() {
        infowindow.open(miMapa, marcadorUTC);
    });

    // Cerrar el infowindow cuando el ratón deja el marcador
    google.maps.event.addListener(marcadorUTC, 'mouseout', function() {
        infowindow.close();
    });
}
</script>
