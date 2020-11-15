<?php
session_start();
$file = ("Programs/".$_SESSION['FILENAME'].$_SESSION['EXTENSION']);
$filetype = filetype($file);
$filename = basename($file);
header("Content-Type:$filetype");
header("Content-Lenght:".filesize($file));
header("Content-Disposition:attachment;filename=".$filename);
readfile($file);

?>