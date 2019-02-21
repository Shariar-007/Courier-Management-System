<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname = "courier";

$trackNo = $_POST['trackNo'];
$status = $_POST['status'];
$ID   = $_POST['Id'];

//echo $ID.'<br>'.$Cost.'<br>'.$Name.'<br>';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql= "UPDATE courier_status SET TrackID='".$trackNo."' , DeliveryStatus='".$status."' WHERE id= '".$ID."' ";        
if ($conn->query($sql) === TRUE) {
  //  echo "Record updated successfully";
    header('Location: ../Delevery Status.php');
}else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>
