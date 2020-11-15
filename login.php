<?php
session_start();
include_once 'connection.php';

if(isset($_POST['EMAIL'])){
	$email = $_POST['EMAIL'];
	$password = md5($_POST['PASSWORD']);
	$query = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
	$result = mysqli_query($cid,$query);
	$n = mysqli_affected_rows($cid);
	if($n == 1){
		$row = mysqli_fetch_array($result);
		if($row['password'] == $password){
			$_SESSION['LOGIN'] = 'TRUE';
			$_SESSION['EMAIL'] = $_POST['EMAIL'];
			$_SESSION['LOGINNAME'] = $row['username'];
			echo "1";
		}else{
			echo "0";
		}
	}else{
		echo "0";
	}
}

?>