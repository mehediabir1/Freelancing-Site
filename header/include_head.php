<?php 
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="include_head_css.css">
</head>
<body>

 	<div class="nav_bar">
		
 		<div class="buttons">
			<?php if($_SESSION['logged']==="true"){ ?>

				<a href="../srch_contest/srch_con_html.php"> Browse </a>
				<a href="../post_contest/post_html.php"> Post </a>
				<a href="../account/acc_html.php"> Account </a>
				<a href="logout_session.php"> Logout </a>

			<?php }else{ ?>
				<a href="../login_htm.php"> Login </a>
			<?php } ?>

 		</div>
 		<div class="logo">
 			<a href="#"> BdLancers </a>
 		</div>
 	</div>


</body>

</html>