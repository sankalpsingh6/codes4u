<?php
session_start();
if(isset($_POST['varname']) and isset($_POST['vardata'])){
	$_SESSION[$_POST['varname']] = $_POST['vardata'];
}
?>