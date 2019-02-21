<?php
$org = $_POST['Origins'];
$dest = $_POST['Destinations'];
$wei = $_POST['Weight'];
$lon = $_POST['Long'];
$wid = $_POST['Wide'];
$hei = $_POST['Height'];
$Dist = $_POST['Distance'];
$delevery = $_POST['Delevery'];

if ((empty($org) || empty($dest) || empty($wei) || empty($lon) || empty($wid) || empty($hei) || empty($Dist) || empty($delevery))) {
    header("Location:Home.php?FF=1");
}

$TotalCost = 0;
$shipingCost = 0;
$amount = 0;
$packingCost = 0;

if (($wei * $lon * $wid) < 20) {
    $packingCost = 10;
} else if (($wei * $lon * $wid) < 30) {
    $packingCost = 15;
} else if (($wei * $lon * $wid) < 50) {
    $packingCost = 25;
} else {
    $packingCost = 40;
}

if ($Dist < 50) {
    $amount = 80;
} else if ($Dist > 50 && $Dist < 100) {
    $amount = 100;
} else if ($Dist > 100 && $Dist < 120) {
    $amount = 120;
} else if ($Dist > 120 && $Dist < 150) {
    $amount = 140;
} else if ($Dist > 150 && $Dist < 200) {
    $amount = 160;
} else {
    $amount = 200;
}
$tax = $amount * 15 / 100;
$insurance = $amount * 0.25 / 100;
$TotalCost = $tax + $insurance + $packingCost + $amount;
?>

<?php include '../incA/header.php'; ?>

<div class="row">
    <div class="column">
        <div class="border1" style="border-style: groove;  margin-left: 180px;width: 1000px; height: 700px;">
            <p class="groove" style="background-color: skyblue;width: 998px;">Transaction process</p>
            <div>
                <label class="underlabel" style=" font-size:24px;margin-right: 200px;  margin-left: 45px;" > Shipping Cost Details</label><br>
                <hr>
                <br>
                <form style="margin-right: 600px; margin-top: 10px; transform-origin: left;">

                    <p><label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Origins: <?php echo $org ?></label></p>         
                    <p><label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Destination: <?php echo $dest ?></label></p>
                    <p><label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Transportation: <?php echo $delevery ?></label></p>
                    <p><label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Weight: <?php echo $wei ?></label></p>
                    <p><label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Dimension: <?php echo $lon . "cm ". "X " . $wid . "cm ". "X " . $hei. "cm"?></label></p>
                    <p><label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Total Weight: <?php echo $wei ?></label></p>
                    <p><label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Shipping Cost: <?php echo $shipingCost. "tk" ?></label></p>
                    <p><label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> TAX(15%): <?php echo $tax ?></label><p>
                    <p><label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Insurance(0.25%): <?php echo $insurance ?></label></p>
                    <p><label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Packing Cost: <?php echo $packingCost. "tk" ?></label></p>
                    <p><label class="underlabel" style="margin-right: 50px;margin-left: 50px;"> Total Costs: <?php echo $TotalCost . "tk" ?></label></p>
             </form>
                <div style="margin-top: 30px;">   
                 <p><label><button onclick="window.print();" target="_blank" class="btn btn-info" style="margin-left: 200px;"> print </button></label>  
                    <label><button onclick="location.href = 'AdminHome.php';" type="submit" class="btn btn-info" style="margin-left: 200px;"> back </button> </label>
                    <label><button  type="submit" class="btn btn-info" style="margin-left: 200px;"> Confirm </button></label></p>
                 
             </div>           

            </div>
        </div>
    </div>
</div>

<?php include '../incA/footer.php'; ?>

</body>
</html>




