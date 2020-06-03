<?php
$connect = mysqli_connect("localhost", "root", "","testing");
if(isset($_POST['submit-btn']))
{
    $destination=$_POST["destination"];
    $start_date = $_POST["start"];
    $end_date = $_POST["end"];
    $people = $_POST["ccc"];
 $query = " INSERT INTO booking  (destination, start_date, end_date, people) VALUES 
 ('$destination', '$start_date', '$end_date','$people')
 ";
if(mysqli_query($connect,$query))
{ echo "<br/><br/>Successfully";}
}

?>

<html>
    <head><title>New Booking</title>
        <link rel="stylesheet" href="book.css">
    </head>
<body>
    <div class="hero">
        <div class="form-box">
            <h1>New Booking</h1>
            <form id="new-booking" class="input-group" action="" method="POST">
                <input type="text" class="input-field"  name="destination" placeholder="Choose Destination" required/>
                <input type="date" class="input-field"  name="start" placeholder="Select journey start date" required/>
                <input type="date" class="input-field" name="end" placeholder="Select journey end date" required>
                <input type="text" class="input-field" name="ccc" placeholder="Select number of people" required>
                <button type="submit" class="submit-btn" name="submit-btn" >Confirm Booking</button>
            </form>
        </div>
    </div>
</body>
</html>