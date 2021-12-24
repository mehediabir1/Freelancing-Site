<!DOCTYPE html>
<html>
<head>
	<title>
		Browse.
	</title>
	<link rel="stylesheet" type="text/css" href="srch_con_css.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300wght@700&display=swap" rel="stylesheet">


</head>
<body>
	<?php include('../header/include_head.php'); ?>

	
	<div class="main">
	<span class="bigfont">Contests</span>
	
	<table>
	<?php

		$con=mysqli_connect("localhost","root","","contest_info");
			        
	        if(!$con)
	        {
	            die("Database not connected".mysqli_connect_error()."<br/>");
	        }
	        else
	        {
	            // echo "Database Connection Established!...<br/>";
	        }

	    $query= "SELECT * FROM contest_info";

	    $result=mysqli_query($con,$query);
			if (mysqli_num_rows($result)>0) 
			{		
				while($row = mysqli_fetch_assoc($result)) 
				{
					?>

				<tr>
					<td> <?php echo $row["Title"];  ?></td>
					<td> <?php echo $row["Description"]; ?> </td>
					<td> <?php echo $row["Currency"]; ?> </td>
					<td> <?php echo $row["Budget"]; ?> </td>
				</tr>
				<?php
				}
			}
		 ?>
	 </table>

	 </div>



</body>
</html>