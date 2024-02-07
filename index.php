<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<head>
    <hr>
    <h1>
        Listado de Pacientes
    </h1>
    </hr>
</head>

<?php

function listPatients(){
    $datosFichero = fopen("data.csv", "r");
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Paciente</th>" . "<th>Importe</th>" . "<th>Fecha</th>" . "<th>Pagado</th>";
    echo "</th>";
    echo "</thead>";
    while($linea = fgetcsv($datosFichero)){
        echo "<tr>";
        echo "<td>" . $linea[0] . "</td>";
        if ($linea[1]>250){
            echo "<td class='superior'>" . $linea[1] . "</td>";
        } else {
            echo "<td>" . $linea[1] . "</td>";
        }
        
        echo "<td>" . $linea[2] . "</td>";

        if ($linea[3]=="True"){
            echo "<td class='pagado'>" . $linea[3] . "</td>";
        } else {
            echo "<td class='impagado'>" . $linea[3] . "</td>";
        }
        echo "<tr>";
    }
    echo "</table>";
}

listPatients();
?>
</body>
</html>


