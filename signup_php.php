<?php

	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
	$username= trim($_POST['username']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	$con_password = trim($_POST['con_password']);
	

	if (empty($name)) 
	{
		echo "Name Empty"."br";
	}
	else if (empty($phone)) 
	{
		echo "Phone Empty"."br";
	}
	else if (empty($username)) 
	{
		echo "username Empty"."br";
	}
	else if (empty($email)) 
	{
		echo "Email Empty"."br";
	}
	else if (empty($password)) 
	{
		echo "Password Empty"."br";
	}
	else if (empty($con_password)) 
	{
		echo "Password Re Entry Empty"."<br>";
	}
	
	else
	{
		echo "Inputs found..Validating..<br> <br>";
		$isOkayNameCheck=check_name($name);
		$isOkayEmailCheck=email_check($email);
		$isOkayPhoneCheck=phone_check($phone);
		$isOkayPassCheck=pass_check($password, $con_password);
		$isOkayUsernameCheck=username_check($username);
	}

	if ($isOkayNameCheck==true && $isOkayEmailCheck==true && $isOkayPhoneCheck==true && $isOkayPassCheck==true && $isOkayUsernameCheck==true) 
	{
		dataUpload($name,$email,$phone,$password,$username);
	}

	function check_name($name)
	{	
		$Checker=false;
		$new=1;
		$new+=strpos($name," ");
		if ($new>1) 
			{	
				$Checker=true;
			}
			else
			{
				$Checker=false;
			}
	
		if ($Checker==true) 
		{
			echo "name OKAY<br>";
			return true;
		}
		else
		{
			// echo "name NOT OKAY<br>";
			echo '<strong style= "color:red;font-family:calibri;">name NOT OKAY<br></strong>';
		}
	}
	
	function email_check($email)

	{	
		$com_check= '';
		$checkmail=0;
	
		if ($email[0]== '@' || $email[0] == '0' ||  $email[0] == '1' || $email[0] == '2' || $email[0]== '3' || $email[0]== '4' || $email[0]== '5' || $email[0]== '6' || $email[0]== '7' || $email[0]== '8' || $email[0]== '9' || $email[0]== '!' || $email[0]== '/' || $email[0]== ',' || $email[0]== '_' || $email[0]== '-' || $email[0]== '#')
		{
				
		}
		else
		{
			$checkmail+=1;
		}

		for ($i= strlen($email)-4; $i < strlen($email); $i++) 

		{ 
			$com_check.=$email[$i];
		}
		
		if ($com_check== ".com") 

		{
			$checkmail+=1;
		}
		else
		{		

		}
		if ($checkmail>1) 

		{
			echo "mail OKAY<br>";
			return true;
		}
		else
			
		{
			// echo "mail NOT OKAY<br>";
			echo '<strong style= "color:red;font-family:calibri;">mail NOT OKAY<br></strong>'; 
		}

	}
	
	function phone_check($phone)
	{	$check_phn=false;
		for ($i=0; $i < strlen($phone) ; $i++) 
		{
			// if (($phone[$i]==0)&&($phone[$i]==1)&&($phone[$i]==2)&&($phone[$i]==3)&&($phone[$i]==4)&&($phone[$i]==5)&&($phone[$i]==6)&&($phone[$i]==7)&&($phone[$i]==8)&&($phone[$i]==9)) 
			if (($phone[$i]>=0) && ($phone[$i]<=9)) 
		
			{
				$check_phn= true;
			}
			else
			{
				$check_phn= false;
			}
		}

		if ($check_phn==true) 
		{
			echo "phone number OKAY<br>";
			return true;
		}
		else
		{
			// echo "phone number NOT OKAY<br>";
			echo '<strong style= "color:red;font-family:calibri;">phone number NOT OKAY<br></strong>'; 
		}
	}



	function pass_check($password, $con_password)
	{
		$checkCapital = false;
		$checkSmall = false;
		$checkNumb = false;
		
		if ($password===$con_password) 
		{
			
			for ($i=0; $i <strlen($password) ; $i++) 
			{ 
				if ((ord($password[$i])>=65) && (ord($password[$i])<=90))
				{	
					$checkCapital = true;
				}
				if((ord($password[$i])>=97) && (ord($password[$i])<=122))
				{
					$checkSmall = true;
				}

				if (($password[$i]>=0) && ($password[$i]<=9)) 
				{
					$checkNumb = true;
				}

			}

			if ($checkCapital && $checkSmall && $checkNumb)
			{
				echo "password OKAY<br>";
				return true;
			}
			else
			{
				// echo "password should be A-Z, a-z, 0-9 only!<br>";
				echo '<strong style= "color:red;font-family:calibri;">password should be A-Z, a-z, 0-9 only!<br></strong>'; 
			}
		}		

				
			
		else
		{
			// echo "password field does not match<br>";
			echo '<strong style= "color:red;font-family:calibri;">password field does not match<br></strong>'; 
		}

		
	}
	
	function username_check($username)
	{
		$check_user = false;
		for ($i = 0; $i < strlen($username); $i++) 
		{
			if (($username[$i] == '%') || ($username[$i] == "/") || ($username[$i] == ",") || ($username[$i] == "@") || ($username[$i] == ";") || ($username[$i] == " ") || ($username[$i] == "$")|| ($username[$i] == "*")) 
			{
				// echo "cant use '%', '/', ',', '@', ';' for password<br>";
				// echo '<i style= "color:red;font-family:calibri;">cant use %, /, ",", @, ; for password<br></i>';
				echo '<strong style= "color:red;font-family:calibri;">cant use %, /, ",", @, ; for password<br></strong>';  
			}
			else
			{
				$check_user = true;
			}
		}

		if($check_user == true)
		{
			echo "username OKAY<br>";
			return true;
		}
	}


	function dataUpload($name,$email,$phone,$password,$username)
	
    {
        $con=mysqli_connect("localhost","root","","db_connection");
        
        if(!$con)
        {
            die("Database not connected".mysqli_connect_error()."<br/>");
        }
        else
        {
            echo "Database Connection Established!...<br/>";
        }


        $sql=array("null","null");


        $sql[0]="INSERT INTO login(email,password,username) VALUES('".$email."','".$password."','".$username."')";


        $sql[1]="INSERT INTO user_information(name,phone,username) VALUES('".$name."','".$phone."','".$username."')";


        for($i=0;$i<count($sql);$i++)
        {
            if(mysqli_query($con,$sql[$i]))
            {
                echo "Row added...<br/>";
            }
            else
            {
                echo "Adding failed: ".mysqli_connect_error($con)."<br/>";
            }
        }
    }



 ?>