
<?php
//session_start();
//if (isset($_SESSION['user'])){
   // if($_SESSION['rol']==2){

                include_once("ciudadCollector.php");
                $ciudadCollectorObj = new ciudadCollector();

                //$usuario = $_SESSION['MiSesion'];
                ?>

                <!DOCTYPE html>
                <html class="no-js">
                  <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <title>CREAR</title>
                    <meta name="description" content="">
                    <meta name="viewport" content="width=device-width, initial-scale=1">



                    <!-- Slider Start -->

                              <form action="saveCiudad.php" method="get">
                                  <h1 class="form-group">C R E A R - C I U D A D </h1>
                                    <div class="form-group">
                                           <label>Consulta</label>
                                      

                                        </div>

                                        <div class="form-group">
                                          <input type="text" name="idCiudad" class="form-control" placeholder="ID CIUDAD">
                                        </div>
                            <div class="form-group">
                                          <input type="text" name="nombreCiudad" class="form-control" placeholder="NOMBRE CIUDAD">
                                        </div>
                                        <a href="saveCiudad.php"> <button type="submit"> GUARDAR </button>
                                        </form>
                            </center>        
                            </div> <br>
                        <center> <a href="readCiudad.php"><button type="submit">Regresar</button></a>   </center>
                          </div>
                        </div>
                      </div>
                     </section>
                    </section>

                    <!-- footer Start -->
                    <footer>
                      <div class="container">
                        
                      </div>
                    </footer>





                    </body>
                </html>
 //<?php
        
  //  }else{
    //    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
   // }
//}else{
  //      echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
//}
    
//?>
