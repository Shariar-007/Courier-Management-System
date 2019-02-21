
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

$sender = $_POST['Sender'];
$receiver = $_POST['Receiver'];
$date = $_POST['Date'];
$org = $_POST['Origins'];
$dest = $_POST['Destinations'];
$wei = $_POST['Weight'];
$lon = $_POST['Long'];
$wid = $_POST['Wide'];
$hei = $_POST['Height'];
$Dist = $_POST['Distance'];
$delevery = $_POST['Delevery'];
$packing = $_POST['packing'];
$shipping = $_POST['shipping'];

$SPhone = $_POST['SPhone'];
$SEmail = $_POST['SEmail'];
$RPhone = $_POST['RPhone'];
$REmail = $_POST['REmail'];


if ((empty($org) || empty($dest) || empty($wei) || empty($lon) || empty($wid) || empty($hei) || empty($Dist) ||empty($delevery) ) ||empty($sender) ||empty($receiver) ||empty($date) ) {
    header("Location:Home.php?FF=1");
}

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
        if($delevery== "Air"){
           $deleveryCost=$row["Air"];
        }elseif ($delevery== "Sea") {
           $deleveryCost=$row["Water"];  
        }elseif ($delevery== "Land") {
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
         if($Dist >120)
        {$x=100;}else{$x=0;}
   
        $amount=$shipingCost+$packingCost+$deleveryCost+$x;
        $tax=$amount+$row["TAX"]/100;
        $insurance=$amount+$row["Insurance"]/100;
    }
} else {
    echo "0 results";
}

$TotalCost = $tax + $insurance +$shipingCost+ $packingCost+$amount+$deleveryCost;
//$sql1 = "INSERT INTO totalcost (TotalCost)VALUES ('$TotalCost')";
/*
$sq2 = "INSERT INTO user_detail (SenderName, SenderNumber, Sender_Mail,ReceiverName, ReceiverNumber, Receiver_Mail)
VALUES ($sender , $SPhone , $SEmail ,$receiver , $RPhone , $REmail)";

if (mysqli_query($conn, $sq2)) {
    
} else {
    echo "Error: " . $sq2 . "<br>" . mysqli_error($conn);
}
*/

mysqli_close($conn);      
?>

<?php include '../incA/header.php'; ?>

<div class="row">
    <div class="column">
        <div class="border1" style="border-style: groove;  margin-left: 180px;width: 1000px; height: 900px;">
            <p class="groove" style="background-color: skyblue;width: 998px;">Transaction process</p>
            <div>
                <label class="underlabel" style=" font-size:24px;margin-right: 200px;  margin-left: 45px;" > Shipping Cost Details</label><br>
                <hr>
               
                <form action="DBForDetail.php"  method="post" style="margin-right: 600px; margin-top: 10px; transform-origin: left;">                   
                    <input type="hidden"  name="sender" value=" <?php echo $sender  ?>" >
                    <input type="hidden"  name="SPhone" value=" <?php echo $SPhone ?>" >
                    <input type="hidden"  name="SEmail" value=" <?php echo $SEmail ?>" >
                    
                    <input type="hidden"  name="receiver" value=" <?php echo $receiver ?>" >
                    <input type="hidden"  name="RPhone" value=" <?php echo $RPhone ?>" >
                    <input type="hidden"  name="REmail" value=" <?php echo $REmail ?>" >
                    
                    <input type="hidden"  name="date" value=" <?php echo $date ?>" >
                    <input type="hidden"  id="org" name="org" value=" <?php echo $org  ?>" >
                    <input type="hidden"  name="dest" value=" <?php echo $dest ?>" >
                    <input type="hidden"  name="delevery" value="<?php echo $delevery ?>" >
                    <input type="hidden"  name="wei" value="<?php echo $wei ?>" >
                    <input type="hidden"  name="dimention" value="<?php echo $lon . "cm ". "X " . $wid . "cm ". "X " . $hei. "cm"?></label></p>" >
                    <input type="hidden"  name="packing" value="<?php echo $packing ?>" >
                    <input type="hidden"  name="shipping" value="<?php echo $shipping ?>" >
                    
                    <input type="hidden"  name="shippingcost" value=" <?php echo $shipingCost. "tk" ?>" >
                    <input type="hidden"  name="tax" value=" <?php echo $tax ?>" >
                    <input type="hidden"  name="insurance" value=" <?php echo $insurance ?>" >
                    <input type="hidden"  name="packingCost" value=" <?php echo $packingCost. "tk" ?>" >
                    <input type="hidden"  name="TotalCost" value=" <?php echo $TotalCost . "tk" ?>" >
                    
                    
              
                    <input type="hidden"  name="packingCost" value=" <?php echo $packingCost. "tk" ?>" >
                    <input type="hidden"  name="TotalCost" value=" <?php echo $TotalCost . "tk" ?>" >
                    
                    
                    
                    <p><label class="underlabel" style="margin-left: 50px;"> Sender: <?php echo $sender  ?></label></p>          <!-- sender-->
                    <p><label class="underlabel" style="margin-left: 50px;"> Sender's Phone: <?php echo $SPhone  ?></label></p>   
                    <p><label class="underlabel" style="margin-left: 50px;"> Sender's Email: <?php echo $SEmail  ?></label></p> 
                     
                    <p><label class="underlabel" style="margin-left: 50px;"> Receiver: <?php echo $receiver ?></label></p>          <!-- Receiver-->
                    <p><label class="underlabel" style="margin-left: 50px;"> Receiver's phone: <?php echo $RPhone ?></label></p>
                    <p><label class="underlabel" style="margin-left: 50px;"> Receiver's Email: <?php echo $REmail ?></label></p>

                    
                    
                    <p><label class="underlabel" style="margin-left: 50px;"> Date: <?php echo $date ?></label></p>                    
                    <p><label class="underlabel" style="margin-left: 50px;"> Origins: <?php echo $org  ?></label></p>         
                    <p><label class="underlabel" style="margin-left: 50px;"> Destination: <?php echo $dest ?></label></p>
                    <p><label class="underlabel" style="margin-left: 50px;"> Transportation: <?php echo $delevery ?></label></p>
                    <p><label class="underlabel" style="margin-left: 50px;"> Weight: <?php echo $wei ?></label></p>
                    <p><label class="underlabel" style="margin-left: 50px;"> Dimension: <?php echo $lon . "cm ". "X " . $wid . "cm ". "X " . $hei. "cm"?></label></p>
                    <p><label class="underlabel" style="margin-left: 50px;"> Total Weight: <?php echo $wei ?></label></p>
                    <p><label class="underlabel" style="margin-left: 50px;"> Shipping Cost: <?php echo $shipingCost. "tk" ?></label></p>
                    <p><label class="underlabel" style="margin-left: 50px;"> TAX(15%): <?php echo $tax ?></label><p>
                    <p><label class="underlabel" style="margin-left: 50px;"> Insurance(0.25%): <?php echo $insurance ?></label></p>
                    <p><label class="underlabel" style="margin-left: 50px;"> Packing Cost: <?php echo $packingCost. "tk" ?></label></p>
                    <p><label class="underlabel" style="margin-left: 50px;"> Total Costs: <?php echo $TotalCost . "tk" ?></label></p>
                   <input type="submit" value="Conferm" onclick="this.form.target='_blank';return true;" class="btn btn-info" style="margin-left: 50px;">
             
                </form> 
                    <p><button onclick="window.print();" target="_blank" class="btn btn-info" style="margin-top: 20px; margin-left: 50px; width: 90px;"> print </button> 
                    <button onclick="location.href = 'AdminHome.php';" class="btn btn-info" style="margin-top: 20px;margin-left: 30px;width: 90px;"> back </button></p>
                    

            </div>
        </div>
    </div>
</div>

<?php include '../incA/footer.php'; ?>


</body>
</html>




