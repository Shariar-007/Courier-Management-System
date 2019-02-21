<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "courier";

$Name = $_POST['name'];
$id = $_POST['id'];
$Password  = $_POST['password'];
$email = $_POST['email'];
$address  = $_POST['address'];
$phone  = $_POST['phone'];
//$status  = $_POST['status'];
$Id = $_POST['Id'];

//echo $ID.'<br>'.$Cost.'<br>'.$Name.'<br>';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="UPDATE users SET User_name='".$Name."',Password='".$Password."',mail='".$email."',Address='".$address."',Phone='".$phone."' WHERE id='".$id."'";

if ($conn->multi_query($sql) === TRUE) {
    header('Location: DataBranch.php');
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
