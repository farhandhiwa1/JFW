<?php 
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6f53881389.js"></script>
    <title>Sign Up's Indonesia E-Bookstore</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    
    <title>Document</title>
</head>
<body>
    
<section class="login py-5 bg-light">
      <div class="container">
          <div class="row g-0">
            <div class="col-lg-5">
              <img src="https://www.highsnobiety.com/static-assets/thumbor/pIQPGQEJYw7AQz4sXTV0orHkSp4=/1200x720/www.highsnobiety.com/static-assets/wp-content/uploads/2021/08/06112227/kanye-west-donda-album-release-feature.jpg" class="gambar img-fluid">
            </div>
            <div class="col-lg-7 text-center py-5">
              <h1 class="">Sign Up</h1>
           
              <form action="proses_signup.php" method="POST">
                <input type="hidden" name="id" value="">
                <div class="form-row py-2 pt-5">
                  <div class="offset-1 col-lg-10">
                    <input type="text" class="kotakinput px-3" placeholder="Masukkan username" name="username">
                  </div>
                </div>
                <div class="form-row py-2 pt-5">
                  <div class="offset-1 col-lg-10">
                    <input type="password" class="kotakinput px-3" placeholder="Masukkan password" name="password">
                  </div>
                </div>
                <input type="hidden" name="level" value="user">        
                <div class="form-row py-2 pt-5">
                  <div class="offset-1 col-lg-10">
                    <input type="submit" class="btn1" name="submit" value="Submit">
                  </div>
                </div>
              </form>

              <p class="gapunyaakun py-3">Already signed up? <a href="signin.php">Sign in!</a></p>
              <p class="py-3">Or login with</p> 
              <span><a href="https://www.facebook.com/" class="fab fa-facebook"></a></span>
              <span><a href="https://workspace.google.com/intl/en_id/products/currents/" class="fab fa-google-plus"></a></span>
            </div>
          </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>