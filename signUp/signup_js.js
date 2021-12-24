function signup()
{
	var name= document.getElementById("name").value;
	var phone = document.getElementById("phone").value;
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var con_password = document.getElementById("con_password").value;
	
	name =name.trim();
	phone=phone.trim();
	email = email.trim();
	password=password.trim();
	con_password = con_password.trim();

	console.log(name);

	if (name=== ""|| phone=== ""|| email=== ""|| password=== "" || con_password=== "")
	{
		alert("Fields cant be empty!");
	}
	else
	{		
		check_name(name);
		check_phone(phone);
		check_email(email);
		check_password(password,con_password);
	}

}

// name checking
function  check_name(name)
{	
	var checker= false;
	for (var i =0; i < name.length; i++) 
	{
		if (name[i]== ' ') 
		{
			checker=true;
			break;
		}
		else
		{
			checker=false;
		}
	}
	
	if (checker==true) 
	{
		alert("name okay");
	}
	else
	{
		alert("needs 2 name");
	}
}

// phone checking...
function check_phone(phone)
{	
	var checker= false;
	for(var i=0; i<=phone.length; i++)
	{
		if ((phone[i]>=0) && (phone[i]<=9)) 
		{
			checker=true;
			break;
		}
		else
		{
			checker=false;
		}
	}
	if (checker==true) 
	{
		alert("phone okay");
	}
	else
	{
		alert("phone has to be only numbers");
	}
}

// email checking...
function check_email(email)
{
	var checker2=false;
	var checker3=false;
	var com_check="";
	
	if (email[0]== '@' || email[0] == '0' ||  email[0] == '1' || email[0]== '2' || email[0]== '3' || email[0]== '4' || email[0]== '5' || email[0]== '6' || email[0]== '7' || email[0]== '8' || email[0]== '9' ||email[0]== '!' || email[0]== '/' || email[0]== ',' ||email[0]== '_' || email[0]== '-' || email[0]== '#') 
		{
			alert("Email can not start with a number or @ or Symbol");

		}

	else
		{	

			for (var i = email.length-4; i < email.length; i++) 
			{
				com_check+=email[i];
			}	
			
		}

	if (com_check== ".com") 
		{
				checker2=true;
		}
	else
		{		
				checker2=false;
		}


	var index= email.indexOf("@");
	if (email.indexOf(".") == index+1) 
		{	
			
			checker3=false;
		}

		else
		{
			checker3=true;
		}

	if (checker3==true && checker2==true) 
	{
		alert("mail id okay");
	}

	else
	{
		alert("mail id error");
	}
}

function check_password(password,con_password)

{	
	var checkCapital = false;
	var checkSmall = false;
	var checkNumb = false;
	// alert(password);
	// alert(con_password);
	if (password===con_password) 
	{	
		for (var i = 0; i < password.length; i++)

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

		if((checkCapital == true) && (checkSmall == true) && (checkNumb == true))
		{
			alert("Password saved!");
		}
		else
		{
			alert("Password: A-Z, a-z, 0-9");
		}

	}

	else
	{
		alert("password and confirm pass doesnt match");
	}

}