<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "courier");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM users 
  WHERE name LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM users ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>id</th>
     <th>Name</th>
     <th>Password</th>
     <th>Email</th>
     <th>Address</th>
     <th>Phone</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["Password"].'</td>
    <td>'.$row["mail"].'</td>
    <td>'.$row["Address"].'</td>
    <td>'.$row["Phone"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>