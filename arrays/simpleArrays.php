<?php

$arrProperties=['A', 'B', 'C'];

array_push($arrProperties, 'D');
echo '<div>';
foreach($arrProperties as $strProperty){

  echo $strProperty;

}
echo '</div>';



array_pop($arrProperties);
echo '<div>';
foreach($arrProperties as $strProperty){

  echo $strProperty;

}
echo '</div>';

array_splice($arrProperties, 1,1);

echo '<div>';
foreach($arrProperties as $strProperty){

  echo $strProperty;

}
echo '</div>';