<?php
if (isset($_POST["Login"]) && !empty($_POST["user"]) && !empty($_POST["pass"])) {
    $name=$_POST["user"];
    $pass=$_POST["pass"];
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courier";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "SELECT*FROM users";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result1)) {
        if($name == $row["User_name"] && $pass== $row["Password"] &&  $row["Type"]== '1'){
           // header('Locations: ../Admin/AdminHome.php');
            header('Location: ../Admin/AdminHome.php');
        }else if($name == $row["User_name"] && $pass== $row["Password"] &&  $row["Type"]== '0'){
           // header('Locations: ../Admin/AdminHome.php');
            header('Location: ../SubAdmin/SubAdminHome.php');
        }
        
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
}


if (isset($_POST["Register"]) && !empty($_POST["username"]) && !empty($_POST["password"])&& !empty($_POST["email"])&& !empty($_POST["phone"])&& !empty($_POST["address"])) {
    $user=$_POST["username"];
    $pass=$_POST["password"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "courier";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$x=0;
$sql = "INSERT INTO users (User_name, Password, mail,Address,Phone,Type)
VALUES ('$user', '$pass', '$email','$phone','$address','$x')";

if (mysqli_query($conn, $sql)) {
  //  echo "New record created successfully";
    echo "<script type='text/javascript'>alert(<?php echo 'New record created successfully' ?>);</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title> Admin Login</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://raw.githubusercontent.com/daneden/animate.css/master/animate.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="container" >
    <div class="bg-img"></div>
    <div class="header">
        <div class="loading">
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
        </div>
        <h1>Go!</h1>
    </div>
    <div class="main">
        <div class="login">
            <form action="" method="post">
                <input id="username" name="user" required="required" type="text" placeholder="Username" />
                <input id="password" name="pass" required="required" type="password" placeholder="Password" />
                <button type="submit" name="Login" value="Login" />Login</button>
                <span class="form-toggle">Not Registered Yet?</span>
            </form>
        </div>
        <div class="register">
            <form action="" method="post">
                
                <input id="username" name="username" required="required" type="text" placeholder="Username" />
                <input id="password" name="password" required="required" type="password" placeholder="Password" />
                <input id="email" name="email" required="required" type="enail" placeholder="Email" />
                <input id="firstname" name="phone" required="required" type="text" placeholder="Phone" />
                <input id="lastname" name="address" required="required" type="text" placeholder="Address" />
                
                <button type="submit" name="Register" value="Register" />Register</button>
                <span class="form-toggle">Return to Login</span>
            </form>
        </div>
    </div>
    <div class="footer">
        <ul class="footer-nav">
            <li class="link">FAQ</li>
            <li class="link">About Us</li>
            <li class="link">Contact Us</li>
            <li class="link"><a href="../courier/Home.php">Back to the Home Page</a></li>
        </ul>
      <p class="disclaimer"><b>Disclaimer</b> Every effort is made to keep the website up and running smoothly. However, we takes no responsibility for, and will not be liable for, the website being temporarily unavailable due to technical issues beyond our control.</p>
    </div>
    </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>

</html>
