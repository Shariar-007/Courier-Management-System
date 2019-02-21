<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname = "courier";

$Name = $_POST['Name'];
$Password = $_POST['Password'];
$Email  = $_POST['Email'];
$Address = $_POST['Address'];
$ID  = $_POST['Id'];
$phone  = $_POST['phone'];

//echo $ID.'<br>'.$Cost.'<br>'.$Name.'<br>';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql= "UPDATE users SET name='".$Name."' , Password='".$Password."' , mail='".$Email."' , Address='".$Address."', Phone='".$phone."' WHERE id= '".$ID."' ";        
if ($conn->query($sql) === TRUE) {
  //  echo "Record updated successfully";
    header('Location: DataBranch.php');
}else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>
