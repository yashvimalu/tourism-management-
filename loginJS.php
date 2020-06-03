 <?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "testing";  
 $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
 $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
 
 if(isset($_POST['submit']))  
 {  
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query = "SELECT USERNAME,PASSWORD FROM tbl_login WHERE USERNAME = :username AND PASSWORD = :password";  
        $query= $connect -> prepare($query);
        $query-> bindParam(':username', $username, PDO::PARAM_STR);
        $query-> bindParam(':password', $password, PDO::PARAM_STR);
        $query-> execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        if($query->rowCount() > 0)
        {
            $_SESSION['alogin']=$_POST['username'];
                echo "<script type='text/javascript'> document.location = 'user.php'; </script>";
        } else{
          echo "<script>alert('Invalid Details');</script>";
        }
    }  
 ?> 
<html>
    <head><title>Login</title>
        <link rel="stylesheet" href="style2.css">
        <script>
        function login()
    	{
            var uname = document.getElementById("email").value;
            var pwd = document.getElementById("pwd1").value;

            console.log(uname);
            console.log(pwd);

            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
             if(uname =='')
            {
                alert("please enter user name.");
            }
            else if(pwd=='')
            {
                alert("enter the password");
            }
            else if(pwd.length < 6 || pwd.length > 6)
            {
                alert("Password min and max length is 6.");
            }
	    }		
        </script>
    </head>
    
    <body>
        <div class="hero">
            <div class="form-box">
                <h1>Log In</h1>
                <div class="social-icons">
                    <img src="images/fb.png">
                    <img src="images/twitter.png">
                    <img src="images/google.png">
                </div>
                <form id="login" class="input-group" method="POST">
                    <input type="text" name="username" class="input-field" id="email" placeholder="Enter Username" required>
                    <input type="password" name="password" class="input-field" id="pwd1" placeholder="Enter Password" required>
                    <input type="checkbox" class="checkbox"><span>Remember Password</span>
                    <button type="submit" name="submit" class="submit-btn">Log In</button>
                </form>
            </div>
        </div>
    </body>
</html>