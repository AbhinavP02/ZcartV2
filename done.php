<?php
        session_start();
    
        include("connection.php");
        include("functions.php");
    
        $user_data = check_address($con);

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
	    <a class="ls" href="Login/Sign up" target="_blank">Login/Sign Up</a>
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

<h1>CONGRATULATIONS! YOUR ORDER IS PLACED!</h1>

<h2>Delivery Address:</h2>
<pre>
    address name saved as: <?php echo $user_data['nameofaddress'];?><br>
    country: <?php echo $user_data['country'];?><br>
    name: <?php echo $user_data['name'];?><br>
    phone: <?php echo $user_data['phone'];?><br>
    pincode: <?php echo $user_data['pincode'];?><br>
    address: <?php echo $user_data['address'];?><br>
    state: <?php echo $user_data['state'];?><br>

</pre>


<h3>Your order will arrive* under 5 working days!</h3>
<h3>Thanks for shopping with us!</h3>

<h5>*  it won't</h5>

</body>
</html>