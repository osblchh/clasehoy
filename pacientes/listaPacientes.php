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
    <hr>
</head>

<section>
    <a href="./visitas/crearVisita.php"><h3 style="text-align:center">Añadir Visita</h3></a>
</section>
<hr>
<section>
    <a href="./pacientes/listaPacientes.php"><h3 style="text-align:center">Añadir Paciente</h3></a>
</section>
<hr>

<?php
    
function listPatients(){
    $datosFichero = fopen("pacientes.csv", "r");  //asigna a una variable la referencia a un metodo vsc en modo lectura 
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>IdPaciente</th>"."<th>Nombre</th>"."<th>Direccion</th>"."<th>Eliminar</th>"."<th>Editar</th>";
    echo "</tr>";
    while($linea = fgetcsv($datosFichero)){ //devuelve una linea , mientras esto me pueda devoover una linea diferente haremos un echo 
        echo "<tr>";
        echo "<td>". $linea[0] . "</td>";
        echo "<td>". $linea[1] . "</td>";
        echo "<td>". $linea[2] . "</td>";
        echo "<td><a href='./visitas/eliminarVisita.php?paciente=$linea[0]&importe=$linea[1]'><img width='30' height'30' src='https://img.icons8.com/material/24/filled-trash.png' alt='filled-trash'/></a></td>";
        echo "<td><a href='./visitas/editarVisita.php?paciente=$linea[0]&importe=$linea[1]&fecha=$linea[2]'><img width='30' height='30' src='https://img.icons8.com/material-outlined/24/edit--v1.png' alt='edit--v1'/></td>";
        echo "</tr>";
    }
    echo "</table>";
}
listPatients();


?>
</body>
</html>


