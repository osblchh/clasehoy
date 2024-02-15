<?php
require_once '../../autoload.php';
$patientActions = new PatientActions();
$patientActions->editPatient();
header('Location: index.php');
?>