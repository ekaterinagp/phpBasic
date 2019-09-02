<?php
session_start();

$sAgentID = $_SESSION['id']; //logged agent id

$sPropertyID = $_GET['id'];
echo $sPropertyID;

$sJdata = file_get_contents('data/data.json');
$jData = json_decode($sJdata);

//TODO: delete
unset($jData->agents->$sAgentID->properties->$sPropertyID);


$sJdata = json_encode($jData, JSON_PRETTY_PRINT);
file_put_contents('data/data.json', $sJdata);
sleep(3);
header('location:view-agent-properties.php');
