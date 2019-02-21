
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
      $query="DELETE FROM users WHERE 1 AND id IN($all)";
      if(mysqli_query($conn,$query)){
          $_SESSION['success'] = 'Products have been deleted successfully.';
      }
    }else{
        $_SESSION['error'] = 'Select checkbox to delete product.';
    }
    header("Location: DataBranch.php");
    mysqli_close($conn);
?>
