<?php



$lineaModificada = [$_POST['paciente'], $_POST['importe'], $_POST['fecha'], $_POST['pagado']];

$lineas = [];

$fichero = fopen("data.csv", "r");

while($linea = fgetcsv($fichero)){
    if($linea[0] == $_GET['paciente'] && $linea[1] == $_GET['importe']){
        array_push($lineas, $lineaModificada);
    } else {
        array_push($lineas, $linea);
    }
}

fclose($fichero);

$fichero = fopen('data.csv', 'w');

foreach($lineas as $linea){
    fputcsv($fichero, $linea);
}

header('Location: ../index.php');