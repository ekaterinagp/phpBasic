<?php

if($_POST){
  // echo 'User trying to login';
// TODO: Validate the email and password

$sjUsers=file_get_contents('users.json');
$jUsers=json_decode($sjUsers);

// $sEmail=$_POST['txtEmail'] ?? "";
// $sPassword=$_POST['txtPassword']?? "";
// $sName=$_POST['txtName'];
// echo $sPassword;

foreach($jUsers as $jUser){
 
  if($jUser->email==$_POST['txtEmail']&&$jUser->password==$_POST['txtPassword']){
    // echo "welcome $jUser->name";
    header("Location:ok.php?name=$jUser->name");
  }
}


}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="app.css">
  <title>Login</title>
</head>
<body>
<nav>
<div>CHEAP STATE</div>
<div>Signup</div>
<div>Contact</div>
<div class="active">Login</div>
<div>Menu</div>
</nav>
  <div class="container">
  <form action="" method="POST">
  <input type="text" name="txtEmail" value="a@a.com">
  <input type="password" name="txtPassword" value="a1pass">
  <button>LOGIN</button>

  </form>
  </div>
</body>
</html>