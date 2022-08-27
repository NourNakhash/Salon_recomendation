<?php

session_start();



?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="wcustomer_IDth=device-wcustomer_IDth, initial-scale=1.0">
   <title>Salon Recommendation</title>

   
   <link rel="stylesheet" href="style-login.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>


<nav>
         <label class="logo">BEU CARE</label>
         <ul>
         <li><a  href="customerpage.php">My Account</a></li>
         
            <li>
               <a href="#">
               <i class="fas fa-caret-down"></i>
                  Salons
               
               </a>
               
               <ul>
                  <li><a href="beauty-salon.php">Beauty</a></li>
                  <li><a href="barber.php">Braber</a></li>
                  <li><a href="Spasalon.php">Spa</a></li>
                  <li><a href="Nailsalon.php">Nails</a></li>
                  <li><a href="Hairsalon.php">Hair</a></li>
               </ul>
            </li>
           
            <li><a class="active" href="recommed-form.php">My recommendation</a></li>

            <button ><a  href="logout.php" style='color:black; text-decoration:none;'>LOGOUT</a> </button>
            
           
         </ul>
        
      </nav>

   <div style="padding: 20px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgb(0 0 0 / 10%);
    background: #EEEEEE;
    text-align: center;
    width: 100%;
    color:black;">


   <h3 id="result"></h3>


</div>
<div class="form-container">

   <form >
      <h3>Salon Recommendation </h3>

      <select class="select" id='ServiceName' name='ServiceName'>
   <option selected disabled >Select Service</option>
   <option value='1'>Beauty</option>
   <option value='3'>Spa</option>
   <option value='0'>Barber</option>
   <option value='2'>Nails</option>
   <option value='4'>Hair</option>
</select>

      <select class="select" id='City' name='City'>
   <option selected disabled >Select City</option>
   <option value='22'>Tel Aviv</option>
   <option value='17'>Petah Tikva</option>
   <option value='9'>Kfar Saba</option>
   <option value='12'>Kiryat Malakhi</option>
   <option value='2'>Beit Jann</option>
   <option value='20'>Rishon Lezion</option>
   <option value='15'>Nahariya</option>
   <option value='10'>Kiryat Bialik</option>
   <option value='4'>Haifa</option>
   <option value='0'>Be'er Sheva</option>
   <option value='7'>Jerusalem</option>
   <option value='23'>Yeruham</option>
   <option value='11'>Kiryat Gat</option>
   <option value='19'>Rehovot</option>
   <option value='5'>Herzliya</option>
   <option value='18'>Ra'anana</option>
   <option value='3'>Ha-Migdal</option>
   <option value='1'>Beersheba</option>
   <option value='13'>Kiryat Motzkin</option>
   <option value='16'>Netanya</option>
   <option value='8'>Karmiel</option>
   <option value='21'>Rosh HaAyin</option>
   <option value='14'>Kiryat Ono</option>
   <option value='6'>Hura</option>
</select>

<select class="select" id='CustomerRegion'  name='CustomerRegion' >
   <option selected disabled >Select Region</option>
   <option value='0'>Center</option>
   <option value='1'>North</option>
   <option value='2'>South</option>
</select>

      <input type="button" name="submit" value="Submit" id="btn" class="form-btn">
      
   </form>

</div>
      
</body>
<script>
// replace with your url
base_url="http://127.0.0.1:5000";

$(document).ready(function(){
  
  
   function getFormData(){
   data={}
   flag=false;
   Array.from($(".select")).forEach(element => {
      val=$(element).val();
      name=$(element).attr('id');
      if(val==null){
         flag=true;
      }
      data[name]=val;

   });
   if(flag){
      return flag;
   }
   return data;
  }
   $("#btn").click(function(e){
   e.preventDefault();
   data=getFormData();
   if(data==true){
      alert("Complete the Form");
   }else{
      $.ajax({
            type: "POST",
            url: base_url+"/predict",
            data: data,
            dataType: "json",
            error: function(e) {
               if(e.responseText==undefined){
                  alert("Run Server First");
               }else{

                  console.log(e.responseText);
                  $('#result').text("We Recommend To You: "+e.responseText)
               }
  },
            success: function (e) {
               console.log(e.responseText);
               $('#result').text("We Recommend To You: "+e.responseText)
               }
            });
         }
  });
});
</script>
</html>