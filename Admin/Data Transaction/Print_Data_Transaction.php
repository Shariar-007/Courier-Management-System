<?php
$id=$_GET["id"];
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
$sql1="SELECT * FROM courier_detail NATURAL JOIN user_detail";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         if($row["TrakId"] == $id)
         {
                $TrakId = $row["TrakId"];
                $Origin = $row["SourceOrigin"];
                $Destination = $row["SourceDestination"];
                $Weight = $row["Weight"];
                $DeleveryOption = $row["DeleveryOption"];
                $Packing = $row["Packing"];
                $ShippingOption = $row["ShippingOption"];
                $Date= $row["Date"];
      
         }
    }
} 
                   $sql5="SELECT ItemOfShipping,CostOfShipment FROM  shippingiteam";
                    $result5= $conn->query($sql5);

                    if ($result5->num_rows > 0) {
                        // output data of each row
                        while($row = $result5->fetch_assoc()) {
                            if($ShippingOption == $row["ItemOfShipping"]){
                                    $CostOfShipment =$row["CostOfShipment"];
                            }
                        }
                    } else {
                        echo "0 results"."shippingcost";
                    }
$sql2="SELECT * FROM courier_status INNER JOIN totalcost WHERE courier_status.TrackID=totalcost.TrackId";
$result1= $conn->query($sql2);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
         if($row["TrackID"] == $id && $row["TrackId"] == $id)
         {
                
                $DeliveryStatus = $row["DeliveryStatus"];
                $TotalCost = $row["TotalCost"];
            
         }
    }
} else {
    echo "0 results";
}
$sql3="SELECT * FROM user_detail";
$result3= $conn->query($sql3);

if ($result3->num_rows > 0) {
    // output data of each row
    while($row = $result3->fetch_assoc()) {
         if($row["TrakId"] == $id )
         {
                
                $SenderName = $row["SenderName"];
                $ReceiverName = $row["ReceiverName"];
                $SenderNumber = $row["SenderNumber"];
                $ReceiverNumber = $row["ReceiverNumber"];
                $Sender_Mail = $row["Sender_Mail"];
                $Receiver_Mail = $row["Receiver_Mail"];
            
         }
    }
} else {
    echo "0 results";
}
$sql4="SELECT * FROM  courier_info";
$result2= $conn->query($sql4);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {

                $TAX = $row["TAX"];
                $Insurance = $row["Insurance"];
                $PackingCost = $row["Packing"];
  
    }
} else {
    echo "0 results";
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
    <head>  
        <title>Data Transaction </title>  

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/courier/bootstrap-4.0.0-beta-dist/css/bootstrap-grid.min.css" >
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="/courier/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" >
        <link rel="stylesheet" href="/courier/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css"  >
        <link rel="stylesheet" href="/css/custom.css">    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/border.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>

            .navbar {
                margin-bottom: 10px;
                border-radius: 0;
            }
            .container{
                margin-bottom: 10px;
            }
            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 450px}

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;} 
            }

        </style>
    </head>      
    <body>
           <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="myNavbar" style="margin-left: 70px;">
                    <ul class="nav navbar-nav">
                        <li class="active" style="margin-left:45px;"><a href="../AdminHome.php"><i class="fa fa-home"> </i>Home</a></li>
                        <li class="active" style="margin-left:45px;"><a href="../changePassword.php">Change Password</a></li>

                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover" >
                                    <button class="w3-button w3-black">Data Master</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">
                                        <a href="../DataMaster/SetupCost.php" class="w3-bar-item w3-button">Setup Costs</a>
                                        <a href="../DataMaster/TAX.php" class="w3-bar-item w3-button">TAX</a>
                                        <a href="../DataMaster/Insurance.php" class="w3-bar-item w3-button">Insurance</a>
                                        <a href="../DataMaster/Packing.php" class="w3-bar-item w3-button">Packing</a>
                                        <a href="../DataMaster/Delevery Status.php" class="w3-bar-item w3-button">Delivery Status</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-black">Data Member</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">                             
                                        <a href="../DataMember/DataBranch.php" class="w3-bar-item w3-button">Data Branch</a>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-black">Data transaction</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">                             
                                        <a href="../Data Transaction/DataTransaction.php" class="w3-bar-item w3-button">Data Transaction</a>
                                        <a href="../Data Transaction/UpdateInvoice.php" class="w3-bar-item w3-button">Update Invoice</a>                  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-black">Data Report</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">

                                        <a href="../Data Report/DataReport.php" class="w3-bar-item w3-button">Report Transaction</a>
                                        <a href="../Data Report/examples/01-overview/TransactionGraph.php" class="w3-bar-item w3-button">Transaction Graph</a>                  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="active"><a href="../../courier/Home.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class=" container" style="margin-top: 40px;">
            <div class=" row">
                <div class="col-md-20 col-md-offset-0">
                    <div class="panel panel-primary">
                        <div class="panel-heading">List Data Transaction </div>
                        <br>
                        <p style="margin-left:10px;"> <a href="DataTransaction.php">List Data</a> | <a href="AddData.php">Add Data</a> | <a href="SearchData.php">Search Data</a></p>                       
                     
                           <div id="div1" class="table-responsive">          
                           <h4 style="margin-left:10px;">Delivery Invoice No.<?php echo "".$TrakId  ?></h4>  
                            <h5 style="margin-left:10px;">Date<?php echo " ".$Date ?></h5>  
             <form action=""  method="post" style="margin-right: 600px; margin-top: 10px; transform-origin: left;">                   
                    <input type="hidden"  name="TrakId" value=" <?php echo $TrakId  ?>" >
                    <input type="hidden"  name="Origin" value=" <?php echo $Origin ?>" >
                    <input type="hidden"  name="Destination" value=" <?php echo $Destination ?>" >
                    <input type="hidden"  id="ShippingOption" name="ShippingOption" value=" <?php echo $ShippingOption  ?>" >
                    <input type="hidden"  name="Weight" value=" <?php echo $Weight ?>" >
                    <input type="hidden"  name="Packing" value="<?php echo $Packing ?>" >
                    <input type="hidden"  name="Date" value="<?php echo $Date ?>" >
                    
                    <input type="hidden"  name="DeliveryStatus" value="<?php echo $DeliveryStatus ?>" >
                    <input type="hidden"  name="TotalCost" value="<?php echo $TotalCost ?>" >
                    
                    <input type="hidden"  name="SenderName" value=" <?php echo $SenderName ?>" >
                    <input type="hidden"  name="ReceiverName" value=" <?php echo $ReceiverName ?>" >
                    <input type="hidden"  name="SenderNumber" value=" <?php echo $SenderNumber ?>" >
                    <input type="hidden"  name="ReceiverNumber" value=" <?php echo $ReceiverNumber ?>" >
                    <input type="hidden"  name="Sender_Mail" value=" <?php echo $Sender_Mail ?>" >
                    <input type="hidden"  name="Receiver_Mail" value=" <?php echo $Receiver_Mail ?>" >
                    
                    <input type="hidden"  name="TAX" value=" <?php echo $TAX . "%" ?>" >
                    <input type="hidden"  name="Insurance" value=" <?php echo $Insurance ?>" >
                    <input type="hidden"  name="packingCost" value=" <?php echo $PackingCost ?>" >
                     <input type="hidden"  name="CostOfShipment" value=" <?php echo $CostOfShipment ?>" >
                    <hr>
                    <h4 style="margin-left:30px; color:blue">A. Data Submissions :</h4>
                    <p><label class="underlabel" style="margin-left: 30px;"> Origins: <?php echo $Origin  ?></label></p>         
                    <p><label class="underlabel" style="margin-left: 30px;"> Destination: <?php echo $Destination ?></label></p>
                    <p><label class="underlabel" style="margin-left: 30px;"> Transportation: <?php echo $ShippingOption ?></label></p>                    
                    <p><label class="underlabel" style="margin-left: 30px;"> Weight: <?php echo $Weight  ?></label></p>         
                    <p><label class="underlabel" style="margin-left: 30px;"> Total Weight: <?php echo $Weight ?></label></p>
                    <p><label class="underlabel" style="margin-left: 30px;"> Shipping Cost: <?php echo $CostOfShipment ?></label></p>
                    <p><label class="underlabel" style="margin-left: 30px;"> TAX(<?php echo $TAX."%" ?>): <?php echo (($TAX*$TotalCost)/100)."tk" ?></label></p>
                    <p><label class="underlabel" style="margin-left: 30px;"> Insurance(<?php echo $Insurance."%" ?>): <?php echo (($Insurance*$TotalCost)/100)."tk" ?></label></p>
                    <p><label class="underlabel" style="margin-left: 30px;"> Total Costs: <?php echo $TotalCost." tk" ?></label></p>
                    <h4 style="margin-left:30px; color:blue">B. Data Sender : </h4>
                    <p><label class="underlabel" style="margin-left: 30px;"> Name of Sender: <?php echo $SenderName ?></label></p>
                    <p><label class="underlabel" style="margin-left: 30px;"> Phone: <?php echo $SenderNumber ?></label><p>
                    <p><label class="underlabel" style="margin-left: 30px;"> Email): <?php echo $Sender_Mail ?></label></p>
                    <h4 style="margin-left:30px; color:blue">C. Data Receiver :</h4>
                    <p><label class="underlabel" style="margin-left: 30px;"> Name of Receiver: <?php echo $ReceiverName ?></label></p>
                    <p><label class="underlabel" style="margin-left: 30px;"> Address: <?php echo $ReceiverNumber ?></label></p>
                    <p><label class="underlabel" style="margin-right: 50px;margin-left: 30px;"> Phone: <?php echo $Receiver_Mail ?></label></p>
                   
                   <!-- <input type="submit" value="Conferm" onclick="this.form.target='_blank';return true;" class="btn btn-info" style="margin-left: 50px;">
                    -->
                </form> 
                    <p><button onclick="window.print();" target="_blank" class="btn btn-info" style="margin-top: 20px; margin-left: 50px; width: 90px;"> print </button> 
                    <button onclick="location.href = 'DataTransaction.php';" class="btn btn-info" style="margin-top: 20px;margin-left: 30px;width: 90px;"> back </button></p>           
                               
                                   
                           </div>
                        </div>
                    </div><!-- col-->
                </div><!-- row-->
                <hr>
            </div>      
            <h4 class="text-center" style="color: blue">Copyright 2017 © Courier Management System</h4>
        </div><!-- container-->


        
</body>
</html>



