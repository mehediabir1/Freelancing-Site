<!DOCTYPE html>
<html>
<head>
	<title>
		SignUp
	</title>
		<link rel="stylesheet" type="text/css" href="signup_css.css">
		<script type="text/javascript" src="signup_js.js"></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">

</head>
<body>
	<div class="signup">
		<a class="stext">SignUp Here.</a>
	</div>

	<form method="post" action="signup_php.php">
			
			<div class="box">

				<!-- information start -->
				<div class="informations">
					
					<div class="name">
						<div class="name_tag">
							<span>
								Name
							</span>
						</div>

						<div class="name_box">
							<input type="text" name="name" id="name" placeholder="Your name">						
						</div>
						
					</div>

					<div class="email">
						<div class="email_tag">
							<span>
								Email
							</span>
						</div>

						<div class="email_box">
							<input type="text" name="email" id="email" placeholder="Your email">
						</div>
						
					</div>
					

					<div class="password">
						<div class="pass_tag">
							<span>
								Password
							</span>
						</div>

						<div class="pass_box">
							<input type="password" name="password" id="password" placeholder="8 digit password">
						</div>
						
					</div>

					<input class="signup_button" type="submit" value="SignUp" >

				</div>
				<!-- information end -->

				<div class="informations_2">
					<div class="phone">
						<div class="phone_tag">
							<span>
								Phone
							</span>
						</div>

						<div class="phone_box">
							<input type="text" name="phone" id="phone" placeholder="Your Phone">
						</div>
						
					</div>

					<div class="username">
						<div class="username">
							<span>
								Username
							</span>
						</div>

						<div class="user_name">
							<input type="text" name="username" id="username" placeholder="Username">
						</div>
						
					</div>

					<div class="con_password">
						<div class="con_pass_tag">
							<span>
								Confirm Password
							</span>
						</div>

						<div class="con_pass_box">
							<input type="password" name="con_password" id="con_password" placeholder="confirm password">
						</div>
						
					</div>
						<input class="login_button" type="button" value="Login" onclick="location.href='login_htm.php'">

				</div>
				
			<!-- 	
				<div class="signup">
					
					<input class="signup_button" type="button" value="SignUp" onclick="signup()">
					<input class="login_button" type="button" value="Login" onclick="location.href='html_file.htm'">
				</div>
 -->
				
			</div>

	</form>

</body>
</html>