<?php

$strJUsers= '{
"A1":{
  "name":"A",
  "lastName":"B"},
"B2":{
  "name":"X",
  "lastName":"Y"}
}'; //single quotes outiside, double inside and only like that

$jUsers=json_decode($strJUsers);

// echo $jUsers->B2->lastName;

foreach($jUsers as $sKey=>$jUser){
  echo "<div>ID: $sKey</div>";
  echo "<div>Name: $jUser->name</div>";

}

