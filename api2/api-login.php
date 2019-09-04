<?php

// session_start();
// if ($_SESSION) {
//   echo "user is loggedin ";
// }

$sCorrectEmail = 'a@a.com';
$sCorrectPassword = 'password';

if ($_POST) {

  if (empty($_POST['email'])) {
    sendErrorMessage('email is empty', __LINE__);
  }
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    sendErrorMessage('email is invalid', __LINE__);
  }

  if (empty($_POST['password'])) {
    sendErrorMessage('password is empty', __LINE__);
  }

  if (strlen($_POST['password']) < 8) {
    sendErrorMessage('password should be 7 characters', __LINE__);
  }
  if (strlen($_POST['password']) > 100) {
    sendErrorMessage('password should be 7 characters', __LINE__);
  }

  // if ($_POST['email'] != $sCorrectEmail) {
  //   sendErrorMessage('email is incorrect', __LINE__);
  // }

  // if ($_POST['password'] != $sCorrectPassword) {
  //   sendErrorMessage('password is invalid', __LINE__);
  // }

  if ($_POST['email'] != $sCorrectEmail || $_POST['password'] != $sCorrectPassword) {
    sendErrorMessage('incorrect credentials', __LINE__);
  }
  //doesn't work
  if ($sCorrectEmail && $sCorrectPassword) {
    session_start();
    // echo json_encode($_SESSION);
    echo "logged in {json_encode($_SESSION)}";
  }
}





function sendErrorMessage($txtError, $iLineNumber)
{
  echo '{"status":0, "message":"' . $txtError . '", "line":' . $iLineNumber . '}';
  exit;
}
