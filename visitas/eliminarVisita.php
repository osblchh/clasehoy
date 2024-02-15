<?php

$lineas = [];

$fichero = fopen("data.csv", "r");

while($linea = fgetcsv($fichero)){
    if($linea[0] == $_GET['paciente'] && $linea[1] == $_GET['importe']) {
    } else {
        array_push($lineas, $linea);
    }
}

fclose($fichero);

$archivo = fopen("data.csv", "w");

foreach($lineas as $linea){
    fputcsv($archivo, $linea);
}

header('Location: ../index.php');

?>