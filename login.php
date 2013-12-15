
<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8"/>
	<title>Login Form</title>

	<link rel="stylesheet" href="login_style.css" type="text/css" media="screen" charset="utf-8" />

	<style>
		/* General Styles */
		
	
		ul#login-widget-freebie { display: table; list-style: none; margin: 0 auto; padding: 0; }
		ul#login-widget-freebie > li { float: left; margin-right: 20px; margin-bottom: 20px; padding: 10px 10px; }
		ul#login-widget-freebie > li:last-child { margin-right: 0; }
		ul#login-widget-freebie > li > span { margin-bottom: 10px; }
	</style>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript">
	
	</script>
	

</head>
<body style="background-image: url(images/63906.jpg);" >
<script type="text/javascript"> 
$(document).ready(function(){
	$('#login').click(function(){
		var a=true;
		var u=$('#username').val();
		var p=$('#password').val();
		u=u.trim();
		p=p.trim();
		if(u==''){
			alert('username field is required!');
			a=false;

		}
		if(p==''){
			alert('password field is required!');
			a=false;

		}
		return a;
		
	}
	);
});
	
</script>


	<ul id="login-widget-freebie">
		<li>
			<div class="login-widget">
				<a href="registration.php" ><button type='button' id="login-widget-switch" class="button green" >Registration</button></a>
				<div id="login-widget-content">
					<form method="post" id='login-form' action="login-success.php">
						<input type="text" class="icon custom-input" name='username' id='username' style="background-image: url(images/username_field.png);" placeholder="Username or E-mail" />
						<input type="password" class="icon custom-input" name='password' id='password' style="background-image: url(images/password_field.png);" placeholder="Password" />
						<input type="submit" id='login' class="full big button pink" value="Login" />
					
					</form>
				</div>
			</div>
		</li>
	</ul>
</body>
</html>