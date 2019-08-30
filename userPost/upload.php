<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  <?php

  //to figure out what attributes file has : Array ( [myFile] => Array ( [name] => IMG_6971.JPG [type] => image/jpeg [tmp_name] => C:\xampp\tmp\phpA648.tmp [error] => 0 [size] => 57841 ) )
  //  print_r($_FILES);

  // echo "<div>SIZE: {$_FILES['myFile']['size']}</div>";
  // echo "<div>NAME: {$_FILES['myFile']['name']}</div>";
  // echo "<div>TYPE: {$_FILES['myFile']['type']}</div>";
  // echo "<div>TEMP NAME: {$_FILES['myFile']['tmp_name']}</div>";

  $extension = pathinfo($_FILES['myFile']['name'])['extension'];
  $sUniqueImageName = uniqid() . '.' . $extension;


  move_uploaded_file($_FILES['myFile']['tmp_name'], __DIR__ . "/img/$sUniqueImageName");

  $strPrice = $_POST['txtPrice'];
  // echo $strPrice;
  $jProperty = new stdClass();
  $jProperty->price = intval($strPrice);
  $jProperty->img = $sUniqueImageName;

  // echo json_encode($jProperty);

  $sjProperties = file_get_contents(__DIR__ . '/properties.json');
  // echo $sjProperties;

  $jProperties = json_decode($sjProperties);
  $sPropertyUniqueID = uniqid();
  $jProperties->$sPropertyUniqueID = $jProperty;
  // echo json_encode($jProperties);
  $sjProperties = json_encode($jProperties, JSON_PRETTY_PRINT);
  file_put_contents(__DIR__ . '/properties.json', $sjProperties);

  ?>
  <a href="form.php">Upload an other property</a>
  <a href="properties.php">View properties</a>

</body>

</html>