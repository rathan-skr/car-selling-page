<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" href="index.CSS">
    <style>.form-container_1 input[type=text], .form-container_1 input[type=password]
{height: 25px;
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}</style>
        <header>
       
            <div class="register"  target="parent" ></div>
            <div  class = "login" href="###"  target="_top"></div><div class="header">
              <a class="logo" href="index.php"><img src="clogo.png" height="58px" width="290px" alt="KAR KADAI"></a> 
             </div> 
             <div class="header2">  </div> 
            
     
            </div>
             
         </div></header>   
     <div class="bg_image">
     <style>   body{background-color:#03010ae1 }</style>

    </head>
    <body>
        <div class="form-popup1">
              
          
          <form action="update.php" class="form-container_1"method="POST">
            <h1>Update details</h1>
        
            <label for="vmodel"><b> Vehicle Model</b></label>
            <input type="text" placeholder="Enter your vehicle model" name="vmodel" required="">

            <label for="vtype"><b>Vehicle type</b></label>
            <input type="text" placeholder="Enter your Vehicle type" name="vtype" required="">
        
            <label for="brand"><b>Brand</b></label>
            <input type="text" placeholder="Enter Brand" name="brand" required="">
            
            <label for="Price"><b>price </b></label>
            <input type="text" placeholder="Enter expecting price" name="price" required="">
        
            <label for="Condition"><b>Condition</b></label>
            <input type="text" placeholder="Enter Condition" name="vcondition" required="">
           
        
            <label for="img"><b>Click on the "Choose File" button to upload a file:</b></label>
            <input type="file" id="myFile"  name="filename" required="">
           
            
            <label for="email"><b>username email</b></label>
            <input type="text" placeholder="email" name="email" required="">

            <label for="vno"><b>vehicle no</b></label>
            <input type="text" placeholder="Enter yourvehicle reg no" name="vno" required="">

        
            <button type="submit" class="btn" value="update">update</button>
           
             
          </form>
        </div></div>

        

    </body>

</html>