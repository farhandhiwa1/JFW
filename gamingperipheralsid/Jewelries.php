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
<div class="container" data-aos="fade-up" style="padding-top: 40px;">

    <section id="mouse" class="mouse">

    <header class="section-header">
    <h2>Shoes</h2>
    <p>Check out our favourite blings</p>
    </header>

                <div class="row gy-4" data-aos="fade-left">        
           
<?php 
$query = mysqli_query($koneksi,"SELECT * from tbjfw_product WHERE tipe='Jewelries'");
while($data=mysqli_fetch_assoc($query)) :
?>
    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            
                    <div class="box">
                        <h3 style="color: #07d5c0;"><?php echo $data['nama'] ?></h3>
                        <img src="produk/<?php echo $data['gambar'] ?> " class="img-fluid" alt="">
                        <a href="<?php echo $data['link'] ?>" class="btn-buy">Buy Now</a>                               
                    </div>                
                </div>                             
        <?php endwhile; ?>
    </div>
</div>


  <!-- Vendor File JS -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>  

  <script src="js.js"></script>

</body>
</html>