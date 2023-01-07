
<?php
$invoice = $_REQUEST["invoice"]; 
$rentnum = $_REQUEST['rentnum'];
$rentperiod = $_REQUEST['rentperiod'];
$paydue = $_REQUEST['paydue'];
$first = $_REQUEST["first"]; 
$last = $_REQUEST['last'];
$appnum = $_REQUEST['appnum'];
$addy = $_REQUEST['addy'];
$dop = $_REQUEST["dop"]; 
$mop = $_REQUEST['mop'];
$firstrem = $_REQUEST['firstrem'];
$secrem = $_REQUEST['secrem'];

$servername = "localhost";
$username = "stephanie.smith";
$password = "0lnKdVkBKy";
$dbname = "stephaniesmith_apartments";
$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql="INSERT INTO Invoice (InvoiceNumber, RentNumber, RentPeriod, PaymentDue, FirstName, LastName, AppartmentNumber, AddressDetails, DateofPayment, MethodofPayment, DateFirstReminder, DateSecondReminder) VALUES ('$invoice','$rentnum','$rentperiod','$paydue','$first','$last','$appnum','$addy','$dop','$mop','$firstrem','$secrem')";
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
if (mysqli_query($conn,$sql)) {
    echo "Record added";
    }
mysqli_close($conn);   
?>