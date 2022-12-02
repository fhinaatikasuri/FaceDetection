<?php
require './config/connector.php';

$query = "SELECT * FROM showroom_fhina_table";
$result = mysqli_query($connector, $query);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Fhina_1202202075</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include 'asset/style/style.css'; ?>
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" style="color: white;" href="#home">Home</a>
        </div>
        <div class="navbar-nav">
          <a class="nav-link" href="./pages/Login-Fhina.php">Login</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- foto depan -->
  <section id="home">
    <div class="container">
      <div class="d-flex gap-5 bungkus justify-content-center align-items-center">
        <div>
          <h1>Selamat Datang di<br /> Fhina's Show Room</h1>
          <p class="mt-3">Showroom Fhina memberikan experience terbaik<br /> yang disediakan untuk Anda</p>
          <div class="d-flex align-items-center gap-5 mt-5">
            <img src="<?php echo "asset/images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
            <p style="margin-top: 20px; font-size:14px;">Fhina_1202202075</p>
          </div>
        </div>
        <img src="<?php echo "asset/images/depan.jpg" ?>" alt="foto">
      </div>
    </div>
  </section>
  <!-- End -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>