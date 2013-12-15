<?php
session_start();
 $connect=mysqli_connect('localhost:3306','root','', 'users'); 
 if(mysqli_connect_errno())
 	{ 
 		echo "failed to connect to mysql database".mysqli_connect_error();
 	}

$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$result=mysqli_query($connect, "select * from users where login='".$username."' and password='".$password."'")or die("Error: ".mysqli_error($connect));;
$count=$result->num_rows;
print($username." ".$password);
if($count==1){
$_session['username']=$username;
print($username);

	header('location:welcome.php');
}
	else {
	die( 'Your username or password is invalid');}

?>