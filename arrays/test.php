<?php

$strJUsers= file_get_contents('properties.json');



$jUsers=json_decode($strJUsers);

$jUsers->P1->price=10;
// echo $jUsers->P1->price=10;

unset($jUsers->P2->name);

$jUsers->P3= new stdClass();

  $jUsers->P3->name="C";
  $jUsers->P3->price="3";

echo json_encode($jUsers);
$sUsers=json_encode($jUsers);
file_put_contents("properties.json", $sUsers);