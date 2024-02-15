<?php

$datosNuevoPaciente = [$_POST['IdPaciente'], $_POST['Nombre'], $_POST['Dirección']];

$archivo = fopen('patients.csv', 'a');

fputcsv($archivo, $datosNuevoPaciente);

header('Location: ../index.php');
?>