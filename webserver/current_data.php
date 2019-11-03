<?php
	include("mysql.php");

	// $Device=$_GET["Device"];
	// //$Date=$_POST["Date"];
	// $DataTimeStart=$_GET["DateS"];
	// $DataTimeEnd=$_GET["DateE"];

    $Device = "A001";

	$sql = "select * from RawData where Device='".$Device."' ORDER BY Time DESC; ";
	// echo $sql;

	$myArray = array();
	$result = mysqli_query($link,$sql) ;

	if($row = $result->fetch_array(MYSQLI_ASSOC))
	{
		$a1=array("Device"=>$Device,"PM1"=>$PM1,"PM25"=>$PM25,"PM100"=>$PM100,"UV"=>$UV,"Time"=>$Time);
		$row=array_merge($a1,$row);
		$myArray[] = $row;
		//echo $AppName=$row[1];
	}

	
	echo json_encode($myArray);

	mysqli_close($link);

?>