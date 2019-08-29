<?php

session_start();
if($_SESSION){
    echo "Hi {$_SESSION['jUser']->name}";
  
}
?>
<a href="logout.php">LOGOUT</a>