
<?php include '../classes/Adminlogin.php'; ?>
<?php
$a1 = new Adminlogin();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $adminUser = $_POST['adminUser'];
    $adminPass = md5($_POST['adminPass']);

    $loginChk = $a1->adminLogin($adminUser, $adminPass);
}
?>


<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="/css/border.css">-->
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
            .row.content {height: 500px;
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
<body>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" style="margin-left: 60px;">
                <ul class="nav navbar-nav">
                    <li ><a  href="../courier/Logo.php" target="_self">Logo</a></li>
                    <li ><a href="../courier/Home.php"><i class="fa fa-home"> </i>Home</a></li>
                    <li><a href="../courier/contuctus.php">Contact us</a></li>
                    <li>
                        <div class="w3-container" style="margin-top: 7px; content-box:Light Gray;">
                            <div class="w3-dropdown-hover">
                                <button class="w3-button w3-black" id="com">Company Profile</button>
                                <div class="w3-dropdown-content w3-bar-block w3-border">
                                    <a href="../courier/Myprofile.php" class="w3-bar-item w3-button">My Profile</a>
                                    <a href="../courier/Termofservices.php" class="w3-bar-item w3-button">Term of Service</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="../courier/OtherNetwork.php">other Network</a></li>
                    <li><a href="../courier/CheckShipping.php">Check Shipping</a></li>
                    <li><a href="../courier/DeliveryStatus.php">Delivery Status</a></li>
                    <li><a href="../courier/REG.php" target="_self">Register Here</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../courier/login.php"><span class="glyphicon glyphicon-log-in "></span>Member Login</a></li>
                </ul>
            </div>
        </div>
    </nav>    
    <div class="container">
        <section id="content">
            <form action="login.php" method="post">
                <h1>Admin Login</h1>
                <span style="color:red;font-size:18px;">
                    <?php
                    if (isset($loginChk)) {
                        echo "$loginChk";
                    }
                    ?>
                </span>
                <div>
                    <input type="text" placeholder="Username"  name="adminUser"/>
                </div>
                <div>
                    <input type="password" placeholder="Password"  name="adminPass"/>
                </div>
                <div>
                    <input type="submit" value="Log in" />
                </div>
            </form><!-- form -->
            <div class="button">
                <a href="#">Copyright 2017 © Courier Management System</a>
            </div><!-- button -->
        </section><!-- content -->
    </div><!-- container -->
</body>
</html>