
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

    if (count($_POST["selected_id"]) > 0 ) {
      $all = implode(",", $_POST["selected_id"]);
      $query="DELETE FROM courier_detail WHERE 1 AND TrakId IN($all)";
      $query1="DELETE FROM courier_status WHERE 1 AND TrackID IN($all)";
      $query2="DELETE FROM  totalcost WHERE 1 AND TrackId IN($all)";
      $query3="DELETE FROM  user_detail WHERE 1 AND TrakId IN($all)";
      
      if((mysqli_query($conn,$query))&&(mysqli_query($conn,$query1))&&(mysqli_query($conn,$query2))&&(mysqli_query($conn,$query3)) ){
          $_SESSION['success'] = 'Products have been deleted successfully.';
      }
    }else{
        $_SESSION['error'] = 'Select checkbox to delete product.';
    }
    header("Location: UpdateInvoice.php");
    mysqli_close($conn);
?>
