<!DOCTYPE html>
<html>
<head>
	<title>
		Post a Contest.
	</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="post_css.css">
	<script type="text/javascript" src="post_js.js"></script>
</head>
<body>

	<?php include('../header/include_head.php'); ?>

<form method="post" action="post_php.php">
	
 	<div class="contest_body">
 			<div class="categories">
	 			<label>Choose Category:</label>
	 			<select id="cats" name="cats">
	 				<option value="Logo">Logo</option>
				    <option value="Business Cards">Business Cards</option>
				    <option value="Ui/Ux">Ui/Ux</option>
				    <option value="Brand Guide">Brand Guide</option>
		 			</select>
	 		</div>

	 		<div class="title">
	 			<label>Title</label>
	 			<input type="text" name="title" id="title">
	 		</div>

	 		<div class="description">
	 			<label>Description</label>
	 			<input type="text" name="description" id="description">
	 		</div>

			<div class="price">
	 			<label>Budget</label>
	 			<input type="text" name="price" id="price">
	 			<select id="currency" name="currency">
	 				<option value="DOLLAR">DOLLAR</option>
				    <option value="EURO">EURO</option>
				    <option value="BDT">BDT</option>
		 		</select>
	 		</div>

	 		<div class="fav_des">
	 			<label>Favourite Designs:</label>
	 			<input type="file" id="myFile" name="filename">
	 		</div>

	 		<div class="post">
	 			<input type="submit" name="post" value="Proceed" class="button">
	 		</div>
	 		
 		</div>



 </form>

 		
 			
</body>
</html>