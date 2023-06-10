<?php
        session_start();
    
        include("connection.php");
        include("functions.php");
    
        $user_data = check_login($con);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Zcart:Online Shopping site</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav>
        <a href="index.php"><img src="zlogo.jpg" width= "80px" height="40px" class="logo"></a>
		<div class="navlinks">
		<span style="color: #a5a9b0; margin-right: 100px; margin-top: 600px;"> Hello! <?php echo $user_data['user_name'];?> </span>
	    <!-- <a class="ls" href="Login/Sign up" target="_blank">Login/Sign Up</a> -->
        <a class="ls" href="logout.php">Logout</a>
		<a href="about.html" target="_blank">About Us</a>    
		<a href="contact.html" target="_blank">Contact Us</a>
		</div>			
	</nav>
    <h2 class="welcome">Zcart.com:Your one stop online shop</h2>

<div class="navbar">
  <a href="offers.html">Offers</a>
  <a href="bestsellers.html">Best Sellers</a>
  <div class="dropdown">
    <button class="dropbtn">Product Categories
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="electronics.html" target="_blank">Electronics</a>
      <a href="clothing.html" target="_blank">Clothing</a>
      <a href="home.html" target="_blank">Home/Kitchen</a>
    </div>
  </div>
</div>

 	<div class="banner">
 	       <img src="elec1new.jpg">
    </div>

	<div id="products">

	<div class="product1">
		<img src="shoe.jpg">
	</div>

	<div class="product2">
		<img src="shirt.jpg">
	</div>

	<div class="product3">
		<img src="machine.jpg">
	</div>
	
</div>

<div id="productnames">
	<div class="name1">
		<p>
			Nike ZoomX Vaporfly NEXT% Running Shoe-9000₹
		</p>
		<form method="get" action="buynow.php" target="_blank">
        <button type="submit" name="button">BUY NOW</button>
        </form>
	</div>
	<div class="name2">
		<p>
			Green Plane Full Shirt-2000₹
		</p>
		<form method="get" action="buynow.php" target="_blank">
        <button type="submit" name="button">BUY NOW</button>
        </form>
	</div>
	<div class="name3">
		<p>
			Bosch 8 Kg Fully Automatic Front Load<br>
			Washing Machine (WAT2846SIN, Silver)-39999₹
		</p>
		<form method="get" action="buynow.php" target="_blank">
        <button type="submit" name="button">BUY NOW</button>
        </form>
	</div>
</div>

<footer>
	<a href="#"></a><img src="zlogo.jpg" width= "80px" height="40px" class="logo"></a>
	<h2>Zcart.com</h2>
	<div class="footer_container">
		<div class="footer_content">
			<a href="about.html" target="_blank">About Us</a><br>
		    <a href="contact.html" target="_blank">Contact Us</a><br>
		    <a href="tnc.pdf" target="_blank">Terms & Conditions</a><br>
		    <a href="privacy.html" target="_blank">Privacy Policy</a>
		</div>
		<div class="footer_social">
			<a href="https://in.linkedin.com/" target="_blank"><img src="linkedin.png" width="50px" height="50px"></a>
			<a href="https://www.facebook.com/" target="_blank"><img src="facebook.png" width="80px" height="60px"></a>
			<a href="https://www.instagram.com/" target="_blank"><img src="insta.png" width="50px" height="50px"></a>
			<a href="mailto:Zcart.support@gmail.com"><img src="mail.png" width="50px" height="50px"></a>
		</div>
		&copy; 2021 Zcart Pvt. Ltd. All Rights Reserved
	</div>
</footer>

</body>
</html>