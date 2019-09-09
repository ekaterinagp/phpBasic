<?php

//TO DO VALIDATION (if session etc)
// $sAgentID = uniqid();
$sAgentID = bin2hex(random_bytes(16));
$sName = $_POST['name'];
$sEmail = $_POST['email'];


$sjAgents = file_get_contents('data.json');
$jAgents = json_decode($sjAgents);


$jAgents->$sAgentID = new stdClass();
$jAgents->$sAgentID->name = $sName;
$jAgents->$sAgentID->email = $sEmail;
$jAgents->$sAgentID->image = "default.png";

$sjAgents = json_encode($jAgents, JSON_PRETTY_PRINT);
file_put_contents('data.json', $sjAgents);
echo "$sAgentID";
