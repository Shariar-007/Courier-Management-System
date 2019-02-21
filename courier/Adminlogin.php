
<?php 
     include '../library/Session.php';
	 Session::checkLogin();
	 include_once '../library/database.php';
	 include_once '../helpers/Format.php';
?>

<?php

Class Adminlogin
{
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function adminLogin($adminUser,$adminPass)
	{
		$adminUser=$this->fm->validation($adminUser);
		$adminPass=$this->fm->validation($adminPass);
		
		$adminUser = mysqli_real_escape_string($this->db->link,$adminUser);
		$adminPass = mysqli_real_escape_string($this->db->link,$adminPass);
		
		if(empty($adminUser) || empty($adminPass))
		{
			$loginmsg="UserName or Password must not be empty";
			return $loginmsg;
			
		}else
		{
			$query= "SELECT * FROM  users WHERE UserName= '$adminUser' AND UserPassword= '$adminPass'";
			$result= $this->db->select($query);
			if($result != false )
			{
				$value= $result->fetch_assoc();
				Session::set("adminlogin",true);
				Session::set("AId",$value['AId']);
				Session::set("UserName",$value['UserName']);
				Session::set("UserPassword",$value['UserPassword']);
				header("Location: ../Admin/AdminHome.php");
                                
                                //*****************************************************//
                                if($value['role'] == 1){
                                    header("Location: ../Admin/AdminHome.php");
                                } else {
                                    header("Location: ../SubAdmin/SubAdminHome.php");
                                }
                                //*****************************************************//
                                
			}else{
				  $loginmsg="UserName or Password not match";
			      return $loginmsg;
			}
		}
	}
}
?>
