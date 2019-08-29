<?php

// $strJsonUser='{}';//not json yet, but string
//   //convert string to json
//   $jsonUser=json_decode($strJsonUser);
//   $jsonUser->name = 'Santiago';
//   $jsonUser->lastName = 'Donoso';
//   $jsonUser->email = 'sd@sd.fh';

//     // echo $jsonUser->name;
//     // echo $jsonUser->lastName;
//     // echo $jsonUser->email;
//     echo "Hi $jsonUser->name $jsonUser->lastName";

$jUsers=new stdClass(); //create json object
//convert object into text
  // echo json_encode($jUsers);

  $jUser=new stdClass();
  // $jUser->id=uniqid(); //not used for real case as it can be repeated if many people signup at the same time
  $jUser->name='Alla'; 
  $jUser->email='alla@dk.com'; 
  $strUniqID=uniqid();
  $jUsers->$strUniqID=$jUser;

  //second user
  $jUser=new stdClass();
  $jUser->name='Bella'; 
  $jUser->email='bella@dk.com'; 
  $strUniqID=uniqid();
  $jUsers->$strUniqID=$jUser;

  // $jUsers->id=uniqid();
  echo json_encode($jUsers);

  //save this into users file
  $strUsers=json_encode($jUsers);
  file_put_contents('users.txt', $strUsers);
