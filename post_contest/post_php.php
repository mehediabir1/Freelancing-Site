<?php 
	session_start();
	$catergory= trim($_POST['cats']);
	$title= trim($_POST['title']);
	$description= trim($_POST['description']);
	$price= trim($_POST['price']);
	$currency=trim($_POST['currency']);


	if ($catergory=="" || $title=="" || $description=="" || $price== "" || $currency== "") 
	{
		echo "All Fields are mandatory.";
	}

	else
	{
		$ifOkay1=title($title);
		$ifOkay2=description($description);
		$ifOkay3=price($price,$currency);
	}

	if ($ifOkay1==true && $ifOkay2==true && $ifOkay3==true) 
	{
		database_up($title,$description,$price,$currency);
		header('Location: post2_html.php');
	}


	function title($title)
	{
		if (strlen($title)<10) 
		{
			echo "Title needs to be more than 10 letters.<br>";
			return false;
		}

		else
		{
			echo "title okay<br>";
			return true;
		}
	}

	function description($description)
	{
		if (strlen($description)<2) 
		{
			echo "Minimum 200 letters in description<br>";
			return false;
		}

		else
		{
			echo "description okay<br>";
			return true;
		}
	}

	function price($price,$currency)
	{	
		if ($currency== "DOLLAR") 
		{
		 	if ($price>=60) 
			{
				echo "price okay<br>";
				return true;
			}
			else
			{
				echo "minimum price is 60$<br>";
				return false;
			}
		}

		if ($currency== "EURO") 
		{
		 	if ($price>=50) 
			{
				echo "price okay";
				return true;
			}
			else
			{
				echo "minimum price is 50€";
				return false;
			}
		}
		if ($currency== "BDT") 
		{
		 	if ($price>=5088) 
			{
				echo "price okay";
				return true;
			}
			else
			{
				echo "minimum price is 5088Tk";
				return false;
			}
		}
	}

	function database_up($title,$description,$price,$currency)
	{ 	$username=$_SESSION['user'];

		$con=mysqli_connect("localhost","root","","contest_info");
        
        if(!$con)
        {
            die("Database not connected".mysqli_connect_error()."<br/>");
        }
        else
        {
            echo "Database Connection Established!...<br/>";
        }


        $sql=array("null");


        $sql="INSERT INTO contest_info(Title,Description,Currency,Budget,username) VALUES('".$title."','".$description."','".$currency."','".$price."','".$username."')";


       if(mysqli_query($con,$sql))
            {
                echo "Row added...<br/>";
            }
            else
            {
                echo "Adding failed: ".mysqli_connect_error($con)."<br/>";
            }
        }


 ?>