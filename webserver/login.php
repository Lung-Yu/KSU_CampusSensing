<?php
	$lifeTime = 3600 * 24 * 30;    ////// 30天
	session_set_cookie_params($lifeTime);
	session_start();
	include("mysql.php");
	if(isset($_POST['account'])&&isset($_POST['password']) ){
		
		$IsLogin = False;
        $account=$_POST['account'];
        $password=$_POST['password'];
		if( !strpos($account,'=') && !strpos($account,'&') && !strpos($account,'|') && !strpos($password,'=') && !strpos($password,'&') && !strpos($password,'|')){
			$sql="select level from User where account='".$account."' and password='".$password."';";
			
			$result=mysqli_query($link,$sql);
			while ($row = $result->fetch_array(MYSQLI_ASSOC)){
				$_SESSION['level']=$row['level'];;
				$IsLogin = True;
				break;
				header('Location: dataInquiry.html');
			}
		}

		if($IsLogin)
			echo "True";
		else
			echo "False";
	}
	
?>