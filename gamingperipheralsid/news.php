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

    <section id="recent-news-posts" class="recent-news-posts">

      <div class="container news" data-aos="fade-up">

        <header class="section-header">
          <p>News related to fashion</p>
        </header>

        <div class="row">
<?php 
$query = mysqli_query($koneksi,"SELECT * from tbjfw_news");
while($data=mysqli_fetch_assoc($query)) :
?>
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="produk/<?php echo $data['gambar'] ?>" style="height: auto; max-width: 100%;" class="img-fluid mx-auto" alt=""></div>
              <span class="post-date mt-auto"><?php echo $data['title'] ?></span>
              <h3 class="post-title fixed-bottom"><?php echo substr($data['descr'], 0, 120, )  ?>...</h3>
              <a href="<?php echo $data['linknews'] ?>" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>    
<?php endwhile ?>     
        </div>

      </div>

    </section>

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