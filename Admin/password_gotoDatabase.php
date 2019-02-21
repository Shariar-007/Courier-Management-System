<?php
$Username = $_POST['Username'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$old = $_POST['Old'];
$newpass = $_POST['Newpass'];
$retype = $_POST['Retype'];

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

$sql = "SELECT * FROM users where Type = 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if( $Username == $row["User_name"]){
            
           $User_name=$row["User_name"];
             $Password=$row["Password"];
               $Email=$row["mail"];
                 $Address=$row["Address"];
                   $Phone=$row["Phone"];
                     $Type=$row["Type"];
        }
                     
                     
                     
                     
        }
} else {
    echo "Missmatched input";
}
if($retype == $newpass){
if($Username == $User_name && $Phone==$phone && $email == $Email && $old == $Password && $Type == 1){

    $sql1 = "UPDATE users SET Password='".$newpass."' WHERE User_name='".$Username."' AND Type=1 ";
    
if (mysqli_query($conn, $sql1)) {
    echo "Password successfully changed";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
} else {
    echo "username,phone,email,oldpassword are not valid.please insert valid input";
}
}else {
    echo "retype password is not matched with new password";
}

mysqli_close($conn);
?>