<?php

//TO DO VALIDATION (if session etc)
$sAgentID = $_POST['id'];
$sKeyToUpdate = $_POST['key'];
$sNewValue = $_POST['value'];

$sjAgents = file_get_contents('data.json');
$jAgents = json_decode($sjAgents);
//update the data
//validate if the value is empty, name is long enough etc
$jData->$sAgentID->$sKeyToUpdate = $sNewValue;


$sjAgents = json_encode($jAgents, JSON_PRETTY_PRINT);
file_put_contents('data.json', $sjAgents);
