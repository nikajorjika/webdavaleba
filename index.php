<!DOCTYPE HTML>
<html>
<head></head>
<body></body>
</html>
	var c=true;
		var a=getElementById('#login-form');
		var a1=a.username.value.trim();
		var a2=a.password.value.trim();
		if(a1==''){
			alert('username field is required!');

			c=false;
		}
		if(a2==''){
			alert('password field is required!');
			c=false;


		}

		return c;
	}