<?php

$sCorrectID = 1;
//defensive code, check against something negative
if (empty($_GET['id'])) {
  echo '{"status":0, "message":"missing id", "line":' . __LINE__ . '}';
  exit;
}

if ($_GET['id'] != $sCorrectID) {
  echo '{"status":0, "message":"wrong id", "line":' . __LINE__ . '}';
  exit;
}

$sPropertyId = $_GET['id'];
$jProperty = new stdClass();
$jProperty->status = 1;
$jProperty->id = 1;
$jProperty->price = 10;
echo json_encode($jProperty);
