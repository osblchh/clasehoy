<?php

require_once '../../autoload.php';
$visitActions = new VisitActions();
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
            List of Visits
        </h1>
        <hr>
    </head>

    <section>
        <a href="createVisit.php">
            <h3>Add new visit</h3>
        </a>
    </section>

    <section>
        <a href="./../patients/index.php">
            <h3>Patients</h3>
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
                <th>Patient</th>
                <th>Money</th>
                <th>Date</th>
                <th>Is Paid?</th>
                <th>Detail</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $visitActions->listVisits();
            ?>
    </table>





</body>

</html>