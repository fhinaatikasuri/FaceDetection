<?php 
    require "connector.php";

    $id= $_GET["id"];

    function hapus($id) {
        global $connect;
        mysqli_query($connect, "DELETE FROM showroom_fhina_table WHERE id_mobil = $id");
        return mysqli_affected_rows($connect);   
    }
    if(hapus($id) > 0){
        echo "
                <script> 
                    alert('data berhasil dihapus');
                    document.location.href = '../pages/ListCar-Fhina.php';  
                </script>";
    } else {
        echo "
            <script> 
                alert('data tidak berhasil dihapus');
                document.location.href = '../pages/ListCar-Fhina.php';  
            </script>";
    }

?>