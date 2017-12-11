
<!DOCTYPE html>
<html lang="en">
<head>  
<title>Logein page</title>  
    
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


 <div class=" container" style="margin-top: 100px;">
        <div class=" row">
            <div class="col-md-6 col-md-offset-3">
                        <form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" class="form-control" id="username" name="username" placeholder="" class="input-xlarge">
        <p class="help-block">Please enter your Username</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" class="form-control" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" class="form-control" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Please enter your Password</p>
      </div>
    </div>

 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form>
                  
            </div><!-- col-->
        </div><!-- row-->
    <hr>
   </div>      
     <h4 class="text-center" style="color: blue">Copyright 2017 © Courier Management System</h4>
 </div><!-- container-->
</body>
</html>




