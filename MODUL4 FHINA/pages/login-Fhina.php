<?php
    if(!isset($_SESSION)){
        session_start();
    }

    require "../config/register.php";
    require "../config/connector.php";

    if(isset($_POST["register"])){
        if(registrasi($_POST)){
            echo "<script> 
            alert('user baru berhasil ditambahkan');  
        </script>";
        }else{
            echo mysqli_error($connect);
        }
    }


    if (isset($_SESSION["login"])){
        header("Location: Home-Fhina.php");
        exit;
    }

    if(isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["Password"];

        $result = mysqli_query($connect, "SELECT * FROM user_fhina WHERE email = '$email'");

        if(mysqli_num_rows($result) === 2){


            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row["password"])) {


                $_SESSION["email"] = $row["email"];
                $_SESSION["nama"] = $row["nama"];
                $_SESSION["nohp"] = $row["no_hp"];
                $_SESSION["login"] = true; 


                if(isset($_POST["remember"])){

                    setcookie("id", $row["id"], time()+60);
                    setcookie("key", hash("sha256", $row["email"]));
                }
                $_SESSION["message"] = "Selamat Anda Telah Berhasil Login";
                header("Location: Home-Fhina.php ");
                exit;
            };
        }

        $error = true ;

    }

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page | Fhina_1202202075</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/style/index.css" type="text/css">
</head>

<body>
    <section id="login">

        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 min-vh-100 left"></div>
                <div class="col-md-6">
                    <div class="form-login m-auto ps-5">
                        <h2 class="fw-bold mb-4">Login</h2>
                        <?php if(isset($error)) :  ?>
                        <p style="color:red;">Email atau Password Salah</p>
                        <?php endif ;  ?>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control w-75">
                            </div>
                            <div class="mb-3">
                                <label for="Password" class="form-label">Password</label>
                                <input type="password" name="Password" id="Password" class="form-control w-75">
                            </div>
                            <div class="mb-3 d-flex gap-2 mt-3">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">remember me</label>
                            </div>
                            <button type="submit" name="login" class="d-block btn btn-primary mb-3"
                                style="width: 129px; height: 51px; left: 838px; top: 645px; background: #3593E9; border-radius: 5px;">Login</button>
                        </form>
                        <p>Belum memiliki akun? <a href="register-Fhina.php">daftar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>