<!doctype html>
<html lang="en">

<head>
    <title>modul2_fhina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    $carss = [
        [
            "mobil" => "Toyota Rush",
            "harga" => "200.000",
            "img" => "https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png"
        ],
        [
            "mobil" => "Toyota Ayla",
            "harga" => "150.000",
            "img" => "https://astradaihatsuyogyakarta.com/wp-content/uploads/2020/07/merah.png"
        ],
        [
            "mobil" => "Honda Brio",
            "harga" => "150.000",
            "img" => "https://storage.googleapis.com/lucas-production/1612513416Brio.png"
        ],
    ]

    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="fhina_home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fhina_booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        <p class="m-2" style="text-align: center; font-size: 34px">WELCOME TO EAD RENT</p>
    </div>
    <div class="container">
        <p class="p-1" style="color: Gray; text-align: center; font-size: 20px">Find your best deal, here!</p>
    </div>

    <div class="container">
        <div class="d-flex justify-content-around">
            <div class="col-3 m-1">
                <div class="card shadow-sm rounded">
                    <img src="<?php echo $carss[0]["img"]; ?>" alt="">
                    <div class="m-3">
                        <p class="m-0" style="font-size: 15px"><?php echo $carss[0]["mobil"]; ?></p>
                        <p class="m-0" style="color: Gray">Rp. <?php echo $carss[0]["harga"]; ?> / Day</p>
                    </div>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue; font-weight: bold;">7 Kursi</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue; font-weight: bold;">1500 CC</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue; font-weight: bold;">Manual</p>
                    <hr class="m-0">
                    <div class="text-center bg-light">
                        <button class="m-2 btn btn-primary" type="submit"><a href="fhina_booking.php?img=<?= $carss[0]["img"]; ?>&mobil=<?= $carss[0]["mobil"]; ?>" style="color:white; text-decoration:none;">Book Now</a></button>
                    </div>
                </div>
            </div>
            <div class="col-3 m-1 ms-2 me-2">
                <div class="card shadow-sm rounded">
                    <img src="<?php echo $carss[1]["img"]; ?>" alt="">
                    <div class="m-3">
                        <p class="m-0" style="font-size:15px"><?php echo $carss[1]["mobil"]; ?></p>
                        <p class="m-0" style="color:Gray">Rp. <?php echo $carss[1]["harga"]; ?> / Day</p>
                    </div>
                    <hr class="m-0">
                    <p class="m-2" style="text-align:center; color:blue; font-weight:bold;">5 Kursi</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align:center; color:blue; font-weight:bold;">1200 CC</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align:center; color:blue; font-weight:bold;">Manual</p>
                    <hr class="m-0">
                    <div class="text-center bg-light">
                        <button class="m-2 btn btn-primary" type="submit"><a href="fhina_booking.php?img=<?= $carss[1]["img"]; ?>&mobil=<?= $carss[1]["mobil"]; ?>" style="color:white; text-decoration:none;">Book Now</a></button>
                    </div>
                </div>
            </div>
            <div class="col-3 m-1">
                <div class="card shadow-sm rounded">
                    <img src="<?php echo $carss[2]["img"]; ?>" alt="" style="width:280px;">
                    <div class="m-3">
                        <p class="m-0" style="font-size:15px"><?php echo $carss[2]["mobil"]; ?></p>
                        <p class="m-0" style="color:Gray">Rp. <?php echo $carss[2]["harga"]; ?> / Day</p>
                    </div>
                    <hr class="m-0">
                    <p class="m-2" style="text-align:center; color:blue; font-weight:bold;">5 Kursi</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align:center; color:blue; font-weight:bold;">1200 CC</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align:center; color:blue; font-weight:bold;">Automatic</p>
                    <hr class="m-0">
                    <div class="text-center bg-light">
                        <button class="m-2 btn btn-primary" type="submit"><a href="fhina_booking.php?img=<?= $carss[2]["img"]; ?>&mobil=<?= $carss[2]["mobil"]; ?>" style="color:white; text-decoration:none;">Book Now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="fixed-bottom text-center pt-3 bg-light">
        <p style="text-align:center; color:Gray;">
            Created by Fhina_1202202075
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>