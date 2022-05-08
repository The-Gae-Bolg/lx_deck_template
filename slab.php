<?php

    //Sirve para ver errores
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    //
  
  
    include('config/setup.php');
    include('config/data.php');

      //Va a recibir el slabId de la sesión, pero
      // lo guardará com una cookie de una semana
      // para mantener el slab alimentado
      
      $deckId = $_COOKIE["deck_id"];

      if(isset($_SESSION["slabId"])){
        setcookie("slab_id", $_SESSION["slabId"], time() + (60 * 60 * 24 * 7));
      } else {
        $_SESSION["slabId"] = $_COOKIE["slab_id"];
      }

      $slabId = $_SESSION["slabId"];

      //Obtener los datos generales que se ocupan en el slab
      //según el id del slab
      getAllSlabsData($slabId);
      $slabProgress = $_SESSION["slab_progress"];
      $slabNum = $_SESSION["slab_num"];
      $currentSlab = $_SESSION["current_slab"];
      $progress = $_SESSION["progress"];
      $act1 = $_SESSION["act_1"];
      $act2 = $_SESSION["act_2"];
      $act3 = $_SESSION["act_3"];

      //echo "<br>EL slab Num es: ".$slabNum;
      //echo "<br>El ID del slab actual es: ".$slabId;
      //echo "<br>Progress: ". $progress;
      //echo "<br>Slab progress: ".$slabProgress;

      //Archivo data
      $slabTitle = $slabTitles[$slabNum -1];
      $slabGoal = $slabGoals[$slabNum - 1];
    
    //echo "<br>Current slab: " . $currentSlab;

    //Trackers
    $slabTrackers = getTrackersSlab($slabId);
    $ts_1 = $slabTrackers["ts_1"];
    $ts_2 = $slabTrackers["ts_2"];
    $ts_3 = $slabTrackers["ts_3"];

    //echo "<br>El valor inicial de ts_1 es: ".$slabTrackers["ts_1"];

    $name = $slabId."_ts_1";
    if(isset($_COOKIE[$name])){
      if($slabTrackers["ts_1"]==0){
        setSlabTracker("ts_1", $slabId, $_COOKIE[$name]);
        //Borra la cookie
        unset($_COOKIE[$name]);
        setcookie($name, "", time() - 3600);
      }
    }

    $name = $slabId."_ts_2";
    if(isset($_COOKIE[$name])){
      if($slabTrackers["ts_2"]==0){
        setSlabTracker("ts_2", $slabId, $_COOKIE[$name]);
        //Borra la cookie
        unset($_COOKIE[$name]);
        setcookie($name, "", time() - 3600);
      }
    }

    $name = $slabId."_ts_3";
    if(isset($_COOKIE[$name])){
      if($slabTrackers["ts_3"]==0){
        setSlabTracker("ts_3", $slabId, $_COOKIE[$name]);
        //Borra la cookie
        unset($_COOKIE[$name]);
        setcookie($name, "", time() - 3600);
      }
    }

    if(isset($_COOKIE["ts_1"])){
      if($slabTrackers["ts_1"]==0){
        setSlabTracker("ts_1", $slabId, $_COOKIE["ts_1"]);
        //Borra la cookie
        unset($_COOKIE['ts_1']);
        setcookie("ts_1", "", time() - 3600);
      }
    }

    if(isset($_COOKIE["ts_2"])){
      if($slabTrackers["ts_2"]==0){
        setSlabTracker("ts_2", $slabId, $_COOKIE["ts_2"]);
        //Borra la cookie
        unset($_COOKIE['ts_2']);
        setcookie("ts_2", "", time() - 3600);
      }
    }

    if(isset($_COOKIE["ts_3"])){
      if($slabTrackers["ts_3"]==0){
        setSlabTracker("ts_3", $slabId, $_COOKIE["ts_3"]);
        //Borra la cookie
        unset($_COOKIE['ts_3']);
        setcookie("ts_2", "", time() - 3600);
      }
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/slab.css" />
    <title>Slab</title>
  </head>
  <body>
    <input type="hidden" id="value_ts_1" value="<?php echo $ts_1?>" name="value_ts_1">
    <input type="hidden" id="value_ts_2" value="<?php echo $ts_2?>" name="value_ts_2">
    <input type="hidden" id="value_ts_3" value="<?php echo $ts_3?>" name="value_ts_3">
    <input type="hidden" id="slabId" value="<?php echo $slabId?>" name="slabId">
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
          
          <a class="w-70 regresar" href="index.php">Regresar</a>
          
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
              <div class="conteiner">
                <div class="intro row">
                  <a href="index.php" class="slab-heading"> <i class="bi bi-chevron-compact-left return-icon"></i> Slab <?php echo $slabNum;?></a>
                  <div class="col-lg-6 intro-text mt-1">
                    <h2 class="heading"><?php echo $slabTitle;?></h2>
                    <h3 class="subtitle">Meta de aprendizaje</h3>
                    <p class="body">
                      <?php echo $slabGoal;?>
                      <?php if(isset($imgGoals[$slabNum-1])) {?>   
                        <div class="text-col"> 
                          <div id="ts_2" class="text-container" width="100%">
                            <img class="img-fluid rounded" src=<?php echo $imgGoals[$slabNum-1]?> alt="" />
                          </div>
                        </div>
                      <?php }?>
                    </p>
                  </div>
                  <div class="intro-video video col-lg-6">
                    <!--Introdicción-->
                    <?php if(isset($slabIntroType[$slabNum-1])) {?>
                      <h3 class="mt-4 subtitle">Introducción</h3>
                        <div class="text-col"> 
                        <div id="ts_2" class="text-container" width="100%">
                        <?php if($slabIntroType[$slabNum-1] === "video") {?>    
                          <video id="ts_1" controls>
                            <source  src="<?php echo $slabIntro[$slabNum-1][0]?>">
                          </video>
                          <?php } else {?>
                            <div id="ts_2" class="text-container" width="100%"><?php echo $slabIntro[$slabNum-1][0]?></div>
                          <?php }?>
                        </div>
                        </div>
                    <?php }?>
                  </div>
                </div>
                <?php if(isset($banner[$slabNum-1])) {?>   
                  <div class="text-col"> 
                    <div id="ts_2" class="text-container" width="100%">
                      <img class="img-fluid rounded" src=<?php echo $banner[$slabNum-1]?> alt="" />
                    </div>
                  </div>
                <?php }?>
              </div>
        </div>
      
    </header>
    <main class="container w-75">
      
      <h3 class="mt-4 subtitle">Materiales</h3>
      <div class="materiales">
        
        <div class="materiales-video col-lg video">
          
          <?php if($slabMaterialsType[$slabNum-1] === "video") {?>
            <iframe src="<?php echo $slabMaterials[$slabNum-1][$slabNum-1]?>" frameborder="0" allow="accelometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
            <img id="ts_2" src="img/video-placeholder.jpg" alt="Video materiales" />
          <?php } elseif($slabMaterialsType[$slabNum-1] === "text") {?>
            <div id="ts_2" class="material text-container" width="100%"><?php echo $slabMaterials[$slabNum-1][0]?></div>
          <?php } else {?>
            <iframe id="ts_2" class="material" height="200px" width="100%" frameborder="no" scrolling="no" seamless src="<?php echo $slabMaterials[$slabNum-1][$slabNum-1]?>"></iframe>
          <?php }?>
        </div>  
      </div>

      <!--ACTIVIDADES-->
      <div class="mt-3">
        <h3>Actividades</h3>
        <div>
          <div class="row gx-3">
            <!--Act: Descubre-->
            <div class="col act">
              <div class="act-card row  <?php if($currentSlab < $slabNum) { echo "disabled"; }?>">
                <div class="col-7">
                  <h4 class="body blue-text">Actividad A</h4>
                  <h3 class="heading blue-text">Descubre</h3>
                  <a href="descubre.php" class="<?php if($currentSlab < $slabNum) { echo "btn-disabled";} else {echo "btn btn-primary next-btn";}?>">
                    <i class="<?php if($currentSlab < $slabNum) { echo "hidden";} else {echo "bi bi-arrow-right";}?>"></i>
                  </a>
                </div>
                <div class="col-5 d-flex justify-content-center">
                  <img class="img-act" src="img/act/descubre.png" alt="">
                </div>
              </div>
              
            </div>
            <div class="hidden-lg"></div>
            <!--Act: Demuestra-->
            <div class="col act">
              <div class="act-card row  <?php if($act1 == 0) { echo "disabled";}?>">
                <div class="col-7">
                  <h4 class="body blue-text">Actividad B</h4>
                  <h3 class="heading blue-text">Demuestra</h3>
                  <a href="demuestra.php" class="<?php if($act1 == 0) { echo "btn-disabled";} else {echo "btn btn-primary next-btn";}?>">
                    <i class="<?php if($act1 == 0) { echo "hidden";} else {echo "bi bi-arrow-right";}?>"></i>
                  </a>
                </div>
                <div class="col-5 d-flex justify-content-center">
                  <img class="img-act" src="img/act/demuestra.png" alt="">
                </div>
              </div>
            </div>
            <div class="hidden-lg"></div>
            <!--Act: Autovaloración-->
            <div class="col act">
              <div class="act-card row  <?php if($act2 == 0) { echo "disabled";}?>">
                <div class="col-7">
                  <h3 class="heading blue-text">Autovaloración</h3>
                  <a href="autoev.php" class="<?php if($act2 == 0) { echo "btn-disabled";} else {echo "btn btn-primary next-btn";}?>">
                    <i class="<?php if($act2 == 0) { echo "hidden";} else {echo "bi bi-arrow-right";}?>"></i>
                  </a>
                </div>
                <div class="col-5  d-flex justify-content-center">
                  <img class="img-act" src="img/act/autoval.png" alt="">
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <!--Referencias-->
      <?php if(isset($slabReferencias[$slabNum-1])) {?>
          <h3 class="mt-4 subtitle">Referencias</h3>
          <div class="text-col"> 
          <div id="ts_2" class="material text-container" width="100%">
            <ul>
            <?php for($j = 0;$j<count($slabReferencias[$slabNum-1]);$j++){?>
              <li><?php echo $slabReferencias[$slabNum-1][$j]?></li>
            <?php }?>
            </ul> 
          </div>
          </div>
      <?php }?>
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
    <script type="module" src="js/slab.js"></script>
  </body>
</html>
