<?php

session_start();
    
include("connection.php");
include("functions.php");

$user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $nameofaddress = $_POST['nameofaddress'];
    $country = $_POST['country'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $pincode = $_POST['pincode'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    

        //save to database
        $user_id = $user_data['user_id'];
        $query = "insert into address (user_id,nameofaddress,country,name,phone,pincode,address,state) values ('$user_id','$nameofaddress','$country','$name','$phone','$pincode','$address','$state')";

        mysqli_query($con, $query);

        header("Location: selectaddress.php");
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

<h1>Add new Address</h1>


<form method="post">

    <label>Name of address:</label><br>
    <input type="text" placeholder="address name" name="nameofaddress" required><br>

    <label>Country/Region</label><br>
        <select id="country" name="country">
          <option>--SELECT COUNTRY--</option>
          <option>INDIA</option>
          <option>USA</option>
          <option>CANADA</option>
          <option>FRANCE</option>
        </select><br><br>

    <label>Full Name(First and Last name):</label><br>
    <input type="text" placeholder="Full name" name="name" required><br><!-- no closing tag for input-->
    
    <label>Mobile no.</label><br>
    <input type="number" placeholder="10 Digit mobile number" name="phone" required><br>
  
    <label>Pin Code</label><br>
    <input type="number" placeholder="6 Digits [0-9] PIN Code" name="pincode"><br>
       
        <label>Address:</label><br>
        <textarea rows="5" cols="30" name="address"></textarea><br>

        <label>State</label><br>
        <select id="state" name="state">
          <option>--SELECT STATE--</option>
          <option>HARYANA</option>
          <option>BIHAR</option>
          <option>CHANDIGARH</option>
          <option>DELHI</option>
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

    <a href="selectaddress.php">OR select a address</a>


</body>
</html>