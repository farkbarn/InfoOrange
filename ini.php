<?php
if(session_status() == PHP_SESSION_NONE){session_start();}
$_SESSION['attwid']=false;}
if(isset($_COOKIE['wscr']))
{}
else
{
    setcookie('wscr',0,time()+365*24*60*60,'/','*');
}
?>
