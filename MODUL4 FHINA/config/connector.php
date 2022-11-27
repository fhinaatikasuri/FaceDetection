<?php
$host = "localhost:3315";
$user = "root";
$password = "";
$database   = "modul3";

$connect = new mysqli($host, $user, $password, $database);

if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully";