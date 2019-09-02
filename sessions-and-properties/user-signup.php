<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agent signup</title>
</head>

<body>
  <form method="POST">


    <!-- <input type="text" name="txtEmail" placeholder="email"> -->
    <input type="text" name="txtName" placeholder="name">
    <!-- <input type="password" name="txtPassword" placeholder="pass">  -->
    <button>SignUp as a user</button>
  </form>

</body>

</html>

<?php
if ($_POST) {
  //To do validate email
  // $sEmail = $_POST['txtEmail'];
  $sName = $_POST['txtName'];
  $jUser = new stdClass;
  $jUser->name = $sName;
  $sUniqueID = uniqid();
  $sjData = file_get_contents('data.json');
  $jData = json_decode($sjData);
  $jData->users->$sUniqueID = $jUser;
  $sjData = json_encode($jData, JSON_PRETTY_PRINT);
  file_put_contents('data.json', $sjData);
}
