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
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="margin-left: 100px;">
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
                                <option id="del-1" value="Sea or Land">Sea or Land</option>
                                <option id="del-2" value="Air">Air</option>
                            </select>
                        </dev>   

                        <br><br>
                        <label class="underlabel" style=" margin-right: 178px;"> Packing:</label>
                        <dev style=" font-size: 14px;">
                            <select required name="Delevery" style="color: lightslategray;width: 60px; height: 35px;">
                                <option id="yes" value="Yes">Yes</option>
                                <option id="no" value="No">No</option>
                            </select>
                        </dev>

                        <br><br>
                        <label class="underlabel" style=" margin-right: 123px;"> Option Shipping:</label>
                        <dev style="font-size: 14px;">
                            <select required name="Delevery" style="color: lightslategray;width: 170px; height: 35px;">
                                <option value="">--Option Shipping--</option>
                                <option id="reg" value="Regular">Regular</option>
                                <option id="exp" value="Express">Express</option>
                            </select>
                        </dev>   

                        <br><br>
                        <label class="underlabel" style="margin-right: 140px;">Distance (km):</label>
                        <input id="dist" name="Distance" class="input" type="text" readonly="true">
                        <br><br><br>
                        <input id="check" value="Check" type="Submit" style="color: lightslategray; margin-left: 150px; width: 60px;height: 40px; font-size: 14px;">
                    </form>
                </div>
            </div>

            <div class="column">
                <div class="border2" style="border-style: groove; float:left; width:480px; max-width: 800px;">
                    <p class="groove" style="background-color: skyblue">Delivery Status</p>
                    <br><br>
                    <label class="underlabel" style="margin-right: 40px; margin-left: 56px;"> <span>No. Invoice:</span> </label>
                    <input class="input" type="text" >
                    <br>
                    <label class="underlabel" style="margin-right: 10px;margin-left: 185px;"> <span>	Ex: 141</span> </label>
                    <br><br>
                    <button type="button" style="color: lightslategray; margin-left: 210px; width: 60px;height: 40px; font-size: 14px;">Check</button>
                </div>
            </div>
        </div>