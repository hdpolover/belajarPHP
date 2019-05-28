<?php

/**
 * Koneksi
 */

$dbHost = 'localhost';
$dbName = 'dbsiswa';
$dbUsername = 'root';
$dbPassword = '';

$mysqli = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (!$mysqli) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
