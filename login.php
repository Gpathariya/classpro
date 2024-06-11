<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login your Account</title>
  <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="img/faviconpng.png" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- costom css -->
  <link rel="stylesheet" href="css/login.css" />
</head>

<body>
  <div class="container">
    <div class="row mt-lg-4">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="classPro_head">
          <h1 class="classpro">Class-Pro</h1>
        </div>
        <!-- <div class="logo_div">
            <a href="">
              <img src="img/classpro-logo.png" class="logo" alt="logo"
            /></a>
          </div> -->
        <div class="card p-4">
          <div class="card-body">
            <h2 class="card-title wlcm_head">Welcome to your Account</h2>
            <p class="card-title login_head">Login here</p>
            <form action="">
              <div class="mt-2">
                <label for="username">Username</label><br />
                <input type="text" id="username" name="username" class="form-control" />
              </div>
              <div class="mt-lg-3">
                <label for="password">Password</label><br />
                <input type="password" name="password" id="password" class="form-control" />
              </div>
              <div>
                <input type="checkbox" id="checkbox" />
                <label for="showpassword">show password</label>
              </div>

              <div class="row">
                <div class="col">
                  <a href="" class="btn w-sm-25 mt-4 login_btn">Login</a>
                </div>
                <div class="col">
                  <a href="" class="fgt_pass mt-4">forgot password?</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>
  </div>

  <script src="js/main.js"></script>
</body>

</html>