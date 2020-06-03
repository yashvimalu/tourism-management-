<?php

$connect = mysqli_connect("localhost", "root", "","testing");

if(isset($_POST["submit"]))
{
    $username = $_POST['username']; // get id through query string
    $password = $_POST['password']; // get id through query string
    $fullname = $_POST['fullname']; // get id through query string
    $mobile = $_POST['mobile']; // get id through query string
    $mobile = $_POST['mobile']; // get id through query string
    
 $query =" UPDATE tbl_login SET password=$password,FULLNAME = $first_name,  mobile = $mobile where username = $username";
 if(mysqli_query($connect,$query))
{ 
    alert("Successful");
}
}


?>

<html>
    <head><title>Update your Info</title>
        <link rel="stylesheet" href="update.css">
    </head>
<body>
    <div class="hero">
        <div class="form-box">
            <h1>Update your Info</h1>
            <form id="new-info" class="input-group" action="" method="POST">
                <input type="text" class="input-field" name="username" placeholder="Enter your username" required>
                <input type="password" class="input-field"  name="password" placeholder="Enter your new password" required/>
                <input type="text" class="input-field"  name="fullname" placeholder="Enter your full name" required/>
                <input type="text" class="input-field"  name="age" placeholder="age" required/>
                <input type="text" class="input-field"  name="mobile_no" placeholder="Enter your mobile number" required/>
                <button type="submit" class="submit-btn" name="submit" >Update</button>
            </form>
        </div>
    </div>
</body>
</html>