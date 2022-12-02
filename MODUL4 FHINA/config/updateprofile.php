<?php
require './connector.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$sandi = $_POST['password'];

$updateQuery = "UPDATE user_fhina SET nama = '$nama', no_hp = '$nohp', password = '$sandi' WHERE id = $id";

$executeQuery = mysqli_query($connector, $updateQuery);

if ("SELECT password FROM users WHERE id = $id" != 0) {
  if ($executeQuery) {
    header("location: ../pages/Profile-Fhina.php");
  } else {
    header("location: ../pages/Profile-Fhina.php");
  }
} else {
  $updateQuery = "UPDATE users SET nama = '$nama', no_hp = '$nohp' WHERE id = $id";
  if ($executeQuery) {
    header("location: ../pages/Profile-Fhina.php");
  } else {
    header("location: ../pages/Profile-Fhina.php");
  }
}
