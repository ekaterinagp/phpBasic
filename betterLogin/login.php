 <?php
// $strName='A';

//start session
session_start();
if($_SESSION){
  header('location:profile.php');
}

//  $_SESSION['name']=$strName;//remember this


//  echo $_SESSION['name']; //show what saved

//pretend that this is the right email to login

$strCorrectEmail="a@a.com";

if($_POST){
if($strCorrectEmail==$_POST['txtEmail']){
// $jUser=json_decode('{"name":"A", "lastName":"B", "birthday":"05-01-1980"}'); //convert text to json object, but better to transfer into json in the next line
$sjUser='{"name":"A", "lastName":"B", "birthday":"05-01-1980", "email":"a@a.com"}';
$jUser=json_decode($sjUser);

$_SESSION['jUser']=$jUser;
header('location:profile.php');

}
}


 ?>

 <form action="login.php" method="POST">
<input placeholder="email" name="txtEmail" type="text">
<button>Login</button>

 </form>


