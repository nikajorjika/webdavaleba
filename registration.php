<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="reg-style.css">

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>

</head>
<body>
<?php 
/*	
$firstname = mysql_real_escape_string($_POST['firstname']);
$lastname = mysql_real_escape_string($_POST['lastname']);
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$passwordconfirmation = mysql_real_escape_string($_POST['password-confirmation']);
$email = mysql_real_escape_string($_POST['email']);
$dateofbirth = mysql_real_escape_string($_POST['date-of-birth']);
$gender = mysql_real_escape_string($_POST['gender']);

 $connect=mysqli_connect('localhost:3306','root','', 'users'); 
 if(mysqli_connect_errno())
 	{ 
 		echo "failed to connect to mysql database".mysqli_connect_error();
 	}
 //check username
 	$query='Select * from users where username='.$username ;
 	$result = mysqli_query($connect, $query);
 	if(mysqli_num_rows($result)>=1){
 		echo 
 		'<p> Username Is Already Taken</p>';
 	}
 	else
 	{	
 		if (isset($_POST['submit']))
{
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
if ($year != '' && $month != '' && $day != '') {
$birthDate = $year.'-'.$month.'-'.$day;

$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1],  $birthDate[0]))) > date("md") ? ((date("Y")-$birthDate[0])-1):(date("Y")-$birthDate[0]));

}}
 		$query= " ISERT INTO users set(name, lastname, login, password, e-mail, age,  ";




 	}


 	








*/

?> 
<div id='form'>
	<div><h2 id='registration-h'> REGISTRATION</h2></div> 
	<form id='registration-form' method="post" action='registration.php'>
		
		<div class='input-label'><div><label >Firstname:</label></div>
		<div><input class='inputtext' type='text' name='firstname' placeholder='Firstname' /></div></div>
		<div class='input-label'><div><label>Lastname:</label></div>
		<div><input  class='inputtext' type='text' name='lastname' placeholder='Lastname'/></div></div>
		<div class='input-label'><div><label>Username:</label></div>
		<div><input  class='inputtext' type='text' name='username' placeholder='Username' /></div></div>
	    <div class='input-label'><div><label>Password:</label></div>
		<div><input class='inputtext'  type='password' name='password' placeholder='Password' /></div></div>
		<div class='input-label'> <div><label>Confirm Password:</label></div>
		<div><input class='inputtext'  type='password' name='password-confirmation' placeholder='Confirm Password' /></div></div>
		<div class='input-label'><div><label>E-mail:</label></div>
		<div><input class='inputtext'  type='text' name='email' placeholder='E-mail' /></div></div>
		<div class='input-label'><div><label>Date Of Birth:</label></div>
		<div id='dateofbirth'><div>		<select class='birth-date' name="month" >
								<option value="1">January</option>
								<option value="2">February</option>
								<option value="3">March</option>

			</select >
	  	<select name="day" class='birth-date' id="day">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
			</select >
			<select name="year" class='birth-date' id="year">
								<option value="1">2013</option>
								<option value="2">2012</option>
								<option value="3">2011</option>
								</select></div></div></div>
		<div><div><label>Gender:</label></div>
		<div><select name='gender' id='gender-field' class='inputtext'>
			<option  value='none' slected='1' >None</option>
			<option  value='M'  >Male</option>
			<option  value='F'  >Female</option>
		</select></div></div>
			
		<div class='submit'><input type='submit'  name='submit' id='registration-button' value='Register' /></div>




	</form>
</div>



</body>
</html>
