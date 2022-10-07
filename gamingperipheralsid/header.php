<!DOCTYPE html>
<html>
<body>
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="home_user.php" class="logo d-flex align-items-center">
        <img src="Logo.jpeg" alt="">
        <span>Jakarta Fashion Week</span>
      </a>

      <!-- Navbar -->

      <nav id="navbar" class="navbar">      	
	      	<a href="#" class="toggle-button">
		        <span class="bar"></span>
		        <span class="bar"></span>
		        <span class="bar"></span>
	      	</a>        
        <ul>
	        <li><a class="nav-link" href="home_user.php">Home</a></li>
	        <li><a class="nav-link" href="news.php">News</a></li>
	        <li class="dropdown"><a href="#"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
	            <ul>
	              <li><a href="Shoes.php">Shoes</a></li>
	              <li><a href="Clothes.php">Clothes</a></li>
	              <li><a href="PantsAndSuch.php">Pants And Such</a></li>
	              <li><a href="Jewelries.php">Jewelries</a></li>
	            </ul>
	        </li>
	        <li class="dropdown"><a href="#">Contact<i class="bi bi-chevron-down"></i></a>
	            <ul>
	                <li><a href="#">Our Online Store</a></li>
	                <li><a href="lokasi.php">Our Store Location</a></li>
	            </ul>
	        </li>
            <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
            {
            ?>
                <li><a class="getstarted scrollto" href="logout.php">Logout</a></li>
            <?php }else{ ?>
                <li><a class="getstarted scrollto" href="signin.php">Login</a></li>
            <?php } ?>            
        </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
</body>
</html>