<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Properties</title>
</head>

<body>

  <div class="container">
    <a href="upload.php">Upload new property</a>

    <!-- <div class="property">
      <div>PRICE ${{price}}</div>
      <img src="img\{{path}}">
      <a href="delete.php?id={{id}}">Delete</a>

    </div> -->

    <?php
    $sjProperties = file_get_contents(__DIR__ . '/properties.json');
    $jProperties = json_decode($sjProperties);
    $strBluePrint = '<div class="property">
    <div>PRICE ${{price}}</div>
    <img src="img\{{path}}">
    <a href="delete.php?id={{id}}">Delete</a>
  </div>';
    foreach ($jProperties as $u => $jProperty) {
      $sCopyBluePrint = $strBluePrint;
      $sCopyBluePrint = str_replace('{{price}}', $jProperty->price, $sCopyBluePrint);
      $sCopyBluePrint = str_replace('{{path}}', $jProperty->img, $sCopyBluePrint);
      $sCopyBluePrint = str_replace('{{id}}', $u, $sCopyBluePrint);
      echo $sCopyBluePrint;
    }
    ?>

  </div>
</body>

</html>