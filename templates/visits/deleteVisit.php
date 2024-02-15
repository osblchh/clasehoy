<?php
require_once '../../autoload.php';
$visitActions = new VisitActions();
$visitActions->deleteVisit();
header('Location: index.php');
?>