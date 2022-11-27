<?php 
require "connector.php";
function registrasi ($data){
    global $connect;

    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower(stripslashes($data["email"]));
    $nohp = strtolower(stripslashes($data["nohp"]));
    $password = mysqli_real_escape_string($connect,$data["Password"]); 
    $Passwordx = mysqli_real_escape_string($connect,$data["cPassword"]); 

    $result = mysqli_query($connect, "SELECT email FROM user_fhina WHERE email = '$email' ");
    
    if(mysqli_fetch_assoc($result)){
        echo "<script> alert('e-mail sudah terdaftar') </script>";
        return false;
    }

    if( $password !== $Passwordx){
        echo "<script> alert('konfirmasi password salah') </script>";
        return false;
    }



    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($connect, "INSERT INTO user_fhina VALUES (
        '','$nama', '$email', '$password','$nohp'
    )");

    return mysqli_affected_rows($connect);

}


?>