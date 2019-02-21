<html>
<body>
<form id="home_id" method="POST" action="<?php echo $_SERVER[PHP_SELF]?>">
<script>
function submitForm(action)
{
document.getElementById('home_id').action=action;
document.getElementById('home_id').submit();
}
</script>

<p align = left> Username: <input type ="text" name ="user" placeholder="Enter username">
<p align = left> Password: <input type ="password" name ="pass" placeholder="Enter password">
<input type="submit" value="login"  name="submit" >

</body>
</html>

<?php
if (isset($_POST['submit'])){

        mysql_connect( "localhost" , "root" ,"") or die(mysql_error());
        mysql_select_db("courier") or die(mysql_error());

        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $user=stripslashes('$user');
        $pass=stripslashes('$pass');
        $user=mysql_real_escape_string('$user');
        $pass=mysql_real_escape_string('$pass');

        $query="SELECT * FROM users WHERE username='$user' AND password='$pass'";
        $result=mysql_query($query) or die ("error: ".mysql_error());

            if (mysql_num_rows($result)==1){

                session_start();
                $_SESSION["user"]=$user;
                $_SESSION["pass"]=$pass ;

                        $row=mysql_fetch_array($result);
                        if ($row['usertype']==0){
                        header("location:admin/AdminHome.php");
                        }
                        elseif ($row['usertype']==1) {
                        header("location:SubAdmin/SubAdminHome.php");
                        }

                       }
                else 
                echo "invalid password and username";

}//from isset(submit)
?>