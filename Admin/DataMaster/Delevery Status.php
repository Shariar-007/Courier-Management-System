<?php
 session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courier";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Delivery Status</title>
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
                margin-bottom: 10px;
                border-radius: 0;
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
                background-color: white;
                color: black;
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



            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;

            }

        </style>
    </head>


    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="myNavbar" style="margin-left: 70px;">
                    <ul class="nav navbar-nav">
                        <li class="active" style="margin-left:45px;"><a href="../AdminHome.php"><i class="fa fa-home"> </i>Home</a></li>
                        <li class="active" style="margin-left:45px;"><a href="../changePassword.php">Change Password</a></li>

                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover" >
                                    <button class="w3-button w3-black">Data Master</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">
                                        <a href="SetupCost.php" class="w3-bar-item w3-button">Setup Costs</a>
                                        <a href="TAX.php" class="w3-bar-item w3-button">TAX</a>
                                        <a href="Insurance.php" class="w3-bar-item w3-button">Insurance</a>
                                        <a href="Packing.php" class="w3-bar-item w3-button">Packing</a>
                                        <a href="Delevery Status.php" class="w3-bar-item w3-button">Delivery Status</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-black">Data Member</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">                             
                                        <a href="../DataMember/DataBranch.php" class="w3-bar-item w3-button">Data Branch</a>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-black">Data transaction</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">                             
                                        <a href="../Data Transaction/DataTransaction.php" class="w3-bar-item w3-button">Data Transaction</a>
                                        <a href="../Data Transaction/UpdateInvoice.php" class="w3-bar-item w3-button">Update Invoice</a>                  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-black">Data Report</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">

                                        <a href="../Data Report/DataReport.php" class="w3-bar-item w3-button">Report Transaction</a>
                                        <a href="../Data Report/examples/01-overview/TransactionGraph.php" class="w3-bar-item w3-button">Transaction Graph</a>                  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="active"><a href="../../courier/Home.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

            
<div class=" container" style="margin-top: 20px;">
            <div class=" row" >
                <div class="col-md-10 col-md-offset-0" >
                    <div class="col-md-10 col-md-offset-2">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Delivery Status</div>
                            <div style="margin-top:20px;"><p><a href="Delevery Status.php" style="margin-left:20px;margin-top:10px; font-size:14px;">List Data </a> | <a href="addDataToDelevery.php" style="font-size:14px;margin-top:10px;"> Add Data</a></p></div>

                            <?php
                            $sql = "SELECT*FROM courier_status";
                            $result = mysqli_query($conn, $sql);
                            ?>
                            <div id="div2" style="margin-left: 615px; color: #000000; font-family: sans-serif">
                            <input type=checkbox onclick="unchk()" id='unchkbox'>Deselect all
                            </div>			

                            <form name="actionForm" action="DataMasterDatabase/Delete_Delevery_Status.php" method="post" onsubmit="return deleteConfirm();"/> 
                                <div class="container" id="div1">
                                    <table class="table" style="width:65%" >
                                        <thead>
                                            <tr style="size:500px;">
                                                <th>No</th>
                                                <th>Track Number</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th ><input type=checkbox name="check_all"  id="check_all" onclick="chksel()" style="color: buttonface" value="">Select all

                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody >					
                                            <?php
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $id = $row["id"];
                                                    $trackNo = $row["TrackID"];
                                                    $Status = $row["DeliveryStatus"];
                                                    ?>
                                                    <tr>
                                                <form>
                                                    <input hidden="hidden" type="text" name="id" value="<?php echo $id ?>">
                                                    <input hidden="hidden" type="text" name="track" value="<?php echo $trackNo ?>">
                                                    <input hidden="hidden" type="text" name="status" value="<?php echo $Status ?>">
                                                    <td><?php echo $id ?></td>
                                                    <td ><?php echo $trackNo ?></td>
                                                    <td><?php echo $Status ?></td>
                                                    <td><a href="Edit_Delevery_Status.php?id=<?php echo $id ?>&track=<?php echo $trackNo ?>&status=<?php echo $Status ?>">Edit</a></td>                                                  

                                                </form>        
 
                                                    <td><input type="checkbox" name="selected_id[]" id="delete_records" class="checkbox" value=<?php echo $id ?> /></td>
                                    </tr>
  <?php
    }
} else { ?>
    <tr><td colspan="3">No records found.</td></tr> 

  <?php  }
?>

                                        </tbody>
                                    </table>
                                    <input type="submit" name="btn_delete" class="btn btn-primary" value="Delete" style="width:60px;height:40px;margin-left:600px;"/>	
                       
                                 </form>		
                                </div>
                        </div>
                    </div><!-- col-->
                </div><!-- row-->
                <hr>
            </div>      
            <h4 class="text-center" style="color: blue">Copyright 2017 © Courier Management System</h4>
        </div><!-- container-->

<?php
mysqli_close($conn);
?>       
        <script type="text/javascript">
            function chksel()
            {
                var tab = document.getElementById("div1")
                var chk = tab.getElementsByTagName("input");
                var num = chk.length;
                var x = document.getElementById("unchkbox");
                x.checked = false;
                for (var i = 0; i < num; i++)
                {
                    status = chk[i].getAttribute("type");
                    if (status == "checkbox") {
                        chk[i].checked = true;
                    }
                }
            }
            function unchk()
            {
                var tab = document.getElementById("div1")
                var chk = tab.getElementsByTagName("input");
                var num = chk.length;
                for (var i = 0; i < num; i++)
                {
                    status = chk[i].getAttribute("type");
                    if (status == "checkbox") {
                        chk[i].checked = false;
                    }
                }
            }
        </script>  


        <script type="text/javascript">
            function deleteConfirm() {
                var result = confirm("Do you really want to delete records?");
                if (result) {
                    return true;
                } else {
                    return false;
                }
            }
            $(document).ready(function () {
                $('#check_all').on('click', function () {
                    if (this.checked) {
                        $('.checkbox').each(function () {
                            this.checked = true;
                        });
                    } else {
                        $('.checkbox').each(function () {
                            this.checked = false;
                        });
                    }
                });

                $('.checkbox').on('click', function () {
                    if ($('.checkbox:checked').length == $('.checkbox').length) {
                        $('#check_all').prop('checked', true);
                    } else {
                        $('#check_all').prop('checked', false);
                    }
                });
            });
        </script>
        
        

    </body>
</html>




