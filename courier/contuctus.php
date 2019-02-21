<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact us</title>
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
                        <li><a href="../courier/Available_Vehicle.php">Available Vehicle</a></li>
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
                        <div class="panel-heading">contact us</div>

                        <div class="container">
                            <br>
                            <form action="database/DBcontactWithMail.php" method="post" style="margin-right: 600px; margin-top: 10px;transform-origin: left;">

                                <label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Your Name:</label>
                                <input class="input" type="text" name="name" placeholder="Name" style="width: 200px;">
                                <br><br>
                                <label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Your Email: </label>
                                <input type="email" name="email" placeholder="email" style="width: 200px;">
                                <br><br>

                                <label class="underlabel" style="margin-left: 50px;"> Message :</label><br>
                                <textarea cols="50" rows="20" name="message" style="margin-left: 185px;"> </textarea>
                                <br><br>         
                                <!--  <label class="underlabel" style="margin-right: 20px;margin-left: 50px;"> Security Code	:</label>
                                   <input type="text" id="randomfield" disabled>
                                          <br><br>             
                                          <label class="underlabel" style="margin-left:50px;margin-right: 50px;"> Type Code:</label>
                                          <input id="CaptchaEnter" size="20" maxlength="6" />
                                  <br><br>
                                -->

                                <input name="submit" type="submit" value="Submit" class="btn btn-info" style="margin-left: 200px;">   
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





    <script>
        // Do not remove this (it's just a comment and won't effect the functions)
        // SimpleCaptcha v1.0 © Anudeep Tubati
        function ChangeCaptcha() {
            var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var string_length = 6;
            var ChangeCaptcha = '';
            for (var i = 0; i < string_length; i++) {
                var rnum = Math.floor(Math.random() * chars.length);
                ChangeCaptcha += chars.substring(rnum, rnum + 1);
            }
            document.getElementById('randomfield').value = ChangeCaptcha;
        }
        function check() {
            if (document.getElementById('CaptchaEnter').value == document.getElementById('randomfield').value) {
                window.open('https://www.google.co.', '_self');
            } else {
                alert('Please re-check the captcha');
            }
        }
    </script>                            


</body>
</html>




