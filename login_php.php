<?php 
	session_start();
	// $_SESSION['logged']="false";
	$username= trim($_POST['username']);
	$password = trim($_POST['password']);

	// $checker=0;


	$con=mysqli_connect("localhost","root","","db_connection");
        
        if(!$con)
        {
            die("Database not connected".mysqli_connect_error()."<br/>");
        }
        else
        {
            echo "Database Connection Established!...<br/>";
        }


	$sql = "SELECT * FROM login WHERE username = '".$username."' and password = '".$password."'";

	$result=mysqli_query($con,$sql);
	if (mysqli_num_rows($result)>0)
	{
		// echo "found";
		// $checker=1;
		$_SESSION['logged']="true";
		header('Location: home/home_html.php');
		$_SESSION['user']=$username;

	}
	else
	{	
		echo "user not found";
	}

	// if ($checker==1) 
	// {	
		
	// }

 ?>