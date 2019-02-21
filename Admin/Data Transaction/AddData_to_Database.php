
<?php

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

$Sender = $_POST['Sender'];
$SPhone = $_POST['SPhone'];
$SEmail = $_POST['SEmail'];
$Receiver = $_POST['Receiver'];
$RPhone = $_POST['RPhone'];
$REmail = $_POST['REmail'];

$Date = $_POST['Date'];
$Origins = $_POST['Origins'];
$Destinations = $_POST['Destinations'];
$Weight = $_POST['Weight'];
$Long = $_POST['Long'];
$Wide = $_POST['Wide'];
$Delevery = $_POST['Delevery'];
$packing = $_POST['packing'];
$shipping = $_POST['shipping'];
$Distance = $_POST['Distance'];

//$sname = $_POST['sname'];
//$sPhone = $_POST['sPhone'];
//$semail = $_POST['semail'];

//$rname = $_POST['rname'];
//$rPhone = $_POST['rPhone'];
//$remail = $_POST['rEmail'];

if ((empty($Sender) || empty($SPhone) || empty($SEmail) || empty($Receiver) || empty($RPhone) || empty($REmail) || empty($Date) ||empty($Origins) ) ||empty($Destinations) ||empty($Weight) ||empty($Long) ||empty($Wide) ||empty($Delevery) ||empty($packing) ||empty($shipping) ||empty($Distance) ) {
    header("Location:AddData.php?FF=1");
}
//---------------------------------
$TotalCost;
$shipingCost;
$amount;
$packingCost;
$deleveryCost;
$tax;
$insurance;

$sql = "SELECT * FROM courier_info";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($Delevery== "Air"){
           $deleveryCost=$row["Air"];
        }elseif ($Delevery== "Sea") {
           $deleveryCost=$row["Water"];  
        }elseif ($Delevery== "Land") {
           $deleveryCost=$row["Land"]; 
        }
        
        if($packing =="Yes"){
        $packingCost=$row["Packing"];
        }else{
          $packingCost=0;  
        }
        
        $sql = "SELECT ItemOfShipping,CostOfShipment FROM shippingiteam";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                if($shipping == $row["ItemOfShipping"])
                {
                    $shipingCost=$row["CostOfShipment"];
                }
            }
        } else {
            echo "0 results";
        }
        
        if($Distance >120)
        {$x=100;}else{$x=0;}
        $amount=$shipingCost+$packingCost+$deleveryCost+$x;
        $tax=$amount+$row["TAX"]/100;
        $insurance=$amount+$row["Insurance"]/100;
    }
} else {
    echo "0 results";
}

$TotalCost = $tax + $insurance +$shipingCost+ $packingCost+$amount+$deleveryCost;

//------------------------
$trakingNumber = 140;

$sql6 = "SELECT TrakId  FROM courier_detail";
$result6 = $conn->query($sql6);

if (($result6->num_rows) > 0) {
	// output data of each row
	while($row = $result6->fetch_assoc()) {
		// echo "id: " . $row["TrakId"]." = ". $trakingNumber."<br>";
		if($trakingNumber == $row["TrakId"])
		{
			$trakingNumber=$trakingNumber + 1;

		}
	}
}


$sql2 = "INSERT INTO totalcost (TrackId,TotalCost) VALUES ('$trakingNumber','$TotalCost')";                

$sql4 = "INSERT INTO courier_status (TrackID) VALUES ('$trakingNumber')";
       

$sql3 = "INSERT INTO user_detail (TrakId, SenderName , ReceiverName, SenderNumber,Sender_Mail,ReceiverNumber,Receiver_Mail)
       VALUES ('$trakingNumber', '$Sender', '$Receiver','$SPhone', '$SEmail' , '$RPhone', '$REmail')";

$sql1 = "INSERT INTO courier_detail (TrakId, SourceOrigin , SourceDestination,Weight,DeleveryOption,Packing,ShippingOption,Date)
         VALUES ('$trakingNumber', '$Origins', '$Destinations','$Weight', '$Delevery', '$packing','$shipping', '$Date')";


if (($conn->query($sql1) == TRUE) && ($conn->query($sql2) == TRUE)&& ($conn->query($sql3) == TRUE)&&($conn->query($sql4) == TRUE)){
	echo "New record created successfully";
	//  echo "Your Traking Number is :".$trakingNumber;
	echo '<br>'.'<font color="Red">' . "Your Traking Number is :" .$trakingNumber . '</font><br>';
} else {
    echo "Error: " . $sql1 . $sql2. $sql3 . "<br>" . $conn->error;
}
$conn->close();

?>
