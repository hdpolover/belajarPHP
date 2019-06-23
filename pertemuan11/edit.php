<?php
// Memanggil file koneksi.php
require_once "koneksi.php";

// --------------------------------------------
// Bagian 1.
// Mengambil data dari database 
// dan menampilkan pada form
// --------------------------------------------


// Menangkap id dari url
$id = $_GET['id'];

// Mengambil data berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM tbsiswa WHERE id=$id");

// Menyiapkan data untuk dicetak ke form
while($data = mysqli_fetch_array($result)) {
    $nama = $data['nama'];
    $alamat = $data['alamat'];
}

// --------------------------------------------
// Bagian 2.
// Proses Update data sesuai dengan form 
// yang diinputkan
// --------------------------------------------

// Mengecek apakah user sudah menekan tombol update
if(isset($_POST['update'])) {   
    $id = $_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];

    // Proses Update Data
    mysqli_query($mysqli, "UPDATE tbsiswa SET nama='$nama',alamat='$alamat' WHERE id=$id");

    // Alihkan halaman ke tampil.php
    header("Location: tampil.php");
}

?>

