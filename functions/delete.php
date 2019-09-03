<?php

require_once(__DIR__ . '/functions.php');

$jData = getFileAsJson('two.json');
echo $jData->name;

// $sjData = file_get_contents('data.json');
// $jData = json_decode($sjData);
// echo $sjData;

$jTest = new stdClass();

$jTest->name = "C";
saveJsontoFile($jTest, 'three.json');
