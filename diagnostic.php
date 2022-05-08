<?php
  //Sirve para ver errores
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  //
  include('config/setup.php');
  include('config/data.php');
 
  $deckId = $_SESSION["deckId"];
  $slabId = $_SESSION["slabId"];
  $slabProgress = $_SESSION["slab_progress"];
  $slabNum = $_SESSION["slab_num"];
  $progress = $_SESSION["progress"];
  $act1 = $_SESSION["act_1"];

  
  //echo "<br>Slab ID: ".$slabId;
  //echo  "<br> El número de instrucciones es: ".count($act1_Instructions[$slabNum-1]);

  if(isset($_POST["submit"])){
    header("Location: index.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Descubre</title>
    <!--Bootsrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!--CSS-->
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/actividades.css" />
  </head>
  <body>
    <header class="pb-5">
      <div class="container w-75 menu">
        <nav>
          <a href="index.php" class="logo">
            <img src="img/logos/lxlab.png" alt="Logo" />
          </a>
        </nav>
      </div>
      <div class="container w-75">
        <!--BEGIN: Status-->
        <div class="status d-flex align-items-center justify-content-between row">
          
          <a class="w-70 regresar" href="slab.php">Regresar</a>
          
          <div class="progreso d-flex align-items-center justify-content-end w-30 row">
            <div class="col">
              <!--Barra de progreso-->
              <div class="progress mt-0">
                <div
                class="progress-bar"
                  role="progressbar"
                  style="width: <?php echo $progress;?>%"
                  aria-valuenow="<?php echo $progress;?>"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="col-1 pl-0 pr">
              <p class="porcentaje m-0"><?php echo $progress;?>%</p>
            </div>
          </div>
        </div>
        <!--END: Status-->
      </div>
    </header>
    <main class="container w-75">
      <h2 class="heading">Diagnóstico</h2>
      
      <div data-tf-widget="dYRDyeIu" data-tf-iframe-props="title=Diagnostico Cierre EXCEL" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>

      <div class="d-flex justify-content-center align-items-center my-4">
        <!--Finalizar Deck-->
        <button id="subir-evidencias" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#finalModal">Finalizar</button>
      </div>
      <!-- Modal finalizar Deck-->
      <div class="modal fade" id="finalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog final-modal-dialog">
              <div class="modal-content">
                <div class="modal-body final-modal-body">
                  <h4 class="modal-heading white-text">¡Felicidades!</h4>
                  <p class="modal-message white-text"><?= $Diagnostic_message?></p>
                    <form action="diagnostic.php" method="POST">
                      <input value="Finalizar" type="submit" name="submit" class="btn btn-primary"></input>
                    </form>
                </div>
              </div>
            </div>
          </div>
          <!--END: Modal finalizar slab-->
    </main>
    <footer class="p-4 mt-3 d-flex justify-content-center align-items-center">
      Copyright 2021. Tecmilenio.
    </footer>
    <!--Scripts-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
