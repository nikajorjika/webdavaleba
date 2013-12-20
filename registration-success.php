<?php 
 $connect=mysqli_connect('localhost:3306','root','', 'users'); 

$firstname = mysql_real_escape_string($_POST['firstname']);
$lastname = mysql_real_escape_string($_POST['lastname']);
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$passwordconfirmation = mysql_real_escape_string($_POST['password-confirmation']);
$email = mysql_real_escape_string($_POST['email']);
$gender = mysql_real_escape_string($_POST['gender']);
$year = mysql_real_escape_string($_POST['year']);
$month = mysql_real_escape_string($_POST['month']);
$day = mysql_real_escape_string($_POST['day']);

$dob = $year."/".$month."/".$day;
 $dob = date("Y-m-d",strtotime($dob));



  



         
 
 if(mysqli_connect_errno())
 	{ 
 		echo "failed to connect to mysql database".mysqli_connect_error();
 	}
$result=mysqli_query($connect,"Select * From users Where login='$username' or email='$email'");
$object=mysqli_fetch_array($result);

if(!$result){
	    printf("Error: %s\n", mysqli_error($connect));
	    exit();

}

if($object['login']==$username){
print('username is already taken!');
header('Refresh: 2; url=registration.php');
 

}
elseif ($object['email']==$email) {
	print('Someone already registered with this E-mail!');
	header('Refresh: 3; url=registration.php');
	
}


 $sql = "INSERT INTO `users`( `name`, `lastname`, `login`, `password`, `email`, `date`, `gender`) VALUES ('$firstname','$lastname','$username',
 	'$password','$email','$dob','$gender')";

if(mysqli_query($connect, $sql)){
	
echo 'Registration	Was Successfull';

}

 

 



 	


 



 			









?> 