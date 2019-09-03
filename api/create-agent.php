<?php

//defensive programming
//firstName
if (empty($_POST['name'])) {
  sendErrorMessage('name is missing', __LINE__);
  exit;
}
if (strlen($_POST['name']) < 2 || strlen($_POST['name']) > 20) {
  sendErrorMessage('name must be more than 2 and less than 20 chr', __LINE__);
  exit;
}

//lastName
if (empty($_POST['lastName'])) {
  sendErrorMessage('lastName is missing', __LINE__);
  exit;
}


if (strlen($_POST['lastName']) < 2 || strlen($_POST['lastName']) > 20) {
  sendErrorMessage('lastName must be more than 2 and less than 20 chr', __LINE__);
  exit;
}
//check if name has no numbers - TODO

//email
if (empty($_POST['email'])) {
  sendErrorMessage('email is missing', __LINE__);
  exit;
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  sendErrorMessage('email is invalid', __LINE__);
  exit;
}

if (empty($_FILES['imgAgent'])) {
  sendErrorMessage('image is missing', __LINE__);
  exit;
}

// $sExtention =  pathinfo($_FILES['imgAgent']['name'])['extension']; 
// gets the extension of a file
// $sUniqueImageName = uniqid();

$imgAgent = $_FILES['imgAgent'];
move_uploaded_file($imgAgent['tmp_name'], __DIR__ . '/' . $_FILES['imgAgent']['name']);


echo '{"status":1, "message":"agent created", "line":' . __LINE__ . '}';


//********************************
//********************************
//********************************


function sendErrorMessage($txtError, $iLineNumber)
{
  echo '{"status":0, "message":"' . $txtError . '", "line":' . $iLineNumber . '}';
  exit;
}
