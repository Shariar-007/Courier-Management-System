<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courier";

$nameD = $_POST['nameD'];
$costD = $_POST['costD'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO shippingiteam (ItemOfShipping, CostOfShipment)
VALUES ('$nameD', '$costD')";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
    header('Location: ../addData.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>