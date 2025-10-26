<?php
// Nonaktifkan error notice tapi tetap tampilkan error penting
error_reporting(E_ALL & ~E_NOTICE);

// Konfigurasi database
$host     = 'localhost';
$database = 'db_puskesmas';
$user     = 'root';
$pass     = '';

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $database);

// Cek koneksi
if (!$koneksi) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
?>
