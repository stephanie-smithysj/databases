
<?php
$inspec = $_REQUEST["inspec"]; 
$staff = $_REQUEST['staff'];
$condition = $_REQUEST['condition'];
$comm = $_REQUEST['comm'];

$servername = "localhost";
$username = "stephanie.smith";
$password = "0lnKdVkBKy";
$dbname = "stephaniesmith_apartments";
$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql="INSERT INTO Cleaning (Inspection, StaffID, RoomCondition, AdditionalComments) VALUES ('$inspec','$staff','$condition','$comm')";
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
if (mysqli_query($conn,$sql)) {
    echo "Record added";
    }
mysqli_close($conn);   
?>