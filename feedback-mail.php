<?php
include_once 'connection.php';

if(isset($_POST['REVIEW'])){
$to = $_POST['EMAIL'];
$review = $_POST['REVIEW'];
$query = "INSERT INTO `feedback`(`feedback_sender`, `feedback_content`, `feedback_date`) VALUES ('$to','$review','".date("Y-m-d")."')";
$result = mysqli_query($cid,$query);
$n=mysqli_affected_rows($cid);
if($n == 1){
$subject = "Here's the reply for your feedback!";	
$body = 'Thank you for yor feedback. We are happy to help you. Stay connected with us.';
$header = 'From: support@codes4u.in';
if(mail($to,$subject,$body,$header)){
	echo "1";
}else{
	echo "0";
}
}else{
echo "0";
}
}
?>