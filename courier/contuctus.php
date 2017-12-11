<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contuct us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    .row.content {height: 500px
      border-radius: 0px;
      }
    
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
          width: 2px;
      }
      .row.content {height:auto;} 
    }
      
 /* Create three equal columns that floats next to each other */
div.column{
    float: left;
    padding: 15px;
}
  
      
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width:800px) {
    .column {
        width: 100%;
    }
}
      
    #randomfield { 
                -webkit-touch-callout: none;
                  -webkit-user-select: none;
                  -khtml-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none;
                  user-select: none; 
                  width: 200px;
                  color: black;
                  border-color: black;
                  text-align: center;
                  font-size: 40px;
                  background-image: url('http://4.bp.blogspot.com/-EEMSa_GTgIo/UpAgBQaE6-I/AAAAAAAACUE/jdcxZVXelzA/s1600/ca.png');
                }  
  </style>
</head>
        
<body onLoad="ChangeCaptcha()">
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

     
  
<div class="row">
  <div class="column">
        <div class="border1" style="border-style: groove;  margin-left: 180px;width: 1000px;height: 1000px;">
        <p class="groove" style="background-color: skyblue;width: 998px;">contact us</p>
        <div>
            <label class="underlabel" style="margin-right: 200px;  margin-left: 45px;" > You can contact us through the form provided below. All messages you write here is sent to our email.</label><br>
            <label class="underlabel" style="margin-right: 850px;  margin-left: 45px;" > Thank You.</label>
            <br>
            <br>
            <br>
          <form style="margin-right: 600px; margin-top: 10px;transform-origin: left;">
                 
             <label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Your Name:</label>
             <input class="input" type="text" placeholder="Name">
             <br><br>
             <label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Your Email: </label>
             <input type="email" placeholder="email">
             <br><br>
             
             <label class="underlabel" style="margin-left: 50px;"> Message :</label><br>
             <textarea cols="50" rows="20" style="margin-left: 185px;"> </textarea>
             <br><br>
          </form>
            <label class="underlabel" style="margin-right: 20px;margin-left: 50px;"> Security Code	:</label>
             <input type="text" id="randomfield" disabled>
                <script>
                    // Do not remove this (it's just a comment and won't effect the functions)
                    // SimpleCaptcha v1.0 © Anudeep Tubati
                    function ChangeCaptcha() {
                        var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
                        var string_length = 6;
                        var ChangeCaptcha = '';
                        for (var i=0; i<string_length; i++) {
                            var rnum = Math.floor(Math.random() * chars.length);
                            ChangeCaptcha += chars.substring(rnum,rnum+1);
                        }
                        document.getElementById('randomfield').value = ChangeCaptcha;
                    }
                    function check() {
                    if(document.getElementById('CaptchaEnter').value == document.getElementById('randomfield').value ) {
                    window.open('https://www.google.co.in','_self');
                    }
                    else {
                    alert('Please re-check the captcha');
                    }
                    }
                </script>
                    <br><br>
             
                    <label class="underlabel" style="margin-left:50px;margin-right: 50px;"> Type Code:</label>
                    <input id="CaptchaEnter" size="20" maxlength="6" />
             
                    <br><br>
                    <button onclick="check()" type="submit" class="btn btn-info" style="margin-left: 200px;">Submit</button>    
        </div>
    </div>
   </div>
  </div>
                                
      <div style="background-color: darkslategray;">
        <footer class="container-fluid text-center">
          <p>Copyright 2017 © Courier Management System</p>
        </footer>
      </div>
    </body>
</html>




