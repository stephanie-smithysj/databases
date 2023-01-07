<html>
<head>
</head>
<body>


<?php

$uname = $_REQUEST['uname'];
$psw = $_REQUEST['psw'];


$servername = "localhost";
$username = "stephanie.smith";
$password = "0lnKdVkBKy";
$dbname = "stephaniesmith_hotel";
$sql = "SELECT * FROM login where email = '$uname' and password = '$psw'"; 
$conn = mysqli_connect($servername,$username,$password,$dbname);
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

if($count >0){
    header('Location: hotel.html');
}
else{
    header('Location: signuppage.php');
}
mysqli_close($conn);

?>
</body>
</html>