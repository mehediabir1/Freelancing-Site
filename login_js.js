function login()
{
	// alert("Point 1");
	var username= document.getElementById("username").value;
	var password= document.getElementById("password").value;

	
	console.log(username+" "+ password);
	// alert("Point 2");

	if (username=== "" || password=== "") 
	{
		alert("Username or Password cant be blank. ");
	}
	else
	{
	
			var checkCapital = false;
			var checkSmall = false;
			var checkNumb = false;
			for (let i = 0; i < password.length; i++)
			{
				if ((password.charCodeAt(i)>=65) && (password.charCodeAt(i)<=90))
				{
					checkCapital = true;
				}
				else if((password.charCodeAt(i)>=97) && (password.charCodeAt(i)<=122))
				{
					checkSmall = true;
				}

				else if ((password[i]>=0) && (password[i]<=9))
				{
					checkNumb = true;
				}
				else
				{
					//nothing
				}


			}
			
		}

		if((checkCapital == true) && (checkSmall == true) && (checkNumb == true))
		{
			alert("Password is Correct!");
		}
		else
		{
			alert("Password: A-Z, a-z,0-9");
		}
		

		var check = false;
		for (var i = 0; i < username.length; i++) 
		{
			if ((username[i] == '%') || (username[i] == "/") || (username[i] == ",") || (username[i] == "@") || (username[i] == ";") || (username[i] == " ") ) 
			{
				alert("cant use % / ,");
			}
			else
			{
				check = true;
			}
		}
		if(check == true)
		{
			alert("Username Correct"); 
		}
	}
		
	



