<?php

if(isset($_POST['Search']) && !empty($_POST['name'])) {
  $name=$_POST['name'];
  
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
}

    

?>

<!DOCTYPE html>
<html lang="en">
    <head>  
          <title>Search Data</title>  

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
        
        <div class=" container" style="margin-top: 40px;">
            <div class=" row">
                <div class="col-md-20 col-md-offset-0">
                    <div class="panel panel-primary">
                        <div class="panel-heading">List Data Transaction</div>
                        <br>
                        <p style="margin-left:10px;"> <a href="DataTransaction.php">List Data</a> | <a href="AddData.php">Add Data</a> | <a href="SearchData.php">Search Data</a></p>
                        <br>                       
                        <div class="table-responsive">

                            <form action="" method="post" style="margin-left: 20px;">						                       
                                <label style="margin-right: 94px;">Sender:</label><input type="text" name="name" placeholder="search by name" style="margin-left:100px; width:300px; height:40px;">
                                <br><br>
                                <input type="submit" name="Search" value="Search" style="width:60px;height:40px;margin-left:267px;">
                            </form>
                            
                            <br><br>							                                                    							
                            
                        </div>
                       
                      
                      <div id="div2" style="margin-left: 1065px; color: #000000; font-family: sans-serif">
                     <?php if(isset($_POST['Search'])&& !empty($_POST['name'])) {?>     <input type=checkbox onclick="unchk()" id='unchkbox' style="align-items: flex-end">Deselect all <?php }?>
                            </div>
                    
                     <form name="actionForm" action="Delete_UserInfo.php" method="post" onsubmit="return deleteConfirm();"/>                                   
                        <div id="div1" class="table-responsive">
                             <?php if(isset($_POST['Search'])&& !empty($_POST['name'])) {?> 
                            <table class="table" style="width:100%" >
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
                                        <th><input type=checkbox name="check_all"  id="check_all" onclick="chksel()" style="color: buttonface" value="">Select all </th>
                                
                                    </tr>
                                </thead>
                                     <?php }?> 
                                <tbody >					
                                            <?php
                                             if(isset($_POST['Search'])&& !empty($_POST['name'])) {
                                             $sql="SELECT user_detail.TrakId, user_detail.SenderName,courier_detail.Date ,courier_detail.SourceDestination,courier_detail.Weight,totalcost.TotalCost,courier_status.DeliveryStatus FROM (((user_detail INNER JOIN courier_detail ON user_detail.TrakId=courier_detail.TrakId)INNER JOIN  totalcost ON user_detail.TrakId= totalcost.TrackId) INNER JOIN  courier_status ON user_detail.TrakId=courier_status.TrackID)WHERE user_detail.SenderName like '%$name%'";
                                             $result = mysqli_query($conn, $sql);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    
                                                    $id = $row["TrakId"];
                                                    $date = $row["Date"];
                                                    $name = $row["SenderName"];
                                                    $destination = $row["SourceDestination"];
                                                    $weight = $row["Weight"];
                                                    $totalcost = $row["TotalCost"];
                                                    $status = $row["DeliveryStatus"];
                                                    
                                                    ?>
                                            <tr>
                                                <form>
                                                    <input hidden="hidden" type="text" name="id" value="<?php echo $id ?>">
                                                    <input hidden="hidden" type="date" name="date" value="<?php echo $date ?>">
                                                    <input hidden="hidden" type="text" name="name" value="<?php echo $name ?>">
                                                    <input hidden="hidden" type="text" name="destination" value="<?php echo $destination ?>">
                                                    <input hidden="hidden" type="text" name="weight" value="<?php echo $weight ?>">
                                                    <input hidden="hidden" type="text" name="totalcost" value="<?php echo $totalcost ?>" >
                                                    <input hidden="hidden" type="text" name="status" value="<?php echo $status ?>" >
                                                    <td><a href="Print_Data_Transaction.php?id=<?php echo $id ?>"><?php echo "#".$id ?></a></td>
                                                    
                                                    <td><?php if(isset($_POST['Search'])&& !empty($_POST['name'])) { echo $date ;}?></td>
                                                    <td><?php if(isset($_POST['Search'])&& !empty($_POST['name'])) { echo $name ;}?></td>
                                                    <td><?php if(isset($_POST['Search'])&& !empty($_POST['name'])) { echo $destination ;}?></td>
                                                    <td><?php if(isset($_POST['Search'])&& !empty($_POST['name'])) { echo $weight ;} ?></td>
                                                    <td><?php if(isset($_POST['Search'])&& !empty($_POST['name'])) { echo $totalcost."tk" ;}?></td>
                                                    <td><?php if(isset($_POST['Search'])&& !empty($_POST['name'])) { echo $status ;} ?></td>
                                                    <td><?php if(isset($_POST['Search'])&& !empty($_POST['name'])) { ?><a href="EditData_Transaction.php?id=<?php echo $id ?>&date=<?php echo $date ?>&name=<?php echo $name ?>&destination=<?php echo $destination ?>&weight=<?php echo $weight ?>&totalcost=<?php echo $totalcost ?>&status=<?php echo $status ?>">Edit</a><?php }?></td>                                                  
                                             
                                                </form>        
                                                    <td><input type="checkbox" name="selected_id[]" id="delete_records" class="checkbox" value=<?php echo $id ?> /></td>
                                               </tr>          
  <?php
  
                                                }
                                             }} else { ?>
    <tr><td colspan="3"></td></tr> 

  <?php  }
?>

                                        </tbody>
                                    </table>
                   <?php if(isset($_POST['Search'])&& !empty($_POST['name'])) {?>  <input type="submit" name="btn_delete" class="btn btn-primary" value="Delete" style="width:60px;height:40px;margin-left:1065px;"/>	<?php }?>
                                    <br><br>
                                 </form>		
                                </div>
                        </div>
                    </div><!-- col-->
                </div><!-- row-->
             <?php if(isset($_POST['Search'])&& !empty($_POST['name'])) {?>   <hr> <?php } ?>
            </div>      
            <h4 class="text-center" style="color: blue">Copyright 2017 © Courier Management System</h4>
        </div><!-- container-->

<?php
 if(isset($_POST['Search'])&& !empty($_POST['name'])) {
mysqli_close($conn);
 }
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



