<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courier";

//$code = $_POST['code'];
$name =$_POST['name'];
$code =$_POST['password'];
$Address =$_POST['Address'];
$Phone =$_POST['Phone'];
$Email =$_POST['Email'];
$type=0;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO users (name,Password,mail, Address,Phone)VALUES ('".$name."','".$code."','".$Email."','".$Address."','".$Phone."')";
//$sql = "INSERT INTO shippingiteam (ItemOfShipping, CostOfShipment)VALUES ('$nameD', '$costD')";


if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
    header('Location: DataBranch.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   // header('Location: DataBranch.php');
}
mysqli_close($conn);
?>