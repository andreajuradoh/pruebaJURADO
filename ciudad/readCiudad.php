<?php
session_start();
//if (isset($_SESSION['user'])){
  //  if($_SESSION['rol']==2){

        include_once("ciudadCollector.php");
        //$usuario = $_SESSION['MiSesion'];

        $ciudadCollectorObj = new ciudadCollector();

        ?>

        <!DOCTYPE html>
        <html class="no-js">
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LEER CIUDAD</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          
                            <h1>Tabla Ciudad</h1>
                            <a href="createCiudad.php"><button class="btn btn-default btn-call-to-action">Crear Ciudad</button></a> <br>
                            <table>
                                    <tr>
                                        <th>&nbsp;&nbsp;ID CIUDAD&nbsp;&nbsp;</th>
                                        <th>&nbsp;&nbsp;NOMBRE CIUDAD&nbsp;&nbsp;</th>
                                   
                                        </tr>
                                        <?php
                                        foreach ($ciudadCollectorObj->showCiudades() as $c){
                                        echo "<tr>";
                                        echo "<td>" . $c->getIdCiudad() . "</td>";
                                        echo "<td>" . $c->getNombreCiudad() . "</td>";
                                     


                                        echo "<td><a href='updateCiudad.php?idCiudad=" . $c->getIdCiudad() ."&nombreCiudad=" . $c->getNombreCiudad() ."'> <button>Editar</button></a></td>";
                                       

                                        }

                                    ?>

                            </table>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </body>
        </html>
 
