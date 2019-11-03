<?php
    include("mysql.php");

    //$Device=$_POST["Device"];
    $PM1=$_POST["PM1"];
    $PM25=$_POST["PM25"];
    $PM100=$_POST["PM100"];
    $UV=$_POST["UV"];

    $Device = $_GET["Device"];
    $sql = "SELECT PM1,PM25,PM100,UV FROM SetValue WHERE Device='"."A001"."';";
    //$sql = "update SetValue Set PM1='"."2"."' where Device='"."A001"."';";


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
