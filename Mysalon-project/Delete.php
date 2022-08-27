<?php


session_start();

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

$customerId= $_SESSION['customer_ID'];

if(isset($_GET['deletetime'])) {
    $aptime=$_GET['deletetime'];

    $sql="delete from appointment
     WHERE  appointmentTime ='$aptime' AND CustomerID='$customerId'";

     $result=mysqli_query($connection,$sql);
     if($result){
        
        header('location:customerpage.php');
     }else{
        die(mysqli_error($connection));
     }

}   



?>