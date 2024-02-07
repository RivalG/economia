<style media="screen">
  #colortabla {
    color: black;
  }

  .colorfondo {
    background-color: red;
  }

  .rounded-image {
    border-radius: 50%;
  }

  .fotofondo {
    background-image: url('tu-imagen-de-fondo.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    text-align: center;
    padding: 20px;
    margin-bottom: 20px;
  }


  .modal-backdrop {
    background-color: rgba(0, 0, 0, 0.5) !important;
  }


  .modal-content {
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }


  .modal-header {
    background-color: #f31313;
    color: white;
    border-bottom: 1px solid #dee2e6;
  }


  .modal-body {
    padding: 20px;
  }




</style>

<br>
<div>
    <h1 class="text-center">UBICACIÓN DE "LOCALES" SECTOR IGNACIO FLORES</h1>
</div>


<br>
<div id="mapa1" style="width:80%; height:400px; margin: 0 auto; border:2px solid black;"></div>


<script type="text/javascript">
function initMap(){
    // Creando una coordenada
    var coordenadaCentral = new google.maps.LatLng(-0.9397959069381023, -78.61336391534341);

    var miMapa = new google.maps.Map(
        document.getElementById('mapa1'),
        {
            center: coordenadaCentral,
            zoom: 16, // Ajusta el valor del zoom según tu preferencia
            mapTypeId: google.maps.MapTypeId.SATELLITE
        }
    );

    //MARCADOR JUAN MONTALVO
    var marcadorUTC = new google.maps.Marker({
        position: coordenadaCentral,
        map: miMapa,
        title: 'Ignacio Flores "Parque Flores"'
    });

    var marcadorUTC= new google.maps.Marker({
        position:new google.maps.LatLng(-0.9407395439363635, -78.61313654232829),
        map: miMapa,
        title: 'Ignacio Flores "Parque Flores"',

      });

    var marcadorUTC= new google.maps.Marker({
        position:new google.maps.LatLng(-0.9413118165717268, -78.61332908465657),
        map: miMapa,
        title: 'Ignacio Flores C. Quito 6284',

      });

    var marcadorUTC= new google.maps.Marker({
        position:new google.maps.LatLng(-0.941353997475622, -78.61229118650758),
        map: miMapa,
        title: 'Ignacio Flores 395Q+C4P, Latacunga',

      });

    var marcadorUTC= new google.maps.Marker({
        position:new google.maps.LatLng(-0.9433140892767499, -78.61238708465658),
        map: miMapa,
        title: 'Ignacio Flores 394Q+M3G, Latacunga',

      });

    var marcadorUTC= new google.maps.Marker({
        position:new google.maps.LatLng(-0.9441146345561796, -78.61222672883586),
        map: miMapa,
        title: 'Ignacio Flores Latacunga 050150',

      });

    var marcadorUTC= new google.maps.Marker({
        position:new google.maps.LatLng(-0.9439900893080095, -78.61159462698485),
        map: miMapa,
        title: 'Ignacio Flores 394Q+CC2, Av Unidad Nacional, Latacunga',

      });

    var marcadorUTC= new google.maps.Marker({
        position:new google.maps.LatLng(-0.9431019071212067, -78.61190072883586),
        map: miMapa,
        title: 'Ignacio Flores "Parque Flores"',

      });

    var marcadorUTC= new google.maps.Marker({
        position:new google.maps.LatLng(-0.9472702705085279, -78.61181935582074),
        map: miMapa,
        title: 'Ignacio Flores "Parque Flores"',

      });

    var marcadorUTC= new google.maps.Marker({
        position:new google.maps.LatLng(-0.9474761799961503, -78.6129314576717),
        map: miMapa,
        title: 'Ignacio Flores "Parque Flores"',

      });

      var marcadorUTC= new google.maps.Marker({
          position:new google.maps.LatLng(-0.9487547263518868, -78.61296108465656),
          map: miMapa,
          title: 'Ignacio Flores C. Catalina Rivera 35',

        });

      var marcadorUTC= new google.maps.Marker({
          position:new google.maps.LatLng(-0.9509209075568423, -78.61153718650756),
          map: miMapa,
          title: 'Ignacio Flores "Parque Flores"',

        });

      var marcadorUTC= new google.maps.Marker({
          position:new google.maps.LatLng(-0.9507516349055667, -78.61093908465656),
          map: miMapa,
          title: 'Ignacio Flores "Parque Flores"',

        });

      var marcadorUTC= new google.maps.Marker({
          position:new google.maps.LatLng(-0.9506406348996954, -78.61045281349243),
          map: miMapa,
          title: 'Ignacio Flores "Parque Flores"',

        });

        var marcadorUTC= new google.maps.Marker({
            position:new google.maps.LatLng(-0.950576270744353, -78.6104635423283),
            map: miMapa,
            title: 'Ignacio Flores "Parque Flores"',

          });

      var marcadorUTC= new google.maps.Marker({
            position:new google.maps.LatLng(-0.9399902699920873, -78.6102474576717),
            map: miMapa,
            title: 'Ignacio Flores Av. Roosevelt',

          });

      var marcadorUTC= new google.maps.Marker({
            position:new google.maps.LatLng(-0.940065361735471, -78.61018308465657),
            map: miMapa,
            title: 'Ignacio Flores Av. Roosevelt',

          });

      var marcadorUTC= new google.maps.Marker({
            position:new google.maps.LatLng(-0.9413418165730286, -78.60967881349242),
            map: miMapa,
            title: 'Ignacio Flores C. Ricardo Vásquez Razo',

          });

      var marcadorUTC= new google.maps.Marker({
            position:new google.maps.LatLng(-0.9421246344519022, -78.60979744047728),
            map: miMapa,
            title: 'Ignacio Flores C. José Quevedo'

          });

      var marcadorUTC= new google.maps.Marker({
            position:new google.maps.LatLng(-0.9424037249306133, -78.60917471164143),
            map: miMapa,
            title: 'Ignacio Flores Av. Roosevelt'

          });

      var marcadorUTC= new google.maps.Marker({
            position:new google.maps.LatLng(-0.9425431797066542, -78.608746),
            map: miMapa,
            title: 'Ignacio Flores "Parque Flores"'

          });

      var marcadorUTC= new google.maps.Marker({
            position:new google.maps.LatLng(-0.9447403619658699, -78.61067871164141),
            map: miMapa,
            title: 'Ignacio Flores "Nacional y Manuela Sáenz, Av Unidad Nacional, Latacunga 050101"'

          });

      var marcadorUTC= new google.maps.Marker({
            position:new google.maps.LatLng(-0.9446406345837801, -78.61002744047728),
            map: miMapa,
            title: 'Ignacio Flores C. Susana Donoso 532'

          });

          var marcadorUTC= new google.maps.Marker({
                position:new google.maps.LatLng(-0.9459140893971538, -78.60927854232827),
                map: miMapa,
                title: 'Ignacio Flores C. Manuela Cañizares'

              });

      var marcadorUTC= new google.maps.Marker({
            position:new google.maps.LatLng(-0.9391355438723133, -78.60664418650757),
            map: miMapa,
            title: 'Ignacio Flores  Sangay, y, Latacunga 050101'

         });

      var marcadorUTC= new google.maps.Marker({
           position:new google.maps.LatLng(-0.9388507247012157, -78.60588927116413),
           map: miMapa,
           title: 'Ignacio Flores  C. Altar'

        });

        var marcadorUTC= new google.maps.Marker({
             position:new google.maps.LatLng(-0.9384192698811717, -78.60571427116415),
             map: miMapa,
             title: 'Ignacio Flores  Quilotoa, Latacunga'

          });

      var marcadorUTC= new google.maps.Marker({
           position:new google.maps.LatLng(-0.9381555424656866, -78.60544891534342),
           map: miMapa,
           title: 'Ignacio Flores  Antisana, Latacunga'

        });

      var marcadorUTC= new google.maps.Marker({
           position:new google.maps.LatLng(-0.9373440876073473, -78.605480898149),
           map: miMapa,
           title: 'Ignacio Flores  "Parque Flores"'

        });

      var marcadorUTC= new google.maps.Marker({
           position:new google.maps.LatLng(-0.936783634173108, -78.6057383558207),
           map: miMapa,
           title: 'Ignacio Flores  "Parque Flores"'

        });
      //FIN DEL MARCADOR


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

<br>
<table class="table">
  <thead>
    <tr>
      <th style="background-color:  #f31313 " id="colortabla">#</th>
      <th style="background-color:  #f31313 " id="colortabla" scope="col">NOMBRE NEGOCIO</th>
      <th style="background-color:  #f31313 " id="colortabla" scope="col">NOMBRE REPRESENTANTE DUEÑO</th>
      <th style="background-color:  #f31313 " id="colortabla" scope="col">MÁS INFORMACIÓN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="table-active" id="colortabla" scope="row">1</th>
      <td class="table-active" id="colortabla">Pinturas el centro de color</td>
      <td class="table-active" id="colortabla">Luis Rojas</td>
      <td class="table-active">

        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">️VER 👁️‍🗨️</button>

        <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">!Infórmate¡</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h6><strong>NOMBRE EMPRESA:</strong></h6><p>Pinturas centro de color</p>
                  <h6><strong>DIRECCIÓN:</strong></h6> <p>San Sebastian</p>
                  <h6><strong>ACTIVIDAD PRINCIPAL NEGOCIO:</strong></h6> <p>Comercio</p>
                  <h6><strong>¿QUÉ OFRECE EL NEGOCIO?:</strong></h6> <p>Productos</p>
                  <h6><strong>¿CUANTOS AÑOS TIENE EL NEGOCIO?:</strong></h6> <p>15 años</p>
                  <h6><strong>MERCADO:</strong></h6> <p>Local</p>
                <center>
                  <img src="<?php echo base_url(); ?>/assets/image/foto.png" alt="" width="290px" height="300px">
                </center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
      </td>
    </tr>

    <tr>
      <th id="colortabla" scope="row">2</th>
      <td id="colortabla">Papelira super éxito</td>
      <td id="colortabla">María Basantes</td>
      <td id="colortabla">

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">️VER 👁️‍🗨️</button>

                <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">!Infórmate¡</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <h6><strong>NOMBRE EMPRESA:</strong></h6><p>Pinturas centro de color</p>
                          <h6><strong>DIRECCIÓN:</strong></h6> <p>San Sebastian</p>
                          <h6><strong>ACTIVIDAD PRINCIPAL NEGOCIO:</strong></h6> <p>Comercio</p>
                          <h6><strong>¿QUÉ OFRECE EL NEGOCIO?:</strong></h6> <p>Productos</p>
                          <h6><strong>¿CUANTOS AÑOS TIENE EL NEGOCIO?:</strong></h6> <p>15 años</p>
                          <h6><strong>MERCADO:</strong></h6> <p>Local</p>
                        <center>
                          <img src="<?php echo base_url(); ?>/assets/image/foto.png" alt="" width="290px" height="300px">
                        </center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
      </td>
    </tr>
    <tr>
      <th class="table-active" id="colortabla" scope="row">3</th>
      <td class="table-active" id="colortabla">Mini tienda de Juanito</td>
      <td class="table-active" id="colortabla">Gladys Cordones</td>
      <td class="table-active" id="colortabla">


                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">️VER 👁️‍🗨️</button>

                <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">!Infórmate¡</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <h6><strong>NOMBRE EMPRESA:</strong></h6><p>Pinturas centro de color</p>
                          <h6><strong>DIRECCIÓN:</strong></h6> <p>San Sebastian</p>
                          <h6><strong>ACTIVIDAD PRINCIPAL NEGOCIO:</strong></h6> <p>Comercio</p>
                          <h6><strong>¿QUÉ OFRECE EL NEGOCIO?:</strong></h6> <p>Productos</p>
                          <h6><strong>¿CUANTOS AÑOS TIENE EL NEGOCIO?:</strong></h6> <p>15 años</p>
                          <h6><strong>MERCADO:</strong></h6> <p>Local</p>
                        <center>
                          <img src="<?php echo base_url(); ?>/assets/image/foto.png" alt="" width="290px" height="300px">
                        </center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
    </tr>
    <tr>
      <th id="colortabla" scope="row">4</th>
      <td id="colortabla">Golden Bread</td>
      <td id="colortabla">Segundo Sanchez</td>
      <td id="colortabla">

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">️VER 👁️‍🗨️</button>

                <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">!Infórmate¡</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <h6><strong>NOMBRE EMPRESA:</strong></h6><p>Pinturas centro de color</p>
                          <h6><strong>DIRECCIÓN:</strong></h6> <p>San Sebastian</p>
                          <h6><strong>ACTIVIDAD PRINCIPAL NEGOCIO:</strong></h6> <p>Comercio</p>
                          <h6><strong>¿QUÉ OFRECE EL NEGOCIO?:</strong></h6> <p>Productos</p>
                          <h6><strong>¿CUANTOS AÑOS TIENE EL NEGOCIO?:</strong></h6> <p>15 años</p>
                          <h6><strong>MERCADO:</strong></h6> <p>Local</p>
                        <center>
                          <img src="<?php echo base_url(); ?>/assets/image/foto.png" alt="" width="290px" height="300px">
                        </center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
    </tr>
    <tr>
      <th class="table-active" id="colortabla" scope="row">5</th>
      <td class="table-active" id="colortabla">Masa Madre pan y  café </td>
      <td class="table-active" id="colortabla">Anónimo</td>
      <td class="table-active" id="colortabla">
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">️VER 👁️‍🗨️</button>

              <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">!Infórmate¡</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <h6><strong>NOMBRE EMPRESA:</strong></h6><p>Pinturas centro de color</p>
                        <h6><strong>DIRECCIÓN:</strong></h6> <p>San Sebastian</p>
                        <h6><strong>ACTIVIDAD PRINCIPAL NEGOCIO:</strong></h6> <p>Comercio</p>
                        <h6><strong>¿QUÉ OFRECE EL NEGOCIO?:</strong></h6> <p>Productos</p>
                        <h6><strong>¿CUANTOS AÑOS TIENE EL NEGOCIO?:</strong></h6> <p>15 años</p>
                        <h6><strong>MERCADO:</strong></h6> <p>Local</p>
                      <center>
                        <img src="<?php echo base_url(); ?>/assets/image/foto.png" alt="" width="290px" height="300px">
                      </center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
    </tr>
    <tr>
      <th id="colortabla" scope="row">6</th>
      <td id="colortabla">Tienda Mía</td>
      <td id="colortabla">Doris Merizalde</td>
      <td id="colortabla">
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">️VER 👁️‍🗨️</button>

              <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">!Infórmate¡</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <h6><strong>NOMBRE EMPRESA:</strong></h6><p>Pinturas centro de color</p>
                        <h6><strong>DIRECCIÓN:</strong></h6> <p>San Sebastian</p>
                        <h6><strong>ACTIVIDAD PRINCIPAL NEGOCIO:</strong></h6> <p>Comercio</p>
                        <h6><strong>¿QUÉ OFRECE EL NEGOCIO?:</strong></h6> <p>Productos</p>
                        <h6><strong>¿CUANTOS AÑOS TIENE EL NEGOCIO?:</strong></h6> <p>15 años</p>
                        <h6><strong>MERCADO:</strong></h6> <p>Local</p>
                      <center>
                        <img src="<?php echo base_url(); ?>/assets/image/foto.png" alt="" width="290px" height="300px">
                      </center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
    </tr>
    <tr>
      <th class="table-active" id="colortabla" scope="row">7</th>
      <td class="table-active" id="colortabla">Tiendita</td>
      <td class="table-active" id="colortabla">Anónimo</td>
      <td class="table-active" id="colortabla">
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">️VER 👁️‍🗨️</button>

              <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">!Infórmate¡</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <h6><strong>NOMBRE EMPRESA:</strong></h6><p>Pinturas centro de color</p>
                        <h6><strong>DIRECCIÓN:</strong></h6> <p>San Sebastian</p>
                        <h6><strong>ACTIVIDAD PRINCIPAL NEGOCIO:</strong></h6> <p>Comercio</p>
                        <h6><strong>¿QUÉ OFRECE EL NEGOCIO?:</strong></h6> <p>Productos</p>
                        <h6><strong>¿CUANTOS AÑOS TIENE EL NEGOCIO?:</strong></h6> <p>15 años</p>
                        <h6><strong>MERCADO:</strong></h6> <p>Local</p>
                      <center>
                        <img src="<?php echo base_url(); ?>/assets/image/foto.png" alt="" width="290px" height="300px">
                      </center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
    </tr>
    <tr>
      <th id="colortabla" scope="row">8</th>
      <td id="colortabla">Tienda Digital</td>
      <td id="colortabla">Anónimo</td>
      <td id="colortabla">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">️VER 👁️‍🗨️</button>

        <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">!Infórmate¡</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h6><strong>NOMBRE EMPRESA:</strong></h6><p>Pinturas centro de color</p>
                  <h6><strong>DIRECCIÓN:</strong></h6> <p>San Sebastian</p>
                  <h6><strong>ACTIVIDAD PRINCIPAL NEGOCIO:</strong></h6> <p>Comercio</p>
                  <h6><strong>¿QUÉ OFRECE EL NEGOCIO?:</strong></h6> <p>Productos</p>
                  <h6><strong>¿CUANTOS AÑOS TIENE EL NEGOCIO?:</strong></h6> <p>15 años</p>
                  <h6><strong>MERCADO:</strong></h6> <p>Local</p>
                <center>
                  <img src="<?php echo base_url(); ?>/assets/image/foto.png" alt="" width="290px" height="300px">
                </center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
      </td>
    </tr>
  </tbody>
</table>
