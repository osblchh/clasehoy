<?php
require_once '../../autoload.php';
$visitActions = new VisitActions();
$visitActions->editVisit();
header('Location: index.php');
?>