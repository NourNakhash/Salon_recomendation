<?php


session_start();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbershop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap');

   .content-table{
    border-collapse:collapse;
    margin: 10px 0;
    font-size:1.23em;
    min-width: 500px;
    margin-left:5px;
    border:1px solid #C0C0C0;
    margin-left: auto;
    margin-right: auto;
   }

   .content-table thead tr{
    background-color:#FAAEAE;
    text-align:left;
   }
   
   .content-table tbody tr{
    border-bottom: 1px solid #C0C0C0;
   }
   
   h2 {
    
    font-family: Lato-Bold;
    font-size: 23px;

    line-height: 1.4;
    padding-right:35px;
 
}

.content-table tbody td{
    font-family: Lato-Bold;
    font-size: 20px;
    padding-right:35px;
}

h1{
    padding-top:25px;
    padding-left:150px;
}



tr{
    text-align: center;
    
    
}

td{
  padding-top:5px;
  padding-bottom:5px;
}

button{ 
     display: inline-block;
     outline: 0;
     border: 0;
     cursor: pointer;
     background-color:#EFC2C2;
     border-radius: 60px;
     padding: 8px 16px;
     font-size: 16px;
     font-weight: 700;
     color: black;
    line-height: 26px;
                    
                
} 
/*Extra*/
 
*{
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
  }

  body{
  
    user-select: none;
    
    font-family: montserrat;
    
   
   
      
  }
nav .logo{
    color: #A4A4A4;
    font-size: 65px;
    line-height: 80px;
    padding: 0 120px;
    font-family: 'Mouse Memoirs', sans-serif;
  }
  nav{
    height: 70px;
    box-shadow: 0 3px 15px  #fadbdb;
    background: #fadbdb;
    height: 120px;
    width: 100%;
   /* margin: 0 auto;*/
   padding: auto;
    
  
  }
  nav ul{
    float: right;
    margin-right: 30px;
  }
  nav ul li{
    display: inline-block;
    
  }
  nav ul li a{
    color:black;
    text-decoration:none;
    display: block;
    padding: 0 15px;
    line-height: 70px;
    font-size: 20px;
    background:  #fadbdb;
    transition: .5s;
    

  }
  nav ul li a:hover,
  nav ul li a.active{
   
        background: #FFB3B3;
        transition: .5s;
        text-decoration:none;
      
  }
  nav ul ul{
    position: absolute;
    top: 85px;
    border-top: 1px solid ;
    opacity: 0;
    visibility: hidden;
  }
  nav ul li:hover > ul{
    top: 70px;
    opacity: 1;
    visibility: visible;
    transition: .3s linear;
  }
  nav ul ul li{
    width: 150px;
    display: list-item;
    position: relative;
    border: 1px solid;
    border-top: none;
  }
  nav ul ul li a{
    line-height: 50px;
    text-decoration:none;
  }
  nav ul ul ul{
    border-top: none;
  }
  nav ul ul ul li{
    position: relative;
    top: -70px;
    left: 150px;
  }
  nav ul ul li a i{
    margin-left: 45px;
  }

  h2{
   text-align: center;
  }


  button{ 
   display: inline-block;
   outline: 0;
   border: 0;
   cursor: pointer;
   background-color:#EFC2C2;
   border-radius: 60px;
   padding: 8px 16px;
   font-size: 16px;
   font-weight: 700;
   color: black;
  line-height: 26px;
  			  
			  
} 
   
</style>


<body >

<nav>
         <label class="logo">BEU CARE</label>
         <ul>
         <li><a href="customerpage.php" style='color:black;'>My Account</a></li>
         
            <li>

               <a class="active" href="#" style='color:black;'>Salons
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="beauty-salon.php" style='color:black;'>Beauty</a></li>
                  <li><a href="barber.php" style='color:black;'>Braber</a></li>
                  <li><a href="Spasalon.php" style='color:black;'>Spa</a></li>
                  <li><a href="Nailsalon.php" style='color:black;'>Nails</a></li>
                  <li><a href="Hairsalon.php" style='color:black;'>Hair</a></li>
               </ul>
            </li>
           
          
            <li><a href="recommed-form.php" style='color:black; text-decoration:none;'>My recommendation</a></li>

            <button ><a href="logout.php" style='color:black; text-decoration:none;'>LOGOUT</a> </button>
            
         </ul>
      </nav>
    
    <h1>Barbershop</h1>
    <br>
    <table class="content-table" id="branch">
        
        <thead>
            <tr>
                
                <th><h2>Salon Name</h2>  </th>
                <th> <h2>Region</h2> </th>
                <th> <h2>City</h2> </th>
                <th> <h2>Opening Time</h2> </th>
                <th> <h2>Closing Time</h2> </th>
                <th> <h2>Phone Number</h2> </th>
                <th> <h2>Rating</h2> </th>
                <th> <h2>Book for Salon</h2> </th>
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


         //get all row from database table
        $sql="SELECT SalonName,Region,City,SalonID,
        cast(OpeningTime as varchar(5)) as OpeningTime,cast(ClosingTime as varchar(5)) AS ClosingTime,Phonenumber,Rating  FROM salon WHERE ServiceId =2";
        $result=$connection->query($sql);

        if(!$result){
        die("Invalid query:".$connection->error);
        }

        while($row=$result->fetch_assoc()){
         $salon_id=$row['SalonID'];
        echo "<tr>
        <td>" .$row["SalonName"] ."</td>
        <td>" .$row["Region"] ."</td>
        <td>" .$row["City"] ."</td>
        <td>" .$row["OpeningTime"] ."</td>
        <td>" .$row["ClosingTime"] ."</td>
        <td>" .$row["Phonenumber"] ."</td>
        <td>" .$row["Rating"] ."</td>
        <td><button><a href='bookingpage.php?u_id=$salon_id' style='color:black; text-decoration:none;'>Book</a></button></td>
        
       

     </tr>";
     
    


}
    

?>


</tbody>
</table>

</body>
</html>