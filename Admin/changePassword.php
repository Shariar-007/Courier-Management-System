

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Change Password</title>
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
                background-color: skyblue;
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
                <div class="collapse navbar-collapse" id="myNavbar" style="margin-left: 70px;">
                    <ul class="nav navbar-nav">
                        <li class="active" style="margin-left:45px;"><a href="../Admin/AdminHome.php"><i class="fa fa-home"> </i>Home</a></li>
                        <li class="active" style="margin-left:45px;"><a href="../Admin/changePassword.php">Change Password</a></li>

                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover" >
                                    <button class="w3-button w3-black">Data Master</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">
                                        <a href="../Admin/DataMaster/SetupCost.php" class="w3-bar-item w3-button">Setup Costs</a>
                                        <a href="../Admin/DataMaster/TAX.php" class="w3-bar-item w3-button">TAX</a>
                                        <a href="../Admin/DataMaster/Insurance.php" class="w3-bar-item w3-button">Insurance</a>
                                        <a href="../Admin/DataMaster/Packing.php" class="w3-bar-item w3-button">Packing</a>
                                        <a href="../Admin/DataMaster/Delevery Status.php" class="w3-bar-item w3-button">Delivery Status</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-black">Data Member</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">                             
                                        <a href="../Admin/DataMember/DataBranch.php" class="w3-bar-item w3-button">Data Branch</a>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-black">Data transaction</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">                             
                                        <a href="../Admin/Data Transaction/DataTransaction.php" class="w3-bar-item w3-button">Data Transaction</a>
                                        <a href="../Admin/Data Transaction/UpdateInvoice.php" class="w3-bar-item w3-button">Update Invoice</a>                  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-black">Data Report</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">

                                        <a href="../Admin/Data Report/DataReport.php" class="w3-bar-item w3-button">Report Transaction</a>
                                        <a href="../Admin/Data Report/examples/01-overview/TransactionGraph.php" class="w3-bar-item w3-button">Transaction Graph</a>                  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="active"><a href="../courier/Home.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class=" container" style="margin-top: 40px;">
            <div class=" row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Change Password</div>
                        <br>
                        
                        <hr>
                        <div class="table-responsive">

                          <form action="password_gotoDatabase.php"method="post" target="_blank">
                        <label class="underlabel" style="margin-right:60px; margin-left: 56px;" > Username:</label>
                        <input class="input" type="text" name="Username" placeholder="USER NAME" style="width: 40%;padding: 10px;">
                        <br>
                        <br>
                   <!-- <label class="underlabel" style="margin-right:90px;margin-left:56px;"> Name:</label>
                        <input class="input" type="text" name="Name" placeholder="NAME" style="width: 40%;padding: 10px;">
                        <br>
                        <br>-->
                        <label class="underlabel" style="margin-right:60px;margin-left:56px;"> No. Phone:</label>
                        <input type="text" name="Phone" placeholder="PHONE NUMBER" style="width: 40%;padding: 10px;">
                        <br>
                        <br>
                   <!-- <label class="underlabel" style="margin-right: 74px;margin-left: 56px;"> Address:</label>
                        <input class="input" type="text" name="Address" placeholder="ADDRESS" style="width: 40%;padding: 10px;">
                        <br>
                        <br>  -->
                        <label class="underlabel" style="margin-right: 94px;margin-left: 56px;"> Email:</label>
                        <input class="input" type="email" name="Email" placeholder="EMAIL" style="width: 40%;padding: 10px;">
                        <br>
                        <br>
                        <label class="underlabel" style="margin-right: 39px;margin-left: 56px;"> Old Password:</label>
                        <input class="input" type="password" name="Old" style="width: 20%;padding: 10px;">
                        <br>
                        <br>
                        <label class="underlabel" style="margin-right: 36px;margin-left: 56px;"> New Password:</label>
                        <input class="input" type="password" name="Newpass" style="width: 20%;padding: 10px;">
                        <br>
                        <br>
                        <label class="underlabel" style="margin-right: 18px;margin-left: 56px;"> Retype Password:</label>
                        <input class="input" type="password" name="Retype" style="width: 20%;padding: 10px;">
                        <br>
                        <br>
                        <input type="submit" style=" margin-left: 200px; width: 80px; height: 50px; font-size: 18px;" value="Update">
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

    </body>
</html>




