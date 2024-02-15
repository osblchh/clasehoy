<?php
require_once '../../autoload.php';
$visitActions = new VisitActions();
$visitActions->createVisit();
header('Location: index.php');
?>