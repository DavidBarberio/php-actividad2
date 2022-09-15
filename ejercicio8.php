<?php

$llamada = 4;
$coste = 10;

if($llamada <= 3){
    $coste;
    
}else{
  $coste = $coste+($llamada - 3) * 5;
}
echo"El coste total de la llamada es de: " . $coste . " centimos";

?>