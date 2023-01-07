<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <header>
        <h1>The Old York</h1>
        <hr>
        <a href="loginpage.php">Login</a>
        <a href="hotel.html">Hotel Rooms</a>
        <a href="rentagreement.html">Apartments</a>
        <a href="cleaning.html">Cleaning</a>
        <a href="invoice.html">Invoice</a>
        <hr>
    </header>
</head>

<body>
    <h1>SIGN UP</h1>
    <form method="post" action="logincheck.php">
        <label for="uname"><b>Username</b></label>
        <input id="uname" type="text" placeholder="Enter Username" name="uname" required><br>

        <label for="psw"><b>Password</b></label>
        <input id="psw" type="password" placeholder="Enter Password" name="psw" required><br>
      
        <input type="submit" value="login"><br>
        <a href="loginpage.php">Already have an account?</a>
    </form>
</body>

</html>