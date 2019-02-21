<?php

if(isset($_POST['Proses']) && !empty($_POST['start']) && !empty($_POST['to'])) {
  $start=$_POST['start'];
  $to=$_POST['to'];

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
}

    

?>
<!DOCTYPE html>
<html lang="en">
    <head>  
        <title>Data Report</title>  

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

                                        <a href="DataReport.php" class="w3-bar-item w3-button">Report Transaction</a>
                                        <a href="examples/01-overview/TransactionGraph.php" class="w3-bar-item w3-button">Transaction Graph</a>                  
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
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Transaction Report</div>
                        <br>
                       <div class="table-responsive"> 
                        <br>			
                        <form action="" method="post">
					    <label style="margin-left:10px;;">Start:</label><input type="date" name="start" style="width:200px; height:40px;">
						 
						<label>To:</label> <input type="date" name="to" style="width:200px;height:40px;">								  
						  <br><br>	
                                               <input type="submit" name="Proses" value="Proses" style="width:60px;height:40px;margin-left:50px;">
						 <br><br>
                        </form>                     
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No. Inv.</th>
                                        <th>Date</th>
                                        <th>Sender</th>
                                        <th>Shipping Destination</th>
					<th>Weight</th>
                                        <th>Total</th>
                                       
                                    </tr>
                                </thead>
                                  
                       <?php
                       if(isset($_POST['Proses'])&& !empty($_POST['start']) && !empty($_POST['to'])) {
                           /* @var $_POST type */
                           $x=$_POST['start'];
                           $y=$_POST['to'];
                           $sql="SELECT user_detail.TrakId, user_detail.SenderName,courier_detail.Date ,courier_detail.SourceDestination,courier_detail.Weight,totalcost.TotalCost FROM ((user_detail INNER JOIN courier_detail ON user_detail.TrakId=courier_detail.TrakId)INNER JOIN  totalcost ON user_detail.TrakId= totalcost.TrackId)WHERE courier_detail.Date BETWEEN '".$x."' AND '".$y."' ORDER BY courier_detail.Date DESC";

                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    
                                                    $id = $row["TrakId"];
                                                    $date = $row["Date"];
                                                    $name = $row["SenderName"];
                                                    $destination = $row["SourceDestination"];
                                                    $weight = $row["Weight"];
                                                    $totalcost = $row["TotalCost"];
                                                   // $status = $row["DeliveryStatus"];
                                                
                            ?>
                                <tbody>
                                    <tr>
                                                    <td><?php if(isset($_POST['Proses'])&& !empty($_POST['start']) && !empty($_POST['to'])) { echo "#".$id ;}?></td>
                                                    <td><?php if(isset($_POST['Proses'])&& !empty($_POST['start']) && !empty($_POST['to'])) { echo $date ;} ?></td>
                                                    <td><?php if(isset($_POST['Proses'])&& !empty($_POST['start']) && !empty($_POST['to'])) { echo $name ;}?></td>
                                                    <td><?php if(isset($_POST['Proses'])&& !empty($_POST['start']) && !empty($_POST['to'])) { echo $destination ;}?></td>
                                                    <td><?php if(isset($_POST['Proses'])&& !empty($_POST['start']) && !empty($_POST['to'])) { echo $weight ;}?></td>
                                                    <td><?php if(isset($_POST['Proses'])&& !empty($_POST['start']) && !empty($_POST['to'])) { echo $totalcost."tk" ;}?></td>
                                                    
<?php  
}
if(isset($_POST['Proses'])&& !empty($_POST['start']) && !empty($_POST['to'])) {

                                                    }
                       }} else { ?>
    <tr><td colspan="3">No transactions.</td></tr> 

  <?php  }
  
?>
					
                                    </tr>                             
                                </tbody>
                            </table>
							<hr>
							
                        </div>
                    </div>

                </div><!-- col-->
            </div><!-- row-->
            <hr>
        </div>      
        <h4 class="text-center" style="color: blue">Copyright 2017 © Courier Management System</h4>
    </div><!-- container-->
    
    <?php
    if(isset($_POST['Proses'])&& !empty($_POST['start']) && !empty($_POST['to'])) {
mysqli_close($conn);
    }
?>       
     
</body>
</html>
