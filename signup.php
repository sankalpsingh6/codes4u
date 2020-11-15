<?php
session_start();
include_once 'connection.php';

if(isset($_POST['USERNAME']) && isset($_POST['EMAIL']) && isset($_POST['PASSWORD'])){
	$name = $_POST['USERNAME'];
	$email = $_POST['EMAIL'];
	$password = md5($_POST['PASSWORD']);
	$query = "INSERT INTO signup (username,email,password) VALUES ('$name','$email','$password')";
	$result = mysqli_query($cid,$query);
	$n = mysqli_affected_rows($cid);
	if($n == 1){
		$_SESSION['LOGIN'] = 'TRUE';
		$_SESSION['LOGINNAME'] = $_POST['USERNAME'];
		$_SESSION['EMAIL'] = $_POST['EMAIL'];
		echo 1;
	}else{
		echo "0";
	}
}

?>