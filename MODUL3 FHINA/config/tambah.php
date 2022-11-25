<?php
require './connector.php';

$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$deskripsi = $_POST['desc'];
$status = $_POST['status'];
$gambar = $_FILES['gambar']['name'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
  $sql = "INSERT INTO showroom_fhina_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
  if (mysqli_query($connector, $sql)) {
    header("location: ../pages/List-Fhina.php?pesan=berhasil");
  } else {
    header("location: ../pages/List-Fhina.php?pesan=gagal");
  }
} else {
  header("location: ../pages/List-Fhina.php?pesan=gagal");
}