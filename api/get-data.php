<?php
$jData = new stdClass(); //json object
$jData->name = 'A';
$jData->lastName = 'B';
$jData->email = '@';

echo json_encode($jData);
