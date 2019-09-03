<?php

//defensive programming

if (empty($_POST['name'])) {
  // echo '{"status":0, "message":"name is missing", "line":' . __LINE__ . '}';
  sendErrorMessage('name is missing', __LINE__);
  exit;
}


if (strlen($_POST['name']) < 2 || strlen($_POST['name']) > 20) {
  sendErrorMessage('name must be more than 2 and less than 20 chr', __LINE__);
  // echo '{"status":0, "message":"name must be more than 2 and less than 20 chr", "line":' . __LINE__ . '}';
  exit;
}
//check if name has no numbers - TODO



echo '{"status":1, "message":"agent created", "line":' . __LINE__ . '}';

//********************************
//********************************
//********************************

function sendErrorMessage($txtError, $iLineNumber)
{
  echo '{"status":0, "message":"' . $txtError . '", "line":' . $iLineNumber . '}';
  exit;
}
