<?php

if(isset($_POST['data'])){
	echo file_get_contents('Programs/'.$_POST['data']);
}

 ?>