<?php
require_once '../../autoload.php';
$patientActions = new PatientActions();
$patientActions->createPatient();
header('Location: index.php');
?>