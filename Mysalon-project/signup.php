
<?php
   
   
//Database connection

$servername="localhost";
$username="root";
$password="";
$database="projectsalons";

//create connection
$conn=mysqli_connect($servername,$username,$password,$database,3307);

if(isset($_POST['submit'])){
 if(!empty($_POST['customer_ID']) && !empty($_POST['CustomerName']) && !empty($_POST['CustomerPhone']) && !empty($_POST['CustomerRegion']) && !empty($_POST['Password'])){
    
   $customer_ID=$_POST['customer_ID'];
   $CustomerName=$_POST['CustomerName'];
   $CustomerPhone=$_POST['CustomerPhone'];
   $CustomerRegion=$_POST['CustomerRegion'];
   $Password=$_POST['Password'];

   //check if the customer exist in the system 
   $check_duplicate_customer_ID="SELECT * from customer WHERE customer_ID='$customer_ID'";
   $result=mysqli_query($conn,$check_duplicate_customer_ID);

   if(mysqli_num_rows($result)>0){

    echo '<script>alert("The Id is existing in the system!")</script>';
   }

   else{
      //inster the inputs to database
    mysqli_query($conn,"INSERT INTO customer(customer_ID,CustomerName,CustomerPhone,CustomerRegion,Password) Values( '$customer_ID','$CustomerName','$CustomerPhone','$CustomerRegion', '$Password')");
    
    echo '<script>alert("Your details submitted successfully")</script>';
   }

 

 }
}

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="wcustomer_IDth=device-wcustomer_IDth, initial-scale=1.0">
   <title>Signup form</title>

   <link rel="stylesheet" href="style-login.css">

</head>
<body>


<nav>
         <label class="logo">BEU CARE</label>
         <ul>
            <li><a  href="index.php">Home</a></li>
            <li>
               <a href="#">
               <i class="fas fa-caret-down"></i>
                  Salons
               
               </a>
               
               <ul>
                  <li><a href="message-alert.php">Beauty</a></li>
                  <li><a href="message-alert.php">Braber</a></li>
                  <li><a href="message-alert.php">Spa</a></li>
                  <li><a href="message-alert.php">Nails</a></li>
                  <li><a href="message-alert.php">Hair</a></li>
               </ul>
            </li>
           
            <li><a href="Aboutus.php">About Us</a></li>
            <li><a href="Whyus.php">Why Us</a></li>

            <button ><a href="wel-login.php" style='color:black;'>LOGIN</a> </button>
            <button> <a href="#" style='color:black;'>SIGN UP</a></button>
           
         </ul>
        
      </nav>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Signup now</h3>
  
      <input type="text" name="customer_ID" required placeholder="Enter Your ID">
      <input type="text" name="CustomerName" required placeholder="Enter Your Name">
      <input type="text" name="CustomerPhone" required placeholder="Enter Your Phonenumber">
      <input type="text" name="CustomerRegion" required placeholder="Enter Your Region">
      <input type="password" name="Password" required placeholder="enter your password">
      
     
      <input type="submit" name="submit" value="Signup Now" class="form-btn">
      <p>already have an account? <a href="wel-login.php">login now</a></p>
   </form>

</div>

</body>
</html>