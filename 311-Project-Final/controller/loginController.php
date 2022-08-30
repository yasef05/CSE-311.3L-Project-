<?php 
	
	include 'config/db_config.php';

	
	$username="";
	$err_uname="";
	$password="";
	$err_password="";
	$err_db="";
	$err_result="";
	$hasError=false;

	
	if (isset($_POST["login"])) {
		if (empty($_POST["username"])) {
			$hasError=true;
			$err_uname = "Username is required";   }
			
		else
			{
				$username =htmlspecialchars($_POST["username"]);}
		if(empty($_POST["password"]))
        {
			$hasError=true;
			$err_password="Password is Required";
        }
        else if(isset($_POST[""]))
		{
		    echo htmlspecialchars($_POST["password"]);
		}
		else if(strlen($_POST["password"])<4){
    	    $hasError=true;
			$err_password="Password Must Be 4 Characters";
			}
		else{
			 $password=$_POST["password"];
			} 
		if(!$hasError)
		{
			if(authenticateUser($username,$password))
			{
				$_SESSION["loggedUser"]=$username;

				header("Location:index.php");
			}
			$err_db="Username or Password invalid ";
		}
	}

	function authenticateUser($username,$password)
	{
		$query="select * from admin where username='$username' and password='$password'";
		$rs=get($query);
		if(count($rs)>0)
		{return true;}
		return false; 
	}	
	
?>