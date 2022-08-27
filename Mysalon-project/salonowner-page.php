


<?php

session_start();


?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Salon owner</title>
      <link rel="stylesheet" href="Login-salonowner.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body style="background-image: url('aboutus.png') no repeat ;">
      <nav>
         <label class="logo">BEU CARE</label>
         <ul>
          
            <li><a class="active" href="salonowner.php">My Salon</a></li>
           

            <button ><a href="logout.php" style='color:black; text-decoration:none;'>LOGOUT</a> </button>
           
         </ul>
      </nav>
   
      <h1> Appointments For Salon</h1>
      <table class="content-table" >
        
        <thead>
            <tr>
                
                <th><h2>Customer ID</h2>  </th>
                <th> <h2>Customer Name</h2> </th>
                <th> <h2>Customer Phone</h2> </th>
                <th> <h2>Aappointment Date</h2> </th>
                <th> <h2>appointmentTime</h2> </th>
               
              
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

        $salonId= $_SESSION['Salon_Id'];
        $sql="SELECT a.CustomerID,c.CustomerName,c.CustomerPhone,a.appointmentDate,
        a.appointmentTime FROM appointment a INNER JOIN customer c ON a.CustomerID=c.customer_ID
         WHERE a.SalonID= $salonId";
        $result=$connection->query($sql);

        if(!$result){
        die("Invalid query:".$connection->error);
        }

        while($row=$result->fetch_assoc()){

        echo "<tr>
        <td>" .$row["CustomerID"] ."</td>
        <td>" .$row["CustomerName"] ."</td>
        <td>" .$row["CustomerPhone"] ."</td>
        <td>" .$row["appointmentDate"] ."</td>
        <td>" .$row["appointmentTime"] ."</td>
     
        
        


     </tr>";
     
    


}
    

?>


</tbody>
</table>


          
   </body>
</html>

