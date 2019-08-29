<?php

$jUser=new stdClass();

$jUser->name='A'; //$aUser['name]='A' - ass array

echo $jUser->name='A'; // echo $aUser[name];

$jUser->name='B'; //update 

unset($jUser->name); //delete

