<?php

$pagado = "False";

if(isset($_POST['Pagado']) && $_POST['Pagado'] == "on"){
    $pagado = "True";
} else{
    $pagado = "False";
}

$datosNuevaVisita = [$_POST['Paciente'], $_POST['Importe'], $_POST['Fecha'], $pagado];

$archivo = fopen('data.csv', 'a', '<br>');

fputcsv($archivo, $datosNuevaVisita);

header('Location: ../index.php');
?>