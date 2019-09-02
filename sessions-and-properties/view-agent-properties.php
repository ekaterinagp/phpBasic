<?php
//pretend the agent has logged in
//therefor agent has her id in the session

session_start();
$_SESSION['id'] = '5d6cd19d75280111';

$sAgentID = $_SESSION['id'];
$sJData = file_get_contents('data/data.json');
$jData = json_decode($sJData);

// echo json_encode($jData->agents->$sAgentID->properties);
$jAgentProperties = $jData->agents->$sAgentID->properties;
foreach ($jAgentProperties as $sPropertyID => $jAgentProperty) {
  echo '
<form>
<input name="txtPrice" value=' . $jAgentProperty->price . '></input>
<a href="delete.php?id=' . $sPropertyID . '">DELETE</a>
<a href="update.php?id=' . $sPropertyID . '">Update</a>


</form>

  ';
}
