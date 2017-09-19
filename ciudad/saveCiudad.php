<?php
session_start();
//if (isset($_SESSION['user'])){
  //  if($_SESSION['rol']==2){

        include_once("ciudadCollector.php");
        $nombreCiudad=$_GET["nombreCiudad"];
        $ciudadCollectorObj = new ciudadCollector();
        ?>

        <!DOCTYPE html>
        <html class="no-js">
          <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title> GUARDAR</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">


           

            <!-- Slider Start -->
            <section id="slider">
              <div class="container">
                <div class="row">
                  <div class="col-md-10 col-md-offset-2">
                    <div class="block">
                      <h1 class="animated fadeInUp">Guardado!</h1>
                <?php
                    $ciudadCollectorObj->createCiudad($id_ciudad,$nombreCiudad);
                        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readCiudad.php'>";
                        ?>
             
                    </div>
                  </div>
                </div>
              </div>
            </section>

          




            </body>
        </html>
 <?php
        
   // }else{
     //   echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
    //}
//}else{
  //      echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
//}
    
?>
