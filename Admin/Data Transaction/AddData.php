
<?php
  $mpty_error=FALSE;
 if (isset($_GET["FF"]) && isset($_GET["delete"])) {
    $mpty_error = TRUE;
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
$sql = "SELECT ItemOfShipping FROM  shippingiteam";
$result = mysqli_query($conn, $sql);

?>



<!DOCTYPE html>
<html lang="en">
    <head>  
        <title>Add Data</title>  

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
                        <div class="panel-heading">List Data Transaction</div>
                        <br>
                        <p style="margin-left:10px;"> <a href="DataTransaction.php">List Data</a> | <a href="AddData.php">Add Data</a> | <a href="SearchData.php">Search Data</a></p>
                         <hr>
		<div class="table-responsive">
		<label style="margin-left: 20px;margin-bottom: 20px;font-size:18px;" >A. Data Submissions</label>
						
                <form action="AddData_to_Database.php" method="post" target="_blank;"style="margin-left: 20px;">						 
                        
                        <label class="underlabel" style="margin-right: 200px; "> Date:</label>                    
                        <input type="date" id="Date" name="Date" style="width:175px;height:25px;">
                        <br><br>
                        <label class="underlabel" style="margin-right: 180px;" > Origins:</label>
                        <input type="text" id="org" name="Origins" placeholder="Enter Origin" >
                        <br>
                        <br>
                        <label class="underlabel" style="margin-right: 145px; "> Destinations:</label>
                        <input type="text" id="dest" name="Destinations" placeholder="Enter a Destination" >
                        <br><br>
                        <label class="underlabel" style="margin-right: 68px;"> Weight (Kg) Ex: 0.2, 2, 20</label>
                        <input id="wei" type="text" name="Weight">
                        <br><br>
                        <label class="underlabel" style="margin-right: 160px;"> Long (Cm):</label>
                        <input id="lon" class="input" type="text" name="Long">
                        <br><br>
                        <label class="underlabel" style="margin-right: 162px;"> Wide (Cm):</label>
                        <input id="wid" class="input" type="text" name="Wide">
                        <br><br>
                        <label class="underlabel" style="margin-right: 156px;"> Height(Cm):</label>
                        <input id="hei" class="input" type="text" name="Height">
                        <br><br>

                        <label class="underlabel" style=" margin-right: 123px;"> Delivery options:</label>
                        <dev style="font-size: 14px;">
                            <select required name="Delevery" style="color: lightslategray;width: 120px; height: 35px;">
                                <option id="del-1" value="Sea">Sea</option>
                                <option id="del-3" value="Land">Land</option>
                                <option id="del-2" value="Air">Air</option>
                            </select>
                        </dev>   

                        <br><br>
                        <label class="underlabel" style=" margin-right: 178px;"> Packing:</label>
                        <dev style=" font-size: 14px;">
                            <select required name="packing" style="color: lightslategray;width: 60px; height: 35px;">
                                <option id="yes" value="Yes">Yes</option>
                                <option id="no" value="No">No</option>
                            </select>
                        </dev>

                        <br><br>
                        <label class="underlabel" style=" margin-right: 123px;"> Option Shipping:</label>
                        <dev style="font-size: 14px;">
                            <select name="shipping" style="color: lightslategray;width: 170px; height: 35px;">
                                <option value="">--Option Shipping--</option>
                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    $value=$row["ItemOfShipping"];
                                
                                ?>
                                <option id="reg" value="<?php echo $value ?>"><?php echo $value ?></option>
                                <!--<option id="exp" value="Express">Express</option> -->
                           
 <?php  }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
                                
                            </select>
                        </dev>   

                        <br><br>
                        <label class="underlabel" style="margin-right: 140px;">Distance (km):</label>
                        <input id="dist" name="Distance" class="input" type="text">
                        <br><br><br>
                  
                        <label style="margin-bottom: 20px;padding-top:30px;font-size:18px;" >B. Data Sender</label>
						<br>
						<br>
                                                <label style="margin-right: 6px;">Name of the sender:</label><input type="text" name="Sender" placeholder="sender name" style="margin-left:100px; width:300px; ">
						 <br><br>
						<label style="margin-right: 94px;">Phone:</label><input type="text" name="SPhone" placeholder="sender phone" style="margin-left:100px; width:300px; ">
						 <br><br>
                                                 <label style="margin-right: 94px;">Email:</label> <input type="email" name="SEmail" placeholder="sender email" style="margin-left:100px; width:300px;">						
						<br> 
                        <label style="margin-bottom: 20px;padding-top:30px;font-size:18px;" >C. Data Receiver</label>
						<br>
						<br>
					    <label style="margin-right: 24px;">Recipients name:</label><input type="text" name="Receiver" placeholder="Recipients name" style="margin-left:100px; width:300px; ">
						 <br><br>
						<label style="margin-right: 110px;">Phone:</label> <input type="text" name="RPhone" placeholder="Recipients phone" style="margin-left:80px; width:300px;">								  
						  <br><br>
                                                  <label style="margin-right: 100px;">Email:</label><input type="email" name="REmail" placeholder="Recipients email" style="margin-left:100px; width:300px; ">
						 <br>			
                                                 <input type="submit" name="delete" value="Proses" style="background-color: #066ECD;width:60px;height:40px;margin-left:260px;">
					</form>
                         
						 <br><br>							                                                    							
                       
					   </div>
                    </div>

                </div><!-- col-->
            </div><!-- row-->
            <hr>
        </div>      
        <h4 class="text-center" style="color: blue">Copyright 2017 © Courier Management System</h4>
    </div><!-- container-->


<script>

            var autocomplete, autocomplete1;

            function initAutocomplete() {
                autocomplete = new google.maps.places.Autocomplete(
                        (document.getElementById('org')),
                        {
                            types: ['geocode']
                        });
                autocomplete1 = new google.maps.places.Autocomplete(
                        (document.getElementById('dest')),
                        {
                            types: ['geocode']
                        });

                autocomplete.addListener('place_changed', fillInAddress);
                autocomplete1.addListener('place_changed', fillInAddress);
            }

            function fillInAddress() {
                autocomplete.getPlace();
                //console.log("yo!!!");
            }


        </script>

        <!--Distance Calculation-->
        <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3BLb3uHA27nebpSeadReHXulPbyewd_4&libraries=places&callback=initAutocomplete">
        </script>
        <script>
            $(document).ready(function () {

                function calcD() {
                    var org = $("#org").val();
                    var dest = $("#dest").val();

                    //console.log(org+" "+dest);

                    var directionsService = new google.maps.DirectionsService();

                    var request = {
                        origin: org, // a city, full address, landmark etc
                        destination: dest,
                        travelMode: google.maps.DirectionsTravelMode.DRIVING
                    };

                    directionsService.route(request, function (response, status) {
                        if (status == google.maps.DirectionsStatus.OK) {
                            console.log(response.routes[0].legs[0].distance.value + " metres"); // the distance in metres
                            $("#dist").val(response.routes[0].legs[0].distance.value / 1000);
                        } else {
                            //oops, there's no route between these two locations
                            // every time this happens, a kitten dies
                            // so please, ensure your address is formatted properly
                        }
                    });

                }

                $("#org").change(function () {
                    calcD();
                });
                $("#dest").change(function () {
                    calcD();
                });

            });
        </script>

if ($empty_error) {
    echo "<script>alert('Every input field must not be empty');</script>";
}

</body>
</html>




