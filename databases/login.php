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
$sql = "INSERT INTO login (email, password) VALUES ('$uname', '$psw')"; 
$conn = mysqli_connect($servername,$username,$password,$dbname);

if(mysqli_query($conn,$sql)){
    echo "Record Added";
}

mysqli_close($conn);

?>
</body>
</html>
