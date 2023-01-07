
<?php
$rentnum = $_REQUEST["rentnum"]; 
$duration = $_REQUEST['duration'];
$first = $_REQUEST['first'];
$last = $_REQUEST['last'];
$roomnum = $_REQUEST['roomnum'];
$addy = $_REQUEST['addy'];
$entry = $_REQUEST['entry'];
$exit = $_REQUEST['exit'];

$servername = "localhost";
$username = "stephanie.smith";
$password = "0lnKdVkBKy";
$dbname = "stephaniesmith_apartments";
$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql="INSERT INTO RentAgree (RentNumber, Duration, FirstName, LastName, RoomNumber, AddressDetails, EntryDate, ExitDate) VALUES ('$rentnum','$duration','$first','$last','$roomnum','$addy','$entry','$exit')";
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
if (mysqli_query($conn,$sql)) {
    echo "Record added";
    }
mysqli_close($conn);   
?>