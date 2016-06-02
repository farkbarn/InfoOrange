<?php 
if(session_status() == PHP_SESSION_NONE){session_start();}
if(empty($_SESSION['wid'])){$_SESSION['wid']=900;$_SESSION['attwid']=false;}
if(isset($_COOKIE['wscr']))
{}
else
{
    setcookie('wscr',$_SESSION['wid'],time()+365*24*60*60,'/','*');
}
?>
