<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>XXX</title>
</head>

<body>

  <nav>
    <div>
      <a <?= $sActive == 'login' ? 'class="active"' : ''; ?>href="login.php">Login</a>
    </div>


    <div><a <?= $sActive == 'contact-us' ? 'class="active"' : ''; ?> href="contact-us.php">Contact us</a></div>
    <div><a <?= $sActive == 'signup' ? 'class="active"' : ''; ?>href="signup.php">Sign up</a></div>
  </nav>