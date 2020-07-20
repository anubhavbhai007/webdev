<?php
require"common.php";
$email=$_POST['email'];
$regex_email="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/";
if(!preg_match($regex_email,$email))
{
	header('location:signup.php?email_error=enter correct email');
}

$password=$_POST['password'];
if(strlen($password)<6){
	header('location:signup.php?password_error=lenth should be more than 6');
}

$email=isset($_POST['email'])?mysqli_real_escape_string($con,$_POST['email']):'';
$first_name=isset($_POST['first_name'])?mysqli_real_escape_string($con,$_POST['first_name']):'';
$password=isset($_POST['password'])?mysqli_real_escape_string($con,$_POST['password']):'';
$username=isset($_POST['username'])?mysqli_real_escape_string($con,$_POST['username']):'';
$last_name=isset($_POST['last_name'])?mysqli_real_escape_string($con,$_POST['last_name']):'';
$phone=isset($_POST['phone'])?mysqli_real_escape_string($con,$_POST['phone']):'';
$city=isset($_POST['city'])?mysqli_real_escape_string($con,$_POST['city']):'';
$address=isset($_POST['address'])?mysqli_real_escape_string($con,$_POST['address']):'';

$user_registration_query="insert into user  (email,first_name,password,username,last_name,phone,city,address)VALUES ('$email','$first_name','$password','$username','$last_name','$phone','$city','$address')";

if ($user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con))){
echo"user succesfully inserted";}
$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);
header('location:home.php');
exit;
?>