<?php

if (empty($_GET['propertyID'])) {
  sendErrorMessage('can not update the property', __LINE__);
}
if (empty($_GET['price'])) {
  sendErrorMessage('price is missing', __LINE__);
}

session_start();
$_SESSION['sAgentid'] = 'A1';

if (!$_SESSION) {
  sendErrorMessage('can not update the property', __LINE__);
}

//check if it starts with P and continue with numbers REGEX TODO

$sPropertyID = $_GET['propertyID'];
//to check the first letter
// $sTemp = substr($sPropertyID, 0, 1);
// echo $sTemp;
// echo $sPropertyID[0]; //also a way to check the first letter in the string
if ($sPropertyID[0] != 'P') {
  sendErrorMessage('can not update the property', __LINE__);
}

if (!ctype_digit($_GET['price'])) {
  sendErrorMessage('price should be only numbers', __LINE__);
}
if ($_GET['price'] < 1) {
  sendErrorMessage('price is too low', __LINE__);
}
if ($_GET['price'] > 999999999999) {
  sendErrorMessage('price is too high', __LINE__);
}
$sjAgentsList = file_get_contents(__DIR__ . '/data.json');
// echo $sjAgentsList;

$jAgentsList = json_decode($sjAgentsList);

$newPrice = $_GET['price'];
$agentID = $_SESSION['sAgentid'];
$propertyID = $_GET['propertyID'];

// echo json_encode($jAgentList);
if (!isset($jAgentsList->agents->$agentID->properties->$propertyID)) {
  sendErrorMessage('property not found', __LINE__);
}

$jAgentsList->agents->$agentID->properties->$propertyID->price = intval($newPrice);
// echo $newPrice;
$sjAgentsList = json_encode($jAgentsList, JSON_PRETTY_PRINT);
echo $sjAgentsList;
file_put_contents('data.json', $sjAgentsList);

echo '{"status":1, "message":"price updated"}';



function sendErrorMessage($txtError, $iLineNumber)
{
  echo '{"status":0, "message":"' . $txtError . '", "line":' . $iLineNumber . '}';
  exit;
}
