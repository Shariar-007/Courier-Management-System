<!DOCTYPE html>
<html lang="en">
<head>
  <title>Logo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .container {
    position: relative;
}

.topleft {
    position: absolute;
    top: 8px;
    left: 16px;
    font-size: 50px;
    color: green;
}
.bottomleft {
    position: absolute;
    bottom: 8px;
    left: 20px;
    font-size: 18px;
    color: green;
        }
img { 
    width: 100%;
    height: auto;
    object-fit:cover;
    padding-bottom: 5px;

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



<div class="container">   
    <img src="./../images/logo.png" alt="Chicago" style="width:100%;">
 <div class="topleft">Logo</div>
 <div class="bottomleft">This logo belongs to @eagle.courier services.</div>
</div>   
<footer class="container-fluid text-center">
  <p style=" color:blue ">Copyright 2017 © Courier Management System</p>
</footer>    
</body>
</html>
