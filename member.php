<html>
<head><link rel="stylesheet" href="index.CSS">
<style>
#Members {font-family: 'Rubik', sans-serif;
 
  border-collapse: collapse;
  width: 100%;
}

#Members td, #Members th {
  border: 1px solid #ddd;
  padding: 8px;
}

#Members tr:nth-child(even){background-color: #f2f2f2;}

#Members tr:hover {background-color: #ddd;}

#Members th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
body{background-color:#03010ae1 }

</style></head>

<body>
<header>
       
       <div class="register"  target="parent" ></div>
       <div  class = "login" href="###"  target="_top"></div><div class="header">
         <a class="logo" href="#home"><img src="clogo.png" height="58px" width="290px" alt="KAR KADAI"></a> 
        </div> 
        <div class="header2">  </div> 
       

       </div>
        
    </div></header>   
<div class="bg_image">
     <h1>your profile</h1>
     <h1>you can sell your vehicles</h1>
    <table id="Members"><th>Nic</th>
    <th>First name</th>
    <th>Last name</th>
    <th>email</th>
    <th>city</th>
  
    <?php
	$servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "19/IT/IT/491";
    // Create connection
    $conn = new mysqli ($servername , $dbusername, $dbpassword, $dbname);
    $email  = $_POST['email'];
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
     }

    $sql = "SELECT nic, email,fname,lname,city FROM register WHERE email='$email' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      
      
     echo "<div>";
     echo "<tr><td>".$row["nic"] ." </td>
      <td> ".$row["fname"] ."</td>
       <td>" .$row["lname"] ."</td>
       <td>" .$row["email"] ."</td>
       <td>".$row["city"]. "</td></tr>";
      echo "</div>";  
    }
} else {
  echo "0 results";
}
$conn->close();
    ?></div>
      
</body>

</html>  
 
  
			
			
			
			

  
 