
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
$salonid=$_GET['u_id'];
$query="SELECT * from salon where SalonID='$salonid' ";
   $run_query=$conn->query($query);
   $row_salon=mysqli_fetch_array($run_query);

   $salon_name=$row_salon['SalonName'];
   $service_id=$row_salon['ServiceId'];
   $salon_open=$row_salon['OpeningTIme'];
   $salon_close=$row_salon['ClosingTime'];




  


 if(isset($_POST["submit"]))
 {
  $SalonID=$salonid;
  $appointmentDate=$_POST['appointment_Date'];
  $appointmentTime=$_POST['appointment_Time'];
  $Service_ID=$service_id;
  $CustomerID=$_POST['CustomerID'];
  $CustomerPhone=$_POST['CustomerPhone'];
  // $customer_ID=$_POST["customer_ID"];
  // $password=$_POST["password"];




  $sql="SELECT * FRom customer WHERE customer_ID ='$CustomerID' ";

  $result=$conn->query($sql);   
  


  if($result->num_rows>0){
   
    
  mysqli_query($conn,"INSERT INTO appointment(SalonID,appointmentDate,appointmentTime,Service_ID,CustomerID,CustomerPhone) Values( ' $SalonID','$appointmentDate','$appointmentTime','$Service_ID', '$CustomerID','$CustomerPhone')");

  echo '<script>alert("your appointment successfully booked")</script>';
  
        header("Location: customerpage.php");
        die;
     }
 
    
   }
   
 

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="wcustomer_IDth=device-wcustomer_IDth, initial-scale=1.0">
   <title>Booking Page</title>

   <link rel="stylesheet" href="style-login.css">

 
 <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
        type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <!--  clender function-->
    <script language="javascript">
       $(document).ready(function () {
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();

    $('#datepicker').datepicker({
        minDate: new Date(currentYear, currentMonth, currentDate),
        dateFormat: 'yy-mm-dd'
    });
});
    </script>





</head>
<body>


<nav>
         <label class="logo">BEU CARE</label>
         <ul>
         <li><a  href="customerpage.php">My Account</a></li>
        
            <li>
               <a class="active" href="#">Salons
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="beauty-salon.php">Beauty</a></li>
                  <li><a href="barber.php">Braber</a></li>
                  <li><a href="Spasalon.php">Spa</a></li>
                  <li><a href="Nailsalon.php">Nails</a></li>
                  <li><a href="Hairsalon.php">Hair</a></li>
               </ul>
            </li>
            <li><a href="recommed-form.php">My recommendation</a></li>

            <button ><a  href="logout.php" style='color:black;'>LOGOUT</a> </button>
           
         </ul>
      </nav>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Book for salon</h3>


      
     
      <input type="text" name="salon_ID"  placeholder="<?php echo"$salon_name";?>">
      
      <input   type="text" id="datepicker" name="appointment_Date" required placeholder="Enter the appointment Date">

     
      <input type="time" name="appointment_Time" required placeholder="Enter the appointment Time"  >


      
      <input type="text" name="Service_ID"  placeholder="<?php echo"$service_id";?>">
      <input type="text" name="CustomerID" required placeholder="Enter Your ID">
      <input type="text" name="CustomerPhone" required placeholder="Enter Your phone number">

    
 
      <input type="submit" name="submit" value="Book" class="form-btn">
     
   </form>

</div>

</body>
</html>