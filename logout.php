<?php
session_start();
session_destroy();
echo "You timed out";
header('Location:login.php')
?>