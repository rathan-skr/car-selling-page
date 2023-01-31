<!DOCTYPE html>
<html lang="en">
    <head> <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
       <title>Vehicles for Sale in Sri Lanka|kar kadai.lk</title>
       <link rel = "icon" href=" ctit2.png" type = " image/png"sizes="45x45">
       <link rel="stylesheet" href="index.CSS">
       <meta name="viewport" content="width=device-width,initial-scale=1.0">
       
       
    </head>

    <body>
      
      <?php ?>
    
      <header>
       
       <div class="register"  target="parent" ></div>
        <div  class = "login" href="###"  target="_top"></div><div class="header">
         <a class="logo" href="index.php"><img src="clogo.png" height="58px" width="290px" alt="KAR KADAI"></a> 
        </div> 
        <div class="header2">  </div> 
       

       </div>
        
    </div></header>
    <!-- Trigger/Open The Modal -->
<button id="myBtn"class="open_login_form" >log in</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="form-popup">
    <span class="close">&times;</span>
    

    
      <form action="login.php" method="POST"    class="form-container">
        <h1>Login</h1>
    
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required=""  value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>">
    
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw1" required="" value="<?php if(isset($_COOKIE["psw1"])) { echo $_COOKIE["psw1"]; } ?>">
        <a href="##">Forgot password?</a>

        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    
        <button type="submit" class="btn" value="Login">Login</button></span></button>
        
      </form> ?>
    </div>
</div>



<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
   
          
     
<button id="myBtnr"class="open_register_form" >Register</button>

<!-- The Modal -->
<div id="myModalr" class="modalr">

  <!-- Modal-content -->
  <div class="form-popup1">
    <span class="closer">&times;</span>   
  
  <form action="register.php" class="form-container_1"method="POST">
    <h1>Register</h1>

    <label for="fName"><b> First Name</b></label>
    <input type="text" placeholder="Enter your first name" name="fname" required="">
    <label for="lName"><b>Last Name</b></label>
    <input type="text" placeholder="Enter your last name" name="lname" required="">

    <label for="Email"><b>Email</b></label>
    <input type="text" placeholder="Enter emailid" name="email" required="">
    
    <label for="NIC"><b>NIC </b></label>
    <input type="text" placeholder="Enter NIC no" name="nic" required="">

    <label for="City"><b>City</b></label>
    <input type="text" placeholder="Enter your hometown" name="city" required="">
   

    <label for="psw1"><b>Password</b></label>
    <input type="password" placeholder="Create Password" name="psw1" required="">
    
    

    <button type="submit" class="btn" value="Register">Register</button>
   
     
  </form>
</div></div>
<script>
  // Get the modal
  var modalr = document.getElementById("myModalr");
  
  // Get the button that opens the modal
  var btn = document.getElementById("myBtnr");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("closer")[0];
  

  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modalr.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modalr.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modalr) {
      modalr.style.display = "none";
    }
  }
  </script>

  

    <div class="divhr">
      <div class="bg_image">
          <div class="search" >     <h2>FIND THE BEST VEHICLE FOR YOU..</h2>
                          <form action="searchcar.php" method="POST"> <input type="text"  name="vmodel" placeholder="SELECT MODEL(car,van,jeep)" class="model">
                           <input type="text" name="vtype" placeholder="SELECT TYPE (Electric, hybrid and diesel)" class="TYPE" >
                          <button class="sbutton" type="submit" >SEARCH</button> </form> </div>   
                
         </div>      
    </div>          
    <footer><div class="footer">
       <div class="cpyr">Copyright © 2021 </div>
      <div class="name">Design by S.KUGARATHAN</div></div>
    </footer>
    
      </body>




</html>
