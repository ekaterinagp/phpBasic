<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
  <form method="POST">
  <input name="txtEmail" placeholder="email" type="text">
  <button>LOGIN</button>
  </form>
</body>
</html>

<?php
session_start();
//  if($_SESSION){
//   header('location:profile.php');
// }


if($_POST){
  $sjUser='{
    "name":"A",
    "lastName":"B",
    "email":"a@a.com"
  }';
 $jUser=json_decode($sjUser);
 if($_POST['txtEmail']==$jUser->email){
  //  session_start();
  $_SESSION['$jUser']=$jUser;
   header('location:profile.php');
 }



}