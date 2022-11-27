<?php
require "connector.php";
function tambah($tambahData) {
    global $connect;

    $mobil = htmlspecialchars($tambahData["mobil"]);
    $pemilik = htmlspecialchars($tambahData["pemilik"]);
    $merk = htmlspecialchars($tambahData["merk"]);
    $tanggal_beli = htmlspecialchars($tambahData["tanggal_beli"]);
    $deskripsi = htmlspecialchars($tambahData["deskripsi"]);
    $foto = upload();

    if (!$foto) {
        return false;
    }
    $status = htmlspecialchars($tambahData["status"]);

    $query = "INSERT INTO showroom_fhina_table VALUES ('', '$mobil', '$pemilik', '$merk', '$tanggal_beli', '$deskripsi', '$foto', '$status' )";
    mysqli_query($connect, $query); 
    
    return mysqli_affected_rows($connect);
}

function upload() {
    $namaFile = $_FILES["foto"]["name"];
    $ukuranFile = $_FILES["foto"]["size"];
    $error = $_FILES["foto"]["error"];
    $tmpName = $_FILES["foto"]["tmp_name"];
    
    move_uploaded_file($tmpName, "../asset/images/" . $namaFile);

    return $namaFile;
}

?>