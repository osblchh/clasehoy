<?php
require_once '../../autoload.php';
$patientActions = new PatientActions();
$patientActions->deletePatient();
header('Location: index.php');
?>