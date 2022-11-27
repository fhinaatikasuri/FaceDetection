<?php
require "connector.php";
function ubah($tambahData) {
    global $connect;
    
    $id = $tambahData["id_mobil"];
    $mobil = htmlspecialchars($tambahData["mobil"]);
    $pemilik = htmlspecialchars($tambahData["pemilik"]);
    $merk = htmlspecialchars($tambahData["merk"]);
    $tanggal_beli = htmlspecialchars($tambahData["tanggal_beli"]);
    $deskripsi = htmlspecialchars($tambahData["deskripsi"]);
    $foto = upload();
    $status = htmlspecialchars($tambahData["status"]);

    $query = "UPDATE showroom_fhina_table SET 
                nama_mobil = '$mobil', 
                pemilik_mobil = '$pemilik',
                merk_mobil = '$merk',
                tanggal_beli = '$tanggal_beli',
                deskripsi = '$deskripsi',
                foto_mobil = '$foto',
                status_pembayaran = '$status'
                WHERE id_mobil = $id";
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