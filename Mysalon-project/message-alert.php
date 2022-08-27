<html>
<head>
<style>



@import url('https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap');
.center {
border: 5px solid rgb(243, 242, 242);
text-align: center;
background-color:white;
  width: 300px;
  font-size: 25px;
  box-shadow: 5px 10px 8px 10px  #EFC2C2;
  padding: 50px;
  margin-top:200px;
  margin-left: 500px;
}

.center a{
    color: #f89999;
    text-decoration: none;
}




*{
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
  }
  body{
    
    overflow: hidden;
    user-select: none;
    
    font-family: montserrat;
   
    background-size: auto;
      
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
    height: 90px;
    width: 100%;
    margin: 0 auto;
    
  }
  nav ul{
    float: right;
    margin-right: 30px;
    text-decoration: none;
  }
  nav ul li{
    display: inline-block;
    font-family: montserrat;
    
  }
  nav ul li a{
    color:black;
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
 
  



  button{ 
    display: inline-block;
    outline: 0;
    border: none ;
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
</head>
<body>

<nav>
         <label class="logo">BEU CARE</label>
         <ul>
            <li><a  href="index.php">Home</a></li>
            <li>
               <a href="#">Salons
               <i class="fas fa-caret-down"></i>
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
            <button> <a href="signup.php" style='color:black;'>SIGN UP</a></button>
           
         </ul>
        
      </nav>


<div class="center"><p>Sorry, You have to <a href="Login-customer.php">LOGIN</a> or <a href="signup.php">SIGN UP</a> First!,So you can make an appoitment for the salon</p></div>

</body>
</html>