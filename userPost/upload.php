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
  echo "<div>SIZE: {$_FILES['myFile']['size']}</div>";
  echo "<div>NAME: {$_FILES['myFile']['name']}</div>";
  echo "<div>TYPE: {$_FILES['myFile']['type']}</div>";
  echo "<div>TEMP NAME: {$_FILES['myFile']['tmp_name']}</div>";
  $extension = pathinfo($_FILES['myFile']['name'])['extension'];
  $sUniqueImageName = uniqid() . '.' . $extension;
  echo  $sUniqueImageName;

  move_uploaded_file($_FILES['myFile']['tmp_name'], __DIR__ . "/img/$sUniqueImageName");


  //to figure out what attributes file has : Array ( [myFile] => Array ( [name] => IMG_6971.JPG [type] => image/jpeg [tmp_name] => C:\xampp\tmp\phpA648.tmp [error] => 0 [size] => 57841 ) )
  //  print_r($_FILES);

  ?>
  <a href="form.php">Upload an other property</a>

</body>

</html>