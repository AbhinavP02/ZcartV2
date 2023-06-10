<?php

session_start();
    
include("connection.php");
include("functions.php");

$user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $nameofaddress = $_POST['nameofaddress'];
    $user_id = $user_data['user_id'];
    //save to database

		//Read from database
		
		$query = "select * from address where user_id = '$user_id' and nameofaddress='$nameofaddress' limit 1";
		$result = mysqli_query($con, $query);

		

        $addressdata = mysqli_fetch_assoc($result);

        echo $addressdata['nameofaddress'];
        echo $addressdata['country'];
        echo $addressdata['name'];
        echo $addressdata['phone'];
        echo $addressdata['pincode'];
        echo $addressdata['address'];
        echo $addressdata['state'];

					
        $_SESSION['user_id'] = $user_data['user_id']; 
        header("Location: index.php");
        die;
}

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
      <a href="electronics.html">Electronics</a>
      <a href="clothing.html">Clothing</a>
      <a href="home.html">Home/Kitchen</a>
    </div>
  </div>
</div>

<h1>Select Address</h1>


<form method="post" action="done.php">

    <label>Select name of address</label><br>
        <select id="nameofaddress" name="nameofaddress">
          <option>--SELECT COUNTRY--</option>
          <option>home</option>
          <option>work</option>
        </select><br><br>

    

       <hr>

       <!-- <h1>Payment: Debit/Credit Card Details</h1>

       <label>Full Name On Card:</label><br>
       <input type="text" name="full name" placeholder="Full name" required><br>

       <label>Card Number:</label><br>
       <input type="number" name="cnumber" placeholder="16 Digit Card Number" required><br>

       <label>Expiry Date:</label><br>
       <input type="text" name="expiry" placeholder="Expiry (MM/YY)" required><br>

       <label>CVV:</label><br>
       <input type="number" name="cvv" placeholder="3 DIGIT CVV" required><br> -->


      <input type="submit" name="submit" value="DONE"><br>
      <button type="reset">RESET</button> 

    </form> 


</body>
</html>