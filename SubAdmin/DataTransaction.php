<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Transaction</title>
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
                background-color: black;
            }

            /* Set black background color, white text and some padding */
            footer {

                color: white;
                padding: 15px;
            }

            .checkid{
                padding-top:40px;
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

        <div class=" container" style="margin-top: 40px;">
            <div class=" row">
                <div class="col-md-20 col-md-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">List Data Transaction</div>
                        <br>
                        <p style="margin-left:10px;"> <a href="http://localhost:1234/Courier/SubAdmin/DataTransaction.php">List Data</a> | <a href="http://localhost:1234/Courier/SubAdmin/addData.php">Add Data</a> | <a href="http://localhost:1234/Courier/SubAdmin/searchData.php">Search Data</a></p>
                        <div class="table-responsive">          
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.<br>Inv.</th>
                                        <th>Date</th>
                                        <th>Sender</th>
                                        <th>Shipping Destination</th>
                                        <th>Weight</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th><a href="#">Delete</a> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td><a href="#" >#144</a></td>
                                        <td>21 November<br>2017</td>
                                        <td>yyy</td>
                                        <td>Semarang, Semarang City,<br>Central Java, Indonesia</td>
                                        <td>87 kg</td>
                                        <td>$ 382.16</td>
                                        <td>Pick Up</td>
                                        <td><a href="#" >Edit</a></td>
                                        <td><input type="checkbox" name="select" value="select"></td>
                                    </tr>  
                                    <tr>

                                        <td><a href="#" >#143</a></td>
                                        <td>21 November<br>2017</td>
                                        <td>yyy</td>
                                        <td>Semarang, Semarang City,<br>Central Java, Indonesia</td>
                                        <td>7 kg</td>
                                        <td>$28018.72</td>
                                        <td>On process</td>
                                        <td><a href="#" >Edit</a></td>
                                        <td><input type="checkbox" name="select" value="select"></td>
                                    </tr> 
                                    <tr>

                                        <td><a href="#" >#142</a></td>
                                        <td>21 November<br>2017</td>
                                        <td>yyy</td>
                                        <td>Semarang, Semarang City,<br>Central Java, Indonesia</td>
                                        <td>87kg</td>
                                        <td>$ 382.16</td>
                                        <td>Pick Up</td>
                                        <td><a href="#" >Edit</a></td>
                                        <td><input type="checkbox" name="select" value="select"></td>
                                    </tr> 
                                    <tr>

                                        <td><a href="#" >#141</a></td>
                                        <td>21 November<br>2017</td>
                                        <td>yyy</td>
                                        <td>Semarang, Semarang City,<br>Central Java, Indonesia</td>
                                        <td>87kg</td>
                                        <td>$ 382.16</td>
                                        <td>Pick Up</td>
                                        <td><a href="#" >Edit</a></td>
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




