<?php
session_start();
if(isset($_SESSION["logged_in"]))
{
 $_SESSION = array();
 session_unset();
 session_destroy();
 session_write_close();
 setcookie(session_name(),'',0,'/');
 session_regenerate_id(true);
 header("Location:donorlogin.html");
    exit();
}
?>