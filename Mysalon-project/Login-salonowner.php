<?php

session_start();



?>

<?php
 

 $servername="localhost";
$username="root";
$password="";
$database="projectsalons";

//create connection
$conn=mysqli_connect($servername,$username,$password,$database,3307);


 if(isset($_POST["submit"]))
 {
   $ID=$_POST["ID"];
   $password=$_POST["password"];
   $Salon_Id=$_POST['Salon_Id'];

   $sql="SELECT * FRom manger WHERE ID ='$ID' AND password='$password' AND  Salon_Id=$Salon_Id ";

   
   $result=$conn->query($sql);
   


   if($result->num_rows>0){
    
         $_SESSION['ID']=$ID;
         $_SESSION['Salon_Id']=$Salon_Id;
         header("location:salonowner-page.php");
         die;
      }
   else{
         echo '<script>alert("You enter wrong details")</script>';
      }
    
   }
   
   

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="wcustomer_IDth=device-wcustomer_IDth, initial-scale=1.0">
   <title>login form</title>

   
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

            <button ><a href="logout.php"style='color:black;'>LOGIN</a> </button>
            
           
         </ul>
        
      </nav>


   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
     
      <input type="text" name="ID" required placeholder="Enter Your ID">
      <input type="password" name="password" required placeholder="Enter Your Password">
      <input type="text" name="Salon_Id" required placeholder="Enter Your Salon ID">
 
      <input type="submit" name="submit" value="login now" class="form-btn">
      
   </form>

</div>

</body>
</html>
</html>