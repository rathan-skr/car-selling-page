<?php

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "19/it/it/491";
        
        
        
        // Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        
        if (mysqli_connect_error()){
          die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
        }
        
        
        $sql = "INSERT INTO vdetails (vmodel ,vtype  ,brand ,price ,vcondition,filename,email,vno) VALUES ('$_POST[vmodel];',
        '$_POST[vtype]',
        '$_POST[brand]',
        '$_POST[price]',
       '$_POST[vcondition]',
        '$_POST[filename]',
       ' $_POST[email]',
        '$_POST[vno]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully! Thank You for registraring with Us !";	
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>