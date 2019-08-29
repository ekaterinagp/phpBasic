<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<?php 
if($_POST){
  if(!$_POST['email']){
    echo 'Please enter email';
  }
  else{
    $strName=$_POST['name'];
    $strEmail=$_POST['email'];
    $strLastName=$_POST['lastName'];
    $strPassword=$_POST['pass'];

  

    $jsonUser= new stdClass();
    
    $jsonUser->email=$strEmail;
    $jsonUser->name=$strName;
  

    $sData=file_get_contents('users.txt');
    $jUsers=json_decode($sData);
    $uniqID=uniqid();
    $jUsers->$uniqID=$jsonUser;

    $sUsers=json_encode($jUsers);
    file_put_contents("users.txt", $sUsers);
   header("location:ok.php?name=$strName"); 
  }
}
?>
  <div class="container">
    <form action="" method="POST">
      <input type="text" name="email" placeholder="email">
      <input type="text" name="name" placeholder="name">
      <input type="text" name="lastName" placeholder="lastName">
      <input type="text" name="pass" placeholder="password">
      <button>Sign Up</button>
    </form>
  </div>
</body>
</html>