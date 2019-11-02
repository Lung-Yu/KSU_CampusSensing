<?php
$link=mysqli_connect("localhost","ksuie","KSUie","IOT");
if(mysqli_connect_errno()){
	echo mysqli_connect_error();
	exit();
}
mysqli_set_charset($link,"utf8");

?>
