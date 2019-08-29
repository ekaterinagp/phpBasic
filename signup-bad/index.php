<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
  SignUp</title>
</head>
<body>

<div>
  <?php
 
  // $strEmail=$_POST['txtEmail'] ?? '';
  // $strName=$_POST['txtName'] ?? '';
  // $strPass=$_POST['txtPassword'] ?? '';
  //     if( $strEmail&&$strName&&$strPass){
  //     echo " Hi $strName. Your Email is: $strEmail. Your password is $strPass" ;
  //     }

  //ADD name, lastname and password, should be saved on signup at users.txt
  
  if($_POST){
    if( empty($_POST['txtEmail'])){
      echo 'Email must be entered';
     
    }
     
    else{
      $strEmail=$_POST['txtEmail'];
      $strName=$_POST['txtName'];
      $strLastName=$_POST['txtLastName'];
      $strPass=$_POST['txtPass'];

     //save the user to "database"
      $jUser= new stdClass();
      $jUser->email= $strEmail;
      $jUser->name= $strName;
      $jUser->lastName= $strLastName;
      $jUser->password= $strPass;

      $sUser=json_encode($jUser);
// to keep the file with the old data 
//you need to open the file, get the data inside (string) and convert it into json object
      $strUsers=file_get_contents('users.txt');
      $jUsers=json_decode($strUsers); //text to json
      $sUniqueID=uniqid();
      $jUsers->$sUniqueID=$jUser; //add user to users 
      $strUsers=json_encode($jUsers);
      file_put_contents('users.txt', $strUsers);

     header("Location:ok.php?email=$strEmail");
    }
  }

  ?>
</div>
 <div class="container">
   <form action="" method="POST">
     <input type="text" name="txtEmail" placeholder="email">
 <input type="text" name="txtName" placeholder="name">
 <input type="text" name="txtLastName" placeholder="last name">
 <input type="text" name="txtPass" placeholder="password">

     
     <button>SignUp</button>
   </form>
 </div>
</body>
</html>

