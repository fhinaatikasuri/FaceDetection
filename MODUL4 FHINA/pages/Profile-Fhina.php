<?php
require '../config/connector.php';

$query = "SELECT * FROM user_fhina";
$result = mysqli_query($connector, $query);
$data = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile | Fhina_1202202075</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/style.css'; ?>
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" style="color: white;" href="./After-Fhina.php">Home</a>
          <a class="nav-link" href="<?php (mysqli_num_rows($result) > 0) ? print "../pages/List-Fhina.php" : print "../pages/Add-Fhina.php" ?>">MyCar</a>
        </div>
        <div class="d-flex gap-4">
          <a href="Add-Fhina.php" style="background-color: white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;">Add Car</a>
          <div class="dropdown">
            <button class="btn dropdown-toggle" style="background-color:  white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $data['nama']; ?>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" style="border-radius: 5px; color:black; text-decoration: none;" href="#">Profile</a></li>
              <li><a class="dropdown-item" style="border-radius: 5px; color:black; text-decoration: none;" href="../config/logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- foto -->
  <section id="profile">
    <div class="container d-flex flex-column pt-5">
      <form action="../config/updateprofile.php?id=<?php echo $data["id"] ?>" method="POST">
        <div class="profile">
          <span class="d-flex mx-auto">
            <h1>Profile</h1>
          </span>
          <div class="d-flex align-items-center">
            <label for="dummy1">Email</label>
            <h2><?php echo $data["email"] ?></h2>
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="nama">Nama</label>
            <input id="nama" name="nama" value="<?php echo $data["nama"] ?>">
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="nohp">Nomor Handphone</label>
            <input id="nohp" name="nohp" value="<?php echo $data["no_hp"] ?>">
          </div>
          <hr>
          <div class="d-flex align-items-center">
            <label for="password">Kata Sandi</label>
            <input type="password" id="password" name="password" placeholder="Kata Sandi">
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="password">Konfirmasi Kata Sandi</label>
            <input type="password" id="password" name="password" placeholder="Konfirmasi Kata Sandi">
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="navbarcolor">Warna Navbar</label>
            <input id="navbarcolor" name="navbarcolor">
          </div>
          <div class="d-flex align-items-center mt-4 justify-content-center">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </form>
      <footer class="d-flex container pb-5 align-items-center gap-5 mt-5">
        <img src="<?php echo "../asset/images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
        <p style="margin-top: 20px; font-size:14px;">Fhina_1202202075</p>
      </footer>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>