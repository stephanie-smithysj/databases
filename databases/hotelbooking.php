
<?php
$roomnum = $_REQUEST["roomnum"]; 
$roomtype = $_REQUEST['roomtype'];
$rpp = $_REQUEST['rpp'];
$manager = $_REQUEST['manager'];

$servername = "localhost";
$username = "stephanie.smith";
$password = "0lnKdVkBKy";
$dbname = "stephaniesmith_hotel";
$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql="INSERT INTO bookings (RoomNumber, RoomType, RateperPerson, Manager) VALUES ('$roomnum','$roomtype','$rpp','$manager')";
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
if (mysqli_query($conn,$sql)) {
    echo "Record added";
    }
mysqli_close($conn);   
?>