<?php

include_once('ciudad.php');
include_once('../Collector.php');

class ciudadCollector extends Collector
{
  
  function showCiudades() {
    $rows = self::$db->getRows("SELECT * FROM ciudad ");        
    $arrayCiudad= array();        
    foreach ($rows as $c){
      $aux = new Ciudad($c{'idCiudad'},$c{'nombreCiudad'});
      array_push($arrayCiudad, $aux);
    }
    return $arrayCiudad;        
  }

 function showCiudad($idCiudad) {
   $row = self::$db->getRows("SELECT * FROM ciudad where idCiudad= ?", array("{$idCiudad}"));
   $ObjCiudad = new Ciudad($row[0]{'idCiudad'},$row[0]{'nombreCiudad'});
   return $ObjCiudad;   
 }

function updateCiudad($idCiudad, $nombreCiudad) {
   $insertrow = self::$db->updateRow("UPDATE public.ciudad SET nombreCiudad = ? WHERE idCiudad= ?" , array("{$nombreCiudad}","{$idCiudad}"));  
 }


function createCiudad($idCiudad, $nombreCiudad) {
   $insertrow = self::$db->insertRow("INSERT INTO public.ciudad (nombreCiudad) VALUES (?) ", array("{$nombreCiudad}"));        
 }
}
?>

