<?php
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
$sql = "SELECT ItemOfShipping FROM  shippingiteam";
$result = mysqli_query($conn, $sql);

?>
<div class="container"> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="border-style: groove; width: 93%; height: 100%;margin-left: 55px;">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" style=" height: 100%;">
                    <div class="item active">
                        <img src="./../images/running.....jpg" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="./../images/startrack.......jpg" alt="Chicago" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="./../images/gift.........jpg" alt="New york" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="./../images/curier..............jpg" alt="New york" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>    

        <div class="row">
            <div class="column">
                <div class="border1" style="border-style: groove; margin-left: 160px; width:550px;max-width:800px;">
                    <p class="groove" style="background-color:skyblue;">Check The Shipping Cost</p>
                    <br>
                    <br>
                    <form action="./../courier/CheckPost.php" method="post" style="margin-left: 50px;">
                        <label class="underlabel" style="margin-right: 182px; "> Sender:</label>
                        <input type="text" id="Sender" name="Sender" placeholder="Name" >
                        <br><br>
                        <label class="underlabel" style="margin-right: 170px; ">Phone(S):</label>
                        <input type="text" id="Sender" name="SPhone" placeholder="number of sender" >
                        <br><br>
                        <label class="underlabel" style="margin-right: 175px; ">Email(S):</label>
                        <input type="text" id="Sender" name="SEmail" placeholder="email of sender" >
                        <br><br>
                        <label class="underlabel" style="margin-right: 172px; "> Receiver:</label>
                        <input type="text" id="Receiver" name="Receiver" placeholder="Name" >
                        <br><br>
                        <label class="underlabel" style="margin-right: 168px; ">Phone(R):</label>
                        <input type="text" id="Sender" name="RPhone" placeholder="number of Receiver" >
                        <br><br>
                        <label class="underlabel" style="margin-right: 174px; ">Email(R):</label>
                        <input type="text" id="Sender" name="REmail" placeholder="email of Receiver" >
                        <br><br>
                        <label class="underlabel" style="margin-right: 200px; "> Date:</label>                    
                        <input type="date" id="Date" name="Date" style="width:175px;height:25px;">
                        <br><br>
                        <label class="underlabel" style="margin-right: 180px;" > Origins:</label>
                        <input type="text" id="org" name="Origins" placeholder="Enter Origin" >
                        <br>
                        <br>
                        <label class="underlabel" style="margin-right: 145px; "> Destinations:</label>
                        <input type="text" id="dest" name="Destinations" placeholder="Enter a Destination" >
                        <br><br>
                        <label class="underlabel" style="margin-right: 68px;"> Weight (Kg) Ex: 0.2, 2, 20</label>
                        <input id="wei" type="text" name="Weight">
                        <br><br>
                        <label class="underlabel" style="margin-right: 160px;"> Long (Cm):</label>
                        <input id="lon" class="input" type="text" name="Long">
                        <br><br>
                        <label class="underlabel" style="margin-right: 162px;"> Wide (Cm):</label>
                        <input id="wid" class="input" type="text" name="Wide">
                        <br><br>
                        <label class="underlabel" style="margin-right: 156px;"> Height(Cm):</label>
                        <input id="hei" class="input" type="text" name="Height">
                        <br><br>

                        <label class="underlabel" style=" margin-right: 123px;"> Delivery options:</label>
                        <dev style="font-size: 14px;">
                            <select required name="Delevery" style="color: lightslategray;width: 120px; height: 35px;">
                                <option id="del-1" value="Sea">Sea</option>
                                <option id="del-3" value="Land">Land</option>
                                <option id="del-2" value="Air">Air</option>
                            </select>
                        </dev>   

                        <br><br>
                        <label class="underlabel" style=" margin-right: 178px;"> Packing:</label>
                        <dev style=" font-size: 14px;">
                            <select required name="packing" style="color: lightslategray;width: 60px; height: 35px;">
                                <option id="yes" value="Yes">Yes</option>
                                <option id="no" value="No">No</option>
                            </select>
                        </dev>

                        <br><br>
                        <label class="underlabel" style=" margin-right: 123px;"> Option Shipping:</label>
                        <dev style="font-size: 14px;">
                            <select name="shipping" style="color: lightslategray;width: 170px; height: 35px;">
                                <option value="">--Option Shipping--</option>
                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    $value=$row["ItemOfShipping"];
                                
                                ?>
                                <option id="reg" value="<?php echo $value ?>"><?php echo $value ?></option>
                                <!--<option id="exp" value="Express">Express</option> -->
                           
 <?php  }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
                                
                            </select>
                        </dev>   

                        <br><br>
                        <label class="underlabel" style="margin-right: 140px;">Distance (km):</label>
                        <input id="dist" name="Distance" class="input" type="text">
                        <br><br><br>
                        <input id="check" value="Check" type="Submit" style="color: lightslategray; margin-left: 150px; width: 60px;height: 40px; font-size: 14px;">
                    </form>
                </div>
            </div>

            <div class="column" style="margin-left: 128px;">
                <div class="border2" style="border-style: groove; float:left; width:480px; max-width: 800px;">
                    <p class="groove" style="background-color: skyblue">Delivery Status</p>
                    <br><br>
                    <form action="../Admin/SearchByInvoice.php" method="post">
                    <label class="underlabel" style="margin-right: 40px; margin-left: 56px;"> <span>No. Invoice:</span> </label>
                    <input class="input" name="invoice" id="invoice" type="text" >
                    <br>
                    <label class="underlabel" style="margin-right: 10px;margin-left: 185px;"> <span>	Ex: 141</span> </label>
                    <br><br>
                    <button type="Submit" name="check" style="color: lightslategray; margin-left: 210px; width: 60px;height: 40px; font-size: 14px;">Check</button>
                    </form>
                </div>
            </div>
        </div>