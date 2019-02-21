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
      margin-bottom: 0px;
      border-radius: 0;
      width: 100%;
      height: 100%;
    }
      
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 10px;
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
            <div class="collapse navbar-collapse" id="myNavbar" style="margin-left: 120px;">
              <ul class="nav navbar-nav">
                  <li class="active" style="margin-left:10px;"><a href="../SubAdmin/SubAdminHome.php"><i class="fa fa-home"> </i>Home </a></li>
                  <li class="active" style="margin-left:10px;"><a href="../SubAdmin/changePassword.php">Change Password</a></li>
                <li>
                       <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                            <div class="w3-dropdown-hover">
                            <button class="w3-button w3-black">Data Transaction</button>
                            <div class="w3-dropdown-content w3-bar-block w3-border">
                                <a href="../SubAdmin/ChequeShipping.php" class="w3-bar-item w3-button">Cheque Shipping</a>
                                <a href="../SubAdmin/DataTransaction.php" class="w3-bar-item w3-button">Data Transaction</a>
                                <a href="../SubAdmin/UpdateInvoice.php" class="w3-bar-item w3-button">Update Invoice</a>
                            </div>
                          </div>
                        </div>
                </li>
                <li class="active"><a href="../SubAdmin/DataReport.php">Data Report</a></li>
                <li class="active" style="margin-left:10px;"><a href="../courier/Home.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>

		<div class="row" style="margin-left: 300px;">
		<p class="groove"> <pre style="background-color:skyblue; font-size:24px; width:745px;;">Transaction Process</pre></p>
        <div class="column">
              
                  <br>
                  <br>
                 <form style="margin-left: 100px">
                     <label class="underlabel" style="margin-right: 180px;" > Origins:</label>
                     <input type="text" id="org"  placeholder="Enter Origins" >
                    <br>
                    <br>
                     <label class="underlabel" style="margin-right: 145px; "> Destinations:</label>
                     <input type="text" id="dest" placeholder="Enter a Destination">
                    <br><br>
                     <label class="underlabel" style="margin-right: 68px;"> Weight (Kg) Ex: 0.2, 2, 20</label>
                     <input id="wei" type="text" >
                    <br><br>
                     <label class="underlabel" style="margin-right: 160px;"> Long (Cm):</label>
                     <input id="lon" class="input" type="text" >
                    <br><br>
                     <label class="underlabel" style="margin-right: 162px;"> Wide (Cm):</label>
                     <input id="wid" class="input" type="text" >
                    <br><br>
                     <label class="underlabel" style="margin-right: 156px;"> Height(Cm):</label>
                     <input id="hei" class="input" type="text" >
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
                    <select name="Delevery" style="color: lightslategray;width: 60px; height: 35px;">
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
                     <input id="dist" class="input" type="text" readonly="true">
                     <button id=calculate style="margin-left: 313px; color: lightslategray;">Calculate</button>
                    <br><br><br>
                    <button id="check" type="button" style="color: lightslategray; margin-left: 150px; width: 60px;height: 40px; font-size: 14px;">Check</button>
              </form>
            </div>
      </div>
          <div>
              <footer class="container-fluid text-center">
                <p>Copyright 2017 Â© Courier Management System</p>
              </footer>
          </div>
   </body>
</html>




