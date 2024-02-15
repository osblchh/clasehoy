<?php

require_once '../../autoload.php';
$globalData = new GlobalData();
echo "<section>";
echo $globalData->getTotal();
echo '<br>';
echo $globalData->getPaidTotal();
echo '<br>';
echo $globalData->getUnpaidTotal();
echo '<br>';
echo $globalData->getBalance();
echo '<br>';
echo $globalData->getNumberPatients();
echo "</section>";

?>

