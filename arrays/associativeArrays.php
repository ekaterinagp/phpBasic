<?php

$arrProperties=[];

$aProperty=[
  'id'=>1, 'name'=>'A', 'price'=>1
];
// echo individual keys
  // echo $aProperty['name'];
  
  $aProperty['email']='fhfj@dhd';
  $aProperty['email']='b@fhf';
  unset($aProperty['email']); //delete a key with the value from associative array

  // array_push($arrProperties, $aProperty);
  

  echo json_encode($aProperty);
  // three way to do that - create a veriable, curly brackets, cocatination with dot and single quotes
  // echo "the price is {$arrProperties[0]['price']}";

 

  // echo json_encode($arrProperties);