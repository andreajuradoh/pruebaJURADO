
<?php

class ciudad
{
    private $idCiudad;
    private $nombreCiudad;

    
    
     function __construct($idCiudad,$nombreCiudad) {

 	$this->idCiudad = $idCiudad;
       $this->nombreCiudad = $nombreCiudad;
      
     }

function setIdCiudad($idCiudad){
       $this->idCiudad = $idCiudad;
     } 
     function getIdCiudad(){
       return $this->idCiudad;
     } 
function setNombreCiudad($nombreCiudad){
       $this->nombreCiudad = $nombreCiudad;
     } 
     function getNombreCiudad(){
       return $this->nombreCiudad;
     } 


}

?>
