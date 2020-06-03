<?php
 //Establishing connection with the database
 define('DB_SERVER', 'localhost:3306');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'testing'); //where customers is the database
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if (isset($_POST['submit']))
{ 
	 $inFullname = $_POST["fullname"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
	 $inEmail = $_POST["email"];
	 $inUsername = $_POST["username"];
	 $inPassword = $_POST["password"];
	 $inAge = $_POST["age"];
	 $inMobile = $_POST["mobile"];
	 $vimage1 = $_FILES['uploadblah']['name'];
	 move_uploaded_file($_FILES['uploadblah']['tmp_name'],'uploads/'.basename($_FILES['uploadblah']['name']));
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

<!DOCTYPE HTML>
<html>
<head>
<title>Register Form</title>
<script language ="Javascript">
    function validate()
    { 
        var fullname = document.register.fullname.value;
        var email = document.register.email.value;
        var username = document.register.username.value; 
        var password = document.register.password.value;
        var conpassword= document.register.conpassword.value;
        var age= document.register.age.value;
        var dob = document.register.dob.value;

        if (fullname==null || fullname=="")
        { 
            alert("Full Name can't be blank"); 
        }
        else if(dob=="")
        {
            alert("Date  cannot be blank");
        }
        else if(age=="")
        {
            alert("Age cannot be blank");
        }
        else if(age<18)
        {
            alert("Age less than 18");
        }
        else if (email==null || email=="")
        { 
            alert("Email can't be blank"); 
        }
        else if (username==null || username=="")
        {   
            alert("Username can't be blank"); 
        }
        else if(password.length<6)
        { 
            alert("Password must be at least 6 characters long."); 
        } 
        else if (password!=conpassword)
        { 
            alert("Confirm Password should match with the Password"); 
        } 
        
    } 
</script> 
<!-- Using external stylesheet to make the registration form look attractive -->
<style>
body
    {
        background-image: url("images/loginBackground.jpg");

    }
table{
border: 1px solid black;
border-spacing: 2px;
}

th, td {
border: 1px solid black;
}

input[type=text], input[type=password] {
background-color: #EEEEEE;
border: none;
color: black;
width:auto;
padding: 8px 52px;
text-decoration: none;
margin: 4px 2px;
cursor: pointer;
}

input[type=button], input[type=submit], input[type=reset] {
background-color: #4CAF50;
border: none;
color: white;
padding: 16px 32px;
text-decoration: none;
margin: 4px 2px;
cursor: pointer;
}
</style>
<!-- Javascript validation for user inputs -->

</head>
<body>
 
<!-- Make a note that the method type used is post, action page is register.php and validate() function will get called on submit -->
 <div style="text-align:center"><h1>Register here</h1></div>
 <br>
<form name="register" method="post" enctype="multipart/form-data">

<table align="center" >
<tr>
<td>Full Name</td>
<td><input type="text" name="fullname" /></td>
</tr>
<tr>
<td>Mobile Number </td>
<td>  <input type="text" name="mobile"></td>
</tr>
<tr>
<td><label for="birthday">Birthday</label> </td>
<td>  <input type="date" id="birthday" name="dob"></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name="age" /></td>
</tr>
<tr>
<td>Upload a file</td>
<td> <input type ="file" name="uploadblah"/></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" /></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" name="conpassword" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Register" name="submit" onclick="validate()"></input>
<input type="reset" value="Reset"></input></td>
</tr>
</table>
</form>
</body>
</html>