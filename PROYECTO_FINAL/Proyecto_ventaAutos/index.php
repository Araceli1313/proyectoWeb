<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoZone</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">  
  </head>

  <body>
    <div class="navbar-fixed">
      <nav class="white">
        <div class="container">
          <div class="nav-wrapper">
            <a href="index.html" class="brand-logo"><img src="img/LogoAuto.png" alt="Logo"></a>
            <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <?php include 'menu.php'; ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>    

    <div class="container" style="margin-top: 40px;">
      <div class="row">
        <div class="col s50 m3">
          <div>
            <h4 class="black-text" style="font-weight: bold;">Tu Ruta,</h4>
            <h4 class="black-text" style="font-weight: bold;">Tu Carro,</h4>
            <h4 class="black-text" style="font-weight: bold;">Tu Camino,</h4>
            <br><br><br><br>
            <h6 class="grey-text" style="font-weight: bold;">
              Es hora de cumplir tu sueño, ven a hacerlo realidad
            </h6>
          </div>
        </div>

        <div class="col s50 m6">
          <div class="center">
            <img src="img/carroRojo.png" alt="Carro Rojo" style="width: 500px; height: auto;">               
          </div>
        </div>

        <div class="col s50 m3">
          <div class="right-align">
            <a href="index.html">
              <img src="img/burbujaServicio.png" alt="Burbuja" style="width: 150px; height: auto;">
            </a>
            <div class="right-align">
              <h5 class="black-text" style="font-weight: bold; margin-bottom: 8px;">
                12.5k personas
              </h5>
              <p class="black-text" style="font-size: 1.1rem; line-height: 1;">
                Han utilizado nuestro servicio y recomiendan comprar con nosotros.
              </p>
            </div>
          </div>
        </div>

<div class="section" style="height: 300px;"></div>
        </div>

<?php
$conexion = new mysqli("localhost", "root", "1234", "ventadeautos");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$resultado = $conexion->query("SELECT * FROM cars");

if (!$resultado) {
    die("Error en la consulta: " . $conexion->error);
}

echo "<div class='cars-container'>";  // ACA ESTA EN EL CONTENDOR DE LAS TARJETAS

if ($resultado->num_rows > 0) {
    while ($cars = $resultado->fetch_assoc()) {
        $ruta = "uploads/" . $cars['image']; // PENDIENTE

        echo "
     
            <div class='cars-container' style='margin-top: 150px;'>
                <div class='card'>
                    <div class='card-image'>
                        <img src='$ruta' alt='Carro'>
                    </div>
                    <div class='card-content'>
                        <p><strong>Marca:</strong> " . $cars['brand'] . "</p>
                        <p><strong>Modelo:</strong> " . $cars['model'] . "</p>
                        <p><strong>Año:</strong> " . $cars['year'] . "</p>
                        <p><strong>Precio:</strong> Q" . number_format($cars['price'], 2) . "</p>
                    </div>
                </div>
            </div>
   
        ";
        echo "
            <div class='cars-container' style='margin-top: 150px;'>
                <div class='card'>
                    <div class='card-image'>
                        <img src='$ruta' alt='Carro'>
                    </div>
                    <div class='card-content'>
                        <p><strong>Marca:</strong> " . $cars['brand'] . "</p>
                        <p><strong>Modelo:</strong> " . $cars['model'] . "</p>
                        <p><strong>Año:</strong> " . $cars['year'] . "</p>
                        <p><strong>Precio:</strong> Q" . number_format($cars['price'], 2) . "</p>
                    </div>
                </div>
            </div>
        ";
        echo "
            <div class='cars-container' style='margin-top: 150px;'>
                <div class='card'>
                    <div class='card-image'>
                        <img src='$ruta' alt='Carro'>
                    </div>
                    <div class='card-content'>
                        <p><strong>Marca:</strong> " . $cars['brand'] . "</p>
                        <p><strong>Modelo:</strong> " . $cars['model'] . "</p>
                        <p><strong>Año:</strong> " . $cars['year'] . "</p>
                        <p><strong>Precio:</strong> Q" . number_format($cars['price'], 2) . "</p>
                    </div>
                </div>
            </div>
        ";
              echo "
            <div class='cars-container' style='margin-top: 40px;'>
                <div class='card'>
                    <div class='card-image'>
                        <img src='$ruta' alt='Carro'>
                    </div>
                    <div class='card-content'>
                        <p><strong>Marca:</strong> " . $cars['brand'] . "</p>
                        <p><strong>Modelo:</strong> " . $cars['model'] . "</p>
                        <p><strong>Año:</strong> " . $cars['year'] . "</p>
                        <p><strong>Precio:</strong> Q" . number_format($cars['price'], 2) . "</p>
                    </div>
                </div>
            </div>
        ";
              echo "
            <div div class='cars-container' style='margin-top: 40px;''>
                <div class='card'>
                    <div class='card-image'>
                        <img src='$ruta' alt='Carro'>
                    </div>
                    <div class='card-content'>
                        <p><strong>Marca:</strong> " . $cars['brand'] . "</p>
                        <p><strong>Modelo:</strong> " . $cars['model'] . "</p>
                        <p><strong>Año:</strong> " . $cars['year'] . "</p>
                        <p><strong>Precio:</strong> Q" . number_format($cars['price'], 2) . "</p>
                    </div>
                </div>
            </div>
        ";
              echo "
            <div class='cars-container' style='margin-top: 40px;''>
                <div class='card'>
                    <div class='card-image'>
                        <img src='$ruta' alt='Carro'>
                    </div>
                    <div class='card-content'>
                        <p><strong>Marca:</strong> " . $cars['brand'] . "</p>
                        <p><strong>Modelo:</strong> " . $cars['model'] . "</p>
                        <p><strong>Año:</strong> " . $cars['year'] . "</p>
                        <p><strong>Precio:</strong> Q" . number_format($cars['price'], 2) . "</p>
                    </div>
                </div>
            </div>
        ";
                }
            } else {
                echo "No hay autos disponibles.";
            }

                echo "</div>"; 

                $conexion->close();
                ?>

                <div class="form-section">
                    <?php include 'contacto.php'; ?>
                </div>

          <!--El pie de la página -->

                        </div>
                      </div>
                  <footer id="color-footer" class="page-footer">
                    <div class="container">
                      <div class="row"> 
                        <div class="col l6 s12">
                          <a href="index.html" class="brand-logo">
                            <img src="img/LogoAuto-Blanco.png" alt="Logo" style="width: 250px;">
                          </a>
                        </div>
                        <div class="col l4 offset-l2 s12">
                              <p class="grey-text text-lighten-4">12-21 Zona 1, Guatemala +502 2244 - 1155</p>
            </div>
                      </div>
                    </div>
                    <div class="footer-copyright">  
                      <div class="container">
                        © 2025 Copyright AUTOZONE               
                      </div>
                    </div>
                  </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/sharon.js"></script>

    <div id="modal1" class="modal bottom-sheet">
      <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
      </div>
    </div>
  </body>
</html>
