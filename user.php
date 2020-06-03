<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM booking");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
;
?>


<html>
    <head><title>User Home Page</title>
        <link rel="stylesheet" href="userCss.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        function book(){
            open("book.php");
        }
        function delete_info(){
            open("delete.php");
        }
    </script>
    </head>
    
    <body>
       <section class="header">
         <div class="container">
       <button type="button" class ="book" onclick="book()">Book New Trip </button>
       <button type="button" class ="delete_info" onclick="delete_info()">Delete Account </button>
      </div>
      <br>
         <h1> Welcome user </h1>
         
       <div class="previous">
            <h2> Past Bookings</h2>
                <?php
                    echo "<table style='border: solid 1px black;'>";
                    echo "<tr><th>Destination</th><th>Start Date</th><th>End Date</th><th>Number of people </th></tr>";
                    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                          echo $v;
                    }
                    class TableRows extends RecursiveIteratorIterator {
                                function __construct($it) {
                                parent::__construct($it, self::LEAVES_ONLY);
                    } 
                    function current() {
                                  return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
                    }

                    function beginChildren() {
                                  echo "<tr>";
                    }

                    function endChildren() {
                                      echo "</tr>" . "\n";
                    }
                    }
                    echo "</table>"
                ?>
       </div>    
        </section>   
    </body>
</html>