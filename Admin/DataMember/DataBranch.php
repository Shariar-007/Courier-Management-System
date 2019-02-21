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
        <title>Data Branch</title>  

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
                        <li class="active" style="margin-left:45px;"><a href="../AdminHome.php"><i class="fa fa-home"> </i>Home</a></li>
                        <li class="active" style="margin-left:45px;"><a href="../changePassword.php">Change Password</a></li>

                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover" >
                                    <button class="w3-button w3-black">Data Master</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">
                                        <a href="../DataMaster/SetupCost.php" class="w3-bar-item w3-button">Setup Costs</a>
                                        <a href="../DataMaster/TAX.php" class="w3-bar-item w3-button">TAX</a>
                                        <a href="../DataMaster/Insurance.php" class="w3-bar-item w3-button">Insurance</a>
                                        <a href="../DataMaster/Packing.php" class="w3-bar-item w3-button">Packing</a>
                                        <a href="../DataMaster/Delevery Status.php" class="w3-bar-item w3-button">Delivery Status</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-black">Data Member</button>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">                             
                                        <a href="DataBranch.php" class="w3-bar-item w3-button">Data Branch</a>

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
                <div class="col-md-11 col-md-offset-0" >
                   <div class="col-md-11 col-md-offset-1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Data Branch</div>
                            
                              <br>
                               <p style="margin-left:10px;"> <a href="DataBranch.php">List Data</a> | <a href="AddData.php">Add Data</a> | <a href="SearchData.php">Search Data</a></p>
                            <?php
                            $sql = "SELECT*FROM users";
                            $result = mysqli_query($conn, $sql);
                            ?>
                            <div id="div2" style="margin-left: 835px; color: #000000; font-family: sans-serif">
                            <input type=checkbox onclick="unchk()" id='unchkbox'>Deselect all
                            </div>			

                               <form name="actionForm" action="DeleteDataMember.php" method="post" onsubmit="return deleteConfirm();"/> 
                                <div class="container" id="div1">
                                    <table class="table" style="width:79.5%" >
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Password</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th> Edit</th>
                                                <th><input type=checkbox name="check_all"  id="check_all" onclick="chksel()" style="color: buttonface" value="">Select all

                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody >					
                                            <?php
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    if($row["Type"] == 0){
                                                    $id = $row["id"];
                                                    $name = $row["User_name"];
                                                    $password = $row["Password"];
                                                    $email = $row["mail"];
                                                    $address = $row["Address"];
                                                    $phone = $row["Phone"];
                                                    }
                                                    ?>
                                            <tr>
                                                <form>
                                                    <input hidden="hidden" type="text" name="id" value="<?php echo $id ?>">
                                                    <input hidden="hidden" type="text" name="name" value="<?php echo $name ?>">
                                                    <input hidden="hidden" type="text" name="password" value="<?php echo $password ?>">
                                                    <input hidden="hidden" type="text" name="email" value="<?php echo $email ?>">
                                                    <input hidden="hidden" type="text" name="address" value="<?php echo $address ?>">
                                                    <input hidden="hidden" type="text" name="phone" value="<?php echo $phone ?>">
                                                    
                                                    
                                                    <td><?php echo $id ?></td>
                                                    <td ><?php echo $name ?></td>
                                                    <td><?php echo $password ?></td>
                                                    <td ><?php echo $email ?></td>
                                                    <td><?php echo $address ?></td>
                                                     <td><?php echo $phone ?></td>
                                                    <td><a href="Edit_Data_Branch.php?id=<?php echo $id ?>&name=<?php echo $name ?>&password=<?php echo $password ?>&email=<?php echo $email ?>&address=<?php echo $address ?>&phone=<?php echo $phone ?>">Edit</a></td>                                                  

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
                                    <input type="submit" name="btn_delete" class="btn btn-primary" value="Delete" style="width:60px;height:40px;margin-left:810px;"/>	
                       
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




