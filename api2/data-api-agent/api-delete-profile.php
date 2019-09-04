<?php

session_start();


$_SESSION['sAgentid'] = 'A1';
if (!$_SESSION) {
  sendErrorMessage('can not delete the agent', __LINE__);
}
$agentID = $_SESSION['sAgentid'];
$sjAgentsList = file_get_contents(__DIR__ . '/data.json');
// echo $sjAgentsList;
$jAgentList = json_decode($sjAgentsList);
unset($jAgentList->agents->$agentID);
// echo json_encode($jAgentList, JSON_PRETTY_PRINT);
$sjAgentsList = json_encode($jAgentList, JSON_PRETTY_PRINT);
file_put_contents('data.json', $sjAgentsList);
session_destroy();



echo '{"status":1, "message":"agent deleted"}';



function sendErrorMessage($txtError, $iLineNumber)
{
  echo '{"status":0, "message":"' . $txtError . '", "line":' . $iLineNumber . '}';
  exit;
}
