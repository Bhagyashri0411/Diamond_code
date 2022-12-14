<?php
$databaseHost = 'localhost';
$databaseName = 'diamond_school';
$databaseUsername ='diamond_school1';
$databasePassword = 'pbh2022@bigtime';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if (!$conn) {
    echo 'Not connected' . mysqli_connect_error();
}
?>