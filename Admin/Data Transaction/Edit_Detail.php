<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "courier";

$Name = $_POST['name'];
$id = $_POST['id'];
$date  = $_POST['date'];
$destination = $_POST['destination'];
$weight  = $_POST['weight'];
$cost  = $_POST['cost'];
$status  = $_POST['status'];
$Id = $_POST['Id'];

//echo $ID.'<br>'.$Cost.'<br>'.$Name.'<br>';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="UPDATE courier_detail SET  SourceDestination='".$destination."' , Weight='".$weight."' , Date='".$date."' WHERE TrakId= '".$id."' ";        
$sql1="UPDATE courier_status SET  DeliveryStatus='".$status."' WHERE TrackID='".$id."' ";
$sql2="UPDATE totalcost SET TotalCost='".$cost."' WHERE TrackId='".$id."' ";
$sql3="UPDATE user_detail SET SenderName='".$Name."' WHERE TrakId='".$id."' ";

if ($conn->multi_query($sql) === TRUE) {
    header('Location: DataTransaction.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if (($conn->query($sql) === TRUE)&&($conn->query($sql1) === TRUE) &&($conn->query($sql2) === TRUE) &&($conn->query($sql3) === TRUE) ) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
