<?php
$databaseHost = 'localhost';
$databaseName = 'crud_db';
$databaseUserName = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUserName, $databasePassword, $databaseName);

if(!$mysqli){
    die("Koneksi gagal" . mysqli_connect_error());
}
echo "Koneksi Berhasil";
mysqli_close($mysqli);