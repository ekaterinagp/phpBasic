<?php

$arrProperties=[];

$aProperty=['ID1', 'A', 1];

array_push($arrProperties, $aProperty);

$aProperty=['ID2', 'B', 2];
array_push($arrProperties, $aProperty);
//  print_r($arrProperties);
//  var_dump($arrProperties);

// echo $arrProperties[1][1];

$arrProperties[0][2]=10;
// echo json_encode($arrProperties);
echo 'Welcome to MyProperties';
foreach($arrProperties as $aProperty){
 
  echo "<div> ID: $aProperty[0]</div> ";
  echo "<div> Name: $aProperty[1]</div> " ;
  echo "<div> Price: $aProperty[2]</div> " ;
  echo "<div> ______</div> ";
 
}