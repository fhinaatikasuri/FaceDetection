<!doctype html>
<html lang="en">

<head>
    <title>modul2_fhina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body><?php
        $nama = "Fhina_1202202075";

        $jenismobil = [
            [
                "mobil" => "Toyota Rush",
                "harga" => 200000,
                "img" => "https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png"
            ],
            [
                "mobil" => "Toyota Ayla",
                "harga" => 150000,
                "img" => "https://astradaihatsuyogyakarta.com/wp-content/uploads/2020/07/merah.png"
            ],
            [
                "mobil" => "Honda Brio",
                "harga" => 150000,
                "img" => "https://storage.googleapis.com/lucas-production/1612513416Brio.png"
            ],
        ];

        $book = $_POST["book"] . " " . $_POST["time"];
        $mulaisewa = date("d-m-Y H:i:s", strtotime($book));
        $selesaisewa = date("d-m-Y H:i:s", (strtotime($book) + 60 * 60 * 24 * $_POST["hari"]));
        $carss = $_POST["mobil"];
        $phone = $_POST["phone"];

        $serprice = 0;
        if (isset($_POST["ser"])) {
            foreach ($_POST["ser"] as $ser) {
                if ($ser == "Health protocol") {
                    $serprice += 25000;
                }
                if ($ser == "Driver") {
                    $serprice += 100000;
                }
                if ($ser == "Fuel Filled") {
                    $serprice += 250000;
                }
            }
        } else {
            $serprice += 0;
        }
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

    <div class="container" style="text-align: center;">
        <div class="m-2">
            <p class="m-0" style="font-size:30px">Thank you <?php echo $nama; ?> for Reserving</p>
            <p class="m-0" style="font-size:25px">Please double check your reservation detail</p>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service(s)</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                <tr>
                    <td><?php echo rand(8000000, 10000000); ?></td>
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $mulaisewa ?></td>
                    <td><?php echo $selesaisewa ?></td>
                    <td><?php echo $carss ?></td>
                    <td><?php echo $phone ?></td>
                    <td>
                        <?php
                        if (isset($_POST["ser"])) {
                            foreach ($_POST["ser"] as $ser) {
                                echo "<li>$ser</li>";
                            }
                        } else {
                            echo "no service";
                        }
                        ?>
                    </td>
                    <td> Rp.
                        <?php
                        if ($_POST["mobil"] == $jenismobil[0]["mobil"]) {
                            echo ($_POST["hari"] * $jenismobil[0]["harga"]) + $serprice;
                        } else if ($_POST["mobil"] == $jenismobil[1]["mobil"]) {
                            echo ($_POST["hari"] * $jenismobil[1]["harga"]) + $serprice;
                        } else if ($_POST["mobil"] == $jenismobil[2]["mobil"]) {
                            echo ($_POST["hari"] * $jenismobil[2]["harga"]) + $serprice;
                        } else {
                            echo "0";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <footer class="fixed-bottom text-center pt-3 bg-light">
        <p style="text-align:center; color:Gray;">
            Created by Fhina_1202202075
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>