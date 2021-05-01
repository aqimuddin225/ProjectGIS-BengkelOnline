<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Bengkel Online</title>
    
    <script src="https://kit.fontawesome.com/e08b167792.js" crossorigin="anonymous"></script>
    
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js"></script>
    <link
      href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css"
      rel="stylesheet"
    />

    <style>
        #header{
            position: relative;
            height: 400px;
            width: 100%;
            background-color: powderblue;
        }
        #search{
            position: absolute;
            bottom: 70px;
        }
        #map { 
            position: relative; 
            height: 600px;
        }
        #list{
            background-color: grey;
        }
    </style>
  </head>
  <body>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css">
    <!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
    
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"><i class="fas fa-cogs"></i>  Bengkel Online</a>
            <form class="d-flex">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">
                login
                </button>
            </form>
        </div>
    </nav>

    <div id="header" class="container-fluid">
        <div id="search" class="container-fluid">
            <div class="col offset-md-5">
                <div class="input-group">
                    <div id="geocoder" class="geocoder"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="container">
        <div class="row">
            <div id="list" class="col-4"></div>
            <div id="map" class="col"></div>
        </div>
        <hr class="featurette-divider">
        <div class="d-flex justify-content-between">
            <div ><h3>Tabel Data Bengkel</h3></div>
            <div ><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add"><i class="fas fa-plus-circle"></i></button></div>
        </div>
        <div class="row">
            <table class="table table-borderless">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                    <th></th>
                </tr>
                <tr>
                    <td>Jill</td>
                    <td>Smith</td>
                    <td>50</td>
                    <th>
                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-backspace"></i></button>
                        <button type="button" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></button>
                    </th>
                </tr>
                <tr>
                    <td>Eve</td>
                    <td>Jackson</td>
                    <td>94</td>
                    <th>
                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-backspace"></i></button>
                        <button type="button" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></button>
                    </th>
                </tr>
            </table>
        </div>
        <hr class="featurette-divider">
    </div>


    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    

    <!-- Login Modal -->
    <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Login Form</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a class="btn btn-primary" href="admin.php" role="button">Login</a>
        </form>
        </div>
        </div>
    </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Add Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a class="btn btn-primary" href="admin.php" role="button">Login</a>
        </form>
        </div>
        </div>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

    <script>
      mapboxgl.accessToken = 'pk.eyJ1IjoiYXFpbXVkZGluMjI1IiwiYSI6ImNrbm15MmhqNzBsMTgycHAxN2VscWJtYzcifQ.AnyCo_FUDt0O4yhgrVNv9A';

      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-96, 37.8],
        zoom: 13
      });
      
      // Add the control to the map.
        var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl
        });
        
        document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
      
        // Initialize the geolocate control.
        var geolocate = new mapboxgl.GeolocateControl({
            positionOptions: {
                enableHighAccuracy: true
            },
            trackUserLocation: true
        });

        // Add the control to the map.
        map.addControl(geolocate);
        map.on('load', function() {
        geolocate.trigger(); //<- Automatically activates geolocation
        });
        

    
    </script>
  </body>
</html>