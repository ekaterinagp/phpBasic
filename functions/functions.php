<?php

function getFileAsJson($sFileName)
{
  $sjData = file_get_contents($sFileName);
  $jData = json_decode($sjData);
  return $jData;
}

function saveDataAsText($jData)
{

  $sjData = json_encode($jData, JSON_PRETTY_PRINT);
  file_put_contents('one.json', $sjData);
}

// one();

// function one()
// {
//   two();
// }

// function two()
// {
//   three();
// }

// function three()
// {
//   echo 'Yes';
// }

// $aLetters = ['A', 'B', 'C', 'D'];

// one($aLetters);

// function one($aLetters)
// {
//   array_pop($aLetters);
//   two($aLetters);
// }

// function two($aLetters)
// {
//   unset($aLetters[2]);
//   three($aLetters);
// }

// function three($aLetters)
// {
//   echo json_encode($aLetters);
// }

$array = ['A', 5, 'D', 5, 'C', 5];

function changeTheArray($array)
{


  $A = str_repeat($array[0], $array[1]);
  $B = str_repeat($array[2], $array[3]);
  $C = str_repeat($array[4], $array[5]);

  echo $A;
  echo $B;
  echo $C;
}

changeTheArray($array);
