<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname = "courier";

$Name = $_POST['ShipName'];
$Cost = $_POST['ShipCost'];
$ID   = $_POST['Id'];

//echo $ID.'<br>'.$Cost.'<br>'.$Name.'<br>';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql= "UPDATE shippingiteam SET ItemOfShipping='".$Name."' , CostOfShipment='".$Cost."' WHERE id= '".$ID."' ";        
if ($conn->query($sql) === TRUE) {
  //  echo "Record updated successfully";
    header('Location: ../SetupCost.php');
}else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>
