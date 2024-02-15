<?php

require_once '../../autoload.php';
$patientActions = new PatientActions();
?>


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
            List of Patients
        </h1>
        <hr>
    </head>

    <section>
        <a href="createPatient.php">
            <h3>Add new patient</h3>
        </a>
    </section>

    <section>
        <a href="../visits/index.php">
            <h3>Visits</h3>
        </a>
    </section>

    <section>
        <a href="../globalData/index.php">
            <h3>GlobalData</h3>
        </a>
    </section>

    <table>
        <thead>
            <tr>
                <th>Nº Patient</th>
                <th>Name</th>
                <th>Adress</th>
                <th>Detail</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $patientActions->listPatients();
            ?>
    </table>





</body>

</html>