<?php
if (isset($_POST['check']) && !empty($_POST['invoice'])) {
    $invoice = $_POST['invoice'];

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
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Delivery Status</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/border.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
                margin-bottom: 10px;
                border-radius: 0;
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
                background-color: white;
                color: black;
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



            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;

            }

        </style>
    </head>


    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="myNavbar" style="margin-left: 70px;">
                    <ul class="nav navbar-nav">
                        <li class="active" style="margin-left:45px;"><a href="../Admin/AdminHome.php"><i class="fa fa-home"> </i>Home</a></li>
                        <li class="active" style="margin-left:45px;"><a href="../Admin/changePassword.php">Change Password</a></li>

                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover" >
                                    <button class="w3-button w3-black">Data Master</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">
                                        <a href="../Admin/DataMaster/SetupCost.php" class="w3-bar-item w3-button">Setup Costs</a>
                                        <a href="../Admin/DataMaster/TAX.php" class="w3-bar-item w3-button">TAX</a>
                                        <a href="../Admin/DataMaster/Insurance.php" class="w3-bar-item w3-button">Insurance</a>
                                        <a href="../Admin/DataMaster/Packing.php" class="w3-bar-item w3-button">Packing</a>
                                        <a href="../Admin/DataMaster/Delevery Status.php" class="w3-bar-item w3-button">Delivery Status</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-black">Data Member</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">                             
                                        <a href="../Admin/DataMember/DataBranch.php" class="w3-bar-item w3-button">Data Branch</a>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-black">Data transaction</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">                             
                                        <a href="../Admin/Data Transaction/DataTransaction.php" class="w3-bar-item w3-button">Data Transaction</a>
                                        <a href="../Admin/Data Transaction/UpdateInvoice.php" class="w3-bar-item w3-button">Update Invoice</a>                  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-black">Data Report</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">

                                        <a href="../Admin/Data Report/DataReport.php" class="w3-bar-item w3-button">Report Transaction</a>
                                        <a href="../Admin/Data Report/examples/01-overview/TransactionGraph.php" class="w3-bar-item w3-button">Transaction Graph</a>                  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="active"><a href="../courier/Home.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class=" container" style="margin-top: 30px;">
            <div class=" row">
                <div class="col-md-20 col-md-offset-0">
                    <div class="panel panel-primary">
                      
                        <div class="panel-heading">Delivery Status</div>
                        <div class="table-responsive">

                            <form action="" method="post" style="margin-left: 20px;margin-top: 50px;">						                       
                                <label style="margin-right: 94px;">No. Invoice:</label><input type="text" name="invoice" value="<?php  echo $invoice ;?>" placeholder="search by name" style=" width:300px; height:40px;">
                                <br><br>
                                <input type="submit" name="check" value="check" style="width:60px;height:40px;margin-left:267px;">
                            </form>
                            
                            <hr>							                                                    							
                            
                        </div>
                        
             
                        <form name="actionForm" action="" method="post">                                   
                        <div id="div1" class="table-responsive">
          
                                <table class="table" style="width:100%" >
                                    <thead>
                                        <tr>

                                            <th>No.<br>Inv.</th>
                                            <th>Date</th>
                                            <th>Sender</th>
                                            <th>Shipping Destination</th>
                                            <th>Weight</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                <tbody >					
<?php
if (isset($_POST['check']) && !empty($_POST['invoice'])) {
    $sql = "SELECT user_detail.TrakId, user_detail.SenderName,courier_detail.Date ,courier_detail.SourceDestination,courier_detail.Weight,totalcost.TotalCost,courier_status.DeliveryStatus FROM (((user_detail INNER JOIN courier_detail ON user_detail.TrakId=courier_detail.TrakId)INNER JOIN  totalcost ON user_detail.TrakId= totalcost.TrackId) INNER JOIN  courier_status ON user_detail.TrakId=courier_status.TrackID)WHERE user_detail.TrakId like '%$invoice%'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            if($invoice == $row["TrakId"]){
                $id = $row["TrakId"];
                $date = $row["Date"];
                $name = $row["SenderName"];
                $destination = $row["SourceDestination"];
                $weight = $row["Weight"];
                $totalcost = $row["TotalCost"];
                $status = $row["DeliveryStatus"];
            }
            }
              
              
           
            ?>
                                                 <tr>
                                            <form>
                                               
                                                 <td><?php if (isset($_POST['check']) && !empty($_POST['invoice'])) {
                                        echo "#".$id;
                                    } ?></td>
                                                <td><?php if (isset($_POST['check']) && !empty($_POST['invoice'])) {
                                        echo $date;
                                    } ?></td>
                                                <td><?php if (isset($_POST['check']) && !empty($_POST['invoice'])) {
                                        echo $name;
                                    } ?></td>
                                                <td><?php if (isset($_POST['check']) && !empty($_POST['invoice'])) {
                                        echo $destination;
                                    } ?></td>
                                                <td><?php if (isset($_POST['check']) && !empty($_POST['invoice'])) {
                                        echo $weight;
                                    } ?></td>
                                                <td><?php if (isset($_POST['check']) && !empty($_POST['invoice'])) {
                                        echo $totalcost . "tk";
                                    } ?></td>
                                                <td><?php if (isset($_POST['check']) && !empty($_POST['invoice'])) {
                                        echo $status;
                                    } ?></td>
                                                
                                            </form>        
                                            </tr>          
                <?php
                }  } else { ?>
              <tr><td colspan="3"> Not Found.</td></tr>
              <?php  }   ?>  

                                </tbody>
                            </table>
                           <br><br>
                            </form>		
                        </div>
                    </div>
                </div><!-- col-->
            </div><!-- row-->
    
        </div>      
        <h4 class="text-center" style="color: blue">Copyright 2017 © Courier Management System</h4>
    </div><!-- container-->

<?php
if (isset($_POST['check']) && !empty($_POST['invoice'])) {
    mysqli_close($conn);
}
?> 

</body>
</html>




