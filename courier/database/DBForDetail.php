<?php
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

// Retrieve the URL variables (using PHP).
//$num = $_GET['myNumber'];
//$fruit = $_GET['myFruit'];

$sender = $_POST['sender'];
$SPhone = $_POST['SPhone'];
$SEmail = $_POST['SEmail'];

$receiver = $_POST['receiver'];
$RPhone = $_POST['RPhone'];
$REmail = $_POST['REmail'];

$date = $_POST['date'];
$org = $_POST['org'];
$dest = $_POST['dest'];
$wei = $_POST['wei'];
$dimention=$_POST['dimention'];
$packing = $_POST['packing'];
$shipping = $_POST['shipping'];

$delevery = $_POST['delevery'];
$shippingcost = $_POST['shippingcost'];
$tax = $_POST['tax'];
$insurance = $_POST['insurance'];
$packingCost = $_POST['packingCost'];
$TotalCost = $_POST['TotalCost'];

//echo $sender.$receiver.$date. $org .$wei.$delevery.$shippingcost.$tax.$insurance.$packingCost.$TotalCost;
// echo $dest ;
$trakingNumber = 140;

$sql = "SELECT TrakId  FROM courier_detail";
$result = $conn->query($sql);

if (($result->num_rows) > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		// echo "id: " . $row["TrakId"]." = ". $trakingNumber."<br>";
		if($trakingNumber == $row["TrakId"])
		{
			$trakingNumber=$trakingNumber + 1;

		}
	}
}


$sql2 = "INSERT INTO totalcost (TrackId,TotalCost) VALUES ('$trakingNumber','$TotalCost')";                

$sql4 = "INSERT INTO courier_status (TrackID) VALUES ('$trakingNumber')";
       

$sql3 = "INSERT INTO user_detail (TrakId, SenderName , ReceiverName, SenderNumber,ReceiverNumber,Sender_Mail,Receiver_Mail)
       VALUES ('$trakingNumber', '$sender', '$receiver','$SPhone', '$RPhone', '$SEmail','$REmail')";

$sql1 = "INSERT INTO courier_detail (TrakId, SourceOrigin , SourceDestination,Weight,DeleveryOption,Packing,ShippingOption,Date)
         VALUES ('$trakingNumber', '$org', '$dest','$wei', '$delevery', '$packing','$shipping', '$date')";

if (($conn->query($sql1) == TRUE) && ($conn->query($sql2) == TRUE)&& ($conn->query($sql3) == TRUE)&&($conn->query($sql4) == TRUE)){
	echo "New record created successfully";
	//  echo "Your Traking Number is :".$trakingNumber;
	echo '<br>'.'<font color="Red">' . "Your Traking Number is :" .$trakingNumber . '</font><br>';
	

  } else {
    echo "Error: " . $sql1 . $sql2. $sql3 . "<br>" . $conn->error;
}
$conn->close();
?>