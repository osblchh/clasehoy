<?php

echo "<h1>Eliminar Paciente</h1>";
echo $_GET['paciente'];

$datosFichero = fopen("patients.csv", "r");

while($linea = fgetcsv($datosFichero)){
    if($linea[0] == $_GET['paciente'] && $linea[1] == $_GET['importe']) {
        echo "<pre>";
        print_r($linea);
        echo "</pre>";
    }
}
?>