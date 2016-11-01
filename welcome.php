<?php
/**
 * Created by PhpStorm.
 * User: Samaya
 * Date: 10/31/2016
 * Time: 2:00 PM
 */
session_start();

if(isset($_SESSION["userName"]))
{
//session time out after one minute
    if((time()-$_SESSION['lastTime'])>60)
    {
    header("Location:logout.php");

    }
    else
    {

        $_SESSION['lastTime'] =time();
        echo "Welcome you are successfully logged in ".$_SESSION['userName'];
        echo "<a href='logout.php'>Logout</a>";
    }
}
else
{
    header("Location:login.php");
}
?>