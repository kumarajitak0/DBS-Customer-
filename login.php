<?php
$host="localhost";
$user="root";
$password="";
$db="dbsuser";
session_start();
$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
	die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	$sql="select * from login where username='".$username."' AND password='".$password."'";
	$result=mysqli_query($data,$sql);
	$row=mysqli_fetch_array($result);
	if($row["usertype"]=="user")
	{
		$_SESSION["username"]=$username;
		header("location:userscreen.php");
	}
	elseif($row["usertype"]=="admin")
	{
		$_SESSION["username"]=$username;
		header("location:adminscreen.php");
	}
	else
	{
		echo "username or password incorrect";
	}
}
?>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<style>
body {
  background-image: url('dbsimage.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<h1>Login page</h1>
<br><br><br><br>
	<form action="#" method="POST">
	<div>
		<label>username</label>
		<input type="text" name="username" required>
	</div>
	<div>
		<label>password</label>
		<input type="password" name="password" required>
	</div>
	<div>
		<input type="submit" value="Login">
	</div>
</center>
</body>
</html>