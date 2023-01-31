<?php
      
//To start session
		if(!isset($_SESSION)){
				session_start();
		}
              
   

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "19/IT/IT/491";
// Create connection
$conn = new mysqli ($servername , $dbusername, $dbpassword, $dbname);
 $email  = $_POST['email'];
 $psw1 = $_POST['psw1'];
 
 $sql = "SELECT * FROM register WHERE email='$email' AND psw1='$psw1' ";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
    echo "login_success";
    header("Location:vehicleupdate.php");
exit();
}else{
    echo "<span style='color:red;'>Please register before login..!</span>";
    exit();
}



//set cookies

if(!empty($_POST["remember"])) {
	setcookie ("email",$_POST["email"],time()+ 3600);
	setcookie ("psw1",$_POST["psw1"],time()+ 3600);
	echo "Cookies Set Successfuly"; exit();
} else {
	setcookie("email","");
	setcookie("password","");
	echo "Cookies Not Set"; exit();
}

?>