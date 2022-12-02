<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Fhina_1202202075</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/style.css'; ?>
  </style>
</head>

<body>
  <section class="login">
    <div class="row">
      <div class="col-md-6">
        <img src="../asset/images/login.png" alt="login">
      </div>
      <div class="col-md-6">
        <div class="d-flex align-items-center justify-content-center form-login">
          <div class="login-form">
            <h1>Login</h1>
            <form action="../config/login.php" method="POST">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : "" ?>" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo isset($_COOKIE['pass']) ? $_COOKIE['pass'] : "" ?>" required>
              </div>
              <div class="d-flex">
                <input type="checkbox" name="remember" id="remember" class="checkbox">
                <label style="margin-top: 17px; margin-left:15px;" for="remember">Remember Me</label>
              </div>
              <button type="submit" name="login" class="button btn btn-primary mt-3">Login</button>
              <p class="mt-3" style="text-decoration: none;">Anda belum memiliki akun? <span><a href="Register-Fhina.php">Daftar</a></span></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>