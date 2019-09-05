<?php

$sDeActivationKey  = $_GET['key'];
$sUserId = $_GET['id'];
echo "<h1> Account Deactivated $sUserId $sDeActivationKey</h1>";

//connect to the database
$sjData = file_get_contents('data.json');
$jData = json_decode($sjData);

// change verified to active(1)
if ($jData->$sUserId->deActivationKey == $sDeActivationKey) {
  $jData->$sUserId->verified = 0;
  echo 'match found';

  $sjData = json_encode($jData, JSON_PRETTY_PRINT);
  // save text to the file:
  file_put_contents('data.json', $sjData);
} else {
  echo 'no match found';
}
