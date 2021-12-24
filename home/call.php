<?php
	session_start();
	$_SESSION['logged']="false";
	header('Location:home_html.php');
	// echo "logout";
 ?>