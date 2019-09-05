<?php
// $pattern = "/ca[kf]e/";
// $text = "He was eating cake in the cafe.";
// if (preg_match($pattern, $text)) {
//   echo "Match found!";
// } else {
//   echo "Match not found.";
// }

$pattern = "/P\d{4}$/";
$text = "P11111";
if (preg_match($pattern, $text)) {
  echo "Match found!";
} else {
  echo "Match not found.";
}
