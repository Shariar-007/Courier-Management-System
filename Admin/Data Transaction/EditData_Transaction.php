<?php
if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['date'])&& isset($_GET['destination']) && isset($_GET['weight'])&& isset($_GET['status'])&& isset($_GET['totalcost'])) {
    $name=$_GET["name"];
    $id=$_GET["id"];
    $date=$_GET["date"];
    $destination=$_GET["destination"];
    $weight=$_GET["weight"];
    $totalcost=$_GET["totalcost"];
    $status=$_GET["status"];
}else
{
    echo "value donot come through GET METHOD";
}

?>
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

$sql="SELECT user_detail.TrakId, user_detail.SenderName,courier_detail.Date ,courier_detail.SourceDestination,courier_detail.Weight,totalcost.TotalCost,courier_status.DeliveryStatus FROM (((user_detail INNER JOIN courier_detail ON user_detail.TrakId=courier_detail.TrakId)INNER JOIN  totalcost ON user_detail.TrakId= totalcost.TrackId) INNER JOIN  courier_status ON user_detail.TrakId=courier_status.TrackID)";

$result = mysqli_query($conn, $sql);
$val1;
$val2;
$val3;
$val4;
$val5;
$val6;
$val7;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
    if($row["TrakId"] == $id)
    {
         $val1=$row["TrakId"];
         $val2=$row["SenderName"];
         $val3=$row["Date"];
         $val4=$row["SourceDestination"];
         $val5=$row["Weight"];
         $val6=$row["TotalCost"];
         $val7=$row["DeliveryStatus"];
        
    }      
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <head>  
        <title>Search Data</title>  

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
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Data Branch</div>
                        <br>
             
                        <div style="margin-top:20px;"><p style="margin-left:10px;"> <a href="DataTransaction.php">List Data</a> | <a href="AddData.php">Add Data</a> | <a href="SearchData.php">Search Data</a></p></div>

                            <br>
                            <form action="Edit_Detail.php" method="post" style="margin-left: 20px;">						                       
                            <label >Track NO:</label>
                            <input type="text" name="id" id="id"  value="<?php echo  $val1 ?>" readonly="true" style="margin-left:50px; width:300px; height:40px; border: 2px solid skyblue;">
                            <br><br>
                            <label >name:</label>
                            <input type="text" name="name" id="name" value="<?php echo  $val2 ?>"  style="margin-left:75px; width:300px; height:40px; border: 2px solid skyblue;">   
                            <br><br> 
                            <label >Date:</label>
                            <input type="date" name="date" id="date"  value="<?php echo  $val3 ?>"  style="margin-left:80px; width:300px; height:40px; border: 2px solid skyblue;">
                            <br><br>
                            <label >Destination:</label>
                            <input type="text" name="destination" id="destination" value="<?php echo  $val4 ?>"  style="margin-left:35px; width:300px; height:40px; border: 2px solid skyblue;">   
                            <br><br>
                            <label >weight:</label>
                            <input type="text" name="weight" id="weight" value="<?php echo  $val5 ?>"  style="margin-left:66px; width:300px; height:40px; border: 2px solid skyblue;">   
                            <br><br>
                            <label>Total cost:</label>
                            <input type="text" name="cost" id="cost" value="<?php echo  $val6."tk" ?>"  style="margin-left:45px; width:300px; height:40px; border: 2px solid skyblue;">   
                            <br><br>
                            <label >Status:</label>
                            <input type="text" name="status" id="status" value="<?php echo  $val7 ?>"  style="margin-left:66px; width:300px; height:40px; border: 2px solid skyblue;">   
                     
                            
                            <input hidden="hidden" type="text" name="Id" id="Id" value="<?php echo  $id ?>"  style="margin-left:100px; width:300px; height:40px;">   
                            <br><br>
                            <input type="Submit" name="Edit" value="Edit" style="background-color:  #F2F3FF; width:60px;height:40px;margin-left:118px;">
                            </form>
                            <br>
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






