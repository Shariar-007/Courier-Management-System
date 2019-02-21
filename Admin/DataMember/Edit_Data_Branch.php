<?php
if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['password'])&& isset($_GET['email']) && isset($_GET['address'])) {
    $name=$_GET["name"];
    $id=$_GET["id"];
    $password=$_GET["password"];
    $email=$_GET["email"];
    $address=$_GET["address"];
    $phone=$_GET["phone"];
}else
{
    echo "value donot come through GET METHOD";
}

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

$sql = "SELECT*FROM users";
$result = mysqli_query($conn, $sql);
$val1;
$val2;
$val3;
$val4;
$val5;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    if($row["id"] == $id)
    {
         $val1=$row["User_name"];
         $val2=$row["Password"];
         $val3=$row["mail"];
         $val4=$row["Address"];
         $val5=$row["Phone"];
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
                                        <a href="SetupCost.php" class="w3-bar-item w3-button">Setup Costs</a>
                                        <a href="TAX.php" class="w3-bar-item w3-button">TAX</a>
                                        <a href="Insurance.php" class="w3-bar-item w3-button">Insurance</a>
                                        <a href="Packing.php" class="w3-bar-item w3-button">Packing</a>
                                        <a href="Delevery Status.php" class="w3-bar-item w3-button">Delivery Status</a>
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
             
                        <div style="margin-top:20px;"> <p style="margin-left:10px;"> <a href="DataBranch.php">List Data</a> | <a href="AddData.php">Add Data</a> | <a href="SearchData.php">Search Data</a></p></div>
                            <br>
                            <form action="EditComplete.php" method="post" style="margin-left: 20px;">						                       
                            <label >Name:</label>
                            <input type="text" name="Name" id="Name"  value="<?php echo  $val1 ?>"  style="margin-left:50px; width:300px; height:40px; border: 2px solid skyblue;">
                            <br><br>
                            <label >Password:</label>
                            <input type="text" name="Password" id="Password" value="<?php echo  $val2 ?>"  style="margin-left:22px; width:300px; height:40px; border: 2px solid skyblue;">   
                            <br><br> 
                            <label >Email:</label>
                            <input type="text" name="Email" id="Email"  value="<?php echo  $val3 ?>"  style="margin-left:50px; width:300px; height:40px; border: 2px solid skyblue;">
                            <br><br>
                            <label >Address:</label>
                            <input type="text" name="Address" id="Address" value="<?php echo  $val4 ?>"  style="margin-left:31px; width:300px; height:40px; border: 2px solid skyblue;">   
                            <br><br>
                            <label >Phone:</label>
                            <input type="text" name="phone" id="phone" value="<?php echo  $val5 ?>"  style="margin-left:46px; width:300px; height:40px; border: 2px solid skyblue;">   
                            
                            
                            <input hidden="hidden" type="text" name="Id" id="Id" value="<?php echo  $id ?>"  style="margin-left:100px; width:300px; height:40px;">   
                            <br><br>
                            <input type="Submit" name="Edit" value="Edit" style="background-color:  #F2F3FF; width:60px;height:40px;margin-left:95px;">
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






