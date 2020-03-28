<?php 
session_start();
$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}
else{
	echo "No Connection";
}
if(isset($_POST['submit']))
{
mysqli_select_db($con,'janm');

$email= $_POST['email'];
$password= $_POST['password'];

$q= "select * from doctor where demail='$email' && dpassword='$password' ";

$result = mysqli_query($con, $q);
$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['user_name'] =$email;
	header('location:index.php');
}
else
	header('location:login1.php');
}
?>