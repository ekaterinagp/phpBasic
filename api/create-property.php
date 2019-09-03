<?php

//address
if (empty($_POST['txtAddress'])) {
  sendErrorMessage('missing txtAddress', __LINE__);
}

if (strlen($_POST['txtAddress']) < 2 || strlen($_POST['txtAddress']) > 20) {
  sendErrorMessage(' txtAddress min 2 max 20 characters', __LINE__);
}

//title
if (empty($_POST['txtTitle'])) {
  sendErrorMessage('missing txtTitle', __LINE__);
}

if (strlen($_POST['txtTitle']) < 2 || strlen($_POST['txtTitle']) > 20) {
  sendErrorMessage(' txtTitle min 2 max 20 characters', __LINE__);
}

//price
if (empty($_POST['txtPrice'])) {
  sendErrorMessage('missing txtPrice', __LINE__);
}

if ($_POST['txtPrice'] < 1) {
  sendErrorMessage('price must be bigger than 1', __LINE__);
}

//size
if (empty($_POST['txtSize'])) {
  sendErrorMessage('missing txtSize', __LINE__);
}

if ($_POST['txtSize'] < 1) {
  sendErrorMessage('size must be bigger than 1', __LINE__);
}

//description
if (empty($_POST['txtDescription'])) {
  sendErrorMessage('missing txtDescription', __LINE__);
}

if (empty($_FILES)) {
  sendErrorMessage('missing image', __LINE__);
}

//if there is more than one image:
// get the images, save as objects with random names in the object with the key images
$aImages = new stdClass();
foreach ($_FILES as $sKey => $aImageFile) {    // or  for($i=0;$i<$iCountFiles;$i++){}
  $sKey = $aImageFile['name']; //sets key to array

  $aImages->$sKey = $aImageFile; //puts all the data to the array with the key of name
  // echo json_encode($aImageFile);
}

echo json_encode($aImages); //show all images in RAM


$aAllowedExtensions = ['gif', 'jpg', 'jpeg', 'png'];
foreach ($_FILES as $aImageFile) {
  $sExtension = pathinfo($aImageFile['name'], PATHINFO_EXTENSION);
  $sExtension = strtolower($sExtension); //convert extension to lower case
  if (!in_array($sExtension, $aAllowedExtensions)) {
    sendErrorMessage('the file must be an png, gif, jpg or jpeg', __LINE__);
  }
}

foreach ($_FILES as $aImageFile) {
  $sExt =  pathinfo($aImageFile['name'])['extension']; // gets the extension of a file
  $imgProperty = $aImageFile['tmp_name'];
  move_uploaded_file($imgProperty, __DIR__ . '/imgs/' . $aImageFile['name']);
}

// SIZE 

// constrain the size of the file
foreach ($_FILES as $aImageFile) {
  if ($aImageFile['size'] < 20480) { //Bytes
    sendErrorMessage('the image file is too small', __LINE__);
  }
  if ($aImageFile['size'] > 5242880) {
    sendErrorMessage('the image file is too big', __LINE__);
  }
}

// if ($_FILES['imgProperty']['size'] < 20480) { // bytes
//   sendErrorMessage('The uploaded file is too small', __LINE__);
// }
// if ($_FILES['imgProperty']['size'] > 5242880) {
//   sendErrorMessage('The uploaded file is too large', __LINE__);
// }






// echo json_encode($aImageFile);

$sCreatedTime = time();
$jData = new stdClass();
$jData->title = $_POST['txtPrice'];
// $jData->image = $_FILES['imgProperty']['name'];
$jData->address = $_POST['txtAddress'];
$jData->title = $_POST['txtTitle'];
$jData->size = $_POST['txtSize'];
$jData->description = $_POST['txtDescription'];
$jData->timestamp = date('d-m-y', $sCreatedTime);
// echo json_encode($jData);

$sjData = json_encode($jData);
echo $sjData;


//  **********

function sendErrorMessage($sErrorMessage, $iLineNumber)
{
  echo '{"status":0,"message":"' . $sErrorMessage . '","line": ' . $iLineNumber . '}';
  exit;
}
