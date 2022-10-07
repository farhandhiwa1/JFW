<?php  
session_start();

include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/index-style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>Pro Settings</title>
</head>
<body>
	
	<?php include 'header.php' ?>

    <section id="players" class="players">

      <div class="container favourite" data-aos="fade-up">

        <header class="section-header">
          <p>Dress Like 'Em</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="player-box">
              <i class="ri-discuss-line icon"><img src="https://preview.redd.it/57yv76zk7gf21.jpg?width=640&crop=smart&auto=webp&s=96fc43fc3642f4668a4fc6fce9e1d1ac001bf201"></i>
              <h3>Kanye</h3>
              <p>Kanye West is an outspoken Grammy Award-winning rapper, record producer and fashion designer.</p>
              <a href="#featured" class="read-more"><span>Dress like them</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="player-box">
              <i class="ri-discuss-line icon"><img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/princess-diana-gettyimages-52105332-1605297654.jpg?crop=0.694xw:1.00xh;0.217xw,0&resize=640:*"></i>
              <h3>Princess Diana</h3>
              <p>Diana, Princess of Wales, was a member of the British royal family.</p>
              <a href="#featured" class="read-more"><span>Dress like them</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="player-box">
              <i class="ri-discuss-line icon"><img src="https://i0.wp.com/sneakerhistory.com/wp-content/uploads/2015/01/michael-jordane28099s-final-msg-appearance-as-a-bull.jpg?fit=500%2C500&ssl=1"></i>
              <h3>Michael Jordan</h3>
              <p>lya "m0NESY" Osipov (born May 1, 2005) is a Russian professional Counter-Strike: Global Offensive player who plays for G2 Esports as the AWPer.</p>
              <a href="#featured" class="read-more"><span>Dress like them</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>          

        </div>

      </div>

    </section> 

    <section id="featured" class="mouse">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Check out our featured fashion products</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #07d5c0;">Yeezy Gap Black</h3>
              <img src="produk/yeezygap.jpg" class="img-fluid" alt="">
              <a href="https://stockx.com/yeezy-x-gap-round-jacket-black" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <span class="featured">Featured</span>
              <h3 style="color: #65c600;">Jordan 1 Retro Chicago</h3>
              <img src="produk/jordan 1 retro chicago.jpg" class="img-fluid" alt="">
              <a href="https://stockx.com/yeezy-x-gap-round-jacket-black" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <h3 style="color: #ff901c;">Kanye West and Drake Free Hoover Pants</h3>
              <img src="produk/Kanye-West-Drake-Free-Hoover-Vintage-Repurposed-Denim-Multiple-Color-Variations.jpg" class="img-fluid" alt="">
              <a href="https://stockx.com/yeezy-x-gap-round-jacket-black" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="box">
              <h3 style="color: #ff0071;">Louis Vuitton Cuban Chain Necklace</h3>
              <img src="produk/Louis-Vuitton-Cuban-Chain-Necklace-Blue-v1.jpg" class="img-fluid" alt="">
              <a href="https://stockx.com/yeezy-x-gap-round-jacket-black" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>
      </div>

  <!-- Vendor File JS -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>  

  <script src="js.js"></script>

</body>
</html>