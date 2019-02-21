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

$sql = "SELECT * FROM shippingiteam";
$result = $conn->query($sql);
$Name;
$Cost;
$i=0;

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Available Vehicle</title>
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
            <div class="collapse navbar-collapse" style="margin-left: 60px;">
                <ul class="nav navbar-nav" style="margin-left:50px;">
                  
                  <li ><a href="../courier/Home.php"><i class="fa fa-home"> </i>Home</a></li>
                  <li><a href="../courier/contuctus.php">Contact us</a></li>
                <li>
                       <div class="w3-container" style="margin-top: 7px; content-box:Light Gray;">
                          <div class="w3-dropdown-hover">
                            <button class="w3-button w3-black" id="com">Company Profile</button>
                            <div class="w3-dropdown-content w3-bar-block w3-border">
                                <a href="../courier/Myprofile.php" class="w3-bar-item w3-button">Company Profile</a>
                                <a href="../courier/Termofservices.php" class="w3-bar-item w3-button">Term of Service</a>
                            </div>
                          </div>
                        </div>
                </li>
                <li><a href="../courier/OtherNetwork.php">Available Vehicle</a></li>
                <li><a href="../courier/DeliveryStatus.php">Delivery Status</a></li>
                
              </ul>
                <ul class="nav navbar-nav navbar-right" style="margin-right:90px;">
                  <li><a href="../animated-loading-and-login-screen/index.php"><span class="glyphicon glyphicon-log-in "></span> Admin Login</a></li>
              </ul>
            </div>
          </div>
        </nav>
    

        <div class=" container" style="margin-top: 40px;">
            <div class=" row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Available Vehicle List</div>
                        <div class="table-responsive">
                    <div class="container">
                            <br>
                            <table class="table" style="width:65%" >

                                <thead>
                                    <tr style="size:500px;">
                                        <th>No</th>
                                        <th>Vehicle Name</th>
                                        <th>Cost</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <?php 
                                    if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()) {
                                        $i++; 
                                        $Name = $row["ItemOfShipping"];
                                        $Cost = $row["CostOfShipment"];
                                    
                                    ?>
                                    <tr>
                                        <td><?php echo $i?></td>
                                        <td><?php echo $Name ?></td>
                                        <td><?php echo $Cost."tk" ?></td>
                                        

                                    </tr>
     <?php
      }
} else {
    echo "0 results";
}
$conn->close();
     
     
     ?>                               
                                    
                                    
                                    
                                </tbody>
                            </table>

                        </div>
  							                                                    							

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




