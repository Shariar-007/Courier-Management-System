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
?>

<!DOCTYPE html>
<html lang="en">
    <head>  
        <title>Update Invoice</title>  

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

        <style>

            .navbar {
                margin-bottom: 10px;
                border-radius: 0;
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
                        <div class="panel-heading">Update Invoice</div>
                        <br>
                         <p style="margin-left:10px;"><a href="UpdateInvoice.php">List Data</a> | <a href="SearchInvoice.php">Search Data</a></p>
                        
                       
                       <?php
                
                           $sql="SELECT user_detail.TrakId, user_detail.SenderName,courier_detail.Date ,courier_detail.SourceDestination,courier_detail.Weight,totalcost.TotalCost,courier_status.DeliveryStatus FROM (((user_detail INNER JOIN courier_detail ON user_detail.TrakId=courier_detail.TrakId)INNER JOIN  totalcost ON user_detail.TrakId= totalcost.TrackId) INNER JOIN  courier_status ON user_detail.TrakId=courier_status.TrackID)";
                            $result = mysqli_query($conn, $sql);
                      ?>
          
                        <form name="actionForm" action="Delete_UserInfo.php" method="post" onsubmit="return deleteConfirm();"/>                                   
                        <div id="div1" class="table-responsive">          
                            <table class="w3-table w3-striped w3-bordered" style="width:100%" >
                                <thead>
                                    <tr>
                                        <th>No.<br>Inv.</th>
                                        <th>Date</th>
                                        <th>Sender</th>
                                        <th>Shipping Destination</th>
                                        <th>Weight</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody >					
                                            <?php
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    
                                                    $id = $row["TrakId"];
                                                    $date = $row["Date"];
                                                    $name = $row["SenderName"];
                                                    $destination = $row["SourceDestination"];
                                                    $weight = $row["Weight"];
                                                    $totalcost = $row["TotalCost"];
                                                    $status = $row["DeliveryStatus"];
                                                    
                                                    ?>
                                            <tr>
                                                <form>
                                                    <input hidden="hidden" type="text" name="id" value="<?php echo $id ?>">
                                                    <input hidden="hidden" type="date" name="date" value="<?php echo $date ?>">
                                                    <input hidden="hidden" type="text" name="name" value="<?php echo $name ?>">
                                                    <input hidden="hidden" type="text" name="destination" value="<?php echo $destination ?>">
                                                    <input hidden="hidden" type="text" name="weight" value="<?php echo $weight ?>">
                                                    <input hidden="hidden" type="text" name="totalcost" value="<?php echo $totalcost ?>" >
                                                    <input hidden="hidden" type="text" name="status" value="<?php echo $status ?>" >
                                                    <td><?php echo "#".$id ?></td>
                                                    <td><?php echo $date ?></td>
                                                    <td><?php echo $name ?></td>
                                                    <td><?php echo $destination ?></td>
                                                    <td><?php echo $weight ?></td>
                                                    <td><?php echo $totalcost."tk" ?></td>
                                                    <td><?php echo $status ?></td>
                                                    <td><a href="GoTO_UpdateInvoiceData.php?id=<?php echo $id ?>&date=<?php echo $date ?>&name=<?php echo $name ?>&destination=<?php echo $destination ?>&weight=<?php echo $weight ?>&totalcost=<?php echo $totalcost ?>&status=<?php echo $status ?>">Update</a></td>                                                  
                                              </form>  
                                               </tr>          
  <?php
    }
} else { ?>
    <tr><td colspan="3">No records found.</td></tr> 

  <?php  }
?>

                                        </tbody>
                                    </table>
                                    <br><br>
                                 </form>		
                                </div>
                        </div>
                    </div><!-- col-->
                </div><!-- row-->
                <hr>
            </div>      
            <h4 class="text-center" style="color: blue">Copyright 2017 © Courier Management System</h4>
        </div><!-- container-->

<?php
mysqli_close($conn);
?>       
         
</body>
</html>



