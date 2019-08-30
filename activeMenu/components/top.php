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
    <div><a class="<?php
                    if ($sActive == 'login') {
                      echo 'active';
                    }

                    ?>" href="login.php">Login</a></div>
    <div><a class="<?php
                    if ($sActive == 'contact-us') {
                      echo 'active';
                    }

                    ?>" href="contact-us.php">Contact us</a></div>
    <div><a class="<?php
                    if ($sActive == 'signup') {
                      echo 'active';
                    }
                    ?>" href="signup.php">Signup</a></div>

  </nav>