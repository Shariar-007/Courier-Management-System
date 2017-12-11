<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $org = $_REQUEST['Origins'];
    $dest = $_REQUEST['Destinations'];
    $wei = $_REQUEST['Weight'];
    $lon = $_REQUEST['Long'];
    $wid = $_REQUEST['Wide'];
    $hei = $_REQUEST['Height'];
    $Dist = $_REQUEST['Distance'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!(empty($org) && empty($dest) && empty($wei) && empty($lon) && empty($wid) && empty($hei) && empty($Dist))) {
        header("Location:CheckPost.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Check Shipping</title>
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
      width: 100%;
      height: 100%;
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
      
 /* Create three equal columns that floats next to each other */
.column{
    float: center;
    width: 70%;
    padding: 15px;
    background-color: antiquewhite;
}
     

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width:600px) {
    .column {
        width: 100%;
    }
}
    
  </style>
</head>
    
    
<body>
  <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" style="margin-left: 60px;">
              <ul class="nav navbar-nav">
                  <li ><a  href="http://localhost:1234/Courier/courier/logo.php" target="_self">Logo</a></li>
                  <li ><a href="http://localhost:1234/Courier/courier/Home.php"><i class="fa fa-home"> </i>Home</a></li>
                <li><a href="http://localhost:1234/Courier/courier/contuctus.php">Contact us</a></li>
                <li>
                       <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                          <div class="w3-dropdown-hover">
                            <button class="w3-button w3-black" id="com">Company Profile</button>
                            <div class="w3-dropdown-content w3-bar-block w3-border">
                              <a href="http://localhost:1234/Courier/courier/myprofile.php" class="w3-bar-item w3-button">My Profile</a>
                              <a href="http://localhost:1234/Courier/courier/termofservices.php" class="w3-bar-item w3-button">Term of Service</a>
                            </div>
                          </div>
                        </div>
                </li>
                <li><a href="http://localhost:1234/Courier/courier/othernetwork.php">other Network</a></li>
                <li><a href="http://localhost:1234/Courier/courier/CheckShipping.php">Check Shipping</a></li>
                <li><a href="http://localhost:1234/Courier/courier/DeliveryStatus.php">Delivary Status</a></li>
                <li><a href="http://localhost:1234/Courier/courier/Reg.php" target="_self">Register Here</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost:1234/Courier/courier/login.php"><span class="glyphicon glyphicon-log-in "></span>Member Login</a></li>
              </ul>
            </div>
          </div>
        </nav>


      <div class="row" style="margin-left: 300px;">
        <div class="column">
              <p class="groove"> <pre style="background-color:skyblue;"> Form Order Paket</pre></p>
                  <br>
                  <br>
                 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="margin-left: 100px;">
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
                                <option id="del-1" value="Sea or Land">Sea or Land</option>
                                <option id="del-2" value="Air">Air</option>
                            </select>
                        </dev>   

                        <br><br>
                        <label class="underlabel" style=" margin-right: 178px;"> Packing:</label>
                        <dev style=" font-size: 14px;">
                            <select required name="Delevery" style="color: lightslategray;width: 60px; height: 35px;">
                                <option id="yes" value="Yes">Yes</option>
                                <option id="no" value="No">No</option>
                            </select>
                        </dev>

                        <br><br>
                        <label class="underlabel" style=" margin-right: 123px;"> Option Shipping:</label>
                        <dev style="font-size: 14px;">
                            <select required name="Delevery" style="color: lightslategray;width: 170px; height: 35px;">
                                <option value="">--Option Shipping--</option>
                                <option id="reg" value="Regular">Regular</option>
                                <option id="exp" value="Express">Express</option>
                            </select>
                        </dev>   

                        <br><br>
                        <label class="underlabel" style="margin-right: 140px;">Distance (km):</label>
                        <input id="dist" name="Distance" class="input" type="text" readonly="true">
                        <br><br><br>
                        <input id="check" value="Check" type="Submit" style="color: lightslategray; margin-left: 150px; width: 60px;height: 40px; font-size: 14px;">
                    </form>
            </div>
      </div>
          <div>
              <footer class="container-fluid text-center">
                <p>Copyright 2017 © Courier Management System</p>
              </footer>
          </div>
		  
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
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($org) && empty($dest) && empty($wei) && empty($lon) && empty($wid) && empty($hei) && empty($Dist)) {
                echo "<script>alert('Every input field must not be empty');</script>";
            }
        }
        ?>
   </body>
</html>




