<?php
if(session_status() == PHP_SESSION_NONE){session_start();}
if(isset($_COOKIE['wscr'])){
    if((empty($_SESSION['wid'])) || ($_SESSION['wid']<>$_COOKIE['wscr']) || (isset($_SESSION['wid'])))
    {$_SESSION['wid']=$_COOKIE['wscr'];}
}
else
{
    if(empty($_SESSION['wid'])){$_SESSION['wid']=1400;}
    setcookie('wscr',$_SESSION['wid'],time()+365*24*60*60,'/');//,'*');
}
?>
