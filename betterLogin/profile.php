<?php 
session_start();
if($_SESSION){
  echo "Hi {$_SESSION['jUser']->name} {$_SESSION['jUser']->lastName} {$_SESSION['jUser']->email}";
  echo '<a href="logout.php">LOGOUT</a>';
}else{
  header('Location:login.php');
}



