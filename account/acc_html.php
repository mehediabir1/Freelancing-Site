<?php 
	session_start(); 
	error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		my account.
	</title>
	<link rel="stylesheet" type="text/css" href="acc_css.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
</head>
<body>
		<?php require('../header/include_head.php'); ?>
		<div class="main">
			<?php 
			$username=$_SESSION['user'];
			$con=mysqli_connect("localhost","root","","db_connection");
			        
			        if(!$con)
			        {
			            die("Database not connected".mysqli_connect_error()."<br/>");
			        }
			        else
			        {
			            echo "Database Connection Established!...<br/>";
			        }

			 $query= "SELECT login.username, login.email, user_information.name, user_information.phone
						FROM login
						INNER JOIN user_information
						ON login.username = user_information.username
						WHERE login.username = '$username'";

			        // $query= "SELECT * from login";
			?>
			<span>My Account.</span>
			<table>
				
				<tr>
					<th>User Name</th>
					<th>Email</th>
					<th>Name</th>
					<th>Phone</th>
				</tr>


				<?php
					$result=mysqli_query($con,$query);
					if (mysqli_num_rows($result)>0) {
						
						while($row = mysqli_fetch_assoc($result)) 
						{
				?>
							<tr>
								<td><?php echo $row["username"]; ?></td>
								<td><?php echo $row["email"]; ?></td>
								<td><?php echo $row["name"]; ?></td>
								<td><?php echo $row["phone"]; ?></td>
							</tr>
				<?php
						}
					}

				 ?>
			</table>
		</div>


		<div class="setup">
			<label><input type="checkbox">Designer</label><br>
			<label><input type="checkbox">Contest Holder</label><br>
			<input type="button" name="" value="Edit">
			<input type="button" name="" value="Save">
		</div>
</body>
</html>