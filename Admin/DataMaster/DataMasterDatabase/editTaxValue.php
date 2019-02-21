

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courier";
$TAX=$_POST['TAX'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = " SELECT TAX FROM courier_info";
$result = mysqli_query($conn, $sql);
$val;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $val=$row["TAX"];
    }
} else {
    echo "0 results";
}


$sql = "UPDATE courier_info SET TAX= $TAX  WHERE TAX=$val";

if (mysqli_query($conn, $sql)) {
   // echo "Record updated successfully";
    header('Location: ../TaxValueCng.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($conn);
?>