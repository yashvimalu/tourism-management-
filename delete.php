<?php

$connect = mysqli_connect("localhost", "root", "","testing");

if(isset($_POST["username"]))
{
    $username = $_POST['username']; // get id through query string
    $del = "delete from tbl_login where username = '$username'"; // delete query
if(mysqli_query($connect,$del))
{
    echo "Successful";
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
/*$query ="DELETE FROM tbl_login WHERE username = '".$_GET['username']."' ";
 if(mysqli_query($connect,$query))
{ echo "<br/><br/>Successful";}
}

?>*/
}
?>
<html>
    <head><title>Delete your Info</title>
        <link rel="stylesheet" href="update.css">
    </head>
<body>
    <div class="hero">
        <div class="form-box">
            <h1>Delete your Info</h1>
            <form id="new-info" class="input-group" action="" method="POST">
                <input type="text" class="input-field" name="username" placeholder="Enter your username" required>
                <button type="submit" class="submit-btn" name="submit-btn" >Delete Data</button>
            </form>
        </div>
    </div>
</body>
</html>