<?php
	include("mysql.php");

	$Device=$_POST["Device"];
	//$Date=$_POST["Date"];
	$DataTimeStart=$_POST["DateS"];
	$DataTimeEnd=$_POST["DateE"];

	// $Device=$_GET["Device"];
	// //$Date=$_POST["Date"];
	// $DataTimeStart=$_GET["DateS"];
	// $DataTimeEnd=$_GET["DateE"];



	$sql = "select * from RawData where Device='".$Device."' and Time>'".$DataTimeStart."' and Time<='".$DataTimeEnd."' ORDER BY Time DESC; ";
	// echo $sql;

	$myArray = array();
	$result = mysqli_query($link,$sql) ;

	while($row = $result->fetch_array(MYSQLI_ASSOC))
	{
		$a1=array("Device"=>$Device,"PM1"=>$PM1,"PM25"=>$PM25,"PM100"=>$PM100,"UV"=>$UV,"Time"=>$Time);
		$row=array_merge($a1,$row);
		$myArray[] = $row;
		//echo $AppName=$row[1];
	}

	
	echo json_encode($myArray);

	mysqli_close($link);

?>