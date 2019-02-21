<?php
$cost = $_POST['cost'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courier";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "SELECT Packing FROM courier_info";
$result = $conn->query($sql1);
$value;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $value=$row["Packing"];
    }
} else {
    echo "0 results";
}


$sql = "UPDATE courier_info SET Packing='$cost' WHERE Packing=$value";

if ($conn->query($sql) === TRUE) {
  //  echo "Record updated successfully";
     header('Location: ../PackingValueCng.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>