<?php
// $imgName = $_FILES['theImage']['name'];
// echo $imgName;

// echo count($_FILES); //or sizeof - to count how many items in the array 
//how to upload many images
// foreach ($_FILES as $aImageInfo) {
//   //inside the loop to do validation of all sorts
//   echo $aImageInfo['name'];
//   $sUniqueImageName = uniqid();
//   move_uploaded_file($aImageInfo['tmp_name'], __DIR__ . "/images/$sUniqueImageName");
// }

// ***************// to upload many with one field
//if only one key, so needed to add [] after the key name and so it is an assositive array

// echo print_r($_FILES); //see what is in the array
// echo print_r($_FILES['theImage']['name']); //gets all the names of all uploaded files
// echo print_r($_FILES['theImage']['name'][1]); //gets the name of the item in the array position 1

// foreach ($_FILES['theImage']['tmp_name'] as $sName) {
//   echo $sName;
// }

// for ($i = 0; $i < count($_FILES['theImage']['tmp_name']); $i++) {
//   $sTmpPath = $_FILES['theImage']['tmp_name'][$i];
//   $sUniqueImageName = uniqid();
//   move_uploaded_file($sTmpPath, __DIR__ . "/images/$sUniqueImageName");
// }

//how to get not only names, but all other properties
$iNumberOfImages = count($_FILES['theImage']['name']);
//here validation is needed
for ($i = 0; $i < $iNumberOfImages; $i++) {
  $sImageName = $_FILES['theImage']['name'][$i];
  echo $sImageName;
  $sImageSize = $_FILES['theImage']['size'][$i];
  echo $sImageSize;
}
