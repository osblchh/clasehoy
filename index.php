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
        Listado de Visitas
    </h1>
    <hr>
</head>

<section>
    <a href="crearVisita.php"><h3 style="text-align:center">Añadir Visita</h3></a>
</section>
<hr>
<section>
    <a href="crearPaciente.php"><h3 style="text-align:center">Añadir Paciente</h3></a>
</section>
<hr>

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

        if ($linea[3]==="True"){
            echo "<td><img width='30' height='30' src='https://img.icons8.com/ios/50/000000/checkmark--v1.png' alt='checkmark--v1'/></td>";
        } else {
            echo "<td><img width='30' height='30' src='https://img.icons8.com/emoji/48/cross-mark-emoji.png' alt='cross-mark-emoji'/></td>";
        }
        echo "<tr>";
    }
    echo "</table>";
}

listPatients();
?>
</body>
</html>


