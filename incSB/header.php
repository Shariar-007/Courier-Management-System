<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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