<?php
 //Establishing connection with the database
 define('DB_SERVER', 'localhost:3306');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'testing'); //where customers is the database
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
<!DOCTYPE HTML>
<html>
<body>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
	 $inFullname = $_POST["fullname"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
	 $inEmail = $_POST["email"];
	 $inUsername = $_POST["username"];
	 $inPassword = $_POST["password"];
	 $inAge = $_POST["age"];
	 $inMobile = $_POST["mobile"];
	 $vimage1 = $_FILES["uploadblah"]["name"];
	 move_uploaded_file($_FILES["uploadblah"]["tmp_name"],"uploads/".basename($_FILES["uploadblah"]["name"]));
	 $stmt = $db->prepare("INSERT INTO tbl_login(FULLNAME, EMAIL, USERNAME, PASSWORD,age,mobile,vimage1) VALUES(?, ?, ?, ?, ?, ?, ?)"); //Fetching all the records with input credentials
	 $stmt->bind_param("sssssss", $inFullname, $inEmail, $inUsername, $inPassword,$inAge,$inMobile,$vimage1); //Where s indicates string type. You can use i-integer, d-double
	 $stmt->execute();
	 $result = $stmt->affected_rows;
	 $stmt -> close();
	 $db -> close(); 
	
	if($result > 0)
	 {
		header("location: RegSuccess.php"); // user will be taken to the success page
	 }
}
?>
</body> 
</html>