<?php
if(session_status() == PHP_SESSION_NONE){session_start();}
if(isset($_POST['width']) && isset($_POST['height'])) {
    $_SESSION['wid']=$_POST['width'];
    $_SESSION['hei']=$_POST['height'];
    $_SESSION['attwid']=true;

	if(isset($_COOKIE['wscr']))
	{
		if (($_SESSION['attwid']) && ($_SESSION['wid']<>$_COOKIE['wscr']))
		{
			//$_SESSION['attwid']=false;
			unset($_COOKIE['wscr']);
			setcookie('wscr',$_SESSION['wid'],time()+365*24*60*60,'/','*');
		}
	}
	else
	{
		setcookie('wscr',$_SESSION['wid'],time()+365*24*60*60,'/','*');
	}

    echo json_encode(array('val'=>true,'wid'=>$_SESSION['wid'],'hei'=>$_SESSION['hei'],'wscr'=>$_COOKIE['wscr']));
} else {
    echo json_encode(array('val'=>false));
}
?>
