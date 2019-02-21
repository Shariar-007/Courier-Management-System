
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courier";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$Invoice=$_POST["Invoice"];
$status=$_POST["status"];
//echo "$status.$Invoice";
$sql = "UPDATE courier_status SET DeliveryStatus='".$status."' WHERE TrackID='".$Invoice."'";

if (mysqli_query($conn, $sql)) {
    //echo "Record updated successfully";
      header("Location: UpdateInvoice.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

    mysqli_close($conn);
?>
