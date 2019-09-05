<?php




$sKey = $_GET['key'];
$sUserID = $_GET['id'];
echo "<h1>Welcome {$sUserID}</h1>";

$sjData = file_get_contents('data.json');
$jData = json_decode($sjData);
if ($jData->$sUserID->verified == 1) {
  echo "You can not activate again";
  ecit;
}
if ($jData->$sUserID->activationKey == $sKey) {
  echo 'match found';
  $jData->$sUserID->verified = 1;
  $sjData = json_encode($jData);
  file_put_contents('data.json', $sjData);
} else {
  echo 'no match found';
}
