<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Signup</title>
</head>

<body>
  <form method="POST">
    <label for="User">I am a user<input type="radio" name="userAgent" value="user"></label>
    <label for="Agent">I am an agent<input type="radio" name="userAgent" value="agent"></label>

    <input type="text" name="txtEmail" placeholder="email">
    <input type="text" name="txtName" placeholder="name">
    <input type="password" name="txtPassword" placeholder="pass">
    <button>SignUp</button>
  </form>

  <?php

  // echo $user;
  if ($_POST) {
    $sjUsers = file_get_contents(__DIR__ . '/data.json');
    $jUsers = json_decode($sjUsers);

    $sUniqueID = uniqid();
    $sUniqueID = new stdClass();

    // $user = $_POST['userAgent'];
    // $sEmail = $_POST['txtEmail'];
    // $sName = $_POST['txtName'];
    // $sPassword = $_POST['txtPassword'];

    $jUsers->$sUniqueID = $jUser;
    $jUser->$email = $sEmail;
    $jUser->$name = $sName;
    echo json_encode($jUser);

    if ($user == "user") {
      $sUserType = "user";


      // echo $sUserType;
    } else {
      $sUserType = "agent";
      // echo $sUserType;
    }
  }
  ?>

</body>

</html>