<?php
include("mysql.php");

//$Device=$_POST["Device"];
$PM1=$_POST["PM1"];
$PM25=$_POST["PM25"];
$PM100=$_POST["PM100"];
$UV=$_POST["UV"];

$sql = "update SetValue Set PM1='".$PM1."',PM25='".$PM25."',PM100='".$PM100."',UV='".$UV."' where Device='"."A001"."';";
//$sql = "update SetValue Set PM1='"."2"."' where Device='"."A001"."';";


$result = mysqli_query($link,$sql) ;

if($result!=0){
	echo "ok";	
}
	
mysqli_close($link);

?>