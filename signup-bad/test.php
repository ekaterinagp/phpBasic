<?php
$strEmail='ff@df.com';
//save the user in users.txt
file_put_contents('users.txt', $strEmail);
echo 'done';