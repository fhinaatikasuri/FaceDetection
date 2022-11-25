<?php
$host = "localhost:3315";
$user = "root";
$password = "";
$database   = "modul3";

$connector = new mysqli($host, $user, $password, $database);

if ($connector->connect_error) {
  die("Connection failed: " . $connector->connect_error);
}
echo "Connected successfully";