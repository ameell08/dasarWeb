<?php
// Koneksi ke database
$connect = mysqli_connect("localhost", "root", "" , "prakwebdb");

// periksa koneksi
if (mysqli_connect_errno()){
    die("koneksi database gagal : " . mysqli_connect_error());
}
?>