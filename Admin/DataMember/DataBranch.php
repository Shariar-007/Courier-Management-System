



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
            <div class="collapse navbar-collapse" id="myNavbar" style="margin-left: 70px;">
              <ul class="nav navbar-nav">
                <li class="active" style="margin-left:45px;"><a href="http://localhost:1234/Courier/Admin/AdminHome.php"><i class="fa fa-home"> </i>Home</a></li>
                <li class="active" style="margin-left:45px;"><a href="http://localhost:1234/Courier/Admin/changePassword.php">Change Password</a></li>
               
				<li>
                       <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                          <div class="w3-dropdown-hover" >
                            <button class="w3-button w3-black">Data Master</button>
                            <div class="w3-dropdown-content w3-bar-block w3-border">
                              <a href="http://localhost:1234/Courier/Admin/DataMaster/SetupCost.php" class="w3-bar-item w3-button">Setup Costs</a>
                              <a href="http://localhost:1234/Courier/Admin/DataMaster/TAX.php" class="w3-bar-item w3-button">TAX</a>
                              <a href="http://localhost:1234/Courier/Admin/DataMaster/Insurance.php" class="w3-bar-item w3-button">Insurance</a>
                              <a href="http://localhost:1234/Courier/Admin/DataMaster/Packing.php" class="w3-bar-item w3-button">Packing</a>
                              <a href="http://localhost:1234/Courier/Admin/DataMaster/Delevery%20Status.php" class="w3-bar-item w3-button">Delivery Status</a>
                            </div>
                          </div>
                        </div>
                </li>
                <li>
                       <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                          <div class="w3-dropdown-hover">
                            <button class="w3-button w3-black">Data Member</button>
                            <div class="w3-dropdown-content w3-bar-block w3-border">                             
                              <a href="http://localhost:1234/Courier/Admin/DataMember/DataBranch.php" class="w3-bar-item w3-button">Data Branch</a>
                                               
                            </div>
                          </div>
                        </div>
                </li>
                 <li>
                       <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                          <div class="w3-dropdown-hover">
                            <button class="w3-button w3-black">Data transaction</button>
                            <div class="w3-dropdown-content w3-bar-block w3-border">                             
                              <a href="http://localhost:1234/Courier/Admin/Data%20Transaction/DataTransaction.php" class="w3-bar-item w3-button">Data Transaction</a>
                              <a href="http://localhost:1234/Courier/Admin/Data%20Transaction/UpdateInvoice.php" class="w3-bar-item w3-button">Update Invoice</a>                  
                            </div>
                          </div>
                        </div>
                </li>
                 <li>
                       <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                          <div class="w3-dropdown-hover">
                            <button class="w3-button w3-black">Data Report</button>
                            <div class="w3-dropdown-content w3-bar-block w3-border">
                            
                              <a href="http://localhost:1234/Courier/Admin/Data%20Report/DataReport.php" class="w3-bar-item w3-button">Report Transaction</a>
                              <a href="http://localhost:1234/Courier/Admin/Data%20Report/TransactionGraph.php" class="w3-bar-item w3-button">Transaction Graph</a>                  
                            </div>
                          </div>
                        </div>
                </li>
                <li class="active"><a href="http://localhost:1234/Courier/courier/Home.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>  
        <div class=" container" style="margin-top: 40px;">
            <div class=" row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Data Branch</div>
                        <br>
                        <p style="margin-left:10px;"> <a href="http://localhost:1234/Courier/Admin/DataMember/DataBranch.php">List Data</a> | <a href="http://localhost:1234/Courier/Admin/DataMember/AddData.php">Add Data</a> | <a href="http://localhost:1234/Courier/Admin/DataMember/SearchData.php">Search Data</a></p>
                        <div class="table-responsive">          
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>User & Password</th>
                                        <th>Name</th>
                                        <th>Address</th>
										<th>Email</th>
                                        <th>Edit</th>
                                        <th><a href="#">Delete</a> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>M00014</td>
                                        <td>Hari Pratomo</td>
                                        <td><a href="#" >Jl. Pemuda Tengah No. 67 Blok V Klaten081231</a></td><td>M00014</td>
                                        <td>admin@contoh-email.com</td>
										<td><input type="checkbox" name="select" value="select"></td>
                                    </tr>                             
                                </tbody>
                            </table>
							<hr>
							<input type="submit" name="delete" value="delete" style="width:60px;height:40px;margin-left:850px;">
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




