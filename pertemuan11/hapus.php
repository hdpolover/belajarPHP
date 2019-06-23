<?php
// Memanggil file koneksi.php
require_once "koneksi.php";

// Mendapatkan id dari URL
$id = $_GET['id'];

// Menghapus baris data berdasarkan id
mysqli_query($mysqli, "DELETE FROM tbsiswa WHERE id=$id");

// Alihkan halaman ke tampil.php
header("Location:tampil.php");

?>
