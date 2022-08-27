
<?php

session_start();



?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Customer Page</title>
      <link rel="stylesheet" href="Login-salonowner.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<style>
 .center {
  position: absolute;
  left:42%;
  top:25%;
  border: none;
    cursor: pointer;
    background-color: #EFC2C2;
    border-radius: 60px;
    padding: 8px 16px ;
    font-size: 16px;
    font-weight: 700;
    color: black;
    line-height: 26px;
    text-decoration: none;
    
    
}
</style>

   </head>
   <body style="background-image: url('aboutus.png') no repeat ;">
   

      <nav>
         <label class="logo">BEU CARE</label>
         <ul>
         <li><a class="active" href="customerpage.php">My Account</a></li>
         
            <li>
               <a href="#">Salons
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

            <button ><a  href="logout.php"  style='color:black; text-decoration:none;'>LOGOUT</a> </button>
           
         </ul>
      </nav>
       
      <h1> Your Appointment for salons</h1>
     <br>
     <br>
     <br>
     
     <div class="center" ><a style='color:black;' href="beauty-salon.php">Make an Appointment</a> </div>
     <br>   
       <br>


      <table class="content-table" >
        
      
        <thead>
            <tr>
                
                <th><h2>Salon Name</h2>  </th>
                <th><h2>Service</h2>  </th>
                <th> <h2>Region</h2> </th>
                <th> <h2>City</h2> </th>
                <th> <h2>Aappointment Date</h2> </th>
                <th> <h2>appointmentTime</h2> </th>
                <th> <h2>Opertaions</h2> </th>
              
            </tr>
        
        </thead>
    
       
    

         <tbody>
           
        <?php

          $servername="localhost";
          $username="root";
          $password="";
          $database="projectsalons";

          //create connection
          $connection=new mysqli($servername,$username,$password,$database,3307);

          //check connection
         if($connection->connect_error){
         die("Connection failed".$connection->connect_error);
             }


         //read all row from database table

        $customerId= $_SESSION['customer_ID'];
        $sql="SELECT s.SalonName,se.ServiceName,s.Region,s.City,a.appointmentDate,
        a.appointmentTime FROM salonservice se INNER JOIN  salon s ON se.ServiceID=s.ServiceId
        INNER JOIN appointment a ON s.SalonID=a.SalonID
        INNER JOIN customer c ON a.CustomerID=c.customer_ID
         WHERE c.customer_ID= $customerId";
        $result=$connection->query($sql);

        if(!$result){
        die("Invalid query:".$connection->error);
        }

        while($row=$result->fetch_assoc()){

        echo "<tr>
        <td>" .$row["SalonName"] ."</td>
        <td>" .$row["ServiceName"] ."</td>
        <td>" .$row["Region"] ."</td>
        <td>" .$row["City"] ."</td>
        <td>" .$row["appointmentDate"] ."</td>
        <td>" .$row["appointmentTime"] ."</td>
        <td>
       
        <button><a href='Delete.php?deletetime=".$row["appointmentTime"]."' style='color: black;' > Delete</a></button>

        </td>

     </tr>";
     
    


}
    

?>


</tbody>
</table>


          
   </body>
</html>

