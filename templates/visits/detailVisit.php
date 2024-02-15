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
    <h1>Visits of this Patient</h1>
    <section><a href="index.php"><img width="30" height="30" src="https://img.icons8.com/plasticine/30/return.png" alt="return"/></a></section>
    <?php $visitActions->detailVisit(); ?>
</body>
</html>